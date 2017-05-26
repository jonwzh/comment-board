<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="boxes col-xs-10 col-sm-8 col-md-4 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-4 col-lg-offset-4">
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
