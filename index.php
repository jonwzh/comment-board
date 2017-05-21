<!DOCTYPE html>
<html>
<head>
    <title>Leave your comment here</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="bg"></div>
<a class="submit_btn" href="submit.php">Comment</a>
<?php

    include("connect.php");
    $sql = "SELECT * FROM loveboard order by date desc";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query)) {
?>

<div class="container-fluid">
    <div class="row">
        <div class="boxes col-md-4 col-md-offset-4">
            Name: <?= $row['username']?><br />
            Time: <?= $row['date'] ?><br />
            Content:<br />
            <div class="content" style="overflow:auto"><b><?= toHtmlcode($row['content'])?></b></div>
        </div>
    </div>
</div>

<?php
    }
?>

</script>
</body>
</html>