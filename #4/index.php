<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="GET">
        <input name="person">
        <button>SUBMIT</button>
    </form>

    <?php 
    
    $name = $_GET['person'];
    echo $name." is a student of SAGU Foundation";
    
    ?>

</body>
</html>