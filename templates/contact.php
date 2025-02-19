<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
<?php 
include 'inc/banniere.php';
?>
 <?php
                include 'inc/menu.php';
                ?>
                <h1> Titre contact</h1>
                <img src="img/contacts.jpg" alt="">
               
    <form class="contact-form">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name">

            <label for="email">Email :</label>
            <input type="email" id="email" name="email">

            <label for="message">Message :</label>
            <textarea id="message" name="message"></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>