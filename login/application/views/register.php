<?php
/**
 * Created by PhpStorm.
 * User: yao
 * Date: 2017/2/24
 * Time: 16:06
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <H1>注册</H1>
</head>

<body>
<form action="<?php echo base_url(); ?>gogo/register1" method="POST">
    <h5>用户名：</h5>
    <input type="text" name="username"/>
    <h5>密码：</h5>
    <input type="text" name="password"/><br>
    <input type="submit" value="注册"/>
</form>

</body>
</html>
