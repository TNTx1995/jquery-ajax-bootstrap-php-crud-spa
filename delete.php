<?php 
include('dbConnection.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$id = $mydata['sid'];

if(!empty($id)){
    $sql = "DELETE FROM student WHERE id={$id}";
    if($conn->query($sql) == TRUE){
        echo "Student Delted Successfully";
    }
    else echo "Unable to Delete the student information";
}