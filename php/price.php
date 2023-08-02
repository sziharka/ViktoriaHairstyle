<?php include("./database_conf.php");?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="aBuN4CexcJPbAohOS2-Rnekfk5Ues7CPx5U_0FX3srY">
    <meta name="description" content="Fodrászként célom a vendég maximális elégedettsége, a stílusához illetve személyiségéhez illő megfelelő frizuraválasztás után, annak megvalósítása, mindezt igyekszem jó hangulatban. Így a jobb közérzet, feltöltődés garantált.">
    <meta name="keywords" content="Fodrászat, Érden, Olcsó, Balayage, Stop-shop, árlista">
    <meta name="author" content="Gimesi Ádám, Harka Szilárd">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Alex Brush'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Galada'>
    <link rel="stylesheet" href="./css/style.css">
    <title>Árlista</title>
</head>
<body>
    <header>
        <div class="Navbar">
            <span class="headtitle"><img src="./img/logo.gif" alt="logo" class="logo"><img src="./img/head.jpeg" alt="logo2" class="headpic"></span>
            <div class="navbar2">
                <ul>
                    <li class="navbar-item"><a href="#contact">Kapcsolat</a></li>
                    <li class="navbar-item"><a href="jobs.html">Galéria</a></li>
                    <li class="navbar-item"><a href="price.php">Árlista</a></li>
                    <li class="navbar-item"><a href="index.html">Főoldal</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="welcome">

    <!-- Modal ablak button / Ide írja ki a checkbox eredményeit összeadva-->

    <div class="priceButton">
        <p class="priceText">Ahhoz hogy pontos árat tudjunk adni kérjük töltse ki az alábbi űrlapot!</p> 
        <div class="myButton-center">
            <button type="button" class="myButton btn btn-dark" data-bs-toggle="modal" data-bs-target="#genderModal">
                Kérjük válasszon:
            </button>
        </div>
        
        <?php
            if(isset($_GET['submit'])){
                $inputs = array('short', 'halfLenght', 'lenght', 'man');
                $hasSelection = false;
                $shipping_subtotal = 0;
                
                foreach($inputs as $input) {
                    if(!empty($_GET[$input])) {
                        $hasSelection = true;
                        foreach($_GET[$input] as $result) {
                            $shipping_subtotal += $result;
                        }
                    }
                }
                
                if($hasSelection) {
                    echo('<div class="text-center"><h1 class="modalText">A választottak alapján az eredmény: <p class="modalPriceText"><u>'.number_format($shipping_subtotal).'Ft</u></p></h1></div>');
                } else {
                    echo "<b class='warningText'>Kérjük, válasszon legalább egy lehetőséget.</b>";
                }
            }
            ?>
    </div>
  
    <!-- Gender Modal -->

    <div class="modal fade" id="genderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="genderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
            <h1 class="modal-title fs-5 modalText" id="genderModalLabel">Kérjük válasszon:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-primary">
                <form> <!-- itt választja ki a felhasználó a nemét  -->
                    <img class="rounded mx-auto d-block" src="./img/womanicon.png" alt="womanicon">
                    <button type="button" class="myButton2 btn btn-success" data-bs-toggle="modal" data-bs-target="#hairModal">Nő</button>
                    <img class="rounded mx-auto d-block" src="./img/manicon.png" alt="manicon">
                    <button type="button" class="myButton2 btn btn-success" data-bs-toggle="modal" data-bs-target="#manModal">Férfi</button>
                </form>
            </div>
            <div class="modal-footer bg-dark text-primary">
            <button type="button" class="btn2 btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
            </div>
        </div>
        </div>
    </div>

    <!-- HairSelect Modal -->

    <div class="modal fade" id="hairModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="hairModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
            <h1 class="modal-title fs-5 modalText" id="hairModalLabel">Kérjük válasszon:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-primary">
                <form> <!-- itt választja ki a felhasználó a hajhosszát -->
                    <img class="rounded mx-auto d-block" src="./img/rovid.png" alt="rovid">
                    <button type="button" class="myButton2 btn btn-success" data-bs-toggle="modal" data-bs-target="#shortModal">Rövid</button>
                    <img class="rounded mx-auto d-block" src="./img/felhosszu.png" alt="felhosszu">
                    <button type="button" class="myButton2 btn btn-success" data-bs-toggle="modal" data-bs-target="#halfLenghtModal">Félhosszú</button>
                    <img class="rounded mx-auto d-block" src="./img/hosszu.png" alt="hosszu">
                    <button type="button" class="myButton2 btn btn-success" data-bs-toggle="modal" data-bs-target="#lenghtModal">Hosszú</button>
                </form>
            </div>
            <div class="modal-footer bg-dark text-primary">
            <button type="button" class="btn2 btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Short Hair Modal -->

    <div class="modal fade" id="shortModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="shortModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
            <h1 class="modal-title fs-5 modalText" id="shortModalLabel">Kérjük válasszon:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-primary">
                <form method="GET" id="short_Form">
                    <?php
                    $shortHair = "SELECT `name`,`Rövid` FROM `pricelist` WHERE `F/N`='N'"; 
                    $eredmeny  = mysqli_query($con, $shortHair);
                    if(mysqli_num_rows($eredmeny) > 0) 
                    {       
                            while ($row=mysqli_fetch_array($eredmeny)) // Rövid hajak árai betöltése adatbázisból checkboxba //
                            {if($row["Rövid"] != 0){
                                echo "<br><div class='input-group mb-3'>
                                <label>
                                <p class='modalText'>$row[name]:&nbsp</p>
                                </label>
                                <label>
                                <p class='modalPriceText'>&nbsp$row[Rövid]Ft</p>
                                </label>&emsp;
                                <input class='form-check-input' type='checkbox' name='short[]' value='$row[Rövid]'>
                                </div><hr class='modalHR'>";
                            }
                             
                        } 
                            echo "</select>"; 
                    } 
                    else {  echo "Nincs eredmény"; } 
                    ?>
               </form>
            </div>
            <div class="modal-footer bg-dark text-primary">
            <button type="button" class="btn2 btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
            <button type="submit" name="submit" form="short_Form" class="btn btn-success">Kész</button>
            </div>
        </div>
        </div>
    </div>

    <!-- HalfLenght Hair Modal -->

    <div class="modal fade" id="halfLenghtModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="halfLenghtModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
            <h1 class="modal-title fs-5 modalText" id="halfLenghtModal">Kérjük válasszon:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-primary">
                <form method="GET" id="halfLenght_Form">
                <?php
                    $halfLenghtHair = "SELECT `name`,`Félhosszú` FROM `pricelist` WHERE `F/N`='N'"; 
                    $eredmeny  = mysqli_query($con, $halfLenghtHair); 
                    if(mysqli_num_rows($eredmeny) > 0) 
                    {       
                            while ($row=mysqli_fetch_array($eredmeny)) // Félhosszú hajak árai betöltése adatbázisból checkboxba //
                            {if($row["Félhosszú"] != 0){
                                echo "<br><div class='input-group mb-3'>
                                <label>
                                <p class='modalText'>$row[name]:&nbsp</p>
                                </label>
                                <label>
                                <p class='modalPriceText'>&nbsp$row[Félhosszú]Ft</p>
                                </label>&emsp;
                                <input class='form-check-input' type='checkbox' name='halfLenght[]' value='$row[Félhosszú]'>
                                </div><hr class='modalHR'>";  }
                            } 
                            echo "</select>"; 
                    } 
                    else {  echo "Nincs eredmény"; }
                ?>
               </form>
            </div>
            <div class="modal-footer bg-dark text-primary">
            <button type="button" class="btn2 btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
            <button type="submit" form="halfLenght_Form" name="submit" class="btn btn-success">Kész</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Lenght Hair Modal -->

    <div class="modal fade" id="lenghtModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="lenghtModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
            <h1 class="modal-title fs-5 modalText" id="lenghtModalLabel">Kérjük válasszon:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-primary">
                <form method="GET" id="lenght_Form">
                <?php
                    $lenghtHair = "SELECT `name`,`Hosszú` FROM `pricelist` WHERE `F/N`='N'"; 
                    $eredmeny  = mysqli_query($con, $lenghtHair); 
                    if(mysqli_num_rows($eredmeny) > 0) 
                    {          
                            while ($row=mysqli_fetch_array($eredmeny)) // Hosszú hajak árai betöltése adatbázisból checkboxba //
                            {if($row["Hosszú"] != 0){ 
                                echo "<br><div class='input-group mb-3'>
                                <label>
                                <p class='modalText'>$row[name]:&nbsp</p>
                                </label>
                                <label>
                                <p class='modalPriceText'>&nbsp$row[Hosszú]Ft</p>
                                </label>&emsp;
                                <input class='form-check-input' type='checkbox' name='lenght[]' value='$row[Hosszú]'>
                                </div><hr class='modalHR'>";  }
                            } 
                            echo "</select>"; 
                    } 
                    else {  echo "Nincs eredmény"; } 
                ?>
               </form>
            </div>
            <div class="modal-footer bg-dark text-primary">
            <button type="button" class="btn2 btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
            <button type="submit" form="lenght_Form" name="submit" class="btn btn-success">Kész</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Man Hair Modal -->

    <div class="modal fade" id="manModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
            <h1 class="modal-title fs-5 modalText" id="manModalLabel">Kérjük válasszon:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-primary">
                <form method="GET" id="man_Form">
                <?php
                    $manHair = "SELECT `name`,`price` FROM `pricelist` WHERE `F/N`='F'"; 
                    $eredmeny  = mysqli_query($con, $manHair);     
                    if(mysqli_num_rows($eredmeny) > 0) 
                    {           
                            while ($row=mysqli_fetch_array($eredmeny)) // Férfi hajak árai betöltése adatbázisból checkboxba //
                            {   
                                echo "<br><div class='input-group mb-3'>
                                <label>
                                <p class='modalText'>$row[name]:&nbsp</p>
                                </label>
                                <label>
                                <p class='modalPriceText'>&nbsp$row[price]Ft</p>
                                </label>&emsp;
                                <input class='form-check-input' type='checkbox' name='man[]' value='$row[price]'>
                                </div><hr class='modalHR'>
                                </select>";
                            } 
                    } 
                    else {  echo "Nincs eredmény"; } 
                ?>
               </form>
            </div>
            <div class="modal-footer bg-dark text-primary">
            <button type="button" class="btn2 btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
            <button type="submit" form="man_Form" name="submit" class="btn btn-success">Kész</button>
            </div>
        </div>
        </div>
    </div>

    </div>
    <footer class="footerContainer">
        <div id="contact" class="contact">
            <br>
            <a href="https://www.facebook.com/badicsneviki" target="_blank" class="fa fa-facebook"></a>
            <br>
            <a href="https://www.instagram.com/fodrasz.viki/" target="_blank" class="fa fa-instagram"></a>
            <br>
            <a href="tel:06304140703" target="_blank" class="fa fa-whatsapp"></a>
            <a href="tel:06304140703" class="phone">06-30-414-0703</a>
        </div>    
        <div class="open-time">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Időpont kérhető:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hétfő</td>
                        <td style="color: red; text-align: center;">Zárva</td>
                    </tr>
                    <tr>
                        <td>Kedd</td>
                        <td>7:00 – 18:00</td>
                    </tr>
                    <tr>
                        <td>Szerda</td>
                        <td>8:00 – 17:00</td>
                    </tr>
                    <tr>
                        <td>Csütörtök</td>
                        <td>7:00 – 18:00</td>
                    </tr>
                    <tr>
                        <td>Péntek</td>
                        <td>8:00 – 17:00</td>
                    </tr>
                    <tr>
                        <td>Szombat</td>
                        <td>6:00 – 12:00</td>
                    </tr>
                    <tr>
                        <td>Vasárnap</td>
                        <td style="color: red; text-align: center;">Zárva</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </footer>
    <br><br>
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Érd Budai út 22&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdflist.com">Pdflist.com</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>