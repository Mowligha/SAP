<?php
$name=$_POST['name'];
$department=$_POST['department'];
$number=$_POST['number'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$psw-repeat=$_POST['psw-repeat'];


$conn=new mysqli('localhost','root','','sap');
if($conn->connect_error){
	die('connection failed:'.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into registration(name,department,number,email,psw,psw-repeat)
	values(?,?,?,?,?,?");
	$stmt->bind_param("ssssss",$name,$department,$number,$email,$psw,$repeat-psw);
	$stmt->execute();
	echo "Registration Successfull..";
	$stmt->close();
	$conn->close();
}