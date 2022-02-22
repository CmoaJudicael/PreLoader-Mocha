<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>


<div class="retour">
    
    <?php
    if (isset($_POST['nom'])) 
    {
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (isset($_POST['prenom'])) 
    {
        $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (isset($_POST['societe'])) 
    {
        if ($_POST['societe']=='') 
        {
            $societe = ' qui n\a pas indiqué de société';
        }
        else
        {
            $societe = ' de la société '.filter_var($_POST['societe'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
    }
    if (isset($_POST['phone'])) 
    {
        if ($_POST['phone']=='') 
        {
            $phone = '';
        }
        else
        {
            $phone = ' Son numéro de téléphone est le '.filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
        }        
        
    }
    if (isset($_POST['email'])) 
    {
        $email = ' Son adresse email est :'.filter_var($_POST['email'], FILTER_SANITIZE_EMAIL).' .';
    }
    if (isset($_POST['message'])) 
    {
        $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    
    if (mail('mocha.prod@gmail.com','Prise de contact',$prenom.' '.$nom.$societe.', voudrais vous contactez.'.'\n'.$email.'\n'.$phone.'\n'.$message ,'From: '.$email))
    {
        echo '<p>Votre message est bien envoyer</p>';
    }
    else
    {
        echo '<p>Il y a eu un soucis dans l\'envoie de votre message</p>';
    }
    
    ?>
</div>
<div class="retour">
    <button class="button" onclick="self.close()">Fermez cette fenêtre</button>
</div>

<!-- Style -->
    <style>
        .retour
        {
            justify-content: center;
            display: flex;
            align-items: center;
            height: 200px;
        }
        body
        {
            background-color: #28283A;
            color: whitesmoke;
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