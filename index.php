<?php
    $stringa = "        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam amet reiciendis in, quasi mollitia et. Culpa repellendus molestiae asperiores pariatur deleniti repellat nisi laboriosam nemo et, quas aliquid eaque reprehenderit?";

    echo strlen($stringa);

    explode( ',', $stringa );

    var_dump( explode( ',', $stringa ) );

    $stringaModificata = str_replace('Culpa', '****', $stringa);

    echo strlen($stringaModificata)

?>








<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP BadWords</title>
        <!-- link Bootstrap -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ'        crossorigin='anonymous'>
        <!-- link my style css -->
        <!-- <link rel='stylesheet' href='./assets/css/style.css'> -->
    </head>
    <body>
        <!-- script Bootstrap -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe'   crossorigin='anonymous'></script>
        <!-- my script js -->
        <!-- <script src='./assets/js/main.js'></script> -->
    </body>
</html>