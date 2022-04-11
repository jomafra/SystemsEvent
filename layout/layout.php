<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="#;URL=./index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    -->
    <title>System's Event</title>
    <style>
        /* Fondo de pagina */
        body {
            background-color:black;
            background-image: url();
            background-position:top;
            background-size:100% 100%;
            background-attachment:fixed;
            background-repeat:no-repeat;   
        }
        /* Centrado manual login */
        /* .container { margin-top: 200px; } */
    </style>
</head>
<body>
<header>
    <?php require_once ("header.php"); ?>
</header>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-3 mt-2">
                <?php if (($_SESSION['USUARIO'])==($admin));{ require_once("ladoizq.php");} ?>
            </div>
            <div class="col-lg-1">

            </div>
            <div class="col-lg-7 mt-3">
                <h3 class="text-white text-center">CASOS ABIERTOS</h3>
                <?php require_once("principal.php"); ?>
            </div>
            <div class="col-lg-1">

            </div>
        </div>
        <!-- <footer class="">
            <?php require_once('footer.php'); ?>
        </footer>-->
    </div> 
</body>
</html>