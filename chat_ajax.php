<?php 
require_once('auth.php');
 include("connection.php");	
	
	        $usern=$_SESSION['SESS_USERNAME'];
	        $firstn=$_SESSION['SESS_FIRST_NAME'];
			$lastn=$_SESSION['SESS_LAST_NAME'];
			$fulln=$firstn." ".$lastn;
			$gender=$_SESSION['SESS_GENDER'];
			$gender= strtolower($gender);
			
 $tid=$_POST['tid'];

		$qry0="Update member set log = NOW() WHERE username='$usern'";
               $done=mysql_query($qry0);

echo'<div class="chat">';

				$sqlchat="SELECT category FROM topic WHERE topic_id='$tid'";
				$tnme=mysql_query($sqlchat);
				$ro = mysql_fetch_row($tnme);
				
                $qry="SELECT * FROM testblob WHERE category='$ro[0]' ORDER BY image_id DESC LIMIT 0 , 20";
                $result=mysql_query($qry);
                while($rowori= mysql_fetch_row($result))
                {
					$qery="SELECT picture FROM member WHERE username='$rowori[1]'";
				$prpic=mysql_query($qery);
				$prpicori = mysql_fetch_row($prpic);
                   $usr=$_SESSION['SESS_USERNAME']; 
					if($usr!=$rowori[1])
					{echo'<div class="row">
                          <!-- main col right -->
                          <div class="col-sm-6 ">
                               
                               
                      
                               <div class="panel panel-success">
                                 <div class="panel-heading"><a href="#" class="pull-left">
									      <img class="img-circle pull-right"  src="data:image;base64,'.$prpicori[0].'">
									</a> <h4 class="ubuntu"style="text-align:left;">$'.$rowori[1].'</h4></div>
                                  <div class="panel-body text-warning">
                                    <p class="comicfont" style="text-align:center;">'.$rowori[5].'</p>
                                    <div class="clearfix">';
									if($rowori[2]!=NULL){echo'<img class="img-thumbnail" height="100%"src="data:image;base64,'.$rowori[2].' ">';}echo'</div>
                                   
                                  </div>
                               </div>
                  
                            
                          </div>
						  </div>';
					
					
					}
					else
					{echo'<div class="row">
                          <!-- main col right -->
                          <div class="col-sm-6 ri">
                               
                               
                      
                               <div class="panel panel-danger">
                                 <div class="panel-heading"><a href="#" class="pull-left">
									      <img class="img-circle pull-right"  src="data:image;base64,'.$prpicori[0].'">
									</a> <h4 class="ubuntu"style="text-align:left;">$'.$rowori[1].'</h4></div>
                                  <div class="panel-body text-primary">
                                    <p class="comicfont"style="text-align:center;">'.$rowori[5].'</p>
                                    <div class="clearfix">';
									if($rowori[2]!=NULL){echo'<img class="img-thumbnail" height="100%"src="data:image;base64,'.$rowori[2].' ">';}echo'</div>
                                   
                                  </div>
                               </div>
                  
                            
                          </div>
						  </div>';
						
						
						
					}
				
				
				}
				   
            



?>