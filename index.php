<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="wrap">
            <div class="row1">
                <div class="background"></div>
                <img class="img" src="img/ignite.png" height="150px" width="150px" alt="">
            </div>
            <div class="row2">
                <?php require "data.inc.php"?>
                <h3>Create A Finite Logo</h3>
                <p><?php echo $data;?></p>
            </div>
            <div class="row3">
                <button class="butt">3px logo</button>
                <button class="butt">2px logo</button>
                <button class="butt">1px logo</button>
            </div>
            <div class="row4">
                <button class="purchase">purchase</button>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>