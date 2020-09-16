<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('admin');
Route::group(['middleware' => ['auth']],function()
{
/*---------------------MASTER TABLES -----------*/



Route::get('/change_pwd','Auth\ChangePasswordController@showChangePasswordForm');
 Route::post('store',  [
        'uses' => 'Auth\ChangePasswordController@store',
        'as' => 'change_pwd.store'
    ]);
Route::resource('/master/award','Master\AwardMasterController');
Route::resource('/master/category','Master\CategoryMasterController');
Route::resource('/master/mode','Master\ModeMasterController');
Route::resource('/master/facility_type','Master\FacilityTypeMasterController');
Route::resource('/master/institute_type','Master\InsTypeMasterController');
Route::resource('/master/institute_list','Master\InsListMasterController');
Route::resource('/master/academic','Master\AcademicMasterController');
/*Route::group(['prefix' => 'master/academic'], function() {
 Route::get('', ['uses'	=>	'Master\AcademicMasterController@index', 'as'	=>	'academic.index'
		]);

Route::get('create',  [
        'uses' => 'Master\AcademicMasterController@create',
        'as' => 'academic.create'
    ]);
       
 Route::post('store',  [
        'uses' => 'Master\AcademicMasterController@store',
        'as' => 'academic.store'
    ]); 

 Route::get('edit/{id}',  [
        'uses' => 'Master\AcademicMasterController@edit',
        'as' => 'academic.edit'
    ]); 
    

 Route::patch('update/{id}',  [
        'uses' => 'Master\AcademicMasterController@update',
        'as' => 'academic.update'
    ]); 

 Route::delete('destroy',  [
        'uses' => 'Master\AcademicMasterController@destroy',
        'as' => 'academic.destroy'
    ]); 

  });     */

/*Route::post('master/academic','Master\AcademicMasterController@update');*/


/*Route::get('/admin/settings', 'HomeController@index')->name('home');*/

/*Route::resource('/user_management/user','UserManagement/UserController');*/

/*---------USER MANAGEMENT--------------*/
Route::resource('user_management/users','UserManagement\UserController');
Route::resource('user_management/role','UserManagement\RoleController');

/*Route::group(['prefix' => 'user_management/user'], function() {

Route::get('', ['uses'  =>  'UserManagement\UserController@index', 'as' =>  '                   user.index'
             ]); 
        

Route::get('create',  [
        'uses' => 'UserManagement\UserController@create',
        'as' => 'user.create'
    ]);
       
 Route::post('store',  [
        'uses' => 'UserManagement\UserController@store',
        'as' => 'user.store'
    ]); 

 Route::get('edit/{id}',  [
        'uses' => 'UserManagement\UserController@edit',
        'as' => 'user.edit'
    ]);
       
 Route::post('update/{id}',  [
        'uses' => 'UserManagement\UserController@update',
        'as' => 'user.update'
    ]); 

  Route::delete('destroy',  [
        'uses' => 'UserManagement\UserController@destroy',
        'as' => 'user.destroy'
    ]); 
    
}); */


/*Route::group(['prefix' => 'user_management/role'], function() {

Route::get('', ['uses'	=>	'UserManagement\RoleController@index', 'as'	=>	'					role.index'
             ]); */
		

/*Route::get('create',  [
        'uses' => 'Master\AcademicMasterController@create',
        'as' => 'academic.create'
    ]);
       
 Route::post('store',  [
        'uses' => 'Master\AcademicMasterController@store',
        'as' => 'academic.store'
    ]); 
    */
 // });  
Route::resource('master/institute_list','Master\InsListMasterController');
Route::resource('master/record_year','Master\RecordYearMasterController');



//Route::resource('dashboard/tei','RecordBaseController');
//Route::resource('dashboard/tei','RedirectController');
Route::resource('program','ProgramOfferedController');
Route::resource('fee_structure','FeeStructureController');
Route::resource('academic_staff','AcademicStaffController');
Route::resource('non_academic_staff','NonAcademicStaffController');
Route::resource('facilities','FacilitiesDtlController');
Route::resource('bulk_std_dtls','BulkStudentDtlsController'); 
Route::resource('funding','FundingSourceController'); 
Route::resource('academic_wise_dtls','AcademicYearWiseController');
Route::resource('collaboration','CollaborationController');
Route::resource('staff_profile','StaffProfileController');
Route::resource('declaration','DeclarationController');

/*dahe*/
//Route::resource('dashboard/dahe','RedirectController');
Route::get('dashboard/index',['uses' => 'RedirectController@index',  
        'as' => 'dashboard.index' ]);

Route::get('dashboard/edit/{year_id}/{inst_id}/{inst_name}/{year}',['uses'  =>  'RedirectController@edit', 'as' =>  'dashboard.edit' ]);

Route::get('dashboard/show/{year_id}/{inst_id}/{inst_name}/{year}',['uses'  =>  'RedirectController@show', 'as' =>  'dashboard.show' ]);


/*reports*/

Route::get('report/general_institution_info',['uses'  =>  'ReportController@generalInstitutionInformation', 'as' =>  'report.general_institution_info' ]);

Route::get('report/program_offered',['uses'  =>  'ReportController@programOffered', 'as' =>  'report.program_offered' ]);

Route::get('report/total_enrolled',['uses'  =>  'ReportController@totalIntakeCapacity', 'as' =>  'report.total_enrolled' ]);

Route::get('report/dzongkhag_wise',['uses'  =>  'ReportController@dzongkhagWise', 'as' =>  'report.dzongkhag_wise' ]);

Route::get('report/year_programme',['uses'  =>  'ReportController@yearProgrammeStats', 'as' =>  'report.year_programme' ]);

Route::get('report/international_std',['uses'  =>  'ReportController@internationalStd', 'as' =>  'report.international_std' ]);

Route::get('report/academicians',['uses'  =>  'ReportController@academiciansByQualification', 'as' =>  'report.academicians' ]);

Route::get('report/total_intake',['uses'  =>  'ReportController@totalIntake', 'as' =>  'report.total_intake' ]);

Route::get('/report/institution_pdf','ReportController@generalInstitutionInformationPDF');
Route::get('/report/program_pdf','ReportController@programOfferedPDF');
Route::get('/report/enrolled_pdf','ReportController@totalIntakeCapacityPDF');
Route::get('/report/intake_pdf','ReportController@intakePDF');
Route::get('/report/year_programme_pdf','ReportController@yearProgrammeStatsPDF');
Route::get('/report/academicians_pdf','ReportController@academiciansByQualificationPDF');

Route::get('/downloadPDF/{id}','ReportController@downloadPDF');

});/*middleware end*/




/*public view*/
/*Route::resource('public','PublicViewController');*/
Route::get('public/index',['uses' => 'PublicViewController@index',  
        'as' => 'public.index' ]);


Route::get('public/show/{year_id}/{inst_id}/{inst_name}/{year}',['uses'  =>  'PublicViewController@show', 'as' =>  'public.show' ]);