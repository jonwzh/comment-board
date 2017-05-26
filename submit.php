<!DOCTYPE html>
<html>
<head>
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
        <div style="text-align: center; margin-top: 50px;" class="boxes col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <form action="#" method="post" name="lovepost" onsubmit="return CheckPost();">
            Name: <br />
            <input type="text" size="10" name="username"><br /><br />
            Content: <br /><textarea name="content" cols="50" rows="20"></textarea><br /><br />
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
