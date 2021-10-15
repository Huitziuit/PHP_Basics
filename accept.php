<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Radiohead Items</title>
    </head>
    <body class="bg-dark"> 

        <div class="container text-center text-white" >
            <img class="img-fluid img-rounded" src="img/r1.png" width="100%">
            <h1 class="text-white ">Congratulations</h1><br><br>
            <p class="display-6" >You were our buyer number</p>
            <?php
                include("phpFunctions.php");
                
                $all=$_POST["all"];

                registerSale($all);
                $last=lastID();

                echo '<p class="display-6">'.$last.'</p>';

            ?>
            <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DX1XDyq5cTk95" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            <br><br><br>
            <a type="button" class="btn btn-primary" href="items.html" target="contenet">Items</a>
            <br><br><br> 
        </div>
    </body>
</html>

