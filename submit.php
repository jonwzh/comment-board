<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave your comment here</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="bg"></div>
<?php

    include("connect.php");
?>


<script type="text/javascript">
    function CheckPost() {
        if (lovepost.username.value == "") {
            alert("Please fill in your name!");
            lovepost.username.focus();
            return false;
        }
        if (lovepost.content.value == "") {
            alert("Please fill in the content!");
            lovepost.content.focus();
            return false;
        }
    }
</script>


<div class="container-fluid">
    <div class="row">
        <div style="text-align: center; margin-top: 50px;" class="boxes col-xs-10 col-sm-8 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
            <form action="#" method="post" name="lovepost" onsubmit="return CheckPost();">
            Name: <br />
            <input type="text" size="10" name="username"><br /><br />
            Content: <br /><textarea name="content" id="contentbox" rows="20"></textarea><br /><br />
            <input type="submit" name="submit" value="Submit!">
            </form>
        </div>
    </div>
</div>

<?php
if($_POST['submit']) {
    $sql = "INSERT INTO loveboard (id,username,content,date)" .  "values('','$_POST[username]','$_POST[content]',now())";
    mysql_query($sql);
    header("location:index.php"); // avoid refreshing problem
}

?>

</body>
</html>
