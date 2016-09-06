<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            <h3>浏览学生信息</h3>
            <table width="600" border="1">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                </tr>
                <?php if(is_array($result)): foreach($result as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["Id"]); ?></td>
                        <td><?php echo ($vo["cname"]); ?></td>
                        <td><?php echo ($vo["tel"]); ?></td>
                        <td>删除 编辑</td>
                    </tr><?php endforeach; endif; ?>
            </table>
            <br/>
        </center>
    </body>
</html>