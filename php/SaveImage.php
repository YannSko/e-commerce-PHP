

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    
  </head>
  <body>
    <main>
        <h1>Welcome to My Website</h1>  
    </main>
   
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Envoyer l'image">
</form>
 


<?php

include 'connect.php';

// Récupération des données de l'image à partir du fichier
// Déplacement de l'image envoyée vers le répertoire de stockage
$image_path = "../img/Img1.png".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);

// Enregistrement du chemin de l'image dans la base de données
$query = "INSERT INTO product (Image) VALUES ('".mysqli_real_escape_string($conn, $image_path)."')";
mysqli_query($conn, $query);


?>
<img src="<?php echo $image_path; ?>" alt="Image">
  </body>
</html>