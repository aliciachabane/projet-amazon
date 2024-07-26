<?php

include("produits.php");
$numarticle= count($produits);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil et article</title>
    <link rel="stylesheet" href="amazon.css">
</head>
<body>
    <h1 class="titre"> Lotus spirit  </h1>
    
    <img  class="logo" src="img\logo2.jpg" >

<div class="tableau1">

<div><p>La rue, La maison jaune Tableau de van gogh</p>
<div class="T1"><img  src="img\la rue la maison jaune" alt=""></div>
<div class="button" ><a href button type="submit">voir le produit</button></div>
</div>



<div ><p>La nuit étoilée Tableau de van gogh</p>
<div class="T2"><img  src="img\van-gog-la-nuit-etoilée.jpg" alt="" ></div>
<div class="button" ><a href button type="submit">voir le produit</button></div>
</div>



<div><p>LE CRI</p>
<div class="T3"><img src="img\tableauchat.jpg" alt="" ></div>
<div class="button" ><a href button type="submit">voir le produit</button></div>
</div>

<div><p>Skull Tableau de van gogh</p>
<div class="T4"><img  src="img\van gogh skull.jpg" alt=""></div>
<div class="button" ><a href button type="submit">voir le produit</button></div>
</div>

<div ><p>Vu de Montmartre Tableau de van gogh</p>
<div class="T5"><img  src="img\van-gog-vue-de-montmartre.jpg" alt=""> </div>
<div class="button1" ><a href button type="submit">voir le produit</button></div>
</div>

</div>
</div>
<!--
<?php for($i=0; $i<$numarticle;$i++){ 
   
   $id= $produits[$i]["id"];?>
    <h2><?php echo $produits[$i]["name"]; ?></h2>
    <img src="<?php echo $produits[$i]["image"]?>" alt=""><br/>
    <a href="produits.php?subject=<?php echo $id ?>" target="_blank"><button>Voir le produit</button><br/></a>
<?php } ?>
-->

</body>
</html>