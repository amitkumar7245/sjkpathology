<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\AreaController;
use App\Http\Controllers\Backend\BankController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Backend\StremController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UnitTypeController;
use App\Http\Controllers\Backend\SubstreamController;
use App\Http\Controllers\Backend\TestBloodController;
use App\Http\Controllers\Backend\CollectionController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DiagnosticController;
use App\Http\Controllers\Backend\PathdoctorController;
use App\Http\Controllers\Backend\SampleTypeController;
use App\Http\Controllers\Backend\DesignationController;
use App\Http\Controllers\Backend\PaymentModeController;
use App\Http\Controllers\Backend\EmployeeTypeController;
use App\Http\Controllers\Backend\ReportingtypeController;
use App\Http\Controllers\Backend\SpecializationController;
use App\Http\Controllers\Backend\TestBloodGroupController;
use App\Http\Controllers\Backend\PathologySourceController;
use App\Http\Controllers\Backend\SocialMediaTypeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/admin/dashboard', function () {
//     return view('admin.index');
// });

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/app/login',[AuthController::class,'Login'])->name('login');
Route::post('/auth/login',[AuthController::class,'AuthLogin'])->name('auth.login');
Route::get('/logout',[AuthController::class,'AuthLogout'])->name('auth.logout');
Route::get('/auth/forgot',[AuthController::class,'AuthForgot'])->name('auth.forgot');
Route::post('/store/forgot',[AuthController::class,'StoreForgot'])->name('store.forgot');
Route::get('/reset/{token}',[AuthController::class,'Reset'])->name('reset');
Route::post('reset/{token}',[AuthController::class,'PostReset'])->name('reset');


Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin/dashboard',[DashboardController::class,'Dashboard'])->name('admin.dashboard');


    Route::controller(UserController::class)->group(function(){

        Route::get('/admin/change/password','ChangePassword')->name('change.password');
        Route::post('/admin/change/password','UpdateChangePassword')->name('update.change.password');

    }); //user List End

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/admin/profile','AdminProfile')->name('admin.profile');
        Route::post('/admin/profile/store','AdminProfileStore')->name('admin.profile.store');

    });//end admin profile


    Route::controller(AreaController::class)->group(function(){
        Route::get('/country/list','CountryIndex')->name('all.country');
        Route::get('/country/add','CountryAdd')->name('add.country');
        Route::post('/country/store','CountryStore')->name('store.country');
        Route::get('/country/edit/{id}', 'CountryEdit')->name('edit.country');
        Route::post('/country/update','CountryUpdate')->name('update.country');
        Route::get('/country/delete/{id}','CountryDestory')->name('delete.country');
        Route::get('/country/view/{id}','CountryView')->name('view.country');
        Route::get('/country/inactive/{id}','CountryInactive')->name('inactive.country');
        Route::get('/country/active/{id}','CountryActive')->name('active.country');
    
    }); //end method
    
    Route::controller(AreaController::class)->group(function(){
        Route::get('/state/list','StateIndex')->name('all.state');
        Route::get('/state/add','StateAdd')->name('add.state');
        Route::post('/state/store','StateStore')->name('store.state');
        Route::get('/state/edit/{id}', 'StateEdit')->name('edit.state');
        Route::post('/state/update','StateUpdate')->name('update.state');
        Route::get('/state/delete/{id}','StateDestory')->name('delete.state');
        Route::get('/state/view/{id}','StateView')->name('view.state');
        Route::get('/state/inactive/{id}','StateInactive')->name('inactive.state');
        Route::get('/state/active/{id}','StateActive')->name('active.state');
    
    }); //end method
    
    Route::controller(AreaController::class)->group(function(){
        Route::get('/city/list','CityIndex')->name('all.city');
        Route::get('/city/add','CityAdd')->name('add.city');
        Route::post('/city/store','CityStore')->name('store.city');
        Route::get('/city/edit/{id}', 'CityEdit')->name('edit.city');
        Route::post('/city/update','CityUpdate')->name('update.city');
        Route::get('/city/delete/{id}','CityDestory')->name('delete.city');
        Route::get('/city/view/{id}','CityView')->name('view.city');
        Route::get('/city/inactive/{id}','CityInactive')->name('inactive.city');
        Route::get('/city/active/{id}','CityActive')->name('active.city');
        Route::get('/areastate/ajax/{country_id}','GetAreaState');
    
    }); //end method
    
    Route::controller(BankController::class)->group(function(){
        Route::get('/bank/list','AllBank')->name('all.bank');
        Route::get('/bank/add','AddBank')->name('add.bank');
        Route::post('/bank/store','StoreBank')->name('store.bank');
        Route::get('/bank/edit/{id}','EditBank')->name('edit.bank');
        Route::post('/bank/update/','UpdateBank')->name('update.bank');
        Route::get('/bank/delete/{id}','DeleteBank')->name('delete.bank');
        Route::get('/bank/view/{id}','BankView')->name('view.bank');
        Route::get('/bank/inactive/{id}','BankInactive')->name('inactive.bank');
        Route::get('/bank/active/{id}','BankActive')->name('active.bank');
    
    });//end method
    
    Route::controller(EmployeeTypeController::class)->group(function(){
        Route::get('/employeetype/list','EmployeetypeIndex')->name('all.employeetype');
        Route::get('/employeetype/add','EmployeetypeAdd')->name('add.employeetype');
        Route::post('/employeetype/store','EmployeetypeStore')->name('store.employeetype');
        Route::get('/employeetype/edit/{id}','EmployeeTypeEdit')->name('edit.employeetype');
        Route::post('/employeetype/update/','EmployeeTypeUpdate')->name('update.employee_type');
        Route::get('/employeetype/delete/{id}','EmployeetypeDestory')->name('delete.employeetype');
        Route::get('/employeetype/view/{id}','EmployeetypeView')->name('view.employeetype');
        Route::get('/employeetype.inactive/{id}','EmployeetypeInactive')->name('inactive.employeetype');
        Route::get('/employeetype.active/{id}','EmployeetypeActive')->name('active.employeetype');
    
    }); //end method

    Route::controller(ReportingtypeController::class)->group(function(){
        Route::get('/reportingtype/list','ReportingtypeIndex')->name('all.reportingtype');
        Route::get('/reportingtype/add/','ReportingtypeAdd')->name('add.reportingtype');
        Route::post('/reportingtype/store/','ReportingtypeStore')->name('store.reportingtype');
        Route::get('/reportingtype/edit/{id}','ReportingtypeEdit')->name('edit.reportingtype');
        Route::post('/reportingtype/update/','ReportingtypeUpdate')->name('update.reportingtype');
        Route::get('/reportingtype/delete/{id}','ReportingtypeDestory')->name('destory.reportingtype');
        Route::get('/reportingtype/view/{id}','ReportingtypeView')->name('view.reportingtype');
        Route::get('/reportingtype/inactive/{id}','ReportingtypeInactive')->name('inactive.reportingtype');
        Route::get('/reportingtype/active/{id}','ReportingtypeActive')->name('active.reportingtype');

    });

    Route::controller(DepartmentController::class)->group(function(){
        Route::get('/department/list/','DepartmentIndex')->name('all.department');
        Route::get('/department/add/','DepartmentAdd')->name('add.department');
        Route::post('/department/store/','DepartmentStore')->name('store.department');
        Route::get('/department/edit/{id}','DepartmentEdit')->name('edit.department');
        Route::post('/department/update/','DepartmentUpdate')->name('update.department');
        Route::get('/department/delete/{id}','DepartmentDestory')->name('delete.department');
        Route::get('/department/view/{id}','DepartmentView')->name('view.department');
        Route::get('/department/inactive/{id}','DepartmentInactive')->name('inactive.department');
        Route::get('/department/active/{id}','DepartmentActive')->name('active.department');
    });


    Route::controller(DesignationController::class)->group(function(){
        Route::get('/designation/list/','DesignationIndex')->name('all.designation');
        Route::get('/designation/add/','DesignationAdd')->name('add.designation');
        Route::post('/designation/store/','DesignationStore')->name('store.designation');
        Route::get('/designation/edit/{id}','DesignationEdit')->name('edit.designation');
        Route::post('/designation/update/','DesignationUpdate')->name('update.designation');
        Route::get('/designation/delete/{id}','DesignationDestory')->name('delete.designation');
        Route::get('/designation/view/{id}','DesignationView')->name('view.designation');
        Route::get('/designation/inactive/{id}','DesignationInactive')->name('inactive.designation');
        Route::get('/designation/active/{id}','DesignationActive')->name('active.designation');
    });

    Route::controller(SocialMediaTypeController::class)->group(function(){
        Route::get('/socialmediatype/list/','SocialMediaTypeIndex')->name('all.socialmediatype');
        Route::get('/socialmediatype/add/','SocialMediaTypeAdd')->name('add.socialmediatype');
        Route::post('/socialmediatype/store/','SocialMediaTypeStore')->name('store.socialmediatype');
        Route::get('/socialmediatype/edit/{id}','SocialMediaTypeEdit')->name('edit.socialmediatype');
        Route::post('/socialmediatype/update/','SocialMediaTypeUpdate')->name('update.socialmediatype');
        Route::get('/socialmediatype/delete/{id}','SocialMediaTypeDestory')->name('delete.socialmediatype');
        Route::get('/socialmediatype/view/{id}','SocialMediaTypeView')->name('view.socialmediatype');
        Route::get('/socialmediatype/inactive/{id}','SocialMediaTypeInactive')->name('inactive.socialmediatype');
        Route::get('/socialmediatype/active/{id}','SocialMediaTypeActive')->name('active.socialmediatype');
    });

    Route::controller(StremController::class)->group(function(){
        Route::get('/strem/list/','StremIndex')->name('all.strem');
        Route::get('/strem/add/','StremAdd')->name('add.strem');
        Route::post('/strem/store/','StremStore')->name('store.strem');
        Route::get('/strem/edit/{id}','StremEdit')->name('edit.strem');
        Route::post('/strem/update/','StremUpdate')->name('update.strem');
        Route::get('/strem/delete/{id}','StremDestory')->name('delete.strem');
        Route::get('/strem/view/{id}','StremView')->name('view.strem');
        Route::get('/strem/inactive/{id}','StremInactive')->name('inactive.strem');
        Route::get('/strem/active/{id}','StremActive')->name('active.strem');
    });

    Route::controller(SubstreamController::class)->group(function(){
        Route::get('/substrem/list/','SubstremIndex')->name('all.substrem');
        Route::get('/substrem/add/','SubstremAdd')->name('add.substrem');
        Route::post('/substrem/store/','SubstremStore')->name('store.substrem');
        Route::get('/substrem/edit/{id}','SubstremEdit')->name('edit.substrem');
        Route::post('/substrem/update/','SubstremUpdate')->name('update.substrem');
        Route::get('/substrem/delete/{id}','SubstremDestory')->name('delete.substrem');
        Route::get('/substrem/view/{id}','SubstremView')->name('view.substrem');
        Route::get('/substrem/inactive/{id}','SubstremInactive')->name('inactive.substrem');
        Route::get('/substrem/active/{id}','SubstremActive')->name('active.substrem');
    });

    Route::controller(CourseController::class)->group(function(){
        Route::get('/course/list/','CourseIndex')->name('all.course');
        Route::get('/course/add/','CourseAdd')->name('add.course');
        Route::post('/course/store/','CourseStore')->name('store.course');
        Route::get('/course/edit/{id}','CourseEdit')->name('edit.course');
        Route::post('/course/update/','CourseUpdate')->name('update.course');
        Route::get('/course/delete/{id}','CourseDestory')->name('delete.course');
        Route::get('/course/view/{id}','CourseView')->name('view.course');
        Route::get('/course/inactive/{id}','CourseInactive')->name('inactive.course');
        Route::get('/course/active/{id}','CourseActive')->name('active.course');
        Route::get('/coursestrem/ajax/{strem_id}','GetCourseStrem');
    });

    Route::controller(SpecializationController::class)->group(function(){
        Route::get('/specialization/list/','SpecializationIndex')->name('all.specialization');
        Route::get('/specialization/add/','SpecializationAdd')->name('add.specialization');
        Route::post('/specialization/store/','SpecializationStore')->name('store.specialization');
        Route::get('/specialization/edit/{id}','SpecializationEdit')->name('edit.specialization');
        Route::post('/specialization/update/','SpecializationUpdate')->name('update.specialization');
        Route::get('/specialization/delete/{id}','SpecializationDestory')->name('delete.specialization');
        Route::get('/specialization/view/{id}','SpecializationView')->name('view.specialization');
        Route::get('/specialization/inactive/{id}','SpecializationInactive')->name('inactive.specialization');
        Route::get('/specialization/active/{id}','SpecializationActive')->name('active.specialization');
        Route::get('/specializationstrem/ajax/{strem_id}','GetSpecializationStrem');
        Route::get('/specializationsubstrem/ajax/{substrem_id}','GetSpecializationSubstrem');
    });

    Route::controller(PaymentModeController::class)->group(function(){
        Route::get('/paymentmode/list','PaymentmodeIndex')->name('all.paymentmode');
        Route::get('/paymentmode/add','PaymentmodeAdd')->name('add.paymentmode');
        Route::post('/paymentmode/store','PaymentmodeStore')->name('store.paymentmode');
        Route::get('/paymentmode/edit/{id}', 'PaymentmodeEdit')->name('edit.paymentmode');
        Route::post('/paymentmode/update','PaymentmodeUpdate')->name('update.paymentmode');
        Route::get('/paymentmode/delete/{id}','PaymentmodeDestory')->name('delete.paymentmode');
        Route::get('/paymentmode/view/{id}','PaymentmodeView')->name('view.paymentmode');
        Route::get('/paymentmode/inactive/{id}','PaymentmodeInactive')->name('inactive.paymentmode');
        Route::get('/paymentmode/active/{id}','PaymentmodeActive')->name('active.paymentmode');
    });

    Route::controller(PathologySourceController::class)->group(function(){
        Route::get('/pathology-source/list','PathologySourceIndex')->name('all.pathologysource');
        Route::get('/pathology-source/add','PathologySourceAdd')->name('add.pathologysource');
        Route::post('/pathology-source/store','PathologySourceStore')->name('store.pathologysource');
        Route::get('/pathology-source/edit/{id}', 'PathologySourceEdit')->name('edit.pathologysource');
        Route::post('/pathology-source/update','PathologySourceUpdate')->name('update.pathologysource');
        Route::get('/pathology-source/delete/{id}','PathologySourceDestory')->name('delete.pathologysource');
        Route::get('/pathology-source/view/{id}','PathologySourceView')->name('view.pathologysource');
        Route::get('/pathology-source/inactive/{id}','PathologySourceInactive')->name('inactive.pathologysource');
        Route::get('/pathology-source/active/{id}','PathologySourceActive')->name('active.pathologysource');
    });

    Route::controller(UnitTypeController::class)->group(function(){
        Route::get('/unittype/list','TestUnitTypeIndex')->name('all.testunittype');
        Route::get('/unittype/add','TestUnitTypeAdd')->name('add.testunittype');
        Route::post('/unittype/store','TestUnitTypeStore')->name('store.testunittype');
        Route::get('/unittype/edit/{id}', 'TestUnitTypeEdit')->name('edit.testunittype');
        Route::post('/unittype/update','TestUnitTypeUpdate')->name('update.testunittype');
        Route::get('/unittype/delete/{id}','TestUnitTypeDestory')->name('delete.testunittype');
        Route::get('/unittype/view/{id}','TestUnitTypeView')->name('view.testunittype');
        Route::get('/unittype/inactive/{id}','TestUnitTypeInactive')->name('inactive.testunittype');
        Route::get('/unittype/active/{id}','TestUnitTypeActive')->name('active.testunittype');       
    });

    Route::controller(SampleTypeController::class)->group(function(){
        Route::get('/test-sample-type/list','TestSampleTypeIndex')->name('all.testsampletype'); 
        Route::get('/test-sample-type/add','TestSampleTypeAdd')->name('add.testsampletype');
        Route::post('/test-sample-type/store','TestSampleTypeStore')->name('store.testsampletype');
        Route::get('/test-sample-type/edit/{id}', 'TestSampleTypeEdit')->name('edit.testsampletype');
        Route::post('/test-sample-type/update','TestSampleTypeUpdate')->name('update.testsampletype');
        Route::get('/test-sample-type/delete/{id}','TestSampleTypeDestory')->name('delete.testsampletype');
        Route::get('/test-sample-type/view/{id}','TestSampleTypeView')->name('view.testsampletype');
        Route::get('/test-sample-type/inactive/{id}','TestSampleTypeInactive')->name('inactive.testsampletype');
        Route::get('/test-sample-type/active/{id}','TestSampleTypeActive')->name('active.testsampletype');      
    });

    Route::controller(TestBloodController::class)->group(function(){
        Route::get('/testblood/list','TestBloodIndex')->name('all.testblood'); 
        Route::get('/testblood/add','TestBloodAdd')->name('add.testblood');
        Route::post('/testblood/store','TestBloodStore')->name('store.testblood');
        Route::get('/testblood/edit/{id}', 'TestBloodEdit')->name('edit.testblood');
        Route::post('/testblood/update','TestBloodUpdate')->name('update.testblood');
        Route::get('/testblood/delete/{id}','TestBloodDestory')->name('delete.testblood');
        Route::get('/testblood/view/{id}','TestBloodView')->name('view.testblood');
        Route::get('/testblood/inactive/{id}','TestBloodInactive')->name('inactive.testblood');
        Route::get('/testblood/active/{id}','TestBloodActive')->name('active.testblood');      
    });

    Route::controller(TestBloodGroupController::class)->group(function(){
        Route::get('/testbloodgroup/list','TestBloodGroupIndex')->name('all.testbloodgroup'); 
        Route::get('/testbloodgroup/add','TestBloodGroupAdd')->name('add.testbloodgroup');
        Route::post('/testbloodgroup/store','TestBloodGroupStore')->name('store.testbloodgroup');
        Route::get('/testbloodgroup/edit/{id}', 'TestBloodGroupEdit')->name('edit.testbloodgroup');
        Route::post('/testbloodgroup/update','TestBloodGroupUpdate')->name('update.testbloodgroup');
        Route::get('/testbloodgroup/delete/{id}','TestBloodGroupDestory')->name('delete.testbloodgroup');
        Route::get('/testbloodgroup/view/{id}','TestBloodGroupView')->name('view.testbloodgroup');
        Route::get('/testbloodgroup/inactive/{id}','TestBloodGroupInactive')->name('inactive.testbloodgroup');
        Route::get('/testbloodgroup/active/{id}','TestBloodGroupActive')->name('active.testbloodgroup');      
    });


    Route::controller(StaffController::class)->group(function(){
        Route::get('/staff/list/','StaffIndex')->name('all.staff');
        Route::get('/staff/add/','StaffAdd')->name('add.staff');
        Route::post('/staff/store/','StaffStore')->name('store.staff');
        Route::get('/staff/edit/{id}','StaffEdit')->name('edit.staff');
        Route::post('/staff/update/','StaffUpdate')->name('update.staff');
        Route::get('/staff/delete/{id}','StaffDestory')->name('delete.staff');
        Route::get('/staff/view/{id}','StaffView')->name('view.staff');
        Route::get('/staff/print/{id}','StaffPrint')->name('print.staff');
        Route::get('/staff/inactive/{id}', 'StaffInactive')->name('inactive.staff');
        Route::get('/staff/active/{id}', 'StaffActive')->name('active.staff');
        Route::get('/staff/idcardprofile/{id}', 'IdCardProfile')->name('idcardprofile.staff');

        Route::get('/staffstate/ajax/{country_id}','GetStaffState');
        Route::get('/staffcity/ajax/{state_id}','GetStaffCity');
    });

    Route::controller(DoctorController::class)->group(function(){
        Route::get('/doctor/list/','DoctorIndex')->name('all.doctor');
        Route::get('/doctor/add/','DoctorAdd')->name('add.doctor');
        Route::post('/doctor/store/','DoctorStore')->name('store.doctor');
        Route::get('/doctor/edit/{id}','DoctorEdit')->name('edit.doctor');
        Route::post('/doctor/update/','DoctorUpdate')->name('update.doctor');
        Route::get('/doctor/delete/{id}','DoctorDestory')->name('delete.doctor');
        Route::get('/doctor/view/{id}','DoctorView')->name('view.doctor');
        Route::get('/doctor/print/{id}','DoctorPrint')->name('print.doctor');
        Route::get('/doctor/inactive/{id}', 'DoctorInactive')->name('inactive.doctor');
        Route::get('/doctor/active/{id}', 'DoctorActive')->name('active.doctor');

        Route::get('/doctorstate/ajax/{country_id}','GetDoctorState');
        Route::get('/doctorcity/ajax/{state_id}','GetDoctorCity');

        Route::get('/strem/ajax/{strem_id}','GetDoctorStrem');
        Route::get('/substrem/ajax/{substrem_id}','GetDoctorSubstrem');
        Route::get('/course/ajax/{course_id}','GetDoctorCourse');
    });

    Route::controller(PathdoctorController::class)->group(function(){
        Route::get('/doctors/list/','DoctorsIndex')->name('all.doctors');
        Route::get('/doctors/add/','DoctorsAdd')->name('add.doctors');
        Route::post('/doctors/store/','DoctorsStore')->name('store.doctors');
        Route::get('/doctors/edit/{id}','DoctorsEdit')->name('edit.doctors');
        Route::post('/doctors/update/','DoctorsUpdate')->name('update.doctors');
        Route::get('/doctors/delete/{id}','DoctorsDestory')->name('delete.doctors');
        Route::get('/doctors/view/{id}','DoctorsView')->name('view.doctors');
        Route::get('/doctors/print/{id}','DoctorsPrint')->name('print.doctors');
        Route::get('/doctors/inactive/{id}', 'DoctorsInactive')->name('inactive.doctors');
        Route::get('/doctors/active/{id}', 'DoctorsActive')->name('active.doctors');
        Route::post('/check-phone', 'checkPhone')->name('check.phone');

        Route::get('/doctorsstate/ajax/{country_id}','GetDoctorsState');
        Route::get('/doctorscity/ajax/{state_id}','GetDoctorsCity');
    });



    Route::controller(DiagnosticController::class)->group(function(){
        Route::get('/diagnosticcenter/list/','DiagnosticCenterIndex')->name('all.diagnosticcenter');
        Route::get('/diagnostic-center/add/','DiagnosticCenterAdd')->name('add.diagnosticcenter');
        Route::post('/diagnostic-center/store/','DiagnosticCenterStore')->name('store.diagnosticcenter');
        Route::get('/diagnostic-center/edit/{id}','DiagnosticCenterEdit')->name('edit.diagnosticcenter');
        Route::post('/diagnostic-center/update/','DiagnosticCenterUpdate')->name('update.diagnosticcenter');
        Route::get('/diagnostic-center/delete/{id}','DiagnosticCenterDestory')->name('delete.diagnosticcenter');
        Route::get('/diagnostic-center/view/{id}','DiagnosticCenterView')->name('view.diagnosticcenter');
        Route::get('/diagnostic-center/inactive/{id}', 'DiagnosticCenterInactive')->name('inactive.diagnosticcenter');
        Route::get('/diagnostic-center/active/{id}', 'DiagnosticCenterActive')->name('active.diagnosticcenter');

        Route::get('/diagnosticstate/ajax/{country_id}','GetDiagnosticState');
        Route::get('/diagnosticcity/ajax/{state_id}','GetDiagnosticCity');
    });

    Route::controller(CollectionController::class)->group(function(){
        Route::get('/collectioncenter/list/','CollectionCenterIndex')->name('all.collectioncenter');
        Route::get('/collectioncenter/add/','CollectionCenterAdd')->name('add.collectioncenter');
        Route::post('/collectioncenter/store/','CollectionCenterStore')->name('store.collectioncenter');
        Route::get('/collectioncenter/edit/{id}','CollectionCenterEdit')->name('edit.collectioncenter');
        Route::post('/collectioncenter/update/','CollectionCenterUpdate')->name('update.collectioncenter');
        Route::get('/collectioncenter/delete/{id}','CollectionCenterDestory')->name('delete.collectioncenter');
        Route::get('/collectioncenter/view/{id}','CollectioncCenterView')->name('view.collectioncenter');
        Route::get('/collectioncenter/inactive/{id}', 'CollectioncCenterInactive')->name('inactive.collectioncenter');
        Route::get('/collectioncenter/active/{id}', 'CollectioncCenterActive')->name('active.collectioncenter');

        Route::get('/collectioncenterstate/ajax/{country_id}','GetCollectionCenterState');
        Route::get('/collectioncentercity/ajax/{state_id}','GetCollectionCenterCity');
    });



}); //// Admin Middlewre Group End







Route::group(['middleware' => 'doctor'], function(){

    Route::get('/doctor/dashboard',[DashboardController::class,'Dashboard'])->name('doctor.dashboard');

    Route::controller(UserController::class)->group(function(){

        Route::get('/doctor/change/password','ChangePassword')->name('change.password');
        Route::post('/doctor/change/password','UpdateChangePassword')->name('update.change.password');

    }); //user List End

    Route::controller(ProfileController::class)->group(function(){

        Route::get('/doctor/profile','DoctorProfile')->name('doctor.profile');
        Route::post('/doctor/profile/store','DoctorProfileStore')->name('doctor.profile.store');
        Route::post('/doctor/location/store','DoctorLocationStore')->name('doctor.location.store');
        Route::post('/doctor/bank/store', 'DoctorBankStore')->name('doctor.bank.store');
        Route::post('/doctor/clinic/store', 'DoctorClinicStore')->name('doctor.clinic.store');

        Route::get('/doctorprofilestate/ajax/{country_id}','GetDoctorProfileState');
        Route::get('/doctorprofilecity/ajax/{state_id}','GetDoctorProfileCity');

        Route::post('/doctorcheck-phone', 'DoctorCheckPhone')->name('doctorcheck.phone');


    });// end doctor profile


}); //// Doctor Center Middlewre Group End




Route::group(['middleware' => 'patient'], function(){

    Route::get('/patient/dashboard',[DashboardController::class,'Dashboard'])->name('patient.dashboard');

    Route::controller(UserController::class)->group(function(){

        Route::get('/patient/change/password','ChangePassword')->name('change.password');
        Route::post('/patient/change/password','UpdateChangePassword')->name('update.change.password');

    }); //user List End

    Route::controller(ProfileController::class)->group(function(){

        Route::get('/patient/profile','PatientProfile')->name('patient.profile');
        Route::post('/patient/profile/store','PatientProfileStore')->name('patient.profile.store');
        

        Route::get('/patientprofilestate/ajax/{country_id}','GetPatientProfileState');
        Route::get('/patientprofilecity/ajax/{state_id}','GetPatientProfileCity');

        Route::post('/patientcheck-phone', 'PatientCheckPhone')->name('patientcheck.phone');

    });// end patient profile


}); //// Patient Center Middlewre Group End




Route::group(['middleware' => 'staff'], function(){

    Route::get('/staff/dashboard',[DashboardController::class,'Dashboard'])->name('staff.dashboard');

    Route::controller(UserController::class)->group(function(){

        Route::get('/staff/change/password','ChangePassword')->name('change.password');
        Route::post('/staff/change/password','UpdateChangePassword')->name('update.change.password');

    }); //user List End

    Route::controller(ProfileController::class)->group(function(){

        Route::get('/staff/profile','StaffProfile')->name('staff.profile');
        Route::post('/staff/profile/store','StaffProfileStore')->name('staff.profile.store');
        Route::post('/staff/location/store','StaffLocationStore')->name('staff.location.store');

        Route::get('/staffprofilestate/ajax/{country_id}','GetStaffProfileState');
        Route::get('/staffprofilecity/ajax/{state_id}','GetStaffProfileCity');

        Route::post('/staffcheck-phone', 'staffcheckPhone')->name('staffcheck.phone');

    });// end staff profile


}); //// Staff Center Middlewre Group End





Route::group(['middleware' => 'diagnostic'], function(){

    Route::get('/diagnostic/dashboard',[DashboardController::class,'Dashboard'])->name('diagnostic.dashboard');


    Route::controller(UserController::class)->group(function(){

        Route::get('/diagnostic/change/password','ChangePassword')->name('change.password');
        Route::post('/diagnostic/change/password','UpdateChangePassword')->name('update.change.password');

    }); //user List End

    Route::controller(ProfileController::class)->group(function(){

        Route::get('/diagnostic/profile','DiagnosticProfile')->name('diagnostic.profile');
        Route::post('/diagnostic/profile/store','DiagnosticProfileStore')->name('diagnostic.profile.store');
        Route::post('/diagnostic/location/store','DiagnosticLocationStore')->name('diagnostic.location.store');

        Route::get('/diagnosticprofilestate/ajax/{country_id}','GetDiagnosticProfileState');
        Route::get('/diagnosticprofilecity/ajax/{state_id}','GetDiagnosticProfileCity');

        Route::post('/diagnosticcheck-phone', 'diagnosticcheckPhone')->name('diagnosticcheck.phone');

    });// end Diagnostic profile



}); //// Diagnostic Center Middlewre Group End





Route::group(['middleware' => 'collection'], function(){

    Route::get('/collection/dashboard',[DashboardController::class,'Dashboard'])->name('collection.dashboard');


    Route::controller(UserController::class)->group(function(){

        Route::get('/collection/change/password','ChangePassword')->name('change.password');
        Route::post('/collection/change/password','UpdateChangePassword')->name('update.change.password');

    }); //user List End

    Route::controller(ProfileController::class)->group(function(){

        Route::get('/collection/profile','CollectionProfile')->name('collection.profile');
        Route::post('/collection/profile/store','CollectionProfileStore')->name('collection.profile.store');
        Route::post('/collection/location/store','CollectionLocationStore')->name('collection.location.store');

        Route::get('/collectionprofilestate/ajax/{country_id}','GetCollectionProfileState');
        Route::get('/collectionprofilecity/ajax/{state_id}','GetCollectionProfileCity');

        Route::post('/collectioncheck-phone', 'collectioncheckPhone')->name('collectioncheck.phone');

    });// end collection center profile


}); //// Collection Center Middlewre Group End