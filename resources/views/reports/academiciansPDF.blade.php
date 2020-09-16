<h2 align ="center">Academicians with various Qualification across TEIs(in country)</h2>
                  
              <table width="100%" style="border-collapse:collapse; border: 0px;">
                     <thead>
                          <tr>
                             <!-- <th>Sl.No</th> -->
                             <th style="border:1px solid; padding:12px;" width="30%">Institution Name </th>
                             
                             <th style="border:1px solid; padding:12px;" width="20%">Diploma</th>
                             <th style="border:1px solid; padding:12px;" width="20%">Bachelor</th>
                             <th style="border:1px solid; padding:12px;" width="20%">Master</th>
                             <th style="border:1px solid; padding:12px;" width="20%">Doctorate</th>
                             
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($acadamicians as $acadamicians)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td style="border:1px solid; padding:12px;" width="30%">{{$acadamicians->institute}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$acadamicians->diploma}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$acadamicians->bachelor}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$acadamicians->master}}</td>
                                 <td style="border:1px solid; padding:12px;" width="20%">{{$acadamicians->doctorate}}</td>
                                
                            </tr>
                        
                        @endforeach
                       </tbody>
                    </table>
                    
