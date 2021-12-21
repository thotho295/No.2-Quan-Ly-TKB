<?php
//session_start();
//?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../../web/password.css" rel="stylesheet" type="text/css">
<!--    <script language="javascript" src="assets/js/error.js"></script>-->
</head>
<body>
<div class="container">
    <form method="POST" name="forgot_pass" action="">
        <div class="row">
            <div class="col-30" align="center">
                <label> Người dùng </label>
            </div>
            <div class-="col-60">
                <input type="text" name="name_id" value="">
            </div>
<!--            <span>-->
<!--                --><?php //echo $data['errorloginid']; ?>
<!--            </span>-->
        </div>
        <div class="row" align="center">
            <input type="submit" name="forgot_pass" value="Gửi yêu cầu reset password"</input>
        </div>
    </form>
</div>
</body>
</html>