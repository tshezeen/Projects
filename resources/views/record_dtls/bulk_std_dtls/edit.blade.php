
     <div class="row">
      <div class="col-lg-12">
         <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Total Number of Students of the year <?php echo session('year');?>
                    </small>
              </h4>
          @foreach($bulkStdList as $bulkStdList)
          <form  role="form" method="POST" action="{{ route('bulk_std_dtls.update', ['id' => $bulkStdList->id]) }}">

              <input id="record_yr" type="hidden" class="form-control" name="record_yr" value="{{$bulkStdList->record_yr}}">
              <input id="inst_id" type="hidden" class="form-control" name="inst_id" value="{{$bulkStdList->inst_id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PATCH">

          <div class="panel panel-primary">
              <div class="panel-heading"><label>Total Number of Students</label>

              </div>

                  
                  
                  <div class="panel-body">
                    <label><font color="red">Number of individuals in each category.<br>
                    For students with mixed funding students are categorized bt which funding source provides the greatest portion of their support.</font></label>
                      <div class="row">
                             
                          <div class="form-group">
                              <label for="name" class="col-md-2 control-label">RGoB Funded Students </label>

                              <div class="col-md-3">
                                  <input id="RGoB_funded" type="numeric" class="form-control" name="RGoB_funded" value="{{$bulkStdList->RGoB_funded}}">

                              </div>
                          </div>
                              <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Other Funded Students </label>

                                  <div class="col-md-3">
                                    <input id="other_funded" type="numeric" class="form-control" name="other_funded" value="{{$bulkStdList->other_funded}}">

                                  </div>
                              </div>
                          </div>
                          <div class="row">
                           
                          <div class="form-group">
                              <label for="name" class="col-md-2 control-label">Self Funded Students </label>

                              <div class="col-md-3">
                                  <input id="self_funded" type="numeric" class="form-control" name="self_funded" value="{{$bulkStdList->self_funded}}">

                              </div>
                          </div>
                              <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Females</label>

                                  <div class="col-md-3">
                                    <input id="gender" type="numeric" class="form-control" name="female" value="{{$bulkStdList->female}}">

                                  </div>
                              </div>
                          </div>
                           <div class="row">
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Males </label>

                                <div class="col-md-3">
                                    <input id="gender" type="numeric" class="form-control" name="male" value="{{$bulkStdList->male}}">

                                </div>
                            </div>
                                <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Total Students</label>

                                    <div class="col-md-3">
                                      <input id="total" type="numeric" class="form-control" name="total" value="{{$bulkStdList->total}}" disabled>
                                    <input id="total" type="hidden" class="form-control" name="total" value="{{$bulkStdList->total}}">
                                    </div>
                                </div>
                            </div>
            
                             <div class="row">
                           
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Boarders  </label>

                                  <div class="col-md-3">
                                      <input id="boarders" type="numeric" class="form-control" name="boarders" value="{{$bulkStdList->boarders}}">

                                  </div>
                              </div>
                                <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Day Scholars</label>

                                    <div class="col-md-3">
                                      <input id="dayscholars" type="numeric" class="form-control" name="dayscholars" value="{{$bulkStdList->dayscholars}}">

                                    </div>
                                </div>
                            </div>
                        </div><!-- end of panel-body -->
                        
                           <div class="panel-heading">
                             <label>Age Group-wise</label>
                           </div>
                           <div class="panel-body">
                              <!-- <div class="row">
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">18 yrs or below </label>

                                    <div class="col-md-3">
                                        <input id="below_19yrs" type="numeric" class="form-control" name="below_19yrs" value="{{$bulkStdList->below_19yrs}}">

                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Age between 19-23yrs </label>

                                      <div class="col-md-3">
                                        <input id="btw_19_23yrs" type="numeric" class="form-control" name="btw_19_23yrs" value="{{$bulkStdList->btw_19_23yrs}}">

                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">24 yrs or above </label>

                                    <div class="col-md-3">
                                        <input id="above_23yrs" type="numeric" class="form-control" name="above_23yrs" value="{{$bulkStdList->above_23yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Students with Special Needs </label>

                                      <div class="col-md-3">
                                        <input id="sen_stds" type="numeric" class="form-control" name="sen_stds" value="{{$bulkStdList->sen_stds}}">

                                      </div>
                                  </div>
                                
                              </div> -->

                              <!-- new requirements -->
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label"> 15 years and Below</label>

                                    <div class="col-md-3">
                                        <input id="age_15yrs_below" type="numeric" class="form-control" name="age_15yrs_below" value="{{$bulkStdList->age_15yrs_below}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">16 Years </label>

                                      <div class="col-md-3">
                                        <input id="age_16yrs" type="numeric" class="form-control" name="age_16yrs" value="{{$bulkStdList->age_16yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">17 years </label>

                                    <div class="col-md-3">
                                        <input id="age_17yrs" type="numeric" class="form-control" name="age_17yrs" value="{{$bulkStdList->age_17yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">18 years </label>

                                      <div class="col-md-3">
                                        <input id="age_18yrs" type="numeric" class="form-control" name="age_18yrs" value="{{$bulkStdList->age_18yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">19 years </label>

                                    <div class="col-md-3">
                                        <input id="age_19yrs" type="numeric" class="form-control" name="age_19yrs" value="{{$bulkStdList->age_19yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">20 years</label>

                                      <div class="col-md-3">
                                        <input id="age_20yrs" type="numeric" class="form-control" name="age_20yrs" value="{{$bulkStdList->age_20yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">21 years</label>

                                    <div class="col-md-3">
                                        <input id="age_21yrs" type="numeric" class="form-control" name="age_21yrs" value="{{$bulkStdList->age_21yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">22 years </label>

                                      <div class="col-md-3">
                                        <input id="age_22yrs" type="numeric" class="form-control" name="age_22yrs" value="{{$bulkStdList->age_22yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">23 years </label>

                                    <div class="col-md-3">
                                        <input id="age_23yrs" type="numeric" class="form-control" name="age_23yrs" value="{{$bulkStdList->age_23yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">24 years </label>

                                      <div class="col-md-3">
                                        <input id="age_24yrs" type="numeric" class="form-control" name="age_24yrs" value="{{$bulkStdList->age_24yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">25 years </label>

                                    <div class="col-md-3">
                                        <input id="age_25yrs" type="numeric" class="form-control" name="age_25yrs" value="{{$bulkStdList->age_25yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">26 years </label>

                                      <div class="col-md-3">
                                        <input id="age_26yrs" type="numeric" class="form-control" name="age_26yrs" value="{{$bulkStdList->age_26yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">27 years </label>

                                    <div class="col-md-3">
                                        <input id="age_27yrs" type="numeric" class="form-control" name="age_27yrs" value="{{$bulkStdList->age_27yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">28 years </label>

                                      <div class="col-md-3">
                                        <input id="age_28yrs" type="numeric" class="form-control" name="age_28yrs" value="{{$bulkStdList->age_28yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                             
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">29 years </label>

                                    <div class="col-md-3">
                                        <input id="age_29yrs" type="numeric" class="form-control" name="age_29yrs" value="{{$bulkStdList->age_29yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">30 years </label>

                                      <div class="col-md-3">
                                        <input id="age_30yrs" type="numeric" class="form-control" name="age_30yrs" value="{{$bulkStdList->age_30yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">31 years </label>

                                    <div class="col-md-3">
                                        <input id="age_31yrs" type="numeric" class="form-control" name="age_31yrs" value="{{$bulkStdList->age_31yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">32 years </label>

                                      <div class="col-md-3">
                                        <input id="age_32yrs" type="numeric" class="form-control" name="age_32yrs" value="{{$bulkStdList->age_32yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">33 years </label>

                                    <div class="col-md-3">
                                        <input id="age_33yrs" type="numeric" class="form-control" name="age_33yrs" value="{{$bulkStdList->age_33yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">34 years </label>

                                      <div class="col-md-3">
                                        <input id="age_34yrs" type="numeric" class="form-control" name="age_34yrs" value="{{$bulkStdList->age_34yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Age between 35-39yrs </label>

                                    <div class="col-md-3">
                                        <input id="age_btw_35_39yrs" type="numeric" class="form-control" name="age_btw_35_39yrs" value="{{$bulkStdList->age_btw_35_39yrs}}">

                                    </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Age between 40-44yrs </label>

                                      <div class="col-md-3">
                                        <input id="age_btw_40_44yrs" type="numeric" class="form-control" name="age_btw_40_44yrs" value="{{$bulkStdList->age_btw_40_44yrs}}">

                                      </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Age between 45-49yrs </label>

                                    <div class="col-md-3">
                                        <input id="age_btw_45_49yrs" type="numeric" class="form-control" name="age_btw_45_49yrs" value="{{$bulkStdList->age_btw_45_49yrs}}">

                                      </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Age between 50-54yrs </label>

                                    <div class="col-md-3">
                                        <input id="age_btw_50_54yrs" type="numeric" class="form-control" name="age_btw_50_54yrs" value="{{$bulkStdList->age_btw_50_54yrs}}">

                                    </div>
                                  </div>
                                
                              </div>
                              <div class="row">
                             
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Age between 55-59yrs </label>

                                      <div class="col-md-3">
                                        <input id="age_btw_55_59yrs" type="numeric" class="form-control" name="age_btw_55_59yrs" value="{{$bulkStdList->age_btw_55_59yrs}}">

                                      </div>
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Students with Special Needs </label>

                                    <div class="col-md-3">
                                        <input id="sen_stds" type="numeric" class="form-control" name="sen_stds" value="{{$bulkStdList->sen_stds}}">

                                    </div>
                                  </div>
                                
                              </div>
                               <div class="row">
                             
                                <div class="form-group">
                                    
                                </div>
                                 <div class="col-lg-1"></div>
                                 
                                
                              </div>
                            </div><!-- end of age group wise  -->

                            
                             
                             <div class="panel-heading">
                               <label>Dzongkhag-wise</label>
                              
                             </div>
                             <div class="panel-body">
                                <div class="row">
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Bumthang</label>

                                      <div class="col-md-3">
                                          <input id="bumthang" type="numeric" class="form-control" name="bumthang" value="{{$bulkStdList->bumthang}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Chhukha </label>

                                        <div class="col-md-3">
                                          <input id="chhukha" type="numeric" class="form-control" name="chhukha" value="{{$bulkStdList->chhukha}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Dagana</label>

                                      <div class="col-md-3">
                                          <input id="dagana" type="numeric" class="form-control" name="dagana" value="{{$bulkStdList->dagana}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Gasa </label>

                                        <div class="col-md-3">
                                          <input id="gasa" type="numeric" class="form-control" name="gasa" value="{{$bulkStdList->gasa}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Haa</label>

                                      <div class="col-md-3">
                                          <input id="haa" type="numeric" class="form-control" name="haa" value="{{$bulkStdList->haa}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Lhuntse </label>

                                        <div class="col-md-3">
                                          <input id="lhuntse" type="numeric" class="form-control" name="lhuntse" value="{{$bulkStdList->lhuntse}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Mongar</label>

                                      <div class="col-md-3">
                                          <input id="mongar" type="numeric" class="form-control" name="mongar" value="{{$bulkStdList->mongar}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Paro </label>

                                        <div class="col-md-3">
                                          <input id="paro" type="numeric" class="form-control" name="paro" value="{{$bulkStdList->paro}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Pemagatshel</label>

                                      <div class="col-md-3">
                                          <input id="pemagatshel" type="numeric" class="form-control" name="pemagatshel" value="{{$bulkStdList->pemagatshel}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Punakha </label>

                                        <div class="col-md-3">
                                          <input id="punakha" type="numeric" class="form-control" name="punakha" value="{{$bulkStdList->punakha}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Samdrupjongkhar</label>

                                      <div class="col-md-3">
                                          <input id="samdrupjongkhar" type="numeric" class="form-control" name="samdrupjongkhar" value="{{$bulkStdList->samdrupjongkhar}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Samtse </label>

                                        <div class="col-md-3">
                                          <input id="samtse" type="numeric" class="form-control" name="samtse" value="{{$bulkStdList->samtse}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Sarpang</label>

                                      <div class="col-md-3">
                                          <input id="sarpang" type="numeric" class="form-control" name="sarpang" value="{{$bulkStdList->sarpang}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Trashi Yangtse </label>

                                        <div class="col-md-3">
                                          <input id="tashiyangtse" type="numeric" class="form-control" name="tashiyangtse" value="{{$bulkStdList->tashiyangtse}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Thimphu</label>

                                      <div class="col-md-3">
                                          <input id="thimphu" type="numeric" class="form-control" name="thimphu" value="{{$bulkStdList->thimphu}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Trashigang </label>

                                        <div class="col-md-3">
                                          <input id="trashigang" type="numeric" class="form-control" name="trashigang" value="{{$bulkStdList->trashigang}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Trongsa</label>

                                      <div class="col-md-3">
                                          <input id="trongsa" type="numeric" class="form-control" name="trongsa" value="{{$bulkStdList->trongsa}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Tsirang </label>

                                        <div class="col-md-3">
                                          <input id="tsirang" type="numeric" class="form-control" name="tsirang" value="{{$bulkStdList->tsirang}}">

                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Wangdue Phodrang</label>

                                      <div class="col-md-3">
                                          <input id="wangdi" type="numeric" class="form-control" name="wangdi" value="{{$bulkStdList->wangdi}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Zhemgang </label>

                                        <div class="col-md-3">
                                          <input id="zhemgang" type="numeric" class="form-control" name="zhemgang" value="{{$bulkStdList->zhemgang}}">

                                        </div>
                                    </div>
                                </div>
                                 
                             </div><!-- end of Qualification panel -->
                             <div class="panel-heading">
                               <label>Number of International Students(More than 6 months)</label>
                              
                             </div>
                             <div class="panel-body">
                                <!-- <div class="row">
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">International Students</label>

                                      <div class="col-md-3">
                                          <input id="male" type="numeric" class="form-control" name="international_stds" value="{{$bulkStdList->international_stds}}">

                                      </div>
                                  </div>
                                 
                                </div> -->
                                <!-- new requirements -->

                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Asia</label>

                                      <div class="col-md-3">
                                          <input id="asia" type="numeric" class="form-control" name="asia" value="{{$bulkStdList->asia}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Africa </label>

                                        <div class="col-md-3">
                                          <input id="africa" type="numeric" class="form-control" name="africa" value="{{$bulkStdList->africa}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">North America</label>

                                      <div class="col-md-3">
                                          <input id="north_america" type="numeric" class="form-control" name="north_america" value="{{$bulkStdList->north_america}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">South America </label>

                                        <div class="col-md-3">
                                          <input id="south_america" type="numeric" class="form-control" name="south_america" value="{{$bulkStdList->south_america}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Antarctica</label>

                                      <div class="col-md-3">
                                          <input id="antarctica" type="numeric" class="form-control" name="antarctica" value="{{$bulkStdList->antarctica}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Europe </label>

                                        <div class="col-md-3">
                                          <input id="europe" type="numeric" class="form-control" name="europe" value="{{$bulkStdList->europe}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Australia </label>

                                      <div class="col-md-3">
                                          <input id="australia" type="numeric" class="form-control" name="australia" value="{{$bulkStdList->australia}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    
                                </div>
                               
                             </div><!-- end of teaching experience panel -->
                              <div class="panel-heading">
                               <label>Number of International Students(Exchange Program-less than 6 months)</label>
                              
                             </div>
                             <div class="panel-body">
                               <!--  <div class="row">
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">International Students</label>

                                      <div class="col-md-3">
                                          <input id="male" type="numeric" class="form-control" name="international_stds" value="{{$bulkStdList->international_stds}}">

                                      </div>
                                  </div>
                                 
                                </div> -->
                                <!-- new requirements -->

                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Asia</label>

                                      <div class="col-md-3">
                                          <input id="ex_asia" type="numeric" class="form-control" name="ex_asia" value="{{$bulkStdList->ex_asia}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Africa </label>

                                        <div class="col-md-3">
                                          <input id="ex_africa" type="numeric" class="form-control" name="ex_africa" value="{{$bulkStdList->ex_africa}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">North America</label>

                                      <div class="col-md-3">
                                          <input id="ex_north_america" type="numeric" class="form-control" name="ex_north_america" value="{{$bulkStdList->ex_north_america}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">South America </label>

                                        <div class="col-md-3">
                                          <input id="ex_south_america" type="numeric" class="form-control" name="ex_south_america" value="{{$bulkStdList->ex_south_america}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Antarctica</label>

                                      <div class="col-md-3">
                                          <input id="ex_antarctica" type="numeric" class="form-control" name="ex_antarctica" value="{{$bulkStdList->ex_antarctica}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Europe </label>

                                        <div class="col-md-3">
                                          <input id="ex_europe" type="numeric" class="form-control" name="ex_europe" value="{{$bulkStdList->ex_europe}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Australia </label>

                                      <div class="col-md-3">
                                          <input id="ex_australia" type="numeric" class="form-control" name="ex_australia" value="{{$bulkStdList->ex_australia}}">

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    
                                </div>
                               
                             </div><!-- end of teaching experience panel -->

                       

                         <div class="row">
                       
                           <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div><br>

                  
              
       
          </div><!-- end of pane-primary -->

        </form>
         @endforeach
      </div>
   </div>

 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
  

$(document).ready(function (e) {

  $("input").change(function () {
    
    var sum=0.00;
    $("input[id=gender]").each(function () {
    
      sum = sum + parseInt($(this).val());
    
    })
    $("input[id=total]").val(sum); 

  });  
  
});


</script>