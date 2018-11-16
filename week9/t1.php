<html >
<head>
	<link rel="stylesheet" href="css1.css">

</head>
<body>

<?php
if ($_REQUEST["a"]) {
	$name=$_REQUEST["Username"];
	$pass=$_REQUEST["Password"];
	$conf=$_REQUEST["Confirm password"];
    if(!$pass or !$conf){
        echo '<div class="wrong">Password and Confirm password should not be empty</div>';
    }
	elseif ($pass!= $conf) {
        echo '<div class="wrong">Password and Confirm password does not equal toeach other</div>';
    }
    if (!$name) {
        echo '<div class="wrong">Username should not be empty</div>';
    }
    elseif ($name=="JohnDoe") {
        echo '<div class="wrong">Username JohnDoe is alredy reserved</div>';
    }
}
?>

<form action="t1.php">
	Username:    <input type="text" name="Username"></br>
	Password:    <input type="password" name="Password"></br>
	Confirm password:<input type="password" name="Confirm password"></br>
	<input type="submit" name="submit"></br>
	<a href="t1.php">Clear</a>
	<input type="hidden" name="a" value="true" >
</div>
</form>
</body>
</html>