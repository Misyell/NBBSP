<?php 

error_reporting(0);
session_start();


$host="localhost";

$user="root";

$password="";

$db="db_barangay";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
	die("connection error");
}

		
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST['username'];

		$pass = $_POST['password'];


		$sql="select * from tbluser where username='".$name."' AND password='".$pass."'  ";

		$result=mysqli_query($data,$sql);

		$row=mysqli_fetch_array($result);



		if($row["type"]=="secretary")
		{

			$_SESSION['username']=$name;

			$_SESSION['type']="secretary";

			header("location:../sidebar/dashboard/dashboard.php");
		}

		elseif($row["type"]=="Chairman")
		{	
			$_SESSION['username']=$name;

			$_SESSION['type']="Chairman";

			header("location:../chairman/dashboard/dashbord.php");
		}
        
        elseif($row["type"]=="Treasurer")
		{	
			$_SESSION['username']=$name;

			$_SESSION['type']="Treasurer";

			header("location: ../Treasurer/dashboard/dashbord.php");
		}

		else
		{
			

			$message= "username or password do not match";

			$_SESSION['loginMessage']=$message;

			header("location:login.php");
		}


	}


?>