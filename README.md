# e-commerce-PHP

Table of Contente 
1. [Prérequis](#Prerequis)
2. [Installation](#Installation)
3. [Commencer le projet](#Commencer-le-projet )



## Prérequis 

Xamp Control Panel

Visual studio Code

## Installation

Installation de Xamp : 

Installer la dernière version de xamp ici https://www.apachefriends.org/fr/download.html

Tout Cocher quand ils demanderont quelle extensions installer 

Bien joué c'est terminé

## Commencer le projet 

Mettre les fichiers .php dans un dossier php 
puis mettre le dossier dans
C:\xampp\htdocs\ ( par défaut )


Mettre les fichiers css dans un dossier nommé "css" dans htdocs 

path : C:\xampp\htdocs\css



Pour tester si tout marche :

Lancer Xampp Control Panel 
Appuyer sur start à coté de Apache et de Mysql

Cliquez maintenant sur admin pour MySql

Vous devriez arriver sur une page internet phpmyadmin

Cliquez sur nouvelle base de données ( à gauche )

Nommé là ecom et crée là

Cliquez ensuite sur ecom puis importé 

Faites "Parcourir" dans fichier à importé

trouver le fichier Db.sql sur votre ordinateur et importé le  

Une nouvelle bdd nommé ecom est censé être apparu à gauche , si vous cliquer sur le petit vous êtes censé voir toute ses tables.


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





















## Erreur 

Erreur type : 

### Fatal error: Uncaught mysqli_sql_exception: Access denied for user 'root'@'localhost' (using password: YES) 
Solution : Aller dans le fichier C:\xampp\htdocs\php\connect.php ( par défaut ) 
Modifié le "123" par "" 
( oui laissez volontairement un espace vide )
