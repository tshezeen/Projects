<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffProfileController extends Controller
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
          // dd($request);
        $userId = Auth::id();
      
        $inst_session=session('inst_id');
        $year_session=session('record_yr');
       // dd($inst_session,$year_session);

         try {
          $this->validateInput($request);
          ProgramOffered::create([
            'title' => $request['title'],
            'name' => $request['name'],
            'designation' => $request['designation'],
            'gender' => $request['gender'],
            'date_of_joining' => $request['date_of_joining'],
            'years_of_exp' => $request['years_of_exp'],
            'qualification' => $request['qualification'],
            'email' => $request['email'],
            'contact_no' => $request['contact_no'],
           
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
        //    dd($exception);
             return redirect()->route('dashboard.index')
            ->with('error','ERROR!');
            
        }
    }

  private function validateInput($request) {
        $this->validate($request, [
        'title' => 'required',
        'name' => 'required',
        'designation' => 'required',
        'gender' => 'required',
        'quaification' => 'required',
        'date_of_joining' => 'required',
        'years_of_exp' => 'required',
        'email' => 'required',
        'contact_no' => 'required'

     ]);
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
}
