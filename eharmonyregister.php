<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eharmonyRegister</title>
</head>
<style>
    table 
    {
        width: 500px;
        margin: 30px auto;
        border: 5px solid grey;
    }
    td 
    {
        text-align: center;
        border: 1px solid grey;
        padding: 10px;
    }
</style>
<body>

    <h1>RESULT</h1>
    <table>
    <?php
    
    var_dump($_REQUEST);

    $num = 1;
    foreach ($_REQUEST as $thisKey => $thisVal) {
        echo("<tr><td>{$num}: {$thisKey}</td><td>{$thisVal}</td></tr>\n");
        $num++;
    }
    
    $bigString = implode("|", $_REQUEST);
    echo("bigString:" . $bigString);
    

    file_put_contents("eharmonyregister1.php", $bigString . PHP_EOL, FILE_APPEND);
    ?>
    </table>
</body>
</html>