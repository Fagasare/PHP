<?php
  require_once 'dbh.inc.php';

if (isset($_GET['id'])) {
$getID = base64_decode($_GET['id']);

$sql = "SELECT * FROM users WHERE `id`='$getID' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <title>Korle-Bu IT Staff</title>
    <style>
        .row{
            text-align: center;
        }
        #hed{
            color: red;
            text-align: center;
            text-transform: uppercase;
            font-weight: 700;
        }
        .user{
            float: right;
        }

    </style>
</head>
<body>
    <div class="jumbotron jumbotron-fluid" id="head">
        <h1><img src="./images/download.png" id="logo"/> I.T STAFF PAGE</h1>
        <div class="user">

            <?php echo $row['full_name'];?>
            <img src="images/me.jpg" width="60" height="60" style="border-radius: 48%; margin:0px">
        </div>
    </div>

    <div class="container-fluid">


                <h2 id="hed">Staff Information</h2>

            <div class="row">
            <div class="col-lg-12" style="text-align: -webkit-center;">
                <div class="col-lg-4"><strong>NAME:</strong></div>
                <div class="col-lg-4"><label><?php echo $row['full_name'];?></label></div><br>

                <div class="col-lg-4"><strong>EMAIL:</strong></div>
                <div class="col-lg-4"><label><?php echo $row['email'];?></label></div><br>

                <div class="col-lg-4"><strong>AREA NAME:</strong></div>
                <div class="col-lg-4"><label><?php echo $row['area_name'];?></label></div><br>

                <div class="col-lg-4"><strong>GPS LOCATION:</strong></div>
                <div class="col-lg-4"><label><?php echo $row['gps_location'];?></label></div><br>

                <div class="col-lg-4"><strong>DEPARTMENT:</strong></div>
                <div class="col-lg-4"><label><?php echo $row['department'];?></label></div><br>

                <div class="col-lg-4"><strong>SCHOOL:</strong></div>
                <div class="col-lg-4"><label><?php echo $row['school'];?></label></div><br>




            </div>
        </div>





        <footer class="content" style="margin-top: 100px;">
            <p style="padding-top: 40px;">Reach us on &#128222; <b style="color: red;">+233(0)501592984</b></p>
            <p>Or via email &#128140; on <b style="color: red;">asarefelix327@gmail.com</b></p><br><br>
        </footer>
    </div>

</body>
</html>
