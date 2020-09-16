<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaboration;
use Illuminate\Support\Facades\Auth;
class CollaborationController extends Controller
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

        $userId = Auth::id();
	//dd($userId);
      
        $inst_session=session('inst_id');
        $year_session=session('record_yr');
       // dd($inst_session,$year_session);
       // dd($request);
         try {
          //$this->validateInput($request);
          Collaboration::create([
            'collaboration' => $request['collaboration'],
            'by' => $request['by'],
            'description' => $request['description'],
            
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
            dd($exception);
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

        Collaboration::where('id', $id)->delete();
        
        return redirect()->route('dashboard.index')
            ->with('success','Deleted successfully');
            
    
         }

         catch(\Exception $exception){
           // dd($exception);
             return redirect()->route('dashboard.index')
            ->with('error','ERROR!');
            
        }
    }
}
