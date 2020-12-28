<!DOCTYPE html>
<html>
    <head>
        <title>Voting System</title>
    <link rel="stylesheet" href="style1.css"/>
    </head>
<body>
<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<section id="main-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 200px; height: 200px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
                        <h4 class="py-3">
                            <?php
                            if(isset($user['firstName'])){
                                printf('%s %s', $user['firstName'], $user['lastName'] );
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="user-info px-3">
                    <ul class="font-ubuntu navbar-nav">
                        <li class="nav-link"><b>First Name: </b><span><?php echo isset($user['firstName']) ? $user['firstName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Last Name: </b><span><?php echo isset($user['lastName']) ? $user['lastName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Email: </b><span><?php echo isset($user['email']) ? $user['email'] : ''; ?></span></li>
                        <li class="nav-link"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>

    <div style="background: black; color: white; text-align: center; padding: 6px;"><h2>you have already voted</h2></div>
    
<div class="container">
    <form action="index.php" method="post" align="center">
    </form>
<?php
$con = mysqli_connect("localhost","root","","mytest");
if(isset($_POST['chirag']))
{
    $vote_chirag = "update votes set chirag=chirag+1";
    $run_chirag = mysqli_query($con,$vote_chirag);

    if($run_chirag){
        echo "<h2 align='center'> Your Vote has been cast for Chirag Passwan!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
        
    }
}
if(isset($_POST['nitish']))
{
    $vote_nitish = "update votes set nitish=nitish+1";
    $run_nitish = mysqli_query($con,$vote_nitish);

    if($run_nitish){
        echo "<h2 align='center'> Your Vote has been cast for Nitish Kumar!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
    }
}
if(isset($_POST['tejaswi']))
{
    $vote_tejaswi = "update votes set tejaswi=tejaswi+1";
    $run_tejaswi = mysqli_query($con,$vote_tejaswi);

    if($run_tejaswi){
        echo "<h2 align='center'> Your Vote has been cast for Tejaswi Yadav!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
    }
}
if(isset($_POST['anant']))
{
    $vote_anant = "update votes set anant=anant+1";
    $run_anant = mysqli_query($con,$vote_anant);

    if($run_anant){
        echo "<h2 align='center'> Your Vote has been cast for Anant Singh!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
    }
}
if(isset($_POST['sunil']))
{
    $vote_sunil = "update votes set sunil=sunil+1";
    $run_sunil = mysqli_query($con,$vote_sunil);

    if($run_sunil){
        echo "<h2 align='center'> Your Vote has been cast for sunil!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
    }
}
if(isset($_POST['manoj']))
{
    $vote_manoj = "update votes set manoj=manoj+1";
    $run_manoj = mysqli_query($con,$vote_manoj);

    if($run_manoj){
        echo "<h2 align='center'> Your Vote has been cast for Manoj Tiwari!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
    }
}
if(isset($_POST['jitan']))
{
    $vote_jitan = "update votes set jitan=jitan+1";
    $run_jitan = mysqli_query($con,$vote_jitan);

    if($run_jitan){
        echo "<h2 align='center'> Your Vote has been cast for JitanRam Manjhi!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
    }
}
if(isset($_POST['bhagirathi']))
{
    $vote_bhagirathi = "update votes set bhagirathi=bhagirathi+1";
    $run_bhagirathi = mysqli_query($con,$vote_bhagirathi);

    if($run_bhagirathi){
        echo "<h2 align='center'> Your Vote has been cast for Bhagirathi Devi!</h2>";
        echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";
    }
}
//New Section Started
echo "<h2 align='center'><a href='display.php'>The result willbe declared on 30 dec after that click here</a></h2>";

?>

</div>
<div style="background: black; color: white; text-align: center; width: auto; padding: 7px;"><h2>Created By GITIANS</h2></div>
    </body>
</html>


