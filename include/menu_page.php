<div class="wrap">
<!-- header -->
  <header>    
    <img id="image_header" src="<?php echo plugin_dir_url(__FILE__) . 'img/Bannière_preloader.png' ?>">   
  </header>
<!-- texte et bouton -->
  <article class="font_style">
    <p>Mocha preloader vous propose des preloader gif, Css et Lotti à intégrer sur votre site internet.
Simples et efficaces nos preloader n'impactent pas le chargement de vos pages web. <br> Nous proposons une personnalisation ou l'intégration de votre propre création pour une meilleure attractivité. Notre agence Mocha production peut même vous les créer sur-mesure. <br> </p>
<p class="center"> Ne patientez plus !</p>
    
    <a class="start_bouton" href="admin.php?page=Mocha_Prod_Preloader_personnaliser_page" >
      <p><b>COMMENCER</b></p>
    </a>
  </article>
<!-- Style CSS -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;500;700;900&family=Montserrat:wght@300;500;700;900&display=swap');

    body
    {
      background-color: #28283a;
      overflow: hidden;
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