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
$caption=$_POST['cap'];                  
                    savecap($caption);
			echo'<p class="input-lg text-success" >success</p>';		
function savecap($caption)
            { $usern=$_SESSION['SESS_USERNAME'];
			$tid=$_POST['tid'];
				$sql="SELECT category FROM topic WHERE topic_id='$tid'";
			     $toname=mysql_query($sql);
				$rows = mysql_fetch_row($toname);
                 $qry="insert into testblob (category,username,caption) values ('$rows[0]','$usern','$caption')";
                $result=mysql_query($qry);
                
            }
			
			
			
			
			
			
			
			?>
			

