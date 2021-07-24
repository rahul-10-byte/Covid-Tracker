<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$category = filter_input(INPUT_POST, 'category');
$message = filter_input(INPUT_POST, 'message');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "quizdatabase";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if($conn){
   echo "Connection Successful";
}else{
   echo "No Connection";
}

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO custreview(name, email, phone, category, message) values('$name','$email','$phone', '$category', '$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


header('location:index.html');

?>

<html>
   <head>
      <meta http-equiv = "refresh" content = "2"; url = "./index.php" />
   </head>
   <body>
   </body>
</html>
