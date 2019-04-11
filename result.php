<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<style type="text/css">
	body
	{
		font-family: "Tahoma", "Comic Sans", serif;
		color: #502982;
		font-size: 14px;
		text-align: left;
		background-color: #ffdd73;
		font-style: normal;
	}

	h1, h2
	{
		color: #340570;
		font-style: italic;
		text-align: center;
	}
</style>

<title>Survey Results</title>
</head>

<body>
<h1>Survey Results</h1> 
<h2>Thank you for taking the survey!</h2>
<p>Hello, <?php echo $_POST['name']; ?>.</p>
<p>I think <?php echo $_POST['icecream']; ?> is the best also!</p>
<p><?php 
	if($_POST['age'] < 25)
	{
		echo "Young people usually prefer ".$_POST['icecream'];
	} 
	else
	{
		echo "Older people usually do not prefer ".$_POST['icecream'];
	} 
?>.</p>
</body>
</html>