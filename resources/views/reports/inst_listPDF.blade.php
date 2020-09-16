          <h2 align ="center">General Institution Information</h2>
                  
                   <table width="100%" style="border-collapse:collapse; border: 0px;">
                    
                          <tr>
                            
                             <th style="border:1px solid; padding:12px;" width="30%">Institution Name </th>
                             <th style="border:1px solid; padding:12px;" width="20%">Institute Type</th>
                             <th style="border:1px solid; padding:12px;" width="15%">Year of Establishment</th>
                             <th style="border:1px solid; padding:12px;" width="30%">Location</th>
                            
                             
                          </tr>
                           @foreach($genInstList as $genInstList)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td style="border:1px solid; padding:12px;" width="30%">{{$genInstList->inst_name}}</td>
                                  <td style="border:1px solid; padding:12px;" width="20%">{{$genInstList->inst_type}}</td>
                                  <td style="border:1px solid; padding:12px;" width="15%">{{$genInstList->est_year}}</td>  
                                 <td style="border:1px solid; padding:12px;" width="30%">{{$genInstList->location}}</td> 
                               
                            </tr>
                        
                        @endforeach
                    </table>      
                  
                  