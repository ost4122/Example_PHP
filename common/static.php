<!--정적인 코드를 집합시켜놓은 PHP 파일입니다.-->
<head>
    <meta charset="UTF-8">
    <title>EXAMPLE-BOARD</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/PHP/Example/bootstrap/js/bootstrap.min.js"></script>
    <link href="/PHP/Example/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
    if(isset($_SESSION['user'])){
        session_start();
    }
    ?>


