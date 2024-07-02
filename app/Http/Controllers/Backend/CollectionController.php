<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use App\Models\Collection;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Helpers\TokenHelper;
use Illuminate\Support\Facades\File;

class CollectionController extends Controller
{
    public function CollectionCenterIndex()
    {
        $data['header_title'] = "Collection Center List";

        $collectionCenters = User::with('collection')->where('role', 'collection')->get();

        // dd($collectionCenters);

        return view('admin.collection-center.collection_list', compact('collectionCenters'), $data);
    }

    public function CollectionCenterAdd()
    {
        $data['header_title'] = "Collection Center Add";

        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();

        return view('admin.collection-center.collection_add', compact('countries', 'states', 'city'), $data);
    }

    public function CollectionCenterStore(Request $request)
    {
        $collectionProfile = $request->file('collectionimage');
        $name_gen = date('YmdHi') . $collectionProfile->getClientOriginalName();
        $collectionProfile->move(public_path('upload/collection_images/'), $name_gen);
        $save_url = 'upload/collection_images/' . $name_gen;

        $token = TokenHelper::token();

        $collectionuser_id = User::insertGetId([
            'reg_number' => $token,
            'name' => $request->name,
            'username' => strtolower(str_replace(' ', '-', $request->name)),
            'phone' => $request->phone,
            'email' => $request->email,
            'doj' => $request->doj,
            'aadharnumber' => $request->aadharcard,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'photo' => $save_url,
            'role' => 'collection',
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        Collection::insert([
            'collectionuser_id' => $collectionuser_id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location_name,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Collection Center Registration Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.collectioncenter')->with($notification);
    } //end method

    public function CollectionCenterEdit($id)
    {
        $data['header_title'] = "Collection Center Edit";

        $usercollectionCenters = User::with(['collection.city', 'collection.state', 'collection.country'])->findOrFail($id);
        $countries = Country::all();
        $states = State::where('country_id', $usercollectionCenters->collection->country_id)->get();
        $cities = City::where('state_id', $usercollectionCenters->collection->state_id)->get();

        return view('admin.collection-center.collection_edit', compact('usercollectionCenters', 'countries', 'states', 'cities'), $data);
    }

    public function CollectionCenterUpdate(Request $request)
    {
        $collectionCenters_id = $request->id;

        $user = User::findOrFail($collectionCenters_id);

        if ($request->hasFile('collectionimage')) {
            $collectionsProfile = $request->file('collectionimage');
            $name_gen = date('YmdHi') . $collectionsProfile->getClientOriginalName();

            // Delete old image
            if ($user->photo && file_exists(public_path($user->photo))) {
                File::delete(public_path($user->photo));
            }

            // Save new image
            $collectionsProfile->move(public_path('upload/collection_images/'), $name_gen);
            $user->photo = 'upload/collection_images/' . $name_gen;
        }

        // Update user table
        $user->update([
            'name' => $request->name,
            'username' => strtolower(str_replace(' ', '-', $request->name)),
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'doj' => $request->doj,
            'aadharnumber' => $request->aadharcard,
            'photo' => $user->photo, // This will only be updated if a new image was uploaded
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        // Update collection table
        $collection = Collection::where('collectionuser_id', $collectionCenters_id)->firstOrFail();
        $collection->update([
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location_name,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'updated_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Collection Center Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.collectioncenter')->with($notification);
    }



    public function CollectioncCenterView($id)
    {
        $data['header_title'] = "Collection Center View";

        $collection_view = User::with('collection')->findOrFail($id);
        return view('admin.collection-center.collection_view', compact('collection_view'), $data);
    }

    public function CollectionCenterDestory($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Collection Center Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //end method

    public function CollectioncCenterInactive($id)
    {
        $collection = Collection::where('collectionuser_id', $id)->firstOrFail();
        $collection->update(['status' => 'inactive']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Collection Center Inactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function CollectioncCenterActive($id)
    {
        $collection = Collection::where('collectionuser_id', $id)->firstOrFail();
        $collection->update(['status' => 'active']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        $notification = array(
            'message' => 'Collection Center Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function GetCollectionCenterState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method

    public function GetCollectionCenterCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method


}
