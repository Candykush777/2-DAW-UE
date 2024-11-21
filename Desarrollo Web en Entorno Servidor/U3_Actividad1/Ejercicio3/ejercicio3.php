<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h2>Resultado</h2>
        </div>
        <div id="content">
      
        <?php



        echo $_GET['kb'], " <b>kb introducidos son : </b>", round($_GET['kb'] * 1000),"<b> Mb . </b>";

        ?></div>
    </div>
</body>

</html>