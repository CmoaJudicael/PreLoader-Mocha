<div class="wrap" id="up">
  
<!-- header -->
  <header>    
      <h1 id="_title" class="inline">AIDES ET CONTACT</h1>   
  </header>
<!-- barre nav -->
  <nav id="barre_nav">
    <ul class="flexB typo">
      <li><a href="#premier_pas" class="lien_nav"><div>PREMIER PAS</div></a></li>
      <li><a href="#Choix_animation" class="lien_nav"><div>CHOIX DE L'ANIMATION</div></a></li>
      <li><a href="#Configurer_animation_gif" class="lien_nav"><div>CONFIGURER UNE ANIMATION GIF</div></a></li>
      <li><a href="#Configurer_animation_lotti" class="lien_nav"><div>CONFIGURER UNE ANIMATION LOTTIFILE</div></a></li>
      <li><a href="#Configurer_animation_css" class="lien_nav"><div>CONFIGURER UNE ANIMATION CSS</div></a></li>
      <li><a href="#Configurer_animation_logo" class="lien_nav"><div>CONFIGURER VOTRE LOGO</div></a></li>
      <li><a href="#contact_mocha" class="lien_nav"><div>CONTACT</div></a></li>
    </ul>

  </nav>    

<!-- jsdelivr -->
          
        <script src="https://cdn.jsdelivr.net/npm/artplayer/dist/artplayer.js"></script>
<!-- article PREMIER PAS -->
  <article id='premier_pas' class="typo bordure">
    <h1>PREMIER PAS</h1>
    <div class='content_article flexB'>
      <section>
        <p>Tout commence ici <br> cliquez sur le bouton "COMMENCER" de la page d'accueil </p>
        <img class="img_tuto img_1" src="<?php echo plugin_dir_url(__FILE__).'img/getting_start.png'?>" alt="image du tuto demarrage">
      </section>
            
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article choix animation -->
  <article id='Choix_animation' class="typo bordure">
    <h1>CHOIX DE L'ANIMATION</h1>
    <div class='content_article flexB'>
      <section class="flexB">
        <div>
          <p>A cet étape vous pourrez choisir le type d'animation que vous souhaitez parmis trois type différent</p>
          <br>
          <ul>
            <li>Animation GIF <br><p>Choisissez une animation depuis un fichier GIF</p> </li><br>
            <li>Animation LottieFile <br><p>Beaucoup moins lourd, importez votre animation LottieFile</p></li><br>
            <li>Animation CSS <br><p>Choisissez votre animation CSS parmis notre selection d'animation</p></li>
          </ul>
        </div>
        <img class="img_tuto img_1" src="<?php echo plugin_dir_url(__FILE__).'img/choix_animation.png'?>" alt="image du tuto demarrage">
      </section>            
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article configurer animation gif -->
  <article id='Configurer_animation_gif' class="typo bordure">
    <h1>CONFIGURER UNE ANIMATION GIF</h1>
    <div class='content_article flexB'>
      <section class="flexB">
        <div>
          <p><h2>Voici le menu dédié à la configuration de votre animation gif</h2></p>
          <ul>vous pourrez configurer les options suivantes :
            <li><span class="underline">Choix du GIF :</span> <p>vous pouvez choisir de paramétrer un gif personnalisé ou bien de sélectionner un gif pré enregistré</p></li>
            <li><span class="underline">GIF URL (media) : </span> <p>Insésez ici l'URL de votre gif personalisé</p></span></li>
            <li><span class="underline">Background-color : #</span> <p>vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #</p></li>
            <li><span class="underline">Width (largeur) : px</span> <p>vous pouvez choisir la largeur de votre animation en pixel. L'animation ne peut cependant pas exceder la grandeur naturel de votre gif personnaliser</p></li>
            <li><span class="underline">Height (hauteur) : px</span> <p>vous pouvez choisir la hauteur de votre animation en pixel. L'animation ne peut cependant pas exceder la grandeur naturel de votre gif personnaliser</p></li>
            <li><span class="underline">Duree animation : s</span> <p>vous pouvez choisir la durée minimal de votre animation en seconde</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="<?php echo plugin_dir_url(__FILE__).'img/configuration_gif.png'?>" alt="image du tuto demarrage">
      </section>      
      <section class="player flexB">
        <video src="<?php echo plugin_dir_url(__FILE__) . 'player/video/configuration_gif.mkv'; ?>" controls></video>
        
      </section>

    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- configurer animation lotti -->
  <article id='Configurer_animation_lotti' class="typo bordure">
    <h1>CONFIGURER UNE ANIMATION LOTTIEFILE</h1>
    <div class='content_article flexB'>
      <section class="flexB">
        <div>
          <p><h2>Voici le menu dédié à la configuration de votre animation LottieFile</h2></p>
          <ul>vous pourrez configurer les options suivantes :
            <li><span class="underline">Choix du Lottie :</span> <p>vous pouvez choisir de paramétrer une animation Lotti personnalisé ou bien d'en sélectionner parmis nos animation pré-enregistré</p></li>
            <li><span class="underline">Lotti URL (media) : </span> <p>Insésez ici l'URL de votre animation Lotti personalisé</p></span></li>
            <li><span class="underline">Background-color : #</span> <p>vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #</p></li>
            <li><span class="underline">Width (largeur) : px</span> <p>vous pouvez choisir la largeur de votre animation en pixel.</p></li>
            <li><span class="underline">Height (hauteur) : px</span> <p>vous pouvez choisir la hauteur de votre animation en pixel.</p></li>
            <li><span class="underline">Duree animation : s</span> <p>vous pouvez choisir la durée minimal de votre animation en seconde</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="<?php echo plugin_dir_url(__FILE__).'img/configuration_lotti.png'?>" alt="image du tuto demarrage">
      </section>
      <section class="player flexB">
        <video src="<?php echo plugin_dir_url(__FILE__) . 'player/video/configuration_lotti.mkv'; ?>" controls></video>
        
      </section>
            
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article configurer animation css -->
  <article id='Configurer_animation_css' class="typo bordure">
    <h1>CONFIGURER UNE ANIMATION CSS</h1>
    <div class='content_article'>
      <section class="flexB">
        <div>
          <p><h2>Voici le menu dédié à la configuration de votre animation css</h2></p>
          <ul>vous pourrez configurer les options suivantes :
            <li><span class="underline">Choix du CSS :</span> <p>vous pouvez choisir de paramétrer un gif personnalisé ou bien de sélectionner un gif pré enregistré</p></li>
            <li><span class="underline">Background-color : #</span> <p>vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #</p></li>
            <li><span class="underline">Couleur animation : #</span> <p>vous pouvez choisir la couleur de l'aanimation, en code hexa. Ne saisissez que le code hexa sans le signe #, vous pouvez modifier trois couleurs dans l'animation</p></li>
            <li><span class="underline">Duree animation : s</span> <p>vous pouvez choisir la durée minimal de votre animation en seconde</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="<?php echo plugin_dir_url(__FILE__).'img/configuration_css.png'?>" alt="image du tuto demarrage">
      </section>
      <section class="player flexB">
        <video src="<?php echo plugin_dir_url(__FILE__) . 'player/video/configuration_css.mkv'; ?>" controls></video>
        
      </section>
      
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article configurer logo -->
  <article id='Configurer_animation_logo' class="typo bordure">
    <h1>CONFIGURER VOTRE LOGO</h1>
    <div class='content_article flexB'>
      <section class="flexB">
        <div>
          <p><h2>Voici le menu dédié à la configuration de votre Logo</h2></p>
          <ul>vous pourrez configurer les options suivantes :
            <li><span class="underline">Url de l'image du logo : </span> <p>Insésez ici l'URL de votre logo.</p></span></li>
            <li><span class="underline">Scale : </span> <p>Vous pouvez choisir le scale de votre logo pour l'agrandir ou le rétrécir.</p></li>
            <li><span class="underline">Width (largeur) : px</span> <p>vous pouvez choisir la largeur de votre animation en pixel. L'animation ne peut cependant pas exceder la grandeur naturel de votre gif personnaliser</p></li>
            <li><span class="underline">Height (hauteur) : px</span> <p>vous pouvez choisir la hauteur de votre animation en pixel. L'animation ne peut cependant pas exceder la grandeur naturel de votre gif personnaliser.</p></li>
            <li><span class="underline">Visible</span> <p>vous pouvez choisir de ne pas utiliser de logo et de le rendre invsible.</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="<?php echo plugin_dir_url(__FILE__).'img/configuration_logo.png'?>" alt="image du tuto demarrage">
      </section>      
      <section class="player flexB">
        <video src="<?php echo plugin_dir_url(__FILE__) . 'player/video/configuration_logo.mkv'; ?>" controls></video>
        
      </section>
      
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article contact -->
    <footer id='contact_mocha' class="typo bordure">
      <div class="flexB" style="justify-content: space-between;">
        <div class="display_signature flexB">
          <img  style="width: 150px;" src="<?php echo plugin_dir_url(__FILE__) . 'img/M-rond-jaune.png'; ?>" alt="logo mocha rond jaune">
        <div  style="align-items: center;">
          <h3> MOCHA PRODUCTION </h3>
          <p> <b>Marjorie Lagarde - Killian Paugam</b></p>
          <p class="inline">06.77.77.85.17 </p>
          <div class="point inline"></div> 
          <p class="inline">06.79.75.41.05 </p>
          <div class="point inline"></div> 
          <p class="inline">Siège à Saint Malo </p>
          <br> <a class="lien" href="http://mochaproduction.com" target="_blank">www.mochaproduction.com</a> 
        </div>
        </div>
        
        <a  href="" target="popup" onclick="window.open('<?php echo plugin_dir_url(__FILE__) . 'form_contact.php'; ?>','popup','width=600,height=600'); return false;">
          <div class="call bordure flexB lien">
            <p style="text-align: center;">Vous désirez une animation vous correspondant <br>Contactez-nous</p>
          </div>
        </a> 
      </div>
      
      <br>
      <a href="#up" class="lien">RETOUR EN HAUT</a>
      
    </footer>
<!-- style -->
  <style>
  /**player */
    .player
    {
      width: 100%;
      height: 800px;
      
    }
    
  /**lien font */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;500;700;900&family=Montserrat:wght@300;500;700;900&display=swap');
    @font-face 
    {    
      font-family: Mochacode Font Regular;
      src: url('<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/font/MochacodeFont.otf'; ?>') format("opentype");
    }
  /**titres */
    h1
    {
      background-color: #28283A;
      font-family: Mochacode Font Regular;
      color: #FCC600;
    }
    #_title
    {
      font-size: 40px;
      padding: 5% 0%;
    }
  /**contenue article */
    .display_signature
    {
      align-items: center;
    }
    #contact_mocha >div >div p,a,h3
    {
      margin: 10px;
    }
    h3
    {
      font-size: 30px;
      color: #ffffff;
    }
    .flexB
    {
      display: flex;
    }
    .inline
    {
      display: inline-block;
    }
    .point
    {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: #FCC600;
      margin: 0%;
    }
    article,h2,footer
    {
      margin: 5% 0%;
      padding: 5% 2%;
      font-family: 'Montserrat', sans-serif;
      color: #FCC600;
      
    }
    .bordure
    {
      border-radius: 30px;
      border:2px #00a993 solid;
    }
    section
    {
      justify-content: space-around;
      align-items: center;
    }
    section>*
    {
      margin: 2%;
    }
    .content_article
    {
      flex-direction: column;
      justify-content: space-around;
      align-items: center;

    }
    .typo
    {
      font-size: 15px;
      color: #ffffff;
    }
    .underline
    {
      text-decoration: underline;
    }
  /**lien */
    .lien,.lien_article
    {
      font-size: 15px;
      color: #ffffff;
      text-decoration: none;
      transition: all 0.5s;
    }
    .lien:hover,.lien_article:hover
    {
      color:#28283A;
      background-color: #FCC600;
      transition: all 0.5s;
    }
    .call
    {
      width: 400px;
      height: 100px;
      justify-content: center;
      align-items: center;
    }
  /**barre nav */
    #barre_nav
    {      
      background-color: #FCC600;
      margin-top: 30px;
      height: 50px;
      border-radius: 50px;
      padding: 15px;
    }
    #barre_nav>ul
    {
      justify-content: space-around;
      align-items: center;
      width: 100%;
      height: 100%;
      margin: 0px;
    }
    #barre_nav>ul>li
    {
      height: 100%;      
    }
    .lien_nav
    {
      width: 20%;
      text-decoration: none;
      display: table;
      width: 100%;
      height: 100%;
      padding: 0px 10px;
    }
    .lien_nav>div:hover
    {
      background-color: #00a993;
      border-radius: 20px;
      color: #ffffff;
      transition: all 0.5s;
    }
    .lien_nav>div
    {
      text-align: center;
      font-size: 15px;
      height: 100%;
      color: #28283A;
      vertical-align: middle;
      display: table-cell;
      transition: all 0.5s;
    }
  /**body */
    body
    {
      background-color: #28283A;
      color: #FCC600;
    }
  /**img */
    .img_tuto
    {
      border: 5px #C6383F solid;
      border-radius: 20px;
    }


        

  </style>
</div>