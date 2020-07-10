<?php
include_once "../common/db.con.php";
$Mode="";
if($_GET["mode"]) {
    $Mode = $_GET["mode"];
}
else if ($_POST["mode"]) {
    $Mode = $_POST["mode"];
}
$sql = "";
$query = "";
switch ($Mode){
    /*회원가입*/
    case "register" :
        $pwHash = password_hash($_POST[userPw], PASSWORD_DEFAULT);
        $sql = "INSERT INTO 
                    user(
                        id
                        ,pw
                        ,name
                        ,birth
                        ,registered
                    ) 
                    VALUES(
                        '$_POST[userId]'
                        ,'$pwHash'
                        ,'$_POST[userName]'
                        ,'$_POST[userBirth]'
                        ,NOW()
                    )
                ";
        if($connect -> connect_error){
            alert("Connection failed: " . $connect->connect_error);
        }
        $result = $connect -> query($sql);
        if($result === true){
            $lastInsertId = $connect -> insert_id;
            if($lastInsertId>0){
                echo "<script>location.href='login.php';</script>";
            }else {
                echo "<script>alert('회원가입 등록중 오류가 발생하였습니다. 관리자에게 문의하세요.')</script>";
            }
        }
        break;
    /*아이디 중복확인*/    
    case "idCheck" :
        $sql = "SELECT
                    ID
                FROM
                    user
                WHERE
                    id='$_POST[userId]'
                ";
        $result = $connect -> query($sql);
        $data = mysqli_fetch_assoc($result);
        if($data != null || $data != ""){
            echo false;
        }
        else {
            echo true;
        }
        break;
}

?>