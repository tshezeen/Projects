          <h2 align ="center">Total Intake Capacity at Tertiary Level With Source of Funding </h2>
                  
                   <table width="50%" style="border-collapse:collapse; border: 0px;">
                    
                          <tr>
                            
                           
                            <th rowspan="2" style="border:1px solid; padding:5px;" width="20%">Name of Institute/College</th>
                            
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">RGoB Funded Students</th>
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">Self Funded Students</th>
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">Other Funded Students</th>
                            <th colspan="3" style="border:1px solid; padding:5px;" width="5%">Grand Total</th>
                            
                          </tr>
                          <tr> 
                              <th style="border:1px solid; padding:5px;" width="3%"> Male</th>
                              <th style="border:1px solid; padding:5px;" width="3%"> Female </th>
                               <th style="border:1px solid; padding:5px;" width="3%">Total</th>
                               <th style="border:1px solid; padding:5px;" width="3%">Male </th>
                               <th style="border:1px solid; padding:5px;" width="3%">Female</th>
                              <th style="border:1px solid; padding:5px;" width="3%">Total</th>
                               <th style="border:1px solid; padding:5px;" width="3%">Male</th>
                               <th style="border:1px solid; padding:5px;" width="3%">Female</th>
                              <th style="border:1px solid; padding:5px;" width="3%">Total</th>
                              <th style="border:1px solid; padding:5px;" width="3%">Male</th>
                               <th style="border:1px solid; padding:5px;" width="3%">Female</th>
                              <th style="border:1px solid; padding:5px;" width="3%">Total</th>
                          </tr>
                           
                            
                             
                          </tr>
                           @foreach($enrolled as $enrolled)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td style="border:1px solid; padding:5px;" width="20%"> {{$enrolled->institute}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->male_RGoB}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->female_RGoB}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->total_RGoB}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->male_self}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->female_self}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->total_self}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->male_other}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->female_other}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->total_other}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->male_grand}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->female_grand}}</td>
                                 <td style="border:1px solid; padding:5px;" width="3%">{{$enrolled->grand_total}}</td>
                                 
                               
                            </tr>
                        
                        @endforeach
                    </table>      
                  
                  