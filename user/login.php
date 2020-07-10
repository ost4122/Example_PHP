<?php
include_once '../common/static.php';
?>
<script>
    $(function () {
        /*로그인 버튼*/
        $("#loginBtn").click(function () {

        });

        /*회원가입 버튼*/
        $("#registerBtn").click(function () {
            $(location).attr("href", "register.php");
        });
    });

</script>



<div class="container">
    <div clas="row">
        <div class="col align-self-center">
            <div class="form-title">
                <h1>로그인</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col align-self-center">
            <div class="form-text">
                <form action="#" method="post" name="loginForm">
                    <input class="form-control" type="text" name="userId" placeholder="아이디를 입력하세요"/>
                    <input class="form-control" type="password" name="userPw" placeholder="암호를 입력하세요"/>

                    <button class="btn btn-lg btn-primary btn-block" id="loginBtn" type="submit">로그인</button>
                </form>
                <button class="btn btn-lg btn-primary btn-block" id="registerBtn">회원가입</button>
            </div>
        </div>
    </div>
</div>