<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InstitutionList;

use App\Models\InstitutionType;
class InsListMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          /* $insList = InstitutionList::get();
   
           $insType = InstitutionType::get();*/

            $instutiteLists = \DB::table('institution_lists')
                    ->select(\DB::raw('*, institution_lists.id as id,institution_types.inst_type as type'))
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->orderBy('institution_lists.inst_name','desc')
                    ->get();

        return view('master/institute_list/index', ['instutiteLists' => $instutiteLists]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $insType = InstitutionType::orderBy('inst_type', 'asc')->get();
         return view('master/institute_list/create',['instTypes'    =>  $insType]);
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
            InstitutionList::create([
            'inst_name' => $request['inst_name'],
            'inst_type' => $request['inst_type'],
            'location' => $request['location'],
            'address' => $request['address'],
            'est_year' => $request['est_year'],
            'total_acr' => $request['total_acr'],
            'national_accre' => $request['national_accre'],
            'international_accre' => $request['international_accre'],
            'website' => $request['website'],
            'description' => $request['description']
            
        ]);

          return redirect()->route('institute_list.index')
            ->with('success','Added successfully');

        } catch(\Exception $exception){
             return redirect()->route('institute_list.index')
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

    $instituteDtl = \DB::table('institution_lists')
                    ->select(\DB::raw('*,institution_lists.id as id, institution_types.inst_type as type'))
                    ->leftJoin('institution_types','institution_lists.inst_type','=','institution_types.id')
                    ->where('institution_lists.id','=',$id) 
                    ->orderBy('institution_lists.inst_name','desc')
                    ->get();
                //dd($instituteDtl);
     return view('master.institute_list.read',['instituteDtl'   =>  $instituteDtl]);
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

        $insdtlsEdit = InstitutionList::find($id);
        $instTypes = InstitutionType::orderBy('inst_type', 'asc')->get();
        /*if ($insdtlsEdit == null || count($insdtlsEdit) == 0) {
            return redirect()->intended('/master/institute_list');
           
        }*/
        return view('master/institute_list/edit',['insdtlsEdit' => $insdtlsEdit],['instTypes'   =>  $instTypes]);
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
    
         /*try {
            Award::where('id', $id)->delete();
        //return redirect()->intended('master.award');
        return redirect()->route('award.index')
            ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('award.index')
            ->with('error','ERROR!');
            
        }
        */
        try {
            $insTypeEditId = InstitutionList::findOrFail($id);
            $this->validateInput($request);
            $input = [
            
                'inst_name' => $request['inst_name'],
                'inst_type' => $request['inst_type'],
                'location' => $request['location'],
                'address' => $request['address'],
                'est_year' => $request['est_year'],
                'total_acr' => $request['total_acr'],
                'national_accre' => $request['national_accre'],
                'international_accre' => $request['international_accre'],
                'website' => $request['website'],
                'description' => $request['description']
            ];

            InstitutionList::where('id', $id)
            ->update($input);
        
       
        return redirect()->route('institute_list.index')
            ->with('success','Updated successfully');

        } catch(\Exception $exception){
             return redirect()->route('institute_list.index')
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

          try {

            InstitutionList::where('id', $id)->delete();
       
            return redirect()->route('institute_list.index')
            ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('institute_list.index')
            ->with('error','ERROR!');
            
        }
      
    }

    private function validateInput($request) {
        $this->validate($request, [
     
        'inst_name' => 'required|max:191|unique:institution_lists',
        'inst_type' => 'required:institution_lists',
        'location' => 'required|max:191:institution_lists',
        'address' => 'required|max:191:institution_lists',
        'est_year' => 'required|numeric|unique:institution_lists',
        //'total_acr' => 'required|max:60|unique:institution_lists',
        //'national_accre' => 'required|max:60|unique:institution_lists',
        //'international_accre' => 'required|max:60|unique:institution_lists',
        'website' => 'required|max:191|unique:institution_lists',
        'description' => 'required:institution_lists'
         ]);
    }
}
