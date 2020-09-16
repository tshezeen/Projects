<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use\App\Models\InstitutionType;

class InsTypeMasterController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $insTypeList = InstitutionType::orderBy('inst_type', 'asc')->get();

        return view('master/institute_type/index', ['insTypeList' => $insTypeList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('master/institute_type/create');
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
            InstitutionType::create([
            'inst_type' => $request['inst_type']
        ]);

       
          return redirect()->route('institute_type.index')
            ->with('success','Added successfully');

        } catch(\Exception $exception){
//dd($exception);
             return redirect()->route('institute_type.index')
            ->with('error','ERROR!');
            
        }
        ///
        
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
        $insTypeEdit = InstitutionType::find($id);
       
     /*   if ($insTypeEdit == null || count($insTypeEdit) == 0) {
            return redirect()->intended('/master/institute_type');
           
        }*/
        return view('master/institute_type/edit',['insTypeEdit' => $insTypeEdit]);
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
            $insTypeEditId = InstitutionType::findOrFail($id);
            $this->validateInput($request);
             $input = [
                'inst_type' => $request['inst_type']
             ];
            InstitutionType::where('id', $id)
            ->update($input);
        
       
         return redirect()->route('institute_type.index')
            ->with('success','Updated successfully');

        } catch(\Exception $exception){
dd($exception);
             return redirect()->route('institute_type.index')
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
           InstitutionType::where('id', $id)->delete();
       
          return redirect()->route('institute_type.index')
            ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('institute_type.index')
            ->with('error','ERROR!');
            
        }
       
        
    }

    private function validateInput($request) {
        $this->validate($request, [
        'inst_type' => 'required|max:191|unique:institution_types'
         ]);
    }
}
