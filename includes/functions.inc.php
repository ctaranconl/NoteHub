<?php

function emptyInputSignup($username, $email, $pwd, $pwdRepeat){
	
	$result;
	
	if(empty($username) || empty($email) || empty(pwdRepeat) || empty($pwdRepeat)){
		$result = true;
	}
	else{
		$result = false;
	}	
	return $result;
}

function invalidUsername($username){
	
	$result;
	
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$result = true;
	}
	else{
		$result = false;
	}	
	return $result;
}

function invalidEmail($email){
	
	$result;
		
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}	
	return $result;
}

function pwdMatch($pwd, $pwdRepeat){
	
	$result;
		
	if($pwd !== $pwdRepeat){
		$result = true;
	}
	else{
		$result = false;
	}	
	return $result;
}

function usernameExists($conn, $username, $email){
	
	$sql = "SELECT * FROM users WHERE userID = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$result = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($result)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
	
}

function createUser($conn, $username, $email, $pwd){
	
	$sql = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("location: ../index.php?error=none");
	exit();
}



