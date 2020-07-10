<?php
include_once '../common/static.php';
?>
<style>
    .vaildatorSpan{
        color:red;
    }
</style>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(function () {
        $.extend($.validator.messages,{
            required: "<span class='vaildatorSpan'>필수 입력 사항입니다.</span>"
        });
        $("#ragisterForm").validate({
           rules: {
               userId : {
                   required : true
                   ,rangelength : [5, 20]
               }
               ,userPw : {
                   required : true
                   ,rangelength : [8, 16]
               }
               ,pwCheck : {
                   required : true
                   ,equalTo : userPw
               }
               ,userName : {required : true}
               ,userBirth : {required : true}
           },
           messages : {
                userId : {
                    rangelength : "<span class='vaildatorSpan'>5~20자의 영문 소문자만 사용 가능합니다.</span>"
                }
                ,userPw : {
                   rangelength : "<span class='vaildatorSpan'>8~16자의 패스워드만 사용 가능합니다.</span>"
                }
               ,pwCheck : {
                   equalTo : "<span class='vaildatorSpan'>패스워드가 일치하지않습니다.</span>"
                }
           },
           submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
<div class="container">
    <div class="row">
        <div class="col align-self-center">
            <div class="card-title">
                <h1>회원가입</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="col align-self-center">
                <div class="card-body">
                    <form action="Controller.php?mode=register" name="ragisterForm" id="ragisterForm" method="post">
                        <div class="col align-self-center">
                            <label>아이디</label>
                            <input class="form-control" type="text" name="userId" id="userId" placeholder="아이디를 입력하세요." />
                        </div>
                        <div class="col align-self-center">
                            <label>패스워드</label>
                            <input class="form-control" type="password" name="userPw" id="userPw" placeholder="패스워드를 입력하세요." />
                        </div>
                        <div class="col align-self-center">
                            <label>패스워드 확인</label>
                            <input class="form-control" type="password" name="pwCheck" id="pwCheck" placeholder="패스워드를 확인하세요." />
                        </div>
                        <div class="col align-self-center">
                            <label>이름</label>
                            <input class="form-control" type="text" name="userName" id="userName" placeholder="이름을 입력하세요." />
                        </div>
                        <div class="col align-self-center">
                            <label>생년월일</label>
                            <input class="form-control" type="date" name="userBirth" id="userBirth" placeholder="생년월일을 입력하세요." />
                        </div>
                        <div class="col align-self-center">
                            <button class="btn btn-lg btn-primary btn-block" id="registerSubmitBtn" type="submit">가입하기</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
