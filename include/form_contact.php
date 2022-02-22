<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>


<h1>Envoyez nous votre demande</h1> 
<!-- Formulaire -->
    <form  method="post" action="mail.php" >
        <div>
            <label>Votre Nom</label><br>
            <input type="text" name="nom" required>
        </div>
        <div>
            <label>Votre Prenom</label><br>
            <input type="text" name="prenom" required>
        </div>
        <div>
            <label>Votre Société</label><br>
            <input type="text" name="societe">
        </div>
        <div>
            <label>Votre Numero de téléphone</label><br>
            <input type="number" name="phone">
        </div>
        <div>
            <label>Votre email</label><br>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Tapez votre message ici pour nous contacter</label><br>
            <textarea rows="10" cols="30" name="message"></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
<?php

if (isset($_POST['name']))
{
    var_dump($_POST['name']);
}

?>

<!-- Style -->
    <style>
        body
        {
            background-color: #28283A;
            color: whitesmoke;
        }
        .form
        {
            display: flex;
            flex-direction: column;
        }
        .button 
        {
            background-color: #FCC600;
            border: none;
            color: #28283A;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</body>
</html>