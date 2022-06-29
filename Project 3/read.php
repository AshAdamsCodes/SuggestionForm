<!DOCTYPE html>
<html>
<body>
	<h1>You're here</h2>

<?php //include 'receiveform.php'; ?>

<p>Thanks!</p>
<p><?= "Thank you,&nbsp;" . $_POST['first'] . ".&nbsp;" . "  We value your feedback regarding the " . $_POST['class'] . " class."?></p>
<p>The following has been sent to and will be reviewed by the appropriate parties.</p>

<p>First Name: <?= $_POST['first']?></p>
<p>Last Name: <?= $_POST['last'] ?></p>
<p>Email: <?= $_POST['eml'] ?></p>

<p>Suggestion:</p>
<p><?= $_POST['suggestion'] ?></p>
<a href="index.php">Make Another Suggestion!</a>

<?php

$firstname = $_POST['first'];
$lastname = $_POST['last'];
$email = $_POST['eml'];
$class = $_POST['class'];
$suggestion = $_POST['suggestion'];

$c = mysqli_connect('localhost', 'root', 'root','suggestionform');
//$q = "INSERT INTO `suggestion`('firstname', 'lastname', 'email', 'class', 'suggestion') VALUES ('$firstname', '$lastname', '$email','$class', '$suggestion');";
$q = "INSERT INTO `suggestion`(`firstname`, `lastname`, `email`, `class`, `suggestion`) VALUES ('$firstname', '$lastname', '$email','$class', '$suggestion');";
mysqli_query($c, $q);


	
//	$s = "SELECT * FROM `suggestion`";

//	$r = mysqli_query($c, $s);

	mysqli_close($c);
?>

</body>
</html>
	
