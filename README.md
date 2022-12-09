# e-commerce-PHP


Mettre les fichiers .php dans un dossier php 
puis mettre le dossier dans
C:\xampp\htdocs\ ( par défaut )


Mettre les fichiers css dans un dossier nommé "css" dans htdocs 

C:\xampp\htdocs\css



Pour tester si tout marche :

Lancer Xampp Control Panel 
Appuyer sur start à coté de Apache et de Mysql

Lancé votre navigateur internet et écrire

http://localhost/php/index.php

Résultat attendu : 

Connected Successfully 

Si 
[erreur](#Erreur)


## Page existant actuellement avec chemin pour y aller : 

Page home  : http://localhost/php/index.php

Page Register : http://localhost/php/register.php

Page Product : http://localhost/php/Product.php

Page Profil : http://localhost/php/profil.php





















##Erreur 

Erreur type : 

### Fatal error: Uncaught mysqli_sql_exception: Access denied for user 'root'@'localhost' (using password: YES) 
Solution : Aller dans le fichier C:\xampp\htdocs\php\connect.php ( par défaut ) 
Modifié le "123" par "" 
( oui laissez volontairement un espace vide )
