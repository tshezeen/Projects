<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FundingSource;
use Illuminate\Support\Facades\Auth;
class FundingSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $fundingSourceList = FundingSource::get();
       
        return view('record_dtls/funding_source/index', ['fundingSourceList' => $fundingSourceList]);
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
        
    
        $userId = Auth::id();
        

        try {
            $funding = FundingSource::findOrFail($id);
           
           // $this->validateInput($request);
          
            $funding->RGoB_enrollment = $request->RGoB_enrollment;
            $funding->pvt_enrollment = $request->pvt_enrollment;
            $funding->consultant_service = $request->consultant_service;
            $funding->research_grant = $request->research_grant;
            $funding->facilities_rental = $request->facilities_rental;
            $funding->sale_of_asset = $request->sale_of_asset;
            $funding->other_funding = $request->other_funding;
            $funding->total_funding = $request->total_funding;
             
            $funding->updated_by = $userId;
            $funding->inst_id = $request->inst_id;
            $funding->record_yr = $request->record_yr;
            $funding->updated_at = new \DateTime();
            $funding->save();

            return redirect()->route('dashboard.index')
            ->with('success','Updated successfully');

        } catch(\Exception $exception){
        //  dd( $exception);

             return redirect()->route('dashboard.index')
            ->with('error','ERROR');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     AcademicStaff::where('id', $id)->delete();
        
        return redirect()->route('dashboard.index')
            ->with('success','Deleted successfully');
    }

     private function validateInput($request) {
        $this->validate($request, [
        'RGoB_enrollment' => 'required:funding_sources',
        'pvt_enrollment' => 'required:funding_sources',
        'consultant_service' => 'required:funding_sources',
        'research_grant' => 'required:funding_sources',
        'facilities_rental' => 'required:funding_sources',
        'sale_of_asset' => 'required:funding_sources',
        'other_funding' => 'required:funding_sources',
        'total_funding' => 'required:funding_sources'

    ]);
    }
}
