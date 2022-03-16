<div class="wrap" id="up">
  
<!-- header -->
  <header>    
      <h1 id="_title" class="inline typo_Mocha">AIDES ET CONTACT</h1>   
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
    <h1>PREMIER PAS <span style="font-weight:normal;">: Tout commence ici !</span></h1>
    <div class='content_article flexB '>
      <section class="flexB justify-arround"> 
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
      <section class="flexB justify-arround">
        <div>
          <p>À cette étape, vous pouvez choisir le type d'animation que vous souhaitez parmi trois formats différents. Mais alors, comment faire votre choix ?</p>
          <br>
          <ul>
            <li><b>Animation GIF</b><br><p>Le GIF peut être conçu par vos soins, via un logiciel d’animation ou encore via des outils en ligne tel que GIFFY. Il reste cependant le format le moins optimisé pour le chargement de votre site. En effet il est primordial de faire attention au poids de votre GIF, nous recommandons 200 ko maximum !</p> </li><br>
            <li><b>Animation Lottiefile</b> <br><p>L’animation LottieFile est beaucoup moins lourde qu’un Gif puisqu’elle est conçue en code, maximum 100 Ko. Vous pouvez la créer vous-même ou en sélectionner sur des sites spécialisés. Pour en savoir plus, regardez notre rubrique d’aide « configurer une animation LottieFile ».</p></li><br>
            <li><b>Animation CSS</b> <br><p>L’animation en CSS est la plus optimisée pour le chargement, avec un poids réduit à maximum 10 Ko. L’inconvénient : vous ne pourrez intégrer votre propre code. Nous avons sélectionné une série d’animation CSS à choisir parmi notre sélection et à personnaliser en terme de couleur ! </p></li>
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
      <section class="flexB justify-arround">
        <div>
          <p><h2>Découvrez chaque réglage de configuration :</h2></p>
          <ul>
            <li><span class="underline">Choix du GIF :</span> <p>Vous pouvez choisir de sélectionner un gif pré-enregistré dans notre sélection ou intégrer un gif personnalisé. <br> Pensez à sauvegarder pour prévisualiser chaque animation. </p></li>
            <li><span class="underline">GIF URL (media) : </span> <p> Insérez ici l'URL de votre gif, à récupérer dans votre bibliothèque de média après l’avoir téléversé (voir tutoriel). Vous pouvez aussi utiliser des sites spécialisés tels que GIPHY…  </p></span></li>
            <li><span class="underline">Background-color : #</span> <p>Vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #.</p></li>
            <li><span class="underline">Duree animation : s</span> <p>Vous pouvez choisir la durée minimale de votre animation en seconde.</p></li>
            <li><span class="underline">Size: </span> <p>Vous pouvez choisir la grandeur de votre animation. La valeur est exprimé en selon un facteur (exemple : 1.2).</p></li>
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
      <section class="flexB justify-arround">
        <div>
          <p><h2>Découvrez chaque réglage de configuration : </h2></p>
          <ul>
            <li><span class="underline">Choix du Lottie :</span> <p>Vous pouvez choisir de sélectionner une de nos animations pré-enregistrées* ou intégrer une nouvelle animation LottieFile, soit créée par vos soins, soit sélectionnée et personnalisée en terme de couleur sur https://lottiefiles.com. Attention à prendre une animation gratuite ou payer une licence.</p></li>
            <li><span class="underline">Lotti URL (media) : </span> <p>Insésez ici l'URL « assets » de votre animation Lottie personnalisée (voir tutoriel).</p></span></li>
            <li><span class="underline">Background-color : #</span> <p>Vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #.</p></li>
            <li><span class="underline">Duree animation : s</span> <p>Vous pouvez choisir la durée minimale de votre animation en seconde.</p></li>
            <li><span class="underline">Size : </span> <p>Vous pouvez choisir la grandeur de votre animation. La valeur est exprimé en selon un facteur (exemple : 1.2).</p></li>
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
      <section class="flexB justify-arround">
        <div>
          <p><h2>Découvrez chaque réglage de configuration : </h2></p>
          <ul>
            <li><span class="underline">Choix du CSS :</span> <p>vous pouvez choisir de paramétrer un gif personnalisé ou bien de sélectionner un gif pré enregistré</p></li>
            <li><span class="underline">Background-color : #</span> <p>vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #</p></li>
            <li><span class="underline">Couleur animation : #</span> <p>vous pouvez choisir la couleur de l'aanimation, en code hexa. Ne saisissez que le code hexa sans le signe #, vous pouvez modifier trois couleurs dans l'animation</p></li>
            <li><span class="underline">Duree animation : s</span> <p>vous pouvez choisir la durée minimale de votre animation en seconde</p></li>
            <li><span class="underline">Size : </span> <p>Vous pouvez choisir la grandeur de votre animation. La valeur est exprimé en selon un facteur (exemple : 1.2).</p></li>
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
    <div class='content_article'>
      <section class="flexB justify-arround">
        <div>
          <p><h2>Découvrez chaque réglage de configuration : </h2></p>
          <ul>
            <li><span class="underline">URL du logo (media) : </span> <p>Insérez ici l'URL de votre logotype, à récupérer dans votre bibliothèque de média après l’avoir téléversé (voir tutoriel).</p></span></li>
            <li><span class="underline">Scale : </span> <p>Vous pouvez choisir le scale de votre logo pour l'agrandir ou le rétrécir.</p></li>
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
        
        <a  href="" target="popup" onclick="window.open('<?php echo plugin_dir_url(__FILE__) . 'form_contact.php'; ?>','popup','width=500,height=710'); return false;">
          <div class="call bordure flexB lien">
            <p style="text-align: center;">Vous désirez une animation qui reflète votre personnalité<br>Contactez-nous</p>
          </div>
        </a> 
      </div>
      
      <br>
      <a href="#up" class="lien">RETOUR EN HAUT</a>
      
    </footer>

<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__).'css/css_page_contact.css'?>">
</div>