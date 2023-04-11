<?php 
$one = 'hello!';
$two = "Alisa $one"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Привет мир</p>
<?php 

echo "привет мир \n";
echo $two;
?>
    <p><?php echo $one ?></p>
    <p><?php echo $two ?></p>
</body>
</html>
