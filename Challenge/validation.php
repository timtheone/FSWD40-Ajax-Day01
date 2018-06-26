<?php 



// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
$name = isset($_POST['name']) ? $_POST['name'] : null;
$user_name = isset($_POST['user_name']) ? $_POST['user_name'] : null;
$pass = isset($_POST['password']) ? $_POST['password'] : null;

$host= "localhost";
$username="root";
$password="";
$dbname="ajax_login_test";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
    echo "Connection failed";
}

$query2 = "SELECT `user_name` FROM users WHERE `user_name` = '$user_name'";
$result = mysqli_query($conn, $query2);
$array = mysqli_fetch_array($result);
if ($array!=NULL) {
    echo "Username already exists";
};
?>