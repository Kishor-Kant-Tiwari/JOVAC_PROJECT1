<!DOCTYPE html>
<html>
<head>
	
<title> Registration Successful</title>
<script>
	function preventBack() {
		window.history.forward();
		
	}
	setTimeout("preventBack()", 0);
	window.onunload = function () { null };
</script>
<style>
.bg{
	background-image: url("b.jpg");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	margin: 9px -2px;

}
.head{
    text-align: center;
    background-color: seashell;
    border: 2px solid red;
    border-radius: 50px;
    margin: 1px -2px;
    padding: 20px 40px;
    color: green;
}
.head img
{
  float: left;
  width: 133px;
  top: 10px;
  margin: -5px -20px;
    
}
</style>
</head>
<body bgcolor="lightblue">
	<header class="head">
		<img src="data:image/jpeg;base64,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" alt="logo">
		
	<h1> GLA UNIVERSITY </h1>
	<h2>Mathura</h2>
	
	</header>
<div class="bg">
<?php
$name=$_POST['t1'];
$pass=$_POST['t2'];
$email=$_POST['t3'];
$aoi=$_POST['t4'];
$date=$_POST['t5'];

if ($aoi == "None") {
	echo "Error:Please Choose a One Course<br>";
	echo "Please Register Again<a href=index.html>Register</a>";
}

if ($aoi == "Cloud Computing")
{

$file = fopen("details.txt", 'a+');
$s=fread($file, filesize("details.txt"));
$pos = strpos($s, $email);
if(!$pos){
$f=fopen("jobappnum.txt","r");
$j_a_n=fread($f, filesize("jobappnum.txt"));
fclose($f);
$f=fopen("jobappnum.txt","w");
$text = $name."::".$pass."::".$email."::". $j_a_n."::".$aoi."::".$date."::\r\n";
if ($j_a_n <= 1030) 
{
	echo "Thank you For Register in Cloud Computing  Course<br>";
	echo "Your Course Application Number is $j_a_n<br>";

	$j_a_n=$j_a_n+1;
	fwrite($f,$j_a_n);
	fwrite($file, $text);

	fclose($file);
	fclose($f);
	echo "<a href=login.html>Click Here to login</a>";

	
}
else
{
	echo "Error: The Seat of Cloud Computing Course is Full so Please Choose Another Course<br>";
	echo "<a href=index.html>Click here to Register Again</a>";
}
}
else
{
echo "You are already registered<br>";
echo "<a href=login.html>Click Here to login</a>";
} 
}
if ($aoi == "Machine Learning")
{
$file = fopen("details.txt", 'a+');
$s=fread($file, filesize("details.txt"));
$pos = strpos($s, $email);
if(!$pos){
$f=fopen("jobappnum1.txt","r");
$j_a_n=fread($f, filesize("jobappnum1.txt"));
fclose($f);
$f=fopen("jobappnum1.txt","w");
$text = $name."::".$pass."::".$email."::". $j_a_n."::".$aoi."::".$date."::\r\n";
if ($j_a_n <= 2030) 
{
	echo "Thank you For Register in Machine Learning Course<br>";
	echo "Your Course Application Number is $j_a_n<br>";

	$j_a_n=$j_a_n+1;
	fwrite($f,$j_a_n);
	fwrite($file, $text);

	fclose($file);
	fclose($f);
	echo "<a href=login.html>Click Here to login</a>";

	
}
else
{
	echo "Error: The Seat of Machine Learning Course is Full so Please Choose Another Course<br>";
	echo "<a href=index.html>Click here to Register Again</a>";
}
}
else
{
echo "You are already registered<br>";
echo "<a href=login.html>Click Here to login</a>";
} 
}
if ($aoi == "Cyber Security")
{

$file = fopen("details.txt", 'a+');
$s=fread($file, filesize("details.txt"));
$pos = strpos($s, $email);
if(!$pos){
$f=fopen("jobappnum2.txt","r");
$j_a_n=fread($f, filesize("jobappnum2.txt"));
fclose($f);
$f=fopen("jobappnum2.txt","w");
$text = $name."::".$pass."::".$email."::". $j_a_n."::".$aoi."::".$date."::\r\n";
if ($j_a_n <= 3030) 
{
	echo "Thank you For Register in Cyber Security Course<br>";
	echo "Your Course Application Number is $j_a_n<br>";

	$j_a_n=$j_a_n+1;
	fwrite($f,$j_a_n);
	fwrite($file, $text);

	fclose($file);
	fclose($f);
	echo "<a href=login.html>Click Here to login</a>";

	
}
else
{
	echo "Error: The Seat of Cyber Security Course is Full so Please Choose Another Course<br>";
	echo "<a href=index.html>Click here to Register Again</a>";
}
}
else
{
echo "You are already registered<br>";
echo "<a href=login.html>Click Here to login</a>";
} 
}
if ($aoi == "Joy of Programming using Python")
{

$file = fopen("details.txt", 'a+');
$s=fread($file, filesize("details.txt"));
$pos = strpos($s, $email);
if(!$pos){
$f=fopen("jobappnum3.txt","r");
$j_a_n=fread($f, filesize("jobappnum3.txt"));
fclose($f);
$f=fopen("jobappnum3.txt","w");
$text = $name."::".$pass."::".$email."::". $j_a_n."::".$aoi."::".$date."::\r\n";
if ($j_a_n <= 4030) 
{
	echo "Thank you For Register in Joy of Programming using Python Course<br>";
	echo "Your Course Application Number is $j_a_n<br>";

	$j_a_n=$j_a_n+1;
	fwrite($f,$j_a_n);
	fwrite($file, $text);

	fclose($file);
	fclose($f);
	echo "<a href=login.html>Click Here to login</a>";

	
}
else
{
	echo "Error: The Seat of Joy of Programming using Python Course is Full so Please Choose Another Course<br>";
	echo "<a href=index.html>Click here to Register Again</a>";
}
}
else
{
echo "You are already registered<br>";
echo "<a href=login.html>Click Here to login</a>";
} 
}
if ($aoi == "Fundamentals of Image Processing")
{

$file = fopen("details.txt", 'a+');
$s=fread($file, filesize("details.txt"));
$pos = strpos($s, $email);
if(!$pos){
$f=fopen("jobappnum4.txt","r");
$j_a_n=fread($f, filesize("jobappnum4.txt"));
fclose($f);
$f=fopen("jobappnum4.txt","w");
$text = $name."::".$pass."::".$email."::". $j_a_n."::".$aoi."::".$date."::\r\n";
if ($j_a_n <= 5030) 
{
	echo "Thank you For Register in Fundamentals of Image Processing Course<br>";
	echo "Your Course Application Number is $j_a_n<br>";

	$j_a_n=$j_a_n+1;
	fwrite($f,$j_a_n);
	fwrite($file, $text);

	fclose($file);
	fclose($f);
	echo "<a href=login.html>Click Here to login</a>";

	
}
else
{
	echo "Error: The Seat of Fundamentals of Image Processing Course is Full so Please Choose Another Course<br>";
	echo "<a href=index.html>Click here to Register Again</a>";
}
}
else
{
echo "You are already registered<br>";
echo "<a href=login.html>Click Here to login</a>";
} 
}

?>
</div>
</body>
</html>