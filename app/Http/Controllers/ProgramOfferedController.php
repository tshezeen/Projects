<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramOffered;
use App\Models\InstitutionType;
use App\Models\InstitutionList;
use App\Models\Mode;
use App\Models\Category;
use App\Models\Award;
use Illuminate\Support\Facades\Auth;


class ProgramOfferedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $insList = InstitutionList::get();
        $programList = ProgramOffered::get();
        return view('record_dtls.program_offered.index', ['programList' => $programList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd('hi');
        $modeList = Mode::get();
        $awardList = Award::get();
        $catList = Category::get();
       
       return redirect()->route('program.create')->with(['modeList' => $modeList],['awardList' => $awardList],['catList' => $catList]);
         /* return view('record_dtls/program_offered/create',['modeList' => $modeList],['awardList' => $awardList],['catList' => $catList]);*/
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       // dd($request);
        $userId = Auth::id();
      
        $inst_session=session('inst_id');
        $year_session=session('record_yr');
       // dd($inst_session,$year_session);
        $institute_session=session('institute');
         try {
          $this->validateInput($request);
          ProgramOffered::create([
            'program_name' => $request['program_name'],
            'award_id' => $request['award_id'],
            'mode_id' => $request['mode_id'],
            'affiliation' => $request['affiliation'],
            'cat_id' => $request['cat_id'],
            'program_fee' => $request['program_fee'],
            'duration' => $request['duration'],
            'updated_by' => $userId,
            'inst_id' => $inst_session,
            'record_yr' => $year_session,
            //'updated_at' => new DateTime();,
            //'created_at' => new DateTime();
        
        ]);
        
 //dd($inst_session,$institute_session);
       
          return redirect()->route('dashboard.index')
            ->with('success','Added successfully');
         }

         catch(\Exception $exception){
        //    dd($exception);
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
        //dd("inside program delete");
//dd($id);

      /* $user_session=session('role_name');
        $institute_session=session('institute');
         $institute_id=session('inst_id');
        $inst=session('institute_name');
*/
       // dd($user_session,$institute_session,$inst,$institute_id);
        try {
        ProgramOffered::where('id', $id)->delete();
        
        return redirect()->route('dashboard.index')
            ->with('success','Deleted successfully');
        }
        catch(\Exception $exception){
           // dd($exception);
             return redirect()->route('dashboard.index')
            ->with('error','ERROR!');
            
        }
    }

     private function validateInput($request) {
        $this->validate($request, [
        'program_name' => 'required:program_offereds',
        'award_id' => 'required:program_offereds',
        'mode_id' => 'required:program_offereds',
        /*'affiliation' => 'required:program_offereds',*/
        //'duration' => 'required:program_offereds'
        'program_fee' => 'required:program_offereds'

    ]);
    }
}
