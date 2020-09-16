<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYearWiseDtl;
use App\Models\ProgramOffered;
use App\Models\AcademicYear;
use Illuminate\Support\Facades\Auth;
class AcademicYearWiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $academicYearWiseDtlList = AcademicYearWiseDtl::get();
        $programList = ProgramOffered::get();
        return view('record_dtls/academic_wise_dtls/index', ['programList' => $programList], ['academicYearWiseDtlList' => $academicYearWiseDtlList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $programList = ProgramOffered::get();
        $academicYear = AcademicYear::get();
         return view('record_dtls/academic_wise_dtls/create', ['programList' => $programList], ['academicYear' => $academicYear]);
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

         $userId = Auth::id();
      
        $inst_session=session('inst_id');
        $year_session=session('record_yr');
       // dd($inst_session,$year_session);
        dd($request);
         try {
          $this->validateInput($request);
          AcademicYearWiseDtl::create([
            'program_id' => $request['program_id'],
            'academic_year_id' => $request['academic_year_id'],
            'male_RGoB' => $request['male_RGoB'],
            'female_RGoB' => $request['female_RGoB'],
            'total_RGoB' => $request['total_RGoB'],
            'male_self' => $request['male_self'],
            'female_self' => $request['female_self'],
            'total_self' => $request['total_self'],
            'male_other' => $request['male_other'],
            'female_other' => $request['female_other'],
            'total_other' => $request['total_other'],
            'grand_total' => $request['grand_total'],
            'updated_by' => $userId,
            'inst_id' => $inst_session,
            'record_yr' => $year_session,
            //'updated_at' => new DateTime();,
           // 'created_at' => new DateTime();
        
        ]);
        

       
          return redirect()->route('dashboard.index')
            ->with('success','Added successfully');
         }

         catch(\Exception $exception){
           // dd($exception);
             return redirect()->route('dashboard.index')
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

         try {
        AcademicYearWiseDtl::where('id', $id)->delete();
        
        return redirect()->route('dashboard.index')
            ->with('success','Deleted successfully');
        }
        catch(\Exception $exception){
            dd($exception);
             return redirect()->route('dashboard.index')
            ->with('error','ERROR!');
            
        }
    }


     private function validateInput($request) {
        $this->validate($request, [
        'program_id' => 'required:academic_year_wise_dtls',
        'academic_year_id' => 'required:academic_year_wise_dtls',
        'male_RGoB' => 'required:academic_year_wise_dtls',
        'female_RGoB' => 'required:academic_year_wise_dtls',
        'total_RGoB' => 'required:academic_year_wise_dtls',
        'male_self' => 'required:academic_year_wise_dtls',
        'female_self' => 'required:academic_year_wise_dtls',
        'total_self' => 'required:academic_year_wise_dtls',
        'male_other' => 'required:academic_year_wise_dtls',
        'female_other' => 'required:academic_year_wise_dtls',
        'total_other' => 'required:academic_year_wise_dtls'
      // 'grand_total' => 'required:academic_year_wise_dtls'


           
    ]);
    }
}
