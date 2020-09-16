<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Mode;
use App\Models\Category;

class AwardMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('master.award_level.index');
         $awards = Award::orderBy('award', 'asc')->get();

        return view('master/award_level/index', ['awardList' => $awards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('master/award_level/create');
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
        try {
            $this->validateInput($request);
         Award::create([
            'award' => $request['award']
        ]);

        /* $table = new Table();
         $table->award = $request['award'];*/

          return redirect()->route('award.index')
            ->with('success','Added successfully');

        } catch(\Exception $exception){
             return redirect()->route('award.index')
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
         $award = Award::find($id);
       
       /* if ($award == null || count($award) == 0) {
            return redirect()->intended('/master/award_level');
           
        }*/
        return view('master/award_level/edit',['awardId' => $award]);
        
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
        try {
            $awardId = Award::findOrFail($id);
            $this->validateInput($request);
            $input = [
                 'award' => $request['award']
             ];
             Award::where('id', $id)
                ->update($input);
        
       // return redirect()->intended('master/award_level/index');
            return redirect()->route('award.index')
                ->with('success','Updated successfully');

        } catch(\Exception $exception){
             return redirect()->route('award.index')
            ->with('error','ERROR!');
            
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

        try {
            Award::where('id', $id)->delete();
        //return redirect()->intended('master.award');
        return redirect()->route('award.index')
            ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('award.index')
            ->with('error','ERROR!');
            
        }
      
        
    }

     private function validateInput($request) {
        $this->validate($request, [
        'award' => 'required|max:191|unique:awards'
    ]);
    }
}
