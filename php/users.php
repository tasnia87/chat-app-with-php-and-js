<?php
session_start();
include_once "config.php";
$sql=mysqli_query($conn,"SELECT *FROM users");
$output="mkkmkm";

if(mysqli_num_rows($sql)==1){
    echo "No users are available to chat";
}
elseif(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        echo'<a href="">
                    <div class="content"><img src="php/images/'. $row['img'].'" alt="">
                    <div class="details">
                        <span>'.$row['fname'] . " " . $row['lname'].'</span>
                        <p>This is text message</p>
                    </div>
                    </div>
                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a></div>';
    

    }}
?>