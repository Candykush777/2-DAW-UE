<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <div id="container">

<div id="header">
<h2>Resultado : </h2>
</div>
<div id="content">
<?php  
echo $_POST ['euros'], " euros son ", round($_POST['euros'] * 166,386), " pesetas. ";
?>


</div>








    </div>
    
</body>
</html>