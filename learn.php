<?php
error_reporting(E_ALL); // Error checking
ini_set('display_errors', 1);

require_once('includes/dbh.inc.php'); // Reference to file
require_once('includes/cloudsoutput.inc.php'); // Reference to file
?>
<style>
<?php
include 'css/learn.css'; // Reference to file
?>
</style>

<!DOCTYPE html>
<html lang="en"> <!--Language is english-->
<head> <!--Head-->
    <meta charset="UTF-8"> <!--Allows æøå-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Viewport-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"> <!--To be able to use icons-->
    <link rel="stylesheet" href="css/learn.css"> <!--To be sure-->
    <title>Learn</title> <!--Window title-->
</head>
<body> <!--Body-->
    <header>
        <nav> <!--Navigation-->
            <a href="home.php" class="leftie">Home</a>
            <a href="weather.php">Weather</a>
            <a href="#" class="active">Learn</a>
            <a href="#" class="menu">Menu</a>
        </nav>
    </header>

    <hr class="full">

    <main>
        <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
        <div class="cloud-table">
            <table> <!--Making a table with contents and data from my database-->
                <tr>
                    <!--Different things that needs values-->
                    <th>Cloud type</th>
                    <th>Min. <br>Temp.</th>
                    <th>Max. <br>Temp.</th>
                    <th>Min. <br>Humidity</th>
                    <th>Max. <br>Humidity</th>
                    <th>Min. <br>HFS<i class='bx bx-message-dots'></i></th>
                    <th>Max. <br>HFS<i class='bx bx-message-dots'></i></th>
                    <th>Rain?</th>
                    <th>Note:</th>
                </tr>
                <!--Doing it with every cloud... This could definitely be done in a way that would be shorter and optimized, but first it needs to work, then it can be optimized-->
                <tr class="nr1">
                    <?php
                    $object = new Cirrus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">There is no need for an umbrella, but do go out and enjoy the nice weather! Look out for wind as it might get cold.</td>
                </tr>

                <tr class="nr2">
                    <?php
                    $object = new Cumulus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">It should be clear, so don't let your mood get cloudy!</td>
                </tr>

                <tr class="nr1">
                    <?php
                    $object = new Stratus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">This is your time! Take that movie moment and make it yours by dancing in the rain! Or you could bring an umbrella and walk under it with a loved one!</td>
                </tr>

                <tr class="nr2">
                    <?php
                    $object = new Nimbostratus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">Go get that umbrella! We're going to be Mary Poppings in heavy rain!</td>
                </tr>

                <tr class="nr1">
                    <?php
                    $object = new Cumulonimbus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">You might want to stay inside for this one. Cumulonimbus is "associated with thunderstorms, heavy rain, lightning, and sometimes severe weather." <i class='bx bx-sad' id="sad"></i></td>
                </tr>

                <tr class="nr2">
                    <?php
                    $object = new Altocumulus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">It's nice weather, go look at the pretty sky, but look out for the temperature and wind, as it might be cold, but hey! At least the sky is pretty!</td>
                </tr>

                <tr class="nr1">
                    <?php
                    $object = new Stratocumulus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">Lookout! Just kidding, there's no rain coming from these ones!</td>
                </tr>

                <tr class="nr2">
                    <?php
                    $object = new Cirrostratus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">These are long, thin clouds, which can still cast shadows! How cool is that?!</td>
                </tr>

                <tr class="nr1">
                    <?php
                    $object = new Cirrocumulus;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">This is my favorite! It's called macakerel sky, because of its fish scale like pattern</td>
                </tr>

                <tr class="nr2">
                    <?php
                    $object = new Contrails;
                    echo "<td>";
                    echo $object->getAllClouds();
                    echo "</td>";
                    echo "<td>";
                    echo $object->lTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hTemp() . "°C";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hHumid() . "%";
                    echo "</td>";
                    echo "<td>";
                    echo $object->lSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->hSurf() . "km";
                    echo "</td>";
                    echo "<td>";
                    echo $object->rain();
                    echo "</td>";
                    ?>
                    <td class="noting">The last one might be my favorite, but these are interesting, as they are made by aircrafts and their engines!</td>
                </tr>
            </table>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container1">
                <div class="datacontainer">
                    <!--Making a description and giving information about every cloud. Again, could've been shorter, buttttt yk-->
                    <?php
                    $object = new Cirrus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container2">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/cirrus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container2">
                <div class="datacontainer">
                    <?php
                    $object = new Cumulus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container1">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/cumulus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container1">
                <div class="datacontainer">
                    <?php
                    $object = new Stratus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container2">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/stratus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container2">
                <div class="datacontainer">
                    <?php
                    $object = new Nimbostratus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container1">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/nimbostratus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container1">
                <div class="datacontainer">
                    <?php
                    $object = new Cumulonimbus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container2">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/cumulonimbus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container2">
                <div class="datacontainer">
                    <?php
                    $object = new Altocumulus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container1">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/altocumulus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container1">
                <div class="datacontainer">
                    <?php
                    $object = new Stratocumulus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container2">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/stratocumulus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container2">
                <div class="datacontainer">
                    <?php
                    $object = new Cirrostratus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container1">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/cirrostratus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container1">
                <div class="datacontainer">
                    <?php
                    $object = new Cirrocumulus;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container2">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/cirrocumulus.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">

        <div class="megatainer">
            <div class="container2">
                <div class="datacontainer">
                    <?php
                    $object = new Contrails;
                    echo "<h1>" . $object->getAllClouds() . "-clouds</h1>";
                    echo "<h4 class='classif'>" . $object->getClassif() . "</h4>";
                    echo "<hr class='ttfrom'>";
                    echo "<div class='description'>";
                        echo "<h3 class='title'>Description</h3><br>";
                        echo "<p>" . $object->getCloudDescription() . "</p>";
                    echo "</div>";
                    echo "<div class='description'><h3 class='title'>Other</h3><br><p>" . $object->getOther() . "</p></div>";
                    ?>
                    <table class="restdata">
                        <tr>
                            <th>Min. Temp.</th>
                            <th>Max. Temp.</th>
                            <th>Min. Humidity</th>
                            <th>Max. Humidity</th>
                            <th>Min. HFS<i class='bx bx-message-dots'></i></th>
                            <th>Max. HFS<i class='bx bx-message-dots'></i></th>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $object->lTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hTemp() . "°C";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hHumid() . "%";
                            echo "</td>";
                            echo "<td>";
                            echo $object->lSurf() . "km";
                            echo "</td>";
                            echo "<td>";
                            echo $object->hSurf() . "km";
                            echo "</td>";
                            ?>
                        </tr>
                    </table>
                    <p class="note"><i class='bx bx-message-dots'></i>HFS: Height From Surface</p>
                </div>
            </div>
            <div class="container1">
                <div class="datacontainer">
                    <div class="positionimg">
                        <img src="css/images/contrails.png" alt="" id="rightCloud">
                    </div>
                </div>
            </div>
        </div>

        <hr class="full">
        <footer> <!--Footer-->
            <p>If you want to check out the weather in a certain location, click <a href="weather.php">here</a></p>
            <p>Want to go home?, click <a href="home.php">here</a></p>
        </footer>
    </main>
</body>
</html>
<!--End code-->
