@extends('reports.base')

@section('action-content')
     <div class="row box-body">
     <div class="row">
      <div class="col-lg-12">
         
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Dzongkhag Wise Students enrolled in Tertiary Education</label>

          </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                             <!-- <th>Sl.No</th> -->
                             <th>Bumthang</th>
                             
                             <th>Chhukha</th>
                             <th>Dagana</th>
                             <th>Gasa</th>
                             <th>Haa</th>
                             <th>Lhuntse</th>
                             <th>Mongar</th>
                             <th>Paro</th>
                             <th>Pemagatshel</th>
                             <th>Punakha</th>
                             <th>Samdrupjongkhar</th>
                             <th>Samtse</th>
                             <th>Sarpang</th>
                             <th>Trashigang</th>
                             <th>Trashiyantse</th>
                             <th>Trongsa</th>
                             <th>Tsirang</th>
                             <th>Thimphu</th>
                             <th>Wangdue</th>
                             <th>Zhemgang</th>
                             
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($dzongkhagWiseStd as $dzongkhagWiseStd)
                             <tr>
                                 
                                <th>{{$dzongkhagWiseStd->bumthang}}</th>
                                 <th>{{$dzongkhagWiseStd->chhukha}}</th>
                                 <th>{{$dzongkhagWiseStd->dagana}}</th>
                                 <th>{{$dzongkhagWiseStd->gasa}}</th>
                                 <th>{{$dzongkhagWiseStd->haa}}</th>
                                 <th>{{$dzongkhagWiseStd->lhuntse}}</th>
                                 <th>{{$dzongkhagWiseStd->mongar}}</th>
                                 <th>{{$dzongkhagWiseStd->paro}}</th>
                                 <th>{{$dzongkhagWiseStd->pemagatshel}}</th>
                                 <th>{{$dzongkhagWiseStd->punakha}}</th>
                                 <th>{{$dzongkhagWiseStd->samdrupjongkhar}}</th>
                                 <th>{{$dzongkhagWiseStd->samtse}}</th>
                                 <th>{{$dzongkhagWiseStd->sarpang}}</th>
                                 <th>{{$dzongkhagWiseStd->trashigang}}</th>
                                 <th>{{$dzongkhagWiseStd->tashiyantse}}</th>
                                 <th>{{$dzongkhagWiseStd->trongsa}}</th>
                                 <th>{{$dzongkhagWiseStd->tsirang}}</th>
                                 <th>{{$dzongkhagWiseStd->thimphu}}</th>
                                 <th>{{$dzongkhagWiseStd->wangdi}}</th>
                                 <th>{{$dzongkhagWiseStd->zhemgang}}</th>
                            </tr>
                        
                        @endforeach
                       </tbody>
                       </table>
                    </div>
               </div><!-- end of panel-body -->
          
          </div>

 
      </div>
   </div>

 @endsection
