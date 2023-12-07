
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/3db29a92ea.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <?php require_once("./plantillas/header.php") ?>
</header>
<main>
<div id="contenItemCarrousel">
    <div class="itemCarrousel" id="itemCarrousel-1">
        <div class="tarjetaCarrousel" id="tarjetaCarrousel-1">
            <img src="./img/nuevas1.jfif" alt="item1-carrousel">
        </div>
        <div class="flechasCarrousel">
        <a href="#itemCarrousel-3"> 
        <i class="fa-sharp fa-solid fa-angle-left"></i>
            </a>
            <a href="#itemCarrousel-2">
            <i class="fa-sharp fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="itemCarrousel" id="itemCarrousel-2">
        <div class="tarjetaCarrousel" id="tarjetaCarrousel-2">
        <img src="./img/nuevas2.jfif" alt="item2-carrousel">
        </div>
        <div class="flechasCarrousel">
            <a href="#itemCarrousel-1">
            <i class="fa-sharp fa-solid fa-angle-left"></i>
            </a>
            <a href="#itemCarrousel-3">
            <i class="fa-sharp fa-solid fa-angle-right"></i>
            </a>
            
        </div>
    </div>
    <div class="itemCarrousel" id="itemCarrousel-3">
        <div class="tarjetaCarrousel" id="tarjetaCarrousel-3">
            <img src="./img/nuevas3.jfif" alt="item3-carrousel">
        </div>
        <div class="flechasCarrousel">
        <a href="#itemCarrousel-2"> 
        <i class="fa-sharp fa-solid fa-angle-left"></i>
            </a>
            <a href="#itemCarrousel-1">
            <i class="fa-sharp fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
<div id="contenPuntos">
<a class="circle" href="#itemCarrousel-1"><i class="fa-sharp fa-solid fa-circle"></i></a>
<a class="circle" href="#itemCarrousel-2"><i class="fa-sharp fa-solid fa-circle"></i></a>
<a class="circle" href="#itemCarrousel-3"><i class="fa-sharp fa-solid fa-circle"></i></a>
</div>
</main>

<footer>
    <?php require_once("./plantillas/footer.php") ?>
</footer>

</body>
</html>
