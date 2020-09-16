<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BulkStdDtl;
class BulkStudentDtlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('record_dtls/bulk_std_dtls/index');
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
            $bulkDtls = BulkStdDtl::findOrFail($id);
           
           // $this->validateInput($request);
          // dd($request);
            $bulkDtls->RGoB_funded = $request->RGoB_funded;
            $bulkDtls->other_funded = $request->other_funded;
            $bulkDtls->self_funded = $request->self_funded;
            $bulkDtls->male = $request->male;
            $bulkDtls->female = $request->female;
            
            $bulkDtls->total = $request->total;
            $bulkDtls->boarders = $request->boarders;
           
            $bulkDtls->dayscholars = $request->dayscholars;
            $bulkDtls->below_19yrs = $request->below_19yrs;
            $bulkDtls->btw_19_23yrs = $request->btw_19_23yrs;
            $bulkDtls->above_23yrs = $request->above_23yrs;

            $bulkDtls->age_15yrs_below = $request->age_15yrs_below;
            $bulkDtls->age_16yrs = $request->age_16yrs;
            $bulkDtls->age_17yrs = $request->age_17yrs;
            $bulkDtls->age_18yrs = $request->age_18yrs;
            $bulkDtls->age_19yrs = $request->age_19yrs;
            $bulkDtls->age_20yrs = $request->age_20yrs;
            $bulkDtls->age_21yrs = $request->age_21yrs;
            $bulkDtls->age_22yrs = $request->age_22yrs;
            $bulkDtls->age_23yrs = $request->age_23yrs;
            $bulkDtls->age_24yrs = $request->age_24yrs;
            $bulkDtls->age_25yrs = $request->age_25yrs;
            $bulkDtls->age_26yrs = $request->age_26yrs;
            $bulkDtls->age_27yrs = $request->age_27yrs;
            $bulkDtls->age_28yrs = $request->age_28yrs;
            $bulkDtls->age_29yrs = $request->age_29yrs;    
            $bulkDtls->age_30yrs = $request->age_30yrs;
            $bulkDtls->age_31yrs = $request->age_31yrs;
            $bulkDtls->age_32yrs = $request->age_32yrs;
            $bulkDtls->age_33yrs = $request->age_33yrs;
            $bulkDtls->age_34yrs = $request->age_34yrs;
            $bulkDtls->age_btw_35_39yrs = $request->age_btw_35_39yrs;
            $bulkDtls->age_btw_40_44yrs = $request->age_btw_40_44yrs;
            $bulkDtls->age_btw_45_49yrs = $request->age_btw_45_49yrs;
            $bulkDtls->age_btw_50_54yrs = $request->age_btw_50_54yrs;
            $bulkDtls->age_btw_55_59yrs = $request->age_btw_55_59yrs;
            $bulkDtls->above_59yrs = $request->above_59yrs;

            $bulkDtls->sen_stds = $request->sen_stds;
            $bulkDtls->bumthang = $request->bumthang;
            $bulkDtls->chhukha = $request->chhukha;
            $bulkDtls->dagana = $request->dagana;
            
            $bulkDtls->gasa = $request->gasa;
            $bulkDtls->haa = $request->haa;
            $bulkDtls->lhuntse = $request->lhuntse;
            $bulkDtls->mongar = $request->mongar;
            $bulkDtls->paro = $request->paro;
        
            $bulkDtls->pemagatshel = $request->pemagatshel;
            $bulkDtls->punakha = $request->punakha;
            $bulkDtls->sarpang = $request->sarpang;
            $bulkDtls->samdrupjongkhar = $request->samdrupjongkhar;
            $bulkDtls->samtse = $request->samtse;
            $bulkDtls->tashiyangtse = $request->tashiyangtse;
            $bulkDtls->thimphu = $request->thimphu;
            $bulkDtls->trashigang = $request->trashigang;

            $bulkDtls->trongsa = $request->trongsa;
            $bulkDtls->tsirang = $request->tsirang;
            $bulkDtls->wangdi = $request->wangdi;
            $bulkDtls->zhemgang = $request->zhemgang;
            $bulkDtls->international_stds = $request->international_stds;

            $bulkDtls->asia = $request->asia;
            $bulkDtls->africa = $request->africa;
            $bulkDtls->north_america = $request->north_america;
            $bulkDtls->south_america = $request->south_america;
            $bulkDtls->antarctica = $request->antarctica;
            $bulkDtls->europe = $request->europe;
            $bulkDtls->australia = $request->australia;
            $bulkDtls->ex_asia = $request->ex_asia;
            $bulkDtls->ex_africa = $request->ex_africa;
            $bulkDtls->ex_north_america = $request->ex_north_america;
            $bulkDtls->ex_south_america = $request->ex_south_america;
            $bulkDtls->ex_antarctica = $request->ex_antarctica;
            $bulkDtls->ex_europe = $request->ex_europe;
            $bulkDtls->ex_australia = $request->ex_australia;
          
            $bulkDtls->updated_by = $userId;
            $bulkDtls->inst_id = $request->inst_id;
            $bulkDtls->record_yr = $request->record_yr;
            $bulkDtls->updated_at = new \DateTime();
            $bulkDtls->save();

            return redirect()->route('dashboard.index')
            ->with('success','Updated successfully');

        } catch(\Exception $exception){
         // dd( $exception);

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
   BulkStdDtl::where('id', $id)->delete();
        
        return redirect()->route('bulk_std_dtls.index')
            ->with('success','Deleted successfully');
    }

     private function validateInput($request) {
       
        $this->validate($request, [
        'RGoB_funded' => 'required:bulk_std_dtls',
        'other_funded' => 'required:bulk_std_dtls',
        'self_funded' => 'required:bulk_std_dtls',
        'male' => 'required:bulk_std_dtls',
        'female' => 'required:bulk_std_dtls',
       
        'total' => 'required:bulk_std_dtls',
        'boarders' => 'required:bulk_std_dtls',
        'dayscholars' => 'required:bulk_std_dtls',
        'below_19yrs' => 'required:bulk_std_dtls',
        'btw_19_23yrs' => 'required:bulk_std_dtls',
        'above_23yrs' => 'required:bulk_std_dtls',
        'sen_stds' => 'required:bulk_std_dtls',
        'bumthang' => 'required:bulk_std_dtls',
        'chhukha' => 'required:bulk_std_dtls',
        'dagana' => 'required:bulk_std_dtls',
        'gasa' => 'required:bulk_std_dtls',
        'haa' => 'required:bulk_std_dtls',
        'lhuntse' => 'required:bulk_std_dtls',
        'mongar' => 'required:bulk_std_dtls',
        'paro' => 'required:bulk_std_dtls',
        'pemagatshel' => 'required:bulk_std_dtls',
        'punakha' => 'required:bulk_std_dtls',
        'sarpang' => 'required:bulk_std_dtls',
        'samdrupjongkhar' => 'required:bulk_std_dtls',
        'samtse' => 'required:bulk_std_dtls',
        'tashiyangtse' => 'required:bulk_std_dtls',
        'thimphu' => 'required:bulk_std_dtls',
        'trashigang' => 'required:bulk_std_dtls',
        'trongsa' => 'required:bulk_std_dtls',
        'tsirang' => 'required:bulk_std_dtls',
        'wangdi' => 'required:bulk_std_dtls',
        'zhemgang' => 'required:bulk_std_dtls'
      //  'international_stds' => 'required:bulk_std_dtls'

    ]);
    }
}
