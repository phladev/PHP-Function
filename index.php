<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP EXERCISE</title>
</head>
<body>
    <div class="conteiner">
        <div class="center">
            <?php 
                function soma(...$parameters) {
                    $tot = func_num_args();
                    $sum = 0;
                    for ($i = 0; $i < $tot; $i++) { 
                        $sum += $parameters[$i];
                    }
                    return $sum;
                }
                $result = soma(5,2,1,10,14,2,42,31);
                echo "<p>A soma desses valores é igual a: $result</p>";
            ?>
        </div>
    </div>
</body>
</html>