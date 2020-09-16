  <h2 align ="center">Total Intake of Students </h2>
                  
                   <table width="100%" style="border-collapse:collapse; border: 0px;">
                     <thead>
                          <tr>
                             
                              <th style="border:1px solid; padding:12px;" width="30%">Institution Name </th>
                             
                              <th style="border:1px solid; padding:12px;" width="20%">RGoB</th>
                              <th style="border:1px solid; padding:12px;" width="20%">Self-Funding</th>
                              <th style="border:1px solid; padding:12px;" width="20%">Other-Funding</th>
                              <th style="border:1px solid; padding:12px;" width="20%">Total</th>
                             

                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($totalIntakeList as $totalIntakeList)
                             <tr>
                                 
                                 <td style="border:1px solid; padding:12px;" width="30%">{{$totalIntakeList->institute}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$totalIntakeList->RGoB_funded}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$totalIntakeList->self_funded}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$totalIntakeList->other_funded}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$totalIntakeList->total}}</td>
                                
                            </tr>
                        
                        @endforeach
                       </tbody>
                       </table>
                   