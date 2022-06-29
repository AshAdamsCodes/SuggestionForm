<html>
<body>
<p>Thanks!</p>
<p><?= "Thank you,&nbsp;" . $_GET['first'] . ".&nbsp;" . "  We value your feedback regarding the " . $_GET['class'] . " class."?></p>
<p>The following has been sent to and will be reviewed by the appropriate parties.</p>

<p>First Name: <?= $_GET['first']?></p>
<p>Last Name: <?= $_GET['last'] ?></p>
<p>Email: <?= $_GET['eml'] ?></p>

<p>Suggestion:</p>
<p><?= $_GET['suggestion'] ?></p>
<a href="index.php">Make Another Suggestion</a>
</body>
</html>