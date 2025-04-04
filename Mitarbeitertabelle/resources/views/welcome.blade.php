<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <style>
            body {
                background-color: #242537;
                display: flex;
                justify-content: center;
                box-sizing: border-box;
            }

            .cont {
                display: flex;
                flex-direction: column;
                width: 500px;
                gap: 50px;
            }
            

            button {
                height: 50px;
            }


        </style>


        
    </head>


    <body>
        
    <div class="cont">
    <h1>Mitarbeitertabelle</h1>
        <label for="listenItem">Neuer Mitarbeiter</label> <br>
        <input type="text" name="lsitenItem" style="background-color: white;">
        <button></button>
        </div>
    </body>
</html>
