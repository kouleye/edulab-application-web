
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>header</title>
        
    </head>
    <body>
        <header class="header">
        <?php include("menu.php");?>
        <div class="banniere">
            <div class="banniere-contenu d-flex container">
                <div class="gauche">
                    <span class="Sous-titre">
                        OBTENEZ DES VETEMENTS ET ACCESSOIRES POUR FEMMES</span>
                        <h1 class="titre">
                            jusqu'a 
                            <span class="couleur">20% de</br>
                                reduction</span> sur </br>
                                nos offres </br>de la semaine
                        </h1>
                        <h5>Du 12 janvier au 25 juillet 2022</h5>
                        <a href="#" class="btn">ACHETER MAINTENANT</a>
                </div>    
                <div class="droit">
                   <!-- <video autoplay="autoplay" class="video_entete" loop=TRUE muted=TRUE>-->
                    <video autoplay="autoplay" class="video_entete" loop=TRUE >
                        <source src="../image/vêtements_accessoires.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>
    
    </header>
    </body>
</html>