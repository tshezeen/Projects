<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeStructure;
use Illuminate\Support\Facades\Auth;
class FeeStructureController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id= session('user_id');
        $recordYr=RecordYear::where('is_active', '=', 'Y')->get();
        $feeStructureList = FeeStructure::where('user_id','=','' )->get();
       
        return view('record_dtls/fee_structure/index', ['feeStructureList' => $feeStructureList]);
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

       /* $this->validateInput($request);
            $input = [
               'hostel' => $request['hostel'],
                'mess' => $request['mess'],
                'admission' => $request['admission'],
                'registration' => $request['registration'],
                'library' => $request['library'],
                'exam' => $request['exam'],
                'security_deposit' => $request['security_deposit'],
                'miscellaneous' => $request['miscellaneous'],
                'others' => $request['others'],
                'updated_by' => $request['updated_by'],
                'inst_id' => $request['inst_id'],
                'record_yr' => $request['record_yr']
                ];
                //    dd($inputs);
            FeeStructure::where('id', $id)
               ->update($input);*/
        
        

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


        $userId = Auth::id();
        //dd($userId);

      try {
            $fess = FeeStructure::findOrFail($id);
           //dd($fess,$request,$id);
            $this->validateInput($request);
            


            $fess->hostel = $request->hostel;
            $fess->mess = $request->mess;
            $fess->admission = $request->admission;
            $fess->registration = $request->registration;
            $fess->library = $request->library;
            $fess->exam = $request->exam;
            $fess->security_deposit = $request->security_deposit;
            $fess->miscellaneous = $request->miscellaneous;
            $fess->others = $request->others;
            $fess->total = $request->total;
            $fess->updated_by = $userId;
            $fess->inst_id = $request->inst_id;
            $fess->record_yr = $request->record_yr;
            $fess->updated_at = new \DateTime();
            $fess->save();

            return redirect()->route('dashboard.index')
            ->with('success','Updated successfully');

        } catch(\Exception $exception){
           // dd($exception);

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
    FeeStructure::where('id', $id)->delete();
        
        return redirect()->route('fee_structure.index')
            ->with('success','Deleted successfully');
    }

     private function validateInput($request) {
        $this->validate($request, [
        'hostel' => 'required:fee_structures',
        'mess' => 'required:fee_structures',
        'admission' => 'required:fee_structures',
        'registration' => 'required:fee_structures',
        'library' => 'required:fee_structures',
        'exam' => 'required:fee_structures',
        'security_deposit' => 'required:fee_structures',
        'miscellaneous' => 'required:fee_structures',
        'others' => 'required:fee_structures',
        'total' => 'required:fee_structures',
       //s 'updated_by' => 'required:fee_structures',
        'inst_id' => 'required:fee_structures',
        'record_yr' => 'required:fee_structures'
        
        

        ]);
    }
}
