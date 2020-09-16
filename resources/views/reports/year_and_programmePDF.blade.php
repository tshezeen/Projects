
              <h2 align ="center">Year and Programme Level(in country) </h2>
                  
                   <table width="100%" style="border-collapse:collapse; border: 0px;">
                  
                     <thead>
                          <tr>
                             
                             <th rowspan="2" style="border:1px solid; padding:5px;" width="5%">Year </th>
                            
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">RGoB Funded Students</th>
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">Self Funded Students</th>
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">Other Funded Students</th>
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">Grand Total</
            
                             
                          </tr>
                          <tr> 
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Male
                              </th>
                               <th style="border:1px solid; padding:5px;" width="3%">
                                  Female
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Total
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Male
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Female
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Total
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Male
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Female
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Total
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Male
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Female
                              </th>
                              <th style="border:1px solid; padding:5px;" width="3%">
                                  Total
                              </th>
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($yearProgrammeStatistics as $yearProgrammeStatistics)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td style="border:1px solid; padding:5px;" width="5%">{{$yearProgrammeStatistics->year}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->male_RGoB}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->female_RGoB}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->total_RGoB}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->male_self}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->female_self}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->total_self}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->male_other}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->female_other}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->total_other}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->male_grand}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->female_grand}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$yearProgrammeStatistics->grand_total}}</td>
                                
                            </tr>
                        
                        @endforeach
                       </tbody>
                       </table>
                   
