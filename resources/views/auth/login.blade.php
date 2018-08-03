<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1">
<title>登录</title>
<link rel="stylesheet" href="../../../public/css/layui.css">
<link rel="stylesheet" href="../../../public/css/login.css">
<style>

    body{
        background-image:url(../../../public/images/login-bg.png);
    }
    .login {
        padding-top: 15%;
        width: 26%;
    }
  
    .btn-center{
        text-center:center;
        margin:0 auto;
    }
</style>
</head>
<body>
    <p class="clear box layui-main login">
        <form class="layui-form layui-form-pane1" action="ulogin" method="post">
            <p class="layui-form-item">
                <label class="layui-form-label">用户名：</label>
                <p class="layui-input-block">
                    <input type="text" name="user.name" lay-verify="uname" required
                        placeholder="请输入用户名" autocomplete="off" class="layui-input">
                </p>
            </p>
            <p class="layui-form-item">
                <label class="layui-form-label">密码：</label>
                <p class="layui-input-block">
                    <input type="password" name="user.pwd" lay-verify="" required
                        placeholder="请输入密码" autocomplete="off" class="layui-input">
                </p>
            </p>
            <p class="layui-form-item">
                <label class="layui-form-label">验证码：</label>
                <p class="layui-input-block">
                    <input type="text" name="yzm" lay-verify="" required
                        placeholder="请输入验证码" autocomplete="off" class="layui-input"><br>
                <a onclick="javascript:re_captcha();"><img alt="验证码" src="{{ URL('/kit/captcha/1') }}"></a>
                </p>
            </p>
            <p class="layui-form-item">
            <label class="layui-form-label"></label>
                <button class="layui-btn layui-btn-normal btn-center" type="submit">登录</button>
            </p>
        </form>
    </p>
 
    <script src="../../../public/js/layui.js"></script>
</body>
</html>
<script>  
  function re_captcha() {
    $url = "{{ URL('kit/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
  }
</script>