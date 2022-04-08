<!DOCTYPE html>
<?php
    if($_SERVER["REQUEST_METHOD"] ==="POST"){
        if(isset($_POST["button"])){
            $name = $_POST["name"];
            $value = $_POST["value"];
            setcookie($name, $value, time()+ (86400 * 30), "/");
        }
    }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="name" placeholder="name" />
        <input type="text" name="value" placeholder="value" />
        <button name="button" type="submit">Create cookie</button>
    </form>
    <?php
        echo "<ul>";
        foreach($_COOKIE as $key => $value){
            echo "<li> $key: $value</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>