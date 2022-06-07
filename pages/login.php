<?php require_once('connexiondb.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css" />
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
        
    </head>
    <body>
        <div id="container">
            <form method="POST" action="" class="formulaire">
                <h1>Connexion</h1>
                <label><b>Nom Utilisateur</b></label>
                <input type="text" placeholder="entrer le nom d'utilisateur"name="txtlogin"
                required class="zonetext"/>

                <label><b>Mot de passe:</b></label>
                <input type="password" placeholder="entrer le mot de passe " name="txtpw"
                required class="zonetext"/>

                <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit"/>

                <p class="text-right">
                    <a href="InitialiserPwd.php">Mot de passe Oublié</a>

                    &nbsp &nbsp

                    <a href="nouvelUtilisateur.php">Créer un compte</a>
                </p>

                <?php
                if(isset($_POST['btlogin'])){
                    $req="select * from utilisateur where login='".$_POST['txtlogin']."' and
                    motdepass=MD5('".$_POST['txtpw']."')";
                    $ps=$pdo->prepare($req);
                    $ps->execute();
                    $nbreligne = $ps->fetch(PDO::FETCH_BOTH);
                    if($nbreligne>1){
                            session_start();
                            $_SESSION['monLogin']=$_POST['txtlogin'];
                            $_SESSION['pass']=$_POST['txtpw'];
                            /***rediriger vers une autre page */
                            if($nbreligne['idprofil']==1 and $nbreligne['etat']==1){
                                /***rediriger vers page d'acceuil admin*/
                                header("location:acceuil.php");
                            } else if($nbreligne['idprofil']==2 and $nbreligne['etat']==1){
                                 /***rediriger vers page d'acceuil client*/
                                header("location:pageblanche.php");
                            }
                        }
                       else{
                            echo"<font color='red'>login ou mot de pass incorrect </font>";
                        }
                }
                    ?>
            </form>    
            
        <div>
         
    </body>
</html>









