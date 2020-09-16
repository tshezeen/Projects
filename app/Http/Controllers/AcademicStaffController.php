<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicStaff;
use Illuminate\Support\Facades\Auth;
class AcademicStaffController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $academicStaffList = AcademicStaff::get();
       
        return view('record_dtls/academic_staff/index', ['academicStaffList' => $academicStaffList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
          return view('record_dtls/academic_staff/create');
    
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

        /*$this->validateInput($request);
         AcademicStaff::update([
            'male' => $request['male'],
            'female' => $request['female'],
            'bhutanese_contract' => $request['bhutanese_contract'],
            'bhutanese_regular' => $request['bhutanese_regular'],
            'international_contract' => $request['international_contract'],
            'international_regular' => $request['international_regular'],
            'age_below_30yrs' => $request['age_below_30yrs'],
            'age_above_61yrs' => $request['age_above_61yrs'],
            'age_31_45yrs' => $request['age_31_45yrs'],
            'age_46_60yrs' => $request['age_46_60yrs'],
            'doctorate' => $request['doctorate'],
            'master' => $request['master'],
            'bachelor' => $request['bachelor'],
            'diploma' => $request['diploma'],
            'exp_6yrs_below' => $request['exp_6yrs_below'],
            'exp_6_10yrs' => $request['exp_6_10yrs'],
            'exp_10yrs_above' => $request['exp_10yrs_above'],
            'updated_by' => $request['updated_by'],
            'ins_id' => $request['ins_id'],
            'record_yr' => $request['record_yr']
           
        ]);*/
        
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
            $academicStaff = AcademicStaff::findOrFail($id);
           
            $this->validateInput($request);
            
            $academicStaff->male = $request->male;
            $academicStaff->female = $request->female;
            $academicStaff->bhutanese_contract = $request->bhutanese_contract;
            $academicStaff->bhutanese_regular = $request->bhutanese_regular;
            $academicStaff->international_contract = $request->international_contract;
            $academicStaff->international_regular = $request->international_regular;
            $academicStaff->age_below_30yrs = $request->age_below_30yrs;
            $academicStaff->age_above_61yrs = $request->age_above_61yrs;
            $academicStaff->age_31_45yrs = $request->age_31_45yrs;
            $academicStaff->age_46_60yrs = $request->age_46_60yrs;
            $academicStaff->doctorate = $request->doctorate;
            $academicStaff->master = $request->master;
            $academicStaff->bachelor = $request->bachelor;
            $academicStaff->diploma = $request->diploma;
            $academicStaff->exp_6yrs_below = $request->exp_6yrs_below;
            $academicStaff->exp_6_10yrs = $request->exp_6_10yrs;
            $academicStaff->exp_10yrs_above = $request->exp_10yrs_above;
            $academicStaff->updated_by = $userId;
            $academicStaff->inst_id = $request->inst_id;
            $academicStaff->record_yr = $request->record_yr;
            $academicStaff->updated_at = new \DateTime();
            $academicStaff->save();

           
            return redirect()->route('dashboard.index')
            ->with('success','Updated successfully');

        } catch(\Exception $exception){
           // dd($exception);

             return redirect()->route('dashboard.edit')
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
    AcademicStaff::where('id', $id)->delete();
        
        return redirect()->route('academic_staff.index')
            ->with('success','Deleted successfully');
    }

     private function validateInput($request) {
        $this->validate($request, [
        'male' => 'required:academic_staff',
        'female' => 'required:academic_staff',
        'bhutanese_contract' => 'required:academic_staff',
        'bhutanese_regular' => 'required:academic_staff',
        'international_contract' => 'required:academic_staff',
        'international_regular' => 'required:academic_staff',
        'age_below_30yrs' => 'required:academic_staff',
        'age_above_61yrs' => 'required:academic_staff',
        'age_31_45yrs' => 'required:academic_staff',
        'age_46_60yrs' => 'required:academic_staff',
        'doctorate' => 'required:academic_staff',
        'master' => 'required:academic_staff',
        'bachelor' => 'required:academic_staff',
        'diploma' => 'required:academic_staff',
        'exp_6yrs_below' => 'required:academic_staff',
        'exp_6_10yrs' => 'required:academic_staff',
        'exp_10yrs_above' => 'required:academic_staff'


    ]);
    }
}
