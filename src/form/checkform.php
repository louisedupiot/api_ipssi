<?php
session_start();

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        
        /* Connexion à une base MySQL */
        $dsn = 'mysql:dbname=api_v2;host=127.0.0.1;port=3306';
        $user = 'root';
        $pwd = '';

        $dbh = new PDO($dsn, $user, $pwd);
    
        $username = $_POST['username']; 
        $password = $_POST['password'];

        if($username !== "" && $password !== "")
        {
            
            try{
            $req = $dbh->prepare("SELECT count(*) as log, id_user, nom, prenom FROM users where email = '$username' and pwd ='$password'");
            $req->execute();
            $count = $req->fetch(PDO::FETCH_ASSOC); 
            //var_dump($count);

           
            }
            catch (PDOException $e)
            {
                die("erreur n°".$e->getCode().':'.$e->getMessage());
                
            }
            if($count["log"] != 0) 
                {
                /* $req2= $dbh ->prepare("SELECT nom, prenom FROM users where email ='$username'");
                $req2->execute(); */


                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['nom'] = $count['nom'];
                $_SESSION['prenom'] = $count['prenom'];
                $_SESSION['id_user'] = $count['id_user'];
                //test groupe user
                //$_SESSION['groupes']= "WIKI_READER";
                 
                               
                header('Location: ../main/intranet.php');
                
                }
            else
                {
                    
                    header('Location: formulaire.php?erreur=1');
                     //utilisateur ou mot de passe incorrect
                }
        }
            else
            {
            header('Location: formulaire.php?erreur=2'); 
            //utilisateur ou mot de passe vide
            }
    }
    else
    {

    header('Location: formulaire.php');
    }
    

?>