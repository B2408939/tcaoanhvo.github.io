<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method= "POST">
    Tên: <input type = "text" name = "ten">
    <input type = "submit" value = "Gui">
</form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $ten = htmlspecialchars($_POST["ten"]);
        echo "<br>" . "Xin chao " . $ten;
    }
    ?>
</body>
</html>