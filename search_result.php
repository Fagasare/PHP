<?php
  require_once 'dbh.inc.php';
   session_start();
  if(!$_SESSION['email'])
     {
      header('location:index.php');
     }
   $department = $_SESSION['department'];
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
</head>
<body>
    <div class="jumbotron jumbotron-fluid" id="head">
        <h1><img src="./images/download.png" id="logo"/> I.T STAFF PAGE</h1>
    </div>
    <div class="container-fluid">
      <form class="example" action="#">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
    </form>
        <div class="container-fluid">
            <div class="row" style="padding-bottom:40px">
            <?php
             if(isset($_GET['search'])){
               $search = $conn->escape_string($_GET['search']);
               $query = $conn->query("SELECT * FROM users WHERE full_name='$search'");
             ?>
              <?php if ($query->num_rows) {
                while ($row = $query->fetch_object()) {?>


                    <div class="col-12 col-sm-6 col-lg-3">
                        <p><img src="images/me.jpg" width="281.984px;" height="200px" class="mx-auto d-block" ></p>
                            <div class="text">
                            <h6><?php echo $row->full_name;?></h6>
                                <a href="userDetails.php?id=<?php echo base64_encode($row->id); ?>" class="btn btn-primary">See Profile</a>
                            </div>
                    </div><br>
            <?php }}}?>




            </div>
        </div>




        <footer class="content" style="margin-top: 100px;">
            <p style="padding-top: 40px;">Reach us on &#128222; <b style="color: red;">+233(0)501592984</b></p>
            <p>Or via email &#128140; on <b style="color: red;">asarefelix327@gmail.com</b></p><br><br>
        </footer>
    </div>

</body>
</html>
