<div class="wrap">
<!-- header -->
  <header>    
      
    <img id="image_header" src="<?php echo plugin_dir_url(__FILE__) . 'img/Bannière_preloader.png' ?>">   
  </header>
<!-- texte et bouton -->
  <a id="lienContact" href="" target="popup" onclick="window.open('<?php echo plugin_dir_url(__FILE__) . 'form_contact.php'; ?>','popup','width=500,height=710'); return false;">
          <div class="call bordure flexB lien">
            <p style="text-align: center;"><b>PERSONNALISEZ VOTRE PRELOADER !</b>  <br>Notre agence Mocha Production peut vous créer un preloader sur-mesure et optimisé. Contactez-nous</p>
          </div>
      </a> 
  <article class="font_style">
    <p class="center">Mocha Preloader vous propose des preloader en Gif, Css ou Lotti à intégrer sur votre site internet. <br>
    Simples et efficaces, nos preloader n'impactent pas le chargement de vos pages web… Vos lecteurs ne perdrons plus patience à attendre ! <br>


Nous vous proposons d’intégrer votre propre animation ou personnaliser les nôtres, pour une attractivité à votre image.<br> </p>
<p class="center"> N’attendez plus, c’est parti !</p>
    
    <a class="start_bouton" href="admin.php?page=Mocha_Prod_Preloader_personnaliser_page" >
      <p><b>COMMENCER</b></p>
    </a>
  </article>
<!-- Style CSS -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;500;700;900&family=Montserrat:wght@300;500;700;900&display=swap');
    
  /**lien */
    #lienContact
    {
      position: fixed ;
      left: -150px;
      top: 40px;
    }
    .lien
    {
      font-size: 15px;
      color: #ffffff;
      text-decoration: none;
      transition: all 0.5s;
    }
    .lien:hover
    {
      color:#28283A;
      background-color: #FCC600;
      transition: all 0.5s;
    }
    .call
    {
      position: relative;
      left: 220px;
      top: 10px;
      width: 400px;
      height: 100px;
      justify-content: center;
      align-items: center;
      background-color: #28283A;
    }
    .flexB
    {
      display: flex;
    }
    .bordure
    {
      border-radius: 30px;
      border:2px #00a993 solid;
    }
  /**menu */
    body
    {
      background-color: #28283a;
    }
    header
    {
      background-color: #fcc600;
      display: flex;
      justify-content: center;
      height: 600px;

    }
    #image_header
    {
      display: block;
      width: 100%;
      height: 100%;
    }
    article
    {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: 'Montserrat', sans-serif;
      color: #ffffff;
    }
    article>p
    {
      font-size: 1.2em;
      margin: 1% 0% 0% 0%;
    }
    .center
    {
      text-align: center;
      font-size: 1.5em;
      margin: 1%;
    }
    .start_bouton
    {
      display:flex;
      justify-content:center;
      align-items:center;
      background-color: #FCC600;
      width: 8em;
      height: 2em;
      text-decoration:none;
      border-radius: 10px;
      font-size: 2em;
      color: #28283a;
      transition-property: border-radius, background-color, color;
      transition-duration: 0.5s;

    }
    .start_bouton:hover
    {
      border-radius: 0%;      
      background-color: #00a993;
      color: #FCC600;
    }
    .start_bouton:active
    {
      background-color: #ffffff;
      color: #28283a;
    }
    .start_bouton>p
    {
      font-size:0.7em;
      font-weight:900;
    }
    .font_style
    {      
      font-family: 'Montserrat', sans-serif;
    }

    

  </style>


    

</div>
<?php 
  apply_filters( 'admin_footer_text' , 'Preloader Mocha' );
?>