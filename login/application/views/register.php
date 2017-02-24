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
    <div>
        <tr>
            <h5>
                <td>
                    用户名：
                </td>
                <td>
                    <input type="text" name="username"/>
                </td>
            </h5>
        </tr>
        <tr>
            <h5>
                <td>
                    &nbsp;&nbsp;&nbsp;密码：
                </td>
                <td>
                    <input type="text" name="password"/>
                </td>
            </h5>
        </tr>
    </div>
    <input type="submit" value="注册"/>
</form>

</body>
</html>
