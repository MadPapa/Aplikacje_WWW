<?php 
session_start();
$_SESSION['active'] = true;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Adrian Sidor">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="img/orange_favicon.ico" type="image/x-icon">
    <script src="./js/kolorujtlo.js" type="text/javascript"></script>
    <script src="./js/timedate.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Orange world</title>
</head>
<body>
    <div id="container">
        <header>
            <nav>
                <ul class="nav-items">
                    <li class="active"><a href="index.php?page=home">home</a></li>
                    <li><a href="index.php?page=fun_fact">fun fuct</a></li>
                    <li><a href="index.php?page=species">species</a></li>
                    <li><a href="index.php?page=events">events</a></li>
                    <li><a href="index.php?page=store">store</a></li>
                    <li><a href="index.php?page=about">about</a></li>
                    <li><a href="index.php?page=movies">movies</a></li>
                    <li><a href="mailto:162580@student.uwm.edu.pl?/Send mail">contact</a></li>
                </ul>
            </nav>
        </header>
        <?php
            error_reporting(E_ALL^E_NOTICE^E_WARNING);
            $prefix = './html/';
            $pageName = $_GET['page'];
            $suffix = '.html';
            $page = $prefix.$pageName.$suffix;

            if(file_exists($page)){
                include($page);
            }
            else{
                include($prefix.'error.html');
            }
        ?>
        <footer>
            <div class="footer-text">
                <p>AS &copy 2022</p>
            </div>
            <div class="footer-items">
                <div><a href="index.php?page=home">home</a></div>
                <div><a href="index.php?page=fun_fact">fun fuct</a></div>
                <div><a href="index.php?page=species">species</a></div>
                <div><a href="index.php?page=events">events</a></div>
                <div><a href="index.php?page=store">store</a></div>
                <div><a href="index.php?page=about">about</a></div>
                <div><a href="index.php?page=movies">movies</a></div>
                <div><a href="mailto:162580@student.uwm.edu.pl?/Send mail">contact</a></div>
            </div>
        </footer>
    </div>
    <?php
        $nrIndeksu = '162580';
        $nrGrupy = '4';

        echo "Autor: $nrIndeksu grupa: $nrGrupy<br>"
    ?>
</body>
</html>