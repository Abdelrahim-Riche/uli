<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div><a href="index.html"><img src="image/logo.png" alt="" class="logo_navbar"></a></div>
        <ul>
            <a href="shop.php"><li>Shop</li></a>
            <a href="assos.php"><li>Assos</li></a>
            <a href="login.php" class="active"><li>login</li></a>
        </ul>
    </nav>

    <form action="login.php">
        <div>
            <h1>Connexion</h1><hr>
            <div>
                <label>Login :</label>
                <input type="text" name="login" required>
                <label>Mot de Passe :</label>
                <input type="password" name="password" required>
                <input type="submit" class="form_submit">
            </div>
        </div>
    </form>
</body>
</html>