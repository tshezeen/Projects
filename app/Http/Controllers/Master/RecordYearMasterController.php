<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

class RecordYearMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $recordYearDtls = RecordYear::get();

        return view('master/record_year/index', ['recordYearDtls' => $recordYearDtls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('master/record_year/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $userId = Auth::id();
        $current_year = now()->year;
        $inst_session=session('institute');
        
       // $current_year=Request::input('record_year');
        $previous_year = $current_year - 1;
       // dd($current_year,$previous_year);

        $year_id    =   RecordYear:: where('record_year', $previous_year)->value('id');
        $next_id =    $year_id + 1;             
        $current_date =   new \DateTime();            
//dd($inst_session,$current_date);
        \DB::beginTransaction();

            try {

                $this->validateInput($request);
                
                \DB::table('record_years')->insert([
                    'record_year' =>  $request['record_year'],
                    //'updated_by'  => $userId,
                    'updated_at' => $current_date
                ]);


                $programOfered = ProgramOffered::where('record_yr',$year_id)
                                ->get();
                foreach( $programOfered as $program)
                {
    
                    \DB::table('program_offereds')->insert([
                        'program_name' =>  $program['program_name'],
                        'award_id' =>  $program['award_id'],
                        'mode_id' =>  $program['mode_id'],
                        'affiliation' =>  $program['affiliation'],
                        'cat_id' =>  $program['cat_id'],
                        'program_fee' => $program['program_fee'],
                        //'duration' => $program['duration'],
                        'inst_id' =>  $program['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date

                        
                    ]);
                }
                 

                $feeStructures = FeeStructure::where('record_yr',$year_id)
                                ->get();              

                foreach( $feeStructures as $feeStructures)
                {
                    
                    \DB::table('fee_structures')->insert([
                        'hostel' =>  $feeStructures['hostel'],
                        'mess' =>  $feeStructures['mess'],
                        'admission' =>  $feeStructures['admission'],
                        'registration' =>  $feeStructures['registration'],
                        'library' =>  $feeStructures['library'],
                        'exam' =>  $feeStructures['exam'],
                        'security_deposit' =>  $feeStructures['security_deposit'],
                        'miscellaneous' =>  $feeStructures['miscellaneous'],
                        'registration' =>  $feeStructures['registration'],
                        'others' =>  $feeStructures['others'],
                        'inst_id' =>  $feeStructures['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date

                        
                    ]);

                   
                }

                
             $academicStaff = AcademicStaff::where('record_yr',$year_id)
                                ->get();              

                foreach( $academicStaff as $academicStaff)
                {
                    
                    \DB::table('academic_staff')->insert([
                        'male' =>  $academicStaff['male'],
                        'female' =>  $academicStaff['female'],
                        'bhutanese_contract' =>  $academicStaff['bhutanese_contract'],
                        'bhutanese_regular' =>  $academicStaff['bhutanese_regular'],
                        'international_contract' =>  $academicStaff['international_contract'],
                        'international_regular' =>  $academicStaff['international_regular'],
                        'age_above_61yrs' =>  $academicStaff['age_above_61yrs'],
                        'age_31_45yrs' =>  $academicStaff['age_31_45yrs'],
                        'age_46_60yrs' =>  $academicStaff['age_46_60yrs'],
                        'doctorate' =>  $academicStaff['doctorate'],
                        'master' =>  $academicStaff['master'],
                        'bachelor' =>  $academicStaff['bachelor'],
                        'diploma' =>  $academicStaff['diploma'],
                        'exp_6yrs_below' =>  $academicStaff['exp_6yrs_below'],
                        'exp_6_10yrs' =>  $academicStaff['exp_6_10yrs'],
                        'exp_10yrs_above' =>  $academicStaff['exp_10yrs_above'],
                        'inst_id' =>  $academicStaff['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date


                        
                    ]);

                   
                }


                $nonAcademicStaff = NonAcademicStaff::where('record_yr',$year_id)
                                ->get();              

                foreach( $nonAcademicStaff as $nonAcademicStaff)
                {
                    
                    \DB::table('non_academic_staff')->insert([
                        'male' =>  $nonAcademicStaff['male'],
                        'female' =>  $nonAcademicStaff['female'],
                        'doctorate' =>  $nonAcademicStaff['doctorate'],
                        'master' =>  $nonAcademicStaff['master'],
                        'bachelor' =>  $nonAcademicStaff['bachelor'],
                        'diploma' =>  $nonAcademicStaff['diploma'],
                        'certification_below' =>  $nonAcademicStaff['certification_below'],
                        'inst_id' =>  $nonAcademicStaff['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date


                        
                    ]);

                   
                }


                $facilityList = FacilityDtl::where('record_yr',$year_id)
                                ->get();              

                foreach($facilityList as $facilityList)
                {
                    
                    \DB::table('facility_dtls')->insert([
                        'facility_type_id' =>  $facilityList['facility_type_id'],
                        'number' =>  $facilityList['number'],
                        'capacity' =>  $facilityList['capacity'],
                        'inst_id' =>  $facilityList['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date


                        
                    ]);

                   
                }

                $funding = FundingSource::where('record_yr',$year_id)
                                ->get();              

                foreach($funding as $funding)
                {
                    
                    \DB::table('funding_sources')->insert([
                        'RGoB_funding' =>  $funding['RGoB_funding'],
                        'pvt_funding' =>  $funding['pvt_funding'],
                        'consultant_service' =>  $funding['consultant_service'],
                        'research_grant' =>  $funding['research_grant'],
                        'facilities_rental' =>  $funding['facilities_rental'],
                        'sale_of_asset' =>  $funding['sale_of_asset'],
                        'other_funding' =>  $funding['other_funding'],
                        'total_funding' =>  $funding['total_funding'],
                        'inst_id' =>  $funding['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date


                        
                    ]);

                   
                }


                $academicYrWiseDtls = AcademicYearWiseDtl::where('record_yr',$year_id)
                                ->get();              

                foreach($academicYrWiseDtls as $academicYrWiseDtls)
                {
                    
                    \DB::table('academic_year_wise_dtls')->insert([
                        'academic_year_id' =>  $academicYrWiseDtls['academic_year_id'],
                        'male_RGoB' =>  $academicYrWiseDtls['male_RGoB'],
                        'female_RGoB' =>  $academicYrWiseDtls['female_RGoB'],
                        'total_RGoB' =>  $academicYrWiseDtls['total_RGoB'],
                        'male_self' =>  $academicYrWiseDtls['male_self'],
                        'female_self' =>  $academicYrWiseDtls['female_self'],
                        'total_self' =>  $academicYrWiseDtls['total_self'],
                        'male_other' =>  $academicYrWiseDtls['male_other'],
                        'female_other' => $academicYrWiseDtls['female_other'],
                        'total_other' =>  $academicYrWiseDtls['total_other'],
                        'grand_total' => $academicYrWiseDtls['grand_total'],
                        'inst_id' =>  $academicYrWiseDtls['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date

                        
                    ]);

                   
                }


                 $bulkStdDtls = BulkStdDtl::where('record_yr',$year_id)
                                ->get();              

                foreach($bulkStdDtls as $bulkStdDtls)
                {
                    
                    \DB::table('bulk_std_dtls')->insert([
                        'RGoB_funded' =>  $bulkStdDtls['RGoB_funded'],
                        'other_funded' =>  $bulkStdDtls['other_funded'],
                        'self_funded' =>  $bulkStdDtls['self_funded'],
                        'male' =>  $bulkStdDtls['male'],
                        'female' =>  $bulkStdDtls['female'],
                        'boarders' =>  $bulkStdDtls['boarders'],
                        'dayscholars' =>  $bulkStdDtls['dayscholars'],
                        'below_19yrs' =>  $bulkStdDtls['below_19yrs'],
                        'btw_19_23yrs' => $bulkStdDtls['btw_19_23yrs'],
                        'above_23yrs' =>  $bulkStdDtls['above_23yrs'],

				/*new requirements*/

                        'age_15yrs_below' => $bulkStdDtls['age_15yrs_below'],
                        'age_16yrs' =>  $bulkStdDtls['age_16yrs'],
                        'age_17yrs' =>  $bulkStdDtls['age_17yrs'],
                        'age_18yrs' =>  $bulkStdDtls['age_18yrs'],
                        'age_19yrs' =>  $bulkStdDtls['age_19yrs'],
                        'age_20yrs' =>  $bulkStdDtls['age_20yrs'],
                        'age_21yrs' =>  $bulkStdDtls['age_21yrs'],
                        'age_22yrs' =>  $bulkStdDtls['age_22yrs'],
                        'age_23yrs' =>  $bulkStdDtls['age_23yrs'],
                        'age_24yrs' => $bulkStdDtls['age_24yrs'],
                        'age_25yrs' =>  $bulkStdDtls['age_25yrs'],
                        'age_26yrs' => $bulkStdDtls['age_26yrs'],

                        'age_27yrs' =>  $bulkStdDtls['age_27yrs'],
                        'age_28yrs' =>  $bulkStdDtls['age_28yrs'],
                        'age_29yrs' =>  $bulkStdDtls['age_29yrs'],
                        'age_30yrs' =>  $bulkStdDtls['age_30yrs'],
                        'age_31yrs' =>  $bulkStdDtls['age_31yrs'],
                        'age_32yrs' =>  $bulkStdDtls['age_32yrs'],
                        'age_33yrs' =>  $bulkStdDtls['age_33yrs'],
                        'age_34yrs' =>  $bulkStdDtls['age_34yrs'],
                        'age_btw_35_39yrs' => $bulkStdDtls['age_btw_35_39yrs'],
                        'age_btw_40_44yrs' =>  $bulkStdDtls['age_btw_40_44yrs'],
                        'age_btw_45_49yrs' => $bulkStdDtls['age_btw_45_49yrs'],
                        'age_btw_50_54yrs' =>  $bulkStdDtls['age_btw_50_54yrs'],
                        'age_btw_55_59yrs' =>  $bulkStdDtls['age_btw_55_59yrs'],
                        'above_59yrs' =>  $bulkStdDtls['above_59yrs'],

                        'sen_stds' =>  $bulkStdDtls['sen_stds'],
                        'bumthang' =>  $bulkStdDtls['bumthang'],
                        'chhukha' =>  $bulkStdDtls['chhukha'],
                        'dagana' =>  $bulkStdDtls['dagana'],
                        'gasa' =>  $bulkStdDtls['gasa'],
                        'haa' => $bulkStdDtls['haa'],
                        'lhuntse' =>  $bulkStdDtls['lhuntse'],
                        'mongar' => $bulkStdDtls['mongar'],
                        'paro' =>  $bulkStdDtls['paro'],
                        'pemagatshel' =>  $bulkStdDtls['pemagatshel'],
                        'punakha' =>  $bulkStdDtls['punakha'],
                        'sarpang' =>  $bulkStdDtls['sarpang'],
                        'samdrupjongkhar' =>  $bulkStdDtls['samdrupjongkhar'],
                        'samtse' => $bulkStdDtls['samtse'],
                        'tashiyangtse' =>  $bulkStdDtls['tashiyangtse'],
                        'thimphu' => $bulkStdDtls['thimphu'],
                        'trashigang' =>  $bulkStdDtls['trashigang'],
                        'trongsa' =>  $bulkStdDtls['trongsa'],
                        'tsirang' =>  $bulkStdDtls['tsirang'],
                        'wangdi' =>  $bulkStdDtls['wangdi'],
                        'zhemgang' =>  $bulkStdDtls['zhemgang'],
                        'international_stds' => $bulkStdDtls['international_stds'],

                        'asia' =>  $bulkStdDtls['asia'],
                        'africa' => $bulkStdDtls['africa'],
                        'north_america' =>  $bulkStdDtls['north_america'],
                        'south_america' => $bulkStdDtls['south_america'],
                        'antarctica' =>  $bulkStdDtls['antarctica'],
                        'europe' => $bulkStdDtls['europe'],
                        'australia' =>  $bulkStdDtls['australia'],
                       
                        'inst_id' =>  $bulkStdDtls['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date


                        
                    ]);

                   
                }


              /*  $collaboration = Collaboration::where('record_yr',$year_id)
                                ->get();              

                foreach($collaboration as $collaboration)
                {
                    
                    \DB::table('collaborations')->insert([
                        'collaboration' =>  $collaboration['collaboration'],
                        'by' =>  $collaboration['by'],
                        'description' =>  $collaboration['description'],
                       
                        'inst_id' =>  $collaboration['inst_id'],
                        'record_yr' =>  $next_id,
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date
                        
                    ]);
     
                }*/

           
                $instList = InstitutionList::where('id', '!=' ,$inst_session )
                                ->get(); 

                foreach($instList as $instList)

                    \DB::table('declarations')->insert([
                        
                        'inst_id' =>  $instList['id'],
                        'record_yr' =>  $next_id,
			'agree' => 'N',
                        'updated_by' =>  $userId,
                        'updated_at' => $current_date
                       
                    ]);


                \DB::commit();

                return redirect()->route('record_year.index')->with('success','Added successfully');
                
            } catch (\Exception $e) {
                dd($e);
                \DB::rollback();
                return redirect()->route('record_year.index')
                         ->with('error','ERROR!');
            }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
          try {

                $is_active = RecordYear::where('id',$id)->value('is_active');
        
                 if($is_active=='Y')
                {
                     $status='N';
                }
                else 
                     $status='Y';

                //$this->validateInput($request);
               RecordYear::where('id', $id)
                       ->update(['is_active' => $status]);
            
                
                return redirect()->route('record_year.index')
                    ->with('success','Updated successfully');

                } catch(\Exception $exception){
                        return redirect()->route('record_year.index')
                                ->with('error','ERROR!');
                
            }
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
       // dd('hi');


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
        try {
           RecordYear::where('id', $id)->delete();
       
          return redirect()->route('record_year.index')
            ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('record_year.index')
            ->with('error','ERROR!');
            
        }
    }

    private function validateInput($request) {
        $this->validate($request, [
        'record_year' => 'required|max:4|unique:record_years'
    ]);
    }
}
