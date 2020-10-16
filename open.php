<?php
if(isset($_POST['submit'])){
    $name = $_POST['your_name'];
    $rate = $_POST['rating'];
    $comment=$_POST['comments'];

// Create connection
$conn = mysqli_connect('localhost', 'username','password','Feedback_db');

$sql = mysqli_query($conn, "insert into std_admission(s_no,name,rate,comment) values('','$name','$rate','$comment')");

// Check connection
if ($cql) {
    echo "Data insert successful";
}else{
    echo "Data insert failed";
}

}
?>