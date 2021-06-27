 <?php
 include_once 'config.php';
 $searchTerm=mysqli_real_escape_string($conn,$_POST['searchTerm']);
 $output="";
 $sql=mysqli_query($conn,"SELECT * FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname like '%{$searchTerm}%'");
 if(mysqli_num_rows($sql)>0){
     include 'data.php';
 }
 else{
     $output.="NO user found";
 }

 echo $output;
 ?>
