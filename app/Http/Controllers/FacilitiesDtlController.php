<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacilityDtl;
use App\Models\FacilityType;
use Illuminate\Support\Facades\Auth;
class FacilitiesDtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facilityType = FacilityType::get();
        $facilityList = FacilityDtl::get();
        return view('record_dtls/facilities/index', ['facilityList' => $facilityList],['facilityType' => $facilityType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $facilityType = FacilityType::get();
       
          return view('record_dtls/program_offered/create',['facilityType' => $facilityType]);
    
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
       // dd($request);
         try {
          $this->validateInput($request);
          FacilityDtl::create([
            'facility_type_id' => $request['facility_type_id'],
            'number' => $request['number'],
            'capacity' => $request['capacity'],
            
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
        
    try {

        FacilityDtl::where('id', $id)->delete();
        
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
        'facility_type_id' => 'required:facility_dtls',
        'number' => 'required:facility_dtls',
        'capacity' => 'required:facility_dtls'
        
    ]);
    }
}
