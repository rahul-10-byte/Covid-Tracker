
<?php


include 'dbcon.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$message = $_POST['message'];



	$chk = "";
	foreach ($symp as $chk1) {
		$chk .= $chk1.",";
	}


	$insertquery = " insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$message') ";

	$query = mysqli_query($con, $insertquery);

		if($con){
		?>
		<script>
			alert("inserted Successful");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("Not inserted");
		</script>
		<?php
	}
}

header( 'location: index.html');
?>