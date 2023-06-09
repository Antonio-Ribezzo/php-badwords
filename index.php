<?php
   

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
        <main class="d-flex justify-content-center align-items-center">
            <div class="container">
                <h1 class="text-center mb-5">Bad Words</h1>
                <!-- form che porta a result.php con metodo GET  -->
                <form action="result.php" method="GET">
                    <div class="mb-3">
                        <label for="TextArea" class="form-label">Testo</label>
                        <textarea class="form-control" id="TextArea" rows="6" placeholder="Inserisci il testo" name="paragrafo"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Input1" class="form-label">Parola da censurare</label>
                        <input class="form-control" id="Input1" placeholder="Digita la parola che vuoi censurare" name="badWord">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Invia</button>
                    </div>
                </form>
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

            main{
                height: 100vh;
            }
        </style>
    </body>
</html>