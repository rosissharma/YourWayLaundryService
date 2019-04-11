<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title>Pick-Up Time</title>
<link rel="icon" href="icon.png" type="image/gif" sizes="16x16">
<style>
.box {
    background-color: lightgreen;
    color: darkgreen;
    width: 500px;
    border: 2px solid green;
    padding: 25px;
    margin: 25px;
}
a:link {
	color: darkgreen;
}
a:visited {
	color: darkgreen;
	text-decoration: underline;
}
a:hover {
	color: darkgreen;
	border: 1px;
}
a:active {
	color: darkgreen;
}
.floatleft {
	float: left;
	margin: 10px;
}
</style>
</head>

<body>

<div class="box">
	<h1>Hello, <?php echo $_POST['name']; ?>.</h1>
	<p>You have successfully created an appointment.</p>
	<p>We have sent you a confirmation email at <?php echo $_POST['email']; ?></p>
	<p>Your Pick-Up is schedueled on <?php echo $_POST['date']; ?> at <?php echo $_POST['time']; ?></p>
	<p><a href="index.html">Click Here</a> to go back. </p>
</div>

</body>
</html>
