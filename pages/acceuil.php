<?php
     session_start();
     require_once("connexiondb.php");
     //notre requete
     $req="select * from produit LIMIT 10";
     $ps=$pdo->prepare($req);
     $ps->execute();  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <!---pour le font et favorise aussi l'affichage des icone de font awesome et boxicons-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
         <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="../css/style.css">

    </head>
    
    <body>
    <?php include("header.php");?>
    
    <section class="section">
        <div class="titre">
            <h1>
                <span>Nouvelles </span>Arrivages
            </h1>
        </div>
         <div class="centre-produit">
         <?php    
                $chemin="../";
                /**tant qu'il y'a des produits **/
                  while($produit = $ps->fetch(PDO::FETCH_BOTH)){ ?>
            <div class="produit">
                <div class="img-cover">
                    <img src="<?php echo $chemin.$produit['imageproduit'] ?> " alt="image">
                </div>
                
              
                <p><?php echo $produit['nomproduit'] ?> </p>
                <div class="rating">
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i> 
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                </div>
                 <div class="prix"> Prix unitaire : <?php echo $produit['prixunit'];?> $</div>
             </div> 
          
         <?php } ?>


        </div>

    </section>

    <?php include("footer.php");?>
    </body>
</html>