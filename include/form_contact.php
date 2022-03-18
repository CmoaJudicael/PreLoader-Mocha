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
    <form class="flexB flexB-column"  method="post" action="mail.php" >
        <div class="flexB flexB-column flexB-JContent-center">
            <label>Votre Nom</label><br>
            <input type="text" name="nom" required>
        </div>
        <div class="flexB flexB-column flexB-JContent-center">
            <label>Votre Prenom</label><br>
            <input type="text" name="prenom" required>
        </div>
        <div class="flexB flexB-column flexB-JContent-center">
            <label>Votre Société</label><br>
            <input type="text" name="societe">
        </div>
        <div class="flexB flexB-column flexB-JContent-center">
            <label>Votre Numero de téléphone</label><br>
            <input type="number" name="phone">
        </div>
        <div class="flexB flexB-column flexB-JContent-center">
            <label>Votre email</label><br>
            <input type="email" name="email" required>
        </div>
        <div class="flexB flexB-column flexB-JContent-center">
            <label>Tapez votre message ici pour nous contacter</label><br>
            <textarea rows="10" cols="30" name="message"></textarea>
        </div>
        <div class="flexB buttonContainer">
            <input class="button" type="submit" value="Envoyer">
        </div>
    </form>
    <link rel="stylesheet" href="css/css_form_contact.css">

</body>
</html>