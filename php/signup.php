<?php
if(!get_magic_quotes_gpc())
{
	$_POST=array_map('addslashes',$_POST);
}

$name=trim($_POST['name']);
$username=trim($_POST['username']);
$email=trim($_POST['e-mail']);
$password=$_POST['password'];
$re_password=$_POST['re-password'];

echo  "$first_name <br> $last_name <br> $username <br> $dob <br>";
echo $password.'<br>';
echo $re_password.'<br>';

if( $password != $re_password )
{
       echo " Different password typed different times";
       exit;
}

//echo "$first_name  $last_name";

$password=md5($password);
//if(!$first_name || !$last_name || !$username || !$password || !$dob)
//	echo "you have not entered all details properly";

//if(!get_magic_quotes_gpc())
//{
    $name=addslashes(mysql_real_escape_string($name));
    $username=addslashes(mysql_real_escape_string($username));

//}

//echo "NONONOOONON";
$con= mysqli_connect('localhost','root','iiit123','test');
//echo "NONONOOONON";
echo $con;

$temp=mysqli_connect_error();
echo $temp;
if ( mysqli_connect_errno() )
{
	
	die( 'failed to connect to MYSQL '. mysqli_connect_error());
}

$query="insert into plzDontDelete values ('$name','$username',$email,'$password')";


echo $query.'<br>';

$result=$con->query($query);
echo $result;





?>

