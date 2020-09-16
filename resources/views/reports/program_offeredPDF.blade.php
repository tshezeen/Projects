          <h2 align ="center">Programme Offered</h2>
                  
                   <table width="100%" style="border-collapse:collapse; border: 0px;">
                    
                          <tr>
                            
                             <th style="border:1px solid; padding:12px;" width="40%">Institution Name </th>
                             <th style="border:1px solid; padding:12px;" width="60%"> Programme Offered</th>
                           
                            
                             
                          </tr>
                           @foreach($programmes as $programmes)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td style="border:1px solid; padding:12px;" width="40%">{{$programmes->institute}}</td>
                                  <td style="border:1px solid; padding:12px;" width="60%">{{$programmes->program_name}}</td>
                                 
                               
                            </tr>
                        
                        @endforeach
                    </table>      
                  
                  