<?php
$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'chatbot');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comment'];

$query = "INSERT INTO userinfodata (user, email, mobile, comment)
values('$user', '$email', '$mobile', '$comments')";

echo "$query";
mysqli_query($con, $query);

?>
