<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cduvent</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    
</head>
<body>
<?php

        $json = file_get_contents("homme.json");
        //var_dump($json);
        $parsed_json = json_decode($json);
        //var_dump($parsed_json[0]->homme[0]);
        //var_dump(json_decode($json));

        $produit_homme = $parsed_json[0]->homme;
        //var_dump($parsed_json[0]->homme[0]);
        
    ?>




<div id = "imageEnTete"></div>

<div class = "containerOnglet">

        <ul class = "flexOnglet">
            <div id = "ongletHomme"><a href = "homme.php"> Homme </div>
            <div id = "ongletFemme"><a href = "femme.php"> Femme </div>
            <div id = "ongletEnfant"><a href = "enfant.php"> Enfant </div>

        </ul>  


<div class = "containerProduit">
        <?php
            foreach ($produit_homme as $Homme) {
                echo "<div class='homme'>".
                "<img src= 'images/".$Homme->photo."'"."/>".
                "<h2>".$Homme->nom_produit."</h2>".
                "<p>".$Homme->prix."</p>".
                "</div>"
                ;
            }
        ?>
        
        
        
</div>
</body>
</html>






<!--<?php
//$Json = file_get_contents("hommes.json");
// Converts to an array 
//$myarray = json_decode($Json, true);
//var_dump($myarray); // prints array
?>-->