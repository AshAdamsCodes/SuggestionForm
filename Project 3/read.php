<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/glacial-indifference" type="text/css"/>

		<style>
			#top {
				/*background-color: #b05ddf;*/
				margin: 2% 10%;
				border-radius: 15px;
			}

			#top img {
				display: block;
				width: 35%;
				margin: 0 auto;
				height: 200px; 
				width: 200px;
			}

			body{
				text-align: center;
				font-family: 'GlacialIndifferenceRegular';
        		font-weight: normal;
        		font-style: normal;
        		text-align: center;
			}

			p{
				font-size: 20px;
				font-family: 'GlacialIndifferenceRegular';
        		font-weight: normal;
        		font-style: normal;
        		text-align: center;
			}

			a{
				text-decoration: none;
				border: 2px; 
				font-size: 20px; 
				color: white; 
				background-color:  #5999a2;
				padding: 5px; 
				border-radius: 5px;
			}

			a:hover{
				font-size: 25px;

			}
	  	</style>
	</head>
<body>
<section id="top">
      <img src="assets/img/Drama Club Logo_Full_Teal@2x.png" alt="Drama Club Logo">
</section>

<?php //include 'receiveform.php'; ?>
<h2><?= "Thank you,&nbsp;" . $_POST['first'] . ".&nbsp;" . "  We value your feedback regarding the " . $_POST['class'] . " class."?></h2>
<h3>The following has been sent to and will be reviewed by the appropriate parties:</h3>

<p>First Name: <?= $_POST['first']?></p>
<p>Last Name: <?= $_POST['last'] ?></p>
<p>Email: <?= $_POST['eml'] ?></p>

<p>Suggestion: <?= $_POST['suggestion'] ?></p>
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
	
