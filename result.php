<?php

    $paragraph = $_GET['paragrafo'];

    $badWord = $_GET['badWord'];

    $censuredParagraph = str_replace($badWord , '***', $paragraph);
   

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
        <main class="d-flex justify-content-center align-items-center p-3">
            <div class="container">
                <h1 class="text-center mb-5">Bad Words</h1>
                <!-- paragrafo e lunghezza -->
                <div class="container1 rounded p-3 mb-3">
                    <h2>Il paragrafo senza censura è il seguente:</h2>
                    <p class="fs-2 fst-italic text-center my-3">
                       "<?php echo $paragraph ?>" 
                    </p>
                    <span class="text-center d-block">La sua lunghezza è di <span class="fw-bolder"> <?php echo strlen($paragraph) ?></span> caratteri spazi inclusi</span>
                </div>

                <!-- paragrafo censurato -->
                <div class="container1 rounded p-3">
                    <h2>Il paragrafo censurato è il seguente:</h2>
                    <p class="fs-2 fst-italic text-center my-3">
                        "<?php echo $censuredParagraph ?>"
                    </p>
                    <span class="text-center d-block">La sua lunghezza è di <span class="fw-bolder"> <?php echo strlen($censuredParagraph) ?> </span>caratteri spazi inclusi</span>
                </div>
            </div>
        </main>
        <!-- script Bootstrap -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe'   crossorigin='anonymous'></script>
        <!-- my script js -->
        <!-- <script src='./assets/js/main.js'></script> -->

        <style>
            body{
                background-color: orange;
            }

            .container1{
                background-color: rgba(0, 0, 0, 0.3);
            }
        </style>
    </body>
</html>