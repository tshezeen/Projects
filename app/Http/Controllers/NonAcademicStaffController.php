<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NonAcademicStaff;
use Illuminate\Support\Facades\Auth;
class NonAcademicStaffController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $academicStaffList = NonAcademicStaff::get();
       
        return view('record_dtls/non_academic_staff/index', ['academicStaffList' => $academicStaffList]);
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
            $nonAcademicStaff = NonAcademicStaff::findOrFail($id);
           
            $this->validateInput($request);
            
            $nonAcademicStaff->male = $request->male;
            $nonAcademicStaff->female = $request->female;
            $nonAcademicStaff->doctorate = $request->doctorate;
            $nonAcademicStaff->master = $request->master;
            $nonAcademicStaff->bachelor = $request->bachelor;
            $nonAcademicStaff->diploma = $request->diploma;
            $nonAcademicStaff->certification_below = $request->certification_below;
            $nonAcademicStaff->updated_by = $userId;
            $nonAcademicStaff->inst_id = $request->inst_id;
            $nonAcademicStaff->record_yr = $request->record_yr;
            $nonAcademicStaff->updated_at = new \DateTime();
            $nonAcademicStaff->save();

            return redirect()->route('dashboard.index')
            ->with('success','Updated successfully');

        } catch(\Exception $exception){
          dd( $exception);

             return redirect()->route('dashboard.index')
            ->with('error','ERROR',$exception);
            
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
   
    }

     private function validateInput($request) {
        $this->validate($request, [
        'male' => 'required:non_academic_staff',
        'female' => 'required:non_academic_staff',
        'doctorate' => 'required:non_academic_staff',
        'master' => 'required:non_academic_staff',
        'bachelor' => 'required:non_academic_staff',
        'diploma' => 'required:non_academic_staff',
        'certification_below' => 'required:non_academic_staff'
        

    ]);
    }
}