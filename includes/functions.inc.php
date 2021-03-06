<?php 

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
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
function invalidAccountType($accounttype){
    $result;
    if ($accounttype == "STUDENT"){
        $result = false;
        return $result;
        exit();
    }
    else if ($accounttype == "TEACHER"){
        $result = false;
        return $result;
        exit();
    }
    else{
        $result = true;
        return $result;
        exit();
    }
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

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ? OR usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
        exit();
    }
    else{
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $username, $email, $pwd, $accounttype){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersAccountType) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $hashedPwd, $accounttype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function wrongLogin($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists == false){
        return true;
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd == false){
        return true;
        exit();
    }
    return $uidExists;
}
function loginUser($uidExists){
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    $_SESSION["userAccountType"] = $uidExists["usersAccountType"];
    header("location: ../index.php?error=none");
    exit();
}
