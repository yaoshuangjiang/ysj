<?php
/**
 * Created by PhpStorm.
 * User: yao
 * Date: 2017/2/24
 * Time: 10:47
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <H1>登录</H1>

    <script type="text/javascript">

        function register() {
            document.sub.method = "GET";
            document.sub.action = "<?php echo base_url(); ?>gogo/register0";
            document.sub.submit();
        }

        function check() {
            document.sub.method = "POST";
            document.sub.action = "<?php echo base_url(); ?>gogo/check";
            document.sub.submit();
        }

    </script>
</head>

<body>
<div>
    <tr>
        <form name="sub">
            <h5>用户名：<input type="text" name="username"/></h5>
            <h5>密码：<input type="text" name="password"/></h5>
            <input type="button" value="注册" onclick="register()"/>
            <input type="button" value="登录" onclick="check()"/>

        </form>
        </td>
    </tr>
</div>

</body>
</html>