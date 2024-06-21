<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    public function CountryIndex()
    {
        $data['header_title'] = "Country List";
        $countries = Country::latest()->get();
        return view('admin.country.country_list', compact('countries') ,$data);

    }//end method

    public function CountryAdd()
    {
        $data['header_title'] = "Country Add";

        return view('admin.country.country_add',$data);
        
    }//end method

    public function CountryStore(Request $request)
    {
        // dd($request->all());
        Country::insert([
            'country_name' => $request->country_name,
            'sortname' => $request->sortname,
            'phonecode' => $request->phonecode,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Country Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.country')->with($notification);

    }//end method

    public function CountryEdit($id)
    {
        $data['header_title'] = "Country Edit";
        $countries_id = Country::findOrFail($id);
        return view('admin.country.country_edit', compact('countries_id'), $data);
    }//end method

    public function CountryUpdate(Request $request)
    {
        $countries = $request->id;

        Country::findOrFail($countries)->update([
            'country_name' => $request->country_name,
            'sortname' => $request->sortname,
            'phonecode' => $request->phonecode,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Country Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.country')->with($notification);
    }

    public function CountryDestory($id)
    {
        Country::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Country Deleted Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->route('all.country')->with($notification);
    }//end method

    public function CountryView($id)
    {
        $data['header_title'] = "Country View";
        $country_view = Country::find($id);

        return view('admin.country.country_view',compact('country_view'),$data);
    }//end method

    public function CountryInactive($id)
    {
        Country::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Country Deactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function CountryActive($id)
    {
        Country::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Country Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method








    public function StateIndex()
    {
        $data['header_title'] = "State List";

        $state = State::latest()->get();
        return view('admin.state.state_list', compact('state'), $data);

    }//end method

    public function StateAdd()
    {
        $data['header_title'] = "State Add";
        
        $country = Country::orderBy('country_name','ASC')->get();
        return view('admin.state.state_add',compact('country'), $data);
    }

    public function StateStore(Request $request)
    {
        State::insert([
            'country_id' => $request->country_name,
            'state_name' => $request->state_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'State Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.state')->with($notification);

    }

    public function StateEdit($id)
    {
        $data['header_title'] = "State Edit";

        $country = Country::orderBy('country_name','ASC')->get();
        $state_id = State::findOrFail($id);

        return view('admin.state.state_edit', compact('country','state_id'), $data);
    }

    public function StateUpdate(Request $request)
    {
        $state_id = $request->id;

        State::findOrFail($state_id)->update([
            'country_id' => $request->country_id,
            'state_name' => $request->state_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'State Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.state')->with($notification);

    }//end method

    public function StateDestory($id)
    {
        State::findOrFail($id)->delete();

        $notification = array(
            'message' => 'State Deleted Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->route('all.state')->with($notification);
    }//end method

    public function StateView($id)
    {
        $data['header_title'] = "State View";

        $state_view = State::find($id);
        return view('admin.state.state_view', compact('state_view'),$data);

    }//end method

    public function StateInactive($id)
    {
        State::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'State Deactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function StateActive($id)
    {
        State::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'State Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method








    public function CityIndex()
    {
        $data['header_title'] = "City List";
        $city = City::latest()->get();

        return view('admin.city.city_list', compact('city'), $data);

    }//end method

    public function CityAdd()
    {
        $data['header_title'] = "City Add";
        
        $country = Country::orderBy('country_name','ASC')->get();
        $state = State::orderBy('state_name','ASC')->get();
        // dd($state);
        return view('admin.city.city_add', compact('country','state'), $data);
    }
    
    public function CityStore(Request $request)
    {
        City::insert([
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_name' => $request->city_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'City Name Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.city')->with($notification);
    }

    public function CityEdit($id)
   {
        $data['header_title'] = "City Edit";
        $country = Country::orderBy('country_name','ASC')->get();
        $state = State::orderBy('state_name','ASC')->get();
        $city_id = City::findOrFail($id);

        return view('admin.city.city_edit',compact('country','state','city_id'), $data);

   } //end method

   public function CityUpdate(Request $request)
   {
        $city_id = $request->id;

        City::findOrFail($city_id)->update([
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_name' => $request->city_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'City Name Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.city')->with($notification);


   }//end method

   public function CityDestory($id)
   {
       City::findOrFail($id)->delete();

       $notification = array(
           'message' => 'City Deleted Successfully',
           'alert-type' => 'success' 
       );

       return redirect()->route('all.city')->with($notification);

   }//end method

    public function CityView($id)
    {
        $data['header_title'] = "City View";

        $city_view = City::find($id);
        return view('admin.city.city_view', compact('city_view'),$data);
        
    }//end method

    public function CityInactive($id)
    {
        City::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'City Deactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function CityActive($id)
    {
        City::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'City Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

    public function GetAreaState($country_id){   

        $statecat = State::where('country_id',$country_id)->orderBy('state_name','ASC')->get();
        return json_encode($statecat);

    }// End Method


}
