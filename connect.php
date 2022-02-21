<?php
	$firstname = $_POST['firstname'];
	$lastname =  $_POST['lastname'];	
	$middlename = $_POST['middlename'];
	$lrn =  $_POST['lrn'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$religion = $_POST['religion'];
	$nationality = $_POST['nationality'];
	$language = $_POST['language'];
	$FatherName = $_POST['FatherName'];
	$FatherOccupation = $_POST['FatherOccupation'];
	$MotherName = $_POST['MotherName'];
	$MotherOccupation = $_POST['MotherOccupation'];
	$Elementaryschool = $_POST['Elementaryschool'];
	$EAddress = $_POST['EAddress'];
	$ESyGraduated = $_POST['ESyGraduated'];
	$JuniorHighSchool = $_POST['JuniorHighSchool'];
	$JAddress = $_POST['JAddress'];
	$JSyGraduated = $_POST['JSyGraduated'];
	$SeniorHighSchool = $_POST['SeniorHighSchool'];
	$SAddress = $_POST['SAddress'];
	$SSyGraduated = $_POST['SSyGraduated'];
	$SchoolYear = $_POST['SchoolYear'];
	$Semester = $_POST['Semester'];
	$YearLevel = $_POST['YearLevel'];
	$Course = $_POST['Course'];
	$type = $_POST['type'];
	$agreement = $_POST['agreement'];



	// Database connection
	$conn = new mysqli('localhost','root','','enrollment');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into student(firstname, lastname , middlename,lrn,gender,birthday,address,email,contact,religion,
		nationality,language,FatherName,FatherOccupation,MotherName,MotherOccupation,Elementaryschool,EAddress,ESyGraduated,JuniorHighSchool,
		JAddress,JSyGraduated,SeniorHighSchool,SAddress,SSyGraduated,SchoolYear,Semester,YearLevel,Course,type,agreement) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssissssissssssssssssssssssssss", $firstname, $lastname,$middlename,$lrn,$gender,$birthday,$address,$email,$contact,$religion,
		$nationality,$language,$FatherName,$FatherOccupation,$MotherName,$MotherOccupation,$Elementaryschool,$EAddress,$ESyGraduated,$JuniorHighSchool,
		$JAddress,$JSyGraduated,$SeniorHighSchool,$SAddress,$SSyGraduated,$SchoolYear,$Semester,$YearLevel,$Course,$type,$agreement);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script> location.href='next.html'; </script>";		
		$stmt->close();
		$conn->close();
	}
?>