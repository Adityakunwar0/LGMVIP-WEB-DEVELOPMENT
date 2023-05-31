<?php
 include 'config.php';


  if(isset($_POST['upd_stuRes'])){

     $roll=$_POST['std_roll'];
     $subj=$_POST['subj'];
     $o_mark=$_POST['obtn_marks'];
     

     $sql="update student_result set Obtained_Mark='$o_mark' where Roll_No='$roll' && Subject='$subj'";

                   $query=mysqli_query($conn,$sql);

                   if($query){
                   
                    header('location:admin_dash.php?text3="Result Update Successful!!!"');
                    
                   }
                   else{
                   
                    header('location:admin_dash.php?text4="Failed to Update Result!!!"');
                   }
                  
  }
?>