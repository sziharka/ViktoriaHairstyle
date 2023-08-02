<?php include("./database_conf.php");?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Alex Brush'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Galada'>
    <link rel="stylesheet" href="./css/datastyle.css">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Adatbázis módosítás</title>
</head>
<body class='welcome1'>
<div class='text-center2'>
    <h1>Árlista módosítás</h1>
</div>
<div class="modal" id="logModal">
        <form id="login-form" class="modal-form animate">
            <div class="avatar">
                <img src="./img/login_avatar.png" alt="avatar">
            </div>
            <div class="input-container">
                <i class="fa fa-user fa-10x"></i>
                <input type="text" placeholder="Felhasználónév" name="username" id="username">
                <i class="fa fa-key"></i>
                <input type="password" placeholder="Jelszó" name="password" id="password">
                <button type="submit" class="btn">Bejelentkezés</button>
            </div>
        </form>
</div>
<div class='text-center animate2'>
    <form method='post' class="table-form">
        <table>
            <thead>
            <tr>
                <th class="text-center2" scope='col'>Női</th>
                <th class="text-center2" scope='col'>Rövid</th>
                <th class="text-center2" scope='col'>Félhosszú</th>
                <th class="text-center2" scope='col'>Hosszú</th>
            </tr>
            </thead>
                <?php
                for($counter=1 ; $counter<=16 ; $counter++){
                $sql = "SELECT `name`,`Rövid`,`Félhosszú`,`Hosszú` FROM `pricelist` WHERE `ID`='$counter'";
                $result  = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);
                echo
                "<tr>
                <th scope='row'><input type='text' class='row-text' name='name$counter' value='$row[0]'></th>
                <td><input type='text' class='input-price' name='short$counter' value=".$row[1]."Ft></td>
                <td><input type='text' class='input-price' name='halfLenght$counter' value=".$row[2]."Ft></td>
                <td><input type='text' class='input-price' name='lenght$counter' value=".$row[3]."Ft></td>
                </tr>";
                }
                ?>
        </table>
        <table class='table table-dark table-bordered border-primary table-hover align-middle'>
            <thead>
            <tr>
                <th class="text-center2" scope='col'>Férfi</th>
                <th class="text-center2" scope='col'>Ár</th>
            </tr>
            </thead>
                <?php
                for($counter=17 ; $counter<=20 ; $counter++){
                $sql = "SELECT `name`,`price` FROM `pricelist` WHERE `ID`='$counter'";
                $result  = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);
                echo
                "<tr>
                <th scope='row' class='row-text'><input type='text' class='row-text' name='name$counter' value='$row[0]'></th>
                <td><input type='text' class='input-price' name='man$counter' value=".$row[1]."Ft></td>
                </tr>";
                }
                ?>
        </table>
        <div class='save' id='ref'><input class='sv-btn btn-dark btn-lg' name="Submit" type='submit' value='Mentés'></div>
    </form>
    <?php
    for($counter=1 ; $counter<=16 ; $counter++){

        if(isset($_POST['Submit'])) {
            $name = $_POST['name'.$counter];
            $short = $_POST['short'.$counter];
            $halfLenght = $_POST['halfLenght'.$counter];
            $lenght = $_POST['lenght'.$counter];
            
            // adatbázis kapcsolat
            include_once("./database_conf.php");
                    
            // adatok bevitele az adatbázisba
            
            $change = mysqli_query($con, "UPDATE `pricelist` SET `name` = '$name', `Rövid` = '$short', `Félhosszú` = '$halfLenght', `Hosszú` = '$lenght' WHERE `pricelist`.`ID`='$counter'");
            
            
        }
    }
    for($counter=17 ; $counter<=20 ; $counter++){

        if(isset($_POST['Submit'])) {
            $name = $_POST['name'.$counter];
            $man = $_POST['man'.$counter];
            
            // adatbázis kapcsolat
            include_once("./database_conf.php");
                    
            // adatok bevitele az adatbázisba
            
            $change = mysqli_query($con, "UPDATE `pricelist` SET `name` = '$name',`price` = '$man' WHERE `pricelist`.`ID`='$counter'");
            
        }
    }
    ?>
</div>
    <script src="./js/login.js"></script>
</body>
</html>