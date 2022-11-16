<?php
    session_start();
    echo $_SESSION['role'];
    echo $_SESSION['logged'];
    echo $_SESSION['email'];
    echo $_COOKIE['email'];
    
                             
 ?>
                 
 <tr class="data">
                                <?php

                                foreach($allUsers as $user){?>
                                    
                                     
                                        <td><?php echo $user['id']; ?></td>
                            
                                        <td><?php echo $user['name']; ?></td>
                                        
                                        <td><?php echo $user['email']; ?></td>
                                        
                                        <td><?php echo $user['birthday']; ?></td>
                                        
                                        <td><?php if($user['role'] == 0){echo 'Admin';}else{echo 'Client';} ?></td>
                                        
                                        <td>5000$</td>
                                  <?php  
                                }?>

                                ?>
                           
                            </tr>