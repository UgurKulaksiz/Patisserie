<?php
session_start();
require './admin/lib/php/admin_liste_include.php';
/*
include('./admin/lib/php/pgConnect.php');
$cnx = new PDO($dsn, $user, $password);
var_dump($cnx);
*/
?>

<!doctype html>
<html>
<head>
    <title>Demo Patisserie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./lib/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<header class="image_header">

</header>

<section id="colGauche">
    <?php
    if (file_exists('./lib/Pages/menu_public.php')) {
        include('./lib/Pages/menu_public.php');
    }
    ?>

</section>

<section id="contenu">
    <div id="main">
        <?php
        if (!isset($_SESSION['page'])) { //On vient d'arriver sur le site
            $_SESSION['page'] = "accueil.php";
        }
        if (isset($_GET['page'])) {
            $_SESSION ['page'] = $_GET['page'];
        }
        $path = './pages/' . $_SESSION['page'];
        //print $path . "<br>";
        if (file_exists($path)) {
            include $path;
        } else {
            //include ('./pages/Error404.php');
        }
        ?>
    </div>
</section>

<footer>
    Ugur Kulaksiz <br>Responsable
</footer>

</body>
</html>
