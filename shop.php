<?php
if(isset($_SESSION['perm']) && $_SESSION['perm'] != ""){
    $session_perm = $_SESSION['perm'];
}else{
    $session_perm = "";
}
?>  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <div><a href="index.html"><img src="image/logo.png" alt="" class="logo_navbar"></a></div>
        <ul>
            <a href="shop.php" class="active"><li>Shop</li></a>
            <a href="assos.php"><li>Assos</li></a>
            <?php
            if($session_perm != ""){
                echo '<a href="compte.php"><li>Compte</li></a>';
            } else{
                echo '<a href="login.php"><li>login</li></a>';
            }
            ?>
        </ul>
    </nav>
</body>
</html>