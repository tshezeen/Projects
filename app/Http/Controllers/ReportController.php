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
use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function generalInstitutionInformation()
    {
        //

         $genInstList = $this->getGeneralInstitutionInformation();


         return view('reports/general_institution_info',['genInstList'   =>  $genInstList]);

    }


    public function getGeneralInstitutionInformation()
    {
        //

         $genInstLists = \DB::table('institution_lists')
                    ->select(\DB::raw('*,institution_types.inst_type as type'))
                     ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                     ->orderBy('institution_lists.inst_name','asc')
                    ->get();
           

         return $genInstLists;

    }

    function generalInstitutionInformationPDF()
    {
        $genInstList = $this->getGeneralInstitutionInformation();
      //  set_time_limit(300);
       // $pdf = \App::make('dompdf.wrapper');
        /*$pdf = loadHTML($this->convert_institute_list_html());
        $pdf->stream();*/

        /* $pdf->loadView('reports/general_institution_info', ['genInstList'   =>  $genInstList]);
        return $pdf->stream();*/
         set_time_limit(300);
        $pdf = PDF::loadView('reports/inst_listPDF', ['genInstList'   =>  $genInstList]);  
        return $pdf->download('InstituteList.pdf');
    }

   /* function convert_institute_list_html()
    {
        $instList = $this->getGeneralInstitutionInformation();
        $output = ' <table width="100%" style="border-collapse:collapse; border: 0px;">
                    
                          <tr>
                            
                             <th style="border:1px solid; padding:12px;" width="30%">Institution Name </th>
                             <th style="border:1px solid; padding:12px;" width="20%">Institute Type</th>
                             <th style="border:1px solid; padding:12px;" width="15%">Year of Establishment</th>
                             <th style="border:1px solid; padding:12px;" width="30%">Location</th>
                            
                             
                          </tr>
                    ';


                    foreach ($instList as $instList)
                    {

                        $output .='

                             <tr>
                                 
                                 <td style="border:1px solid; padding:12px;" width="30%">'.$instList->inst_name.'</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">'.$instList->type.'</td>
                                 <td style="border:1px solid; padding:12px;" width="15%">'.$instList->est_year.'</td>  
                                <td style="border:1px solid; padding:12px;" width="30%">'.$instList->location.'</td> 
                               
                            </tr>
                        ';
                    }
                    $output .= '</table>';
                    return $output;

    }*/

  public function programOffered()
    {
        //

         $programList =  $this->getProgramOffered();

         return view('reports/program_offered',['programList'   =>  $programList]);

    }


    public function getProgramOffered()
    {
        //

         $programmeList= \DB::table('program_offereds')
                    ->select(\DB::raw('*,institution_lists.inst_name as institute'))
                    ->leftJoin('institution_lists','program_offereds.inst_id','=','institution_lists.id')
                   // ->where('program_offereds.record_yr','')
                    ->orderBy('institution_lists.inst_name','asc')
                    ->get();
           

         return $programmeList;

     }

    function programOfferedPDF()
    {
        $programmes = $this->getProgramOffered();
      
         set_time_limit(300);
        $pdf = PDF::loadView('reports/program_offeredPDF', ['programmes'   =>  $programmes]);  
        return $pdf->download('ProgrammeOffered.pdf');
    }




   public function totalIntakeCapacity()
    {
        //

         $totalIntakeCapacityList= $this->gettotalIntakeCapacity();

         return view('reports/total_intake_capacity',['totalIntakeCapacityList'   =>  $totalIntakeCapacityList]);

    }

 public function gettotalIntakeCapacity()
    {
        //

         $totalEnrolled= \DB::table('academic_year_wise_dtls')
                    ->select(\DB::raw('*,institution_lists.inst_name as institute,
                        (academic_year_wise_dtls.male_RGoB+academic_year_wise_dtls.male_self+academic_year_wise_dtls.male_other) as male_grand,(academic_year_wise_dtls.female_RGoB+academic_year_wise_dtls.female_self+academic_year_wise_dtls.female_other) as female_grand'))
                    ->leftJoin('institution_lists','academic_year_wise_dtls.inst_id','=','institution_lists.id')
                  //  ->where('academic_year_wise_dtls.record_yr','')
                    ->groupBy('academic_year_wise_dtls.inst_id')
                    ->orderBy('institution_lists.inst_name','asc')
                    ->get();
           

         return $totalEnrolled;

     }

    function totalIntakeCapacityPDF()
    {
        $enrolled = $this->gettotalIntakeCapacity();
      
         set_time_limit(300);
        $pdf = PDF::loadView('reports/total_enrolledPDF', ['enrolled'   =>  $enrolled]);  
        return $pdf->download('TotalEnrolled.pdf');
    }


  public function totalIntake()
    {


        $totalIntakeList= $this->getTotalIntake();
         
         return view('reports/total_intake',['totalIntakeList'   =>  $totalIntakeList]);

    }


 public function getTotalIntake()
    {
        //

         $totalintake= \DB::table('bulk_std_dtls')
                    ->select(\DB::raw('*,institution_lists.inst_name as institute,(bulk_std_dtls.RGoB_funded+bulk_std_dtls.self_funded+bulk_std_dtls.other_funded) as total'))
                    ->leftJoin('institution_lists','bulk_std_dtls.inst_id','=','institution_lists.id')
                   // ->where('bulk_std_dtls.record_yr','')
                    ->orderBy('institution_lists.inst_name','asc')
                    ->get();

           

         return $totalintake;

     }

    function intakePDF()
    {
        $totalIntakeList = $this->getTotalIntake();
      
         set_time_limit(300);
        $pdf = PDF::loadView('reports/total_intakePDF', ['totalIntakeList'   =>  $totalIntakeList]);  
        return $pdf->download('Totalintake.pdf');
    }


    public function dzongkhagWise()
    {

       // $dzongkhagWiseStd = BulkStdDtl::where('ID','1')->get();

       // $dzongkhagWiseStd = BulkStdDtl::get();

        $dzongkhagWiseStd= \DB::table('bulk_std_dtls')
                    ->select(\DB::raw('*,sum(bulk_std_dtls.bumthang) as bumthang,sum(chhukha) as chhukha, sum(dagana) as dagana,sum(haa) as haa, sum(lhuntse) as lhuntse, sum(mongar) as mongar, sum(pemagatshel) as pemagatshel, sum(punakha) as punakha, sum(samdrupjongkhar) as samdrupjongkhar, sum(samtse) as samtse, sum(sarpang) as sarpang, sum(trashigang) as trashigang, sum(tashiyangtse) as tashiyantse, sum(trongsa) as trongsa, sum(tsirang) as tsirang, sum(thimphu) as thimphu, sum(wangdi) as wangdi, sum(zhemgang) as zhemgang'))
                   // ->where('bulk_std_dtls.record_yr','')

                   
                    ->get();

         
         return view('reports/dzongkhag_wise',['dzongkhagWiseStd'   =>  $dzongkhagWiseStd]);

    }

    public function yearProgrammeStats()
    {


        $yearProgrammeStatistics= $this->getYearProgrammeStats();
         
         return view('reports/year_and_programme_level',['yearProgrammeStatistics'   =>  $yearProgrammeStatistics]);

    }

    public function getYearProgrammeStats()
    {
        //

         $yearProgrammeStat= \DB::table('academic_year_wise_dtls')
                    ->select(\DB::raw('*,academic_years.academic_year as year,
                        (academic_year_wise_dtls.male_RGoB+academic_year_wise_dtls.male_self+academic_year_wise_dtls.male_other) as male_grand,(academic_year_wise_dtls.female_RGoB+academic_year_wise_dtls.female_self+academic_year_wise_dtls.female_other) as female_grand'))
                    ->leftJoin('institution_lists','academic_year_wise_dtls.inst_id','=','institution_lists.id')
                    ->leftJoin('academic_years','academic_year_wise_dtls.academic_year_id','=','academic_years.id')
                   // ->where('academic_year_wise_dtls.record_yr','')
                    ->orderBy('institution_lists.inst_name','asc')
                    ->get();


           

         return $yearProgrammeStat;

     }

    function yearProgrammeStatsPDF()
    {
        $yearProgrammeStatistics = $this->getYearProgrammeStats();
      
         set_time_limit(300);
        $pdf = PDF::loadView('reports/year_and_programmePDF', ['yearProgrammeStatistics'   =>  $yearProgrammeStatistics]);  
        return $pdf->download('YearProgrammeLevel.pdf');
    }

    public function internationalStd()
    {


        $internationalStdList= \DB::table('bulk_std_dtls')
                    ->select(\DB::raw('*,institution_lists.inst_name as institute'))
                    ->leftJoin('institution_lists','bulk_std_dtls.inst_id','=','institution_lists.id')
                   // ->where('bulk_std_dtls.record_yr','')
                    ->orderBy('institution_lists.inst_name','asc')
                    ->get();

         
         return view('reports/international_std',['internationalStdList'   =>  $internationalStdList]);

    }

    public function academiciansByQualification()
    {


        $acadamicians= $this->getAcademiciansByQualification();

         
         return view('reports/academicians_by_qualification',['acadamicians'   =>  $acadamicians]);

    }
    
    public function getAcademiciansByQualification()
    {
        //

         $acadamiciansList= \DB::table('academic_staff')
                    ->select(\DB::raw('*,institution_lists.inst_name as institute'))
                    ->leftJoin('institution_lists','academic_staff.inst_id','=','institution_lists.id')
                   // ->where('academic_staff.record_yr','')
                    ->orderBy('institution_lists.inst_name','asc')
                    ->get();


         return $acadamiciansList;

     }

    function academiciansByQualificationPDF()
    {
        $acadamicians = $this->getAcademiciansByQualification();
      
        set_time_limit(300);
        $pdf = PDF::loadView('reports/academiciansPDF', ['acadamicians'   =>  $acadamicians]);  
        return $pdf->download('AcademiciansByQualification.pdf');
    }

  
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

    public function downloadPDF($id) {
        $genInstList = InstitutionList::find($id);
        /*$genInstList = \DB::table('institution_lists')
                    ->select(\DB::raw('*,institution_types.inst_type as type'))
                     ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->get();*/

         

        $pdf = PDF::loadView('pdf', ['genInstList'   =>  $genInstList]);
        
        return $pdf->download('disney.pdf');
    }
    


}
