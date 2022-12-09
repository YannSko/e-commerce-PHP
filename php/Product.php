
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Product</title>

    <link rel="stylesheet" type="text/css" href="../css/product.css">
</head>

<body>
    <header>
        <h1 style="color: white;">Product Page</h1>

    </header>

<!-- Pour ajouter une image dans la bdd -->

    <form action="" method="post" enctype="multipart/form-data" style="position: absolute;top: 20%;">
    <div>
        <p> Product picture </p>
        <input type="file" name="image">
   

</div>

    <p> Product Name<strong>*  </strong>
        <input type="text"  > <br>
        Product Price<strong>*</strong> 
        <input type="text"  > <br>

        <textarea rows="5" cols="20" placeholder="Product Description">Description
          
</textarea>  <br>

         
    
        </p>



        <input type="submit" value="submit">
    <footer style="color: white;">
        <p>Your Footer Here</p>
    </footer>
</body>

</html>








<?php
include 'connect.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
// Récupération des données de l'image à partir du fichier
// Déplacement de l'image envoyée vers le répertoire de stockage
$image_path = "../img/Img1.png".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);

// Enregistrement du chemin de l'image dans la base de données
$query = "INSERT INTO product (Image) VALUES ('".mysqli_real_escape_string($conn, $image_path)."')";
mysqli_query($conn, $query);
    // la requête post a été envoyée avec le champ nom_du_champ
    echo "<img src='$image_path' alt='Image' style='width: 10%;height: 10%;'>";
    }


 
   

    
?>

