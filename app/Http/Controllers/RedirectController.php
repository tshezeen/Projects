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
use App\Models\FundingSource;
use App\Models\FacilityDtl;
use App\Models\AcademicYearWiseDtl;
use App\Models\FeeStructure;
use App\Models\StaffProfile;
use App\Models\Declaration;
use App\Models\Collaboration;
use App\Http\Controllers\Controller;
class RedirectController extends Controller
{

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_session=session('role_name');
        $institute_session=session('institute');
        $inst=session('institute_name');
        $institute_id=session('inst_id');
     //  dd( $user_session,$institute_session,$inst, $institute_id);
        
        //session(['role_name'=>$role,'user_id'=>$id,'institute'=>$ins_id]);
        if($user_session == 'dahe')
        {
       /* $recordList = \DB::table('program_offereds')
                    ->select(\DB::raw('*,program_offereds.inst_id, institution_lists.inst_name as institute,record_years.record_year as year,record_years.is_active as active,institution_types.inst_type as type,program_offereds.inst_id as institute_id'))
                    ->leftJoin('record_years','program_offereds.record_yr','=','record_years.id')
                    ->leftJoin('institution_lists','program_offereds.inst_id','=','institution_lists.id')
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->groupBy('inst_id','record_yr')
                   // ->orderBy('institution_lists.inst_name','desc')
                    ->get();
                    ,(CASE 
                        WHEN declarations.agree = "N" THEN "Not Updated"  
                        ELSE "Updated" 
                        END) AS update_status)*/

             $recordList = \DB::table('declarations')
                    ->select(\DB::raw('*,declarations.inst_id, institution_lists.inst_name as institute,record_years.record_year as year,record_years.is_active as active,institution_types.inst_type as type,declarations.inst_id as institute_id,(CASE 
                        WHEN declarations.agree = "N" THEN "Not Updated"  
                        ELSE "Updated" 
                        END) AS update_status'))
                    ->leftJoin('record_years','declarations.record_yr','=','record_years.id')
                    ->leftJoin('institution_lists','declarations.inst_id','=','institution_lists.id')
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->groupBy('inst_id','record_yr')
                    ->orderBy('institution_lists.inst_name','asc')
                    ->get();        

                    
            }
            else{

                /*$recordList = \DB::table('program_offereds')
                    ->select(\DB::raw('*, institution_lists.inst_name as institute,record_years.record_year as year,record_years.is_active as active,institution_types.inst_type as type'))
                    ->leftJoin('record_years','program_offereds.record_yr','=','record_years.id')
                    ->leftJoin('institution_lists','program_offereds.inst_id','=','institution_lists.id')
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->where('program_offereds.inst_id','=', $institute_session)
                    ->orwhere('institution_lists.inst_name','=', $inst)
                    ->groupBy('inst_id','record_yr')
                   // ->orderBy('institution_lists.inst_name','desc')
                    ->get();*/

                    $recordList = \DB::table('declarations')
                    ->select(\DB::raw('*,declarations.inst_id, institution_lists.inst_name as institute,record_years.record_year as year,record_years.is_active as active,institution_types.inst_type as type,declarations.inst_id as institute_id,(CASE 
                        WHEN declarations.agree = "N" THEN "Not Updated"  
                        ELSE "Updated" 
                        END) AS update_status'))
                    ->leftJoin('record_years','declarations.record_yr','=','record_years.id')
                    ->leftJoin('institution_lists','declarations.inst_id','=','institution_lists.id')
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->where('declarations.inst_id','=', $institute_session)
                    ->orwhere('institution_lists.inst_name','=', $inst)
                    ->groupBy('inst_id','record_yr')
                   // ->orderBy('institution_lists.inst_name','desc')
                    ->get();  
            }        
       //s session(['institute'=>$recordList,'year'=>$recordList]);
       // dd($recordList);
        return view('record_dtls/index',['recordList'   =>  $recordList],['user_session' =>  $user_session]);
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
       // dd($id);

         session(['inst_id'=>$inst_id,'record_yr'=>$year_id,'institute'=>$inst_name,'year'=>$year]);//used in individual controller

       //dd($year_id,$inst_id);
      
        $user_session=session('role_name');
        $institute_session=session('institute');//jurisdiction id
        //dd($institute_session);
        
        $awards = Award::orderBy('award','asc')->get();
        $academicList = AcademicYear::orderBy('academic_year','asc')->get();
        $category = Category::orderBy('category','asc')->get();
        $facilityType = FacilityType::orderBy('facility_type','asc')->get();
        $insTypeList = InstitutionType::orderBy('inst_type','asc')->get();
        $mode = Mode::orderBy('mode','asc')->get();
        $programOffered = ProgramOffered::orderBy('program_name','asc')->get();//for masters

        $programList = \DB::table('program_offereds')
                    ->select(\DB::raw('*, program_offereds.id,awards.award as award,modes.mode as mode,categories.category as category,record_years.record_year as year'))
                    ->leftJoin('awards','program_offereds.award_id','=','awards.id')
                    ->leftJoin('categories','program_offereds.cat_id','=','categories.id')
                    ->leftJoin('modes','program_offereds.mode_id','=','modes.id')
                    ->leftJoin('record_years','program_offereds.record_yr','=','record_years.id')
                    ->where('program_offereds.inst_id', $inst_id)
                    ->where('program_offereds.record_yr', $year_id)
                    ->orderBy('program_offereds.program_name','asc')
                    ->get();

                  //s  dd($programList);

         $facilityList = \DB::table('facility_dtls')
                    ->select(\DB::raw('*,facility_dtls.id, facility_types.facility_type as facility'))
                    ->leftJoin('facility_types','facility_dtls.facility_type_id','=','facility_types.id')
                     ->where('facility_dtls.inst_id', $inst_id)
                    ->where('facility_dtls.record_yr', $year_id)
                    ->orderBy('facility_types.facility_type','asc')
                    ->get();

         $academicYearWiseList = \DB::table('academic_year_wise_dtls')
                    ->select(\DB::raw('*,academic_year_wise_dtls.id,program_offereds.program_name as program,academic_years.academic_year '))
                    ->leftJoin('program_offereds','academic_year_wise_dtls.program_id','=','program_offereds.id')
                    ->leftJoin('academic_years','academic_year_wise_dtls.academic_year_id','=','academic_years.id')
                    ->where('academic_year_wise_dtls.inst_id', $inst_id)
                    ->where('academic_year_wise_dtls.record_yr', $year_id)
                    ->orderBy('program_offereds.program_name','asc')
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

         $fundingSrourceList    =   FundingSource:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();

          $staffProfile    =   StaffProfile:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();  

          $collaboration = Collaboration::select("*",
                        \DB::raw('(CASE 
                        WHEN collaborations.collaboration = "national" THEN "National Collaboration" 
                        WHEN collaborations.collaboration = "internaltional" THEN "National Collaboration" 
                        WHEN collaborations.collaboration = "innovations" THEN "Innovations" 
                        WHEN collaborations.collaboration = "peer_reviewed" THEN "Peer-reviewed Journals" 
                        WHEN collaborations.collaboration = "book" THEN "Books(Chapter)"
                        WHEN collaborations.collaboration = "patent" THEN "Patent journals" 
                        ELSE "Conference proceeding papers" 
                        END) AS collaboration'))
                ->get();  




        // 

        return view('record_dtls.read_all')->with(array('programList' => $programList,'feeStructureList' =>  $feeStructureList,'facilityList' => $facilityList,'academicYearWiseList' =>  $academicYearWiseList,'academicStaffList' =>  $academicStaffList,'nonAcademicStaffList' =>  $nonAcademicStaffList,'bulkStdList' =>  $bulkStdList,'fundingSrourceList' =>  $fundingSrourceList,'awardList' => $awards,'academicList' => $academicList,'categoryList' => $category,'facilityType' => $facilityType,'insTypeList' => $insTypeList,'modeList' => $mode,'programOffered' => $programOffered,'staffProfile'=>$staffProfile,'collaboration'=>$collaboration));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($year_id,$inst_id,$inst_name,$year)
    {
        
       // dd($year_id,$inst_id);
       session(['inst_id'=>$inst_id,'record_yr'=>$year_id,'institute'=>$inst_name,'year'=>$year]);//used in individual controller

       //dd($year_id,$inst_id);
      
        $user_session=session('role_name');
        $institute_session=session('institute');//jurisdiction id
        //dd($institute_session);
    

        $awards = Award::orderBy('award','asc')->get();
        $academicList = AcademicYear::orderBy('academic_year','asc')->get();
        $category = Category::orderBy('category','asc')->get();
        $facilityType = FacilityType::orderBy('facility_type','asc')->get();
        $insTypeList = InstitutionType::orderBy('inst_type','asc')->get();
        $mode = Mode::orderBy('mode','asc')->get();
        $programOffered = ProgramOffered::orderBy('program_name','asc')->get();//for masters

        $programList = \DB::table('program_offereds')
                    ->select(\DB::raw('*,program_offereds.id, awards.award as award,modes.mode as mode,categories.category as category,record_years.record_year as year'))
                    ->leftJoin('awards','program_offereds.award_id','=','awards.id')
                    ->leftJoin('categories','program_offereds.cat_id','=','categories.id')
                    ->leftJoin('modes','program_offereds.mode_id','=','modes.id')
                    ->leftJoin('record_years','program_offereds.record_yr','=','record_years.id')
                    ->where('program_offereds.inst_id', $inst_id)
                    ->where('program_offereds.record_yr', $year_id)
                    ->orderBy('program_offereds.program_name','asc')
                    ->get();

         $facilityList = \DB::table('facility_dtls')
                    ->select(\DB::raw('*,facility_dtls.id, facility_types.facility_type as facility'))
                    ->leftJoin('facility_types','facility_dtls.facility_type_id','=','facility_types.id')
                     ->where('facility_dtls.inst_id', $inst_id)
                    ->where('facility_dtls.record_yr', $year_id)
                    ->orderBy('facility_types.facility_type','asc')
                    ->get();

          $academicYearWiseList = \DB::table('academic_year_wise_dtls')
                    ->select(\DB::raw('*,academic_year_wise_dtls.id,program_offereds.program_name as program,academic_years.academic_year, (academic_year_wise_dtls.total_other+academic_year_wise_dtls.total_self+academic_year_wise_dtls.total_RGoB) as grand_total '))
                    ->leftJoin('program_offereds','academic_year_wise_dtls.program_id','=','program_offereds.id')
                    ->leftJoin('academic_years','academic_year_wise_dtls.academic_year_id','=','academic_years.id')
                    ->where('academic_year_wise_dtls.inst_id', $inst_id)
                    ->where('academic_year_wise_dtls.record_yr', $year_id)
                    ->orderBy('program_offereds.program_name','asc')
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

         $fundingSrourceList    =   FundingSource:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();

        $staffProfile    =   StaffProfile:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();         
/*
        $collaboration    =   Collaboration:: where('inst_id', $inst_id)
                    ->where('record_yr', $year_id)
                    ->get();*/  
        $collaboration = Collaboration::select("*",
                        \DB::raw('(CASE 
                        WHEN collaborations.collaboration = "national" THEN "National Collaboration" 
                        WHEN collaborations.collaboration = "internaltional" THEN "National Collaboration" 
                        WHEN collaborations.collaboration = "innovations" THEN "Innovations" 
                        WHEN collaborations.collaboration = "peer_reviewed" THEN "Peer-reviewed Journals" 
                        WHEN collaborations.collaboration = "book" THEN "Books(Chapter)"
                        WHEN collaborations.collaboration = "patent" THEN "Patent journals" 
                        ELSE "Conference proceeding papers" 
                        END) AS collaboration'))
                ->get();



                

        return view('record_dtls.edit_all')->with(array('programList' => $programList,'feeStructureList' =>  $feeStructureList,'facilityList' => $facilityList,'academicYearWiseList' =>  $academicYearWiseList,'academicStaffList' =>  $academicStaffList,'nonAcademicStaffList' =>  $nonAcademicStaffList,'bulkStdList' =>  $bulkStdList,'fundingSrourceList' =>  $fundingSrourceList,'awardList' => $awards,'academicList' => $academicList,'categoryList' => $category,'facilityType' => $facilityType,'insTypeList' => $insTypeList,'modeList' => $mode,'programOffered' => $programOffered,'staffProfile'=>$staffProfile,'collaboration'=>$collaboration));

       
      
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
