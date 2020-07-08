<?php
require_once "common/static.php";
require_once "include/header.php";
    //비회원일때
    if(!isset($_SESSION['user'])){
        echo "<script>location.href='user/login.php'</script>";
    }
?>
<body>

</body>
