<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Connexion </title>
        <link rel="stylesheet" href="../assets/style.css" media="screen" type="text/css" />
        <!-- <script src="script.js"></script> -->
    </head>

    <body>
        <div id="container">
            
            <form action="checkform.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2) {
                        echo " <p style='color:red'>  Utilisateur ou mot de passe incorrect</p>";
                    }   
                }
                ?>
            </form>
            
        </div>

    </body>
</html>