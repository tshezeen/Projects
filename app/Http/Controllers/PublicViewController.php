<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramOffered;
use App\Models\InstitutionType;
use App\Models\InstitutionList;
use App\Models\RecordYear;
use App\Models\AcademicYear;
use App\Models\Mode;
use App\Models\FacilityType;
use App\Models\Award;
use App\Models\Category;
use App\Models\AcademicStaff;
use App\Models\NonAcademicStaff;
use App\Models\BulkStdDtl;

use App\Models\FacilityDtl;
use App\Models\AcademicYearWiseDtl;
use App\Models\FeeStructure;


class PublicViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    

        $recordList = \DB::table('program_offereds')
                    ->select(\DB::raw('*,program_offereds.inst_id, institution_lists.inst_name as institute,record_years.record_year as year,record_years.is_active as active,institution_types.inst_type as type,program_offereds.inst_id as institute_id'))
                    ->leftJoin('record_years','program_offereds.record_yr','=','record_years.id')
                    ->leftJoin('institution_lists','program_offereds.inst_id','=','institution_lists.id')
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->groupBy('inst_id','record_yr')
                    ->get();

         return view('public_view/index',['recordList'   =>  $recordList]);            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($year_id,$inst_id,$inst_name,$year)
    {
        //
        // dd("inside read");
       
//        dd($inst_id);
         try{
         session(['inst_id'=>$inst_id,'record_yr'=>$year_id,'institute'=>$inst_name,'year'=>$year]);//used in individual controller

       //dd($year_id,$inst_id);
      
        $user_session=session('role_name');
        $institute_session=session('institute');//jurisdiction id
        //dd($institute_session);
        
        $awards = Award::get();
        $academicList = AcademicYear::get();
        $category = Category::get();
        $facilityType = FacilityType::get();
        $insTypeList = InstitutionType::get();
        $mode = Mode::get();
        $programOffered = ProgramOffered::get();

        $programList = \DB::table('program_offereds')
                    ->select(\DB::raw('*, awards.award as award,modes.mode as mode,categories.category as category,record_years.record_year as year'))
                    ->leftJoin('awards','program_offereds.award_id','=','awards.id')
                    ->leftJoin('categories','program_offereds.cat_id','=','categories.id')
                    ->leftJoin('modes','program_offereds.mode_id','=','modes.id')
                    ->leftJoin('record_years','program_offereds.record_yr','=','record_years.id')
                    ->where('program_offereds.inst_id', $inst_id)
                    ->where('program_offereds.record_yr', $year_id)
                   
                    ->get();

         $facilityList = \DB::table('facility_dtls')
                    ->select(\DB::raw('*, facility_types.facility_type as facility'))
                    ->leftJoin('facility_types','facility_dtls.facility_type_id','=','facility_types.id')
                     ->where('facility_dtls.inst_id', $inst_id)
                    ->where('facility_dtls.record_yr', $year_id)
                    ->get();

         $academicYearWiseList = \DB::table('academic_year_wise_dtls')
                    ->select(\DB::raw('*,program_offereds.program_name as program,academic_years.academic_year '))
                    ->leftJoin('program_offereds','academic_year_wise_dtls.program_id','=','program_offereds.id')
                    ->leftJoin('academic_years','academic_year_wise_dtls.academic_year_id','=','academic_years.id')
                    ->where('academic_year_wise_dtls.inst_id', $inst_id)
                    ->where('academic_year_wise_dtls.record_yr', $year_id)
                    ->get();            

         $feeStructureList    =   FeeStructure::where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();
                    

         $academicStaffList    =   AcademicStaff:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();

         $nonAcademicStaffList    =   NonAcademicStaff:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();

         $bulkStdList    =   BulkStdDtl:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();

        
        $instituteLists = \DB::table('institution_lists')
                    ->select(\DB::raw('*, institution_types.inst_type as type'))
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->where('institution_lists.id', $inst_id)
                    ->get();
                   // dd($instituteLists);

        return view('public_view.details')->with(array('programList' => $programList,'feeStructureList' =>  $feeStructureList,'facilityList' => $facilityList,'academicYearWiseList' =>  $academicYearWiseList,'academicStaffList' =>  $academicStaffList,'nonAcademicStaffList' =>  $nonAcademicStaffList,'bulkStdList' =>  $bulkStdList,'awardList' => $awards,'academicList' => $academicList,'categoryList' => $category,'facilityType' => $facilityType,'insTypeList' => $insTypeList,'modeList' => $mode,'programOffered' => $programOffered,'instituteLists' => $instituteLists));
    }
     catch(\Exception $exception){
            dd($exception);
            return redirect()->route('public.index')
           ->with('error','ERROR!');
            
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
