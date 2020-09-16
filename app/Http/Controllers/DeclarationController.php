<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Declaration;

class DeclarationController extends Controller
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
    public function update()
    {
        //
        session(['inst_id'=>$inst_id,'record_yr'=>$year_id,'institute'=>$inst_name,'year'=>$year]);
        $userId = Auth::id();
        $agree='Y';
        //dd($userId);

      try {
            $delcare = Declaration::findOrFail($id);
           //dd($fess,$request,$id);
           // $this->validateInput($request);
            
            $delcare->agree = $agree;
            $delcare->updated_by = $userId;
            $delcare->inst_id = $request->inst_id;
            $delcare->record_yr = $request->record_yr;
            $delcare->updated_at = new \DateTime();
            $delcare->save();

            return redirect()->route('dashboard.index')
            ->with('success','Declared successfully');

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
        //
    }
}
