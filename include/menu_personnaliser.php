<div class="wrap" id="fresh">
<!--animation du menu-->
    <script>
        function onclick_button()
        {
            
            if(menu.style.left=="-330px")
            {
                menu.style.left="-970px";
                document.getElementById('button_content_menu').innerText=">";

            }
            else
            {                
                menu.style.left="-330px";
                document.getElementById('button_content_menu').innerText="<";
            }
            if(menu2.style.left=="-340px")
            {
                menu2.style.left="-980px";
                document.getElementById('button_content_logo').innerText=">";

            }

        }
        function onclick_button_menu_logo()
        {
            
            if(menu2.style.left=="-340px")
            {
                menu2.style.left="-980px";
                document.getElementById('button_content_logo').innerText=">";

            }
            else
            {                
                menu2.style.left="-340px";
                document.getElementById('button_content_logo').innerText="<";
            }
            if(menu.style.left=="-330px")
            {
                menu.style.left="-970px";
                document.getElementById('button_content_menu').innerText=">";

            }

        }
    </script>
<!-- cadre de l'animation -->
    <div id="BackContainer">
        <div id="animation"  >
          <!-- Visualiseur -->
            <?php
            
                if(get_option('type_animation')=='animation GIF')
                {  ?>
                    <div class="visualiseur_animation">
                        <div class="visual">
                            <?php
                             $animation_selection= get_option( 'gif_animation_selection' );
                             switch ($animation_selection) 
                             {
                                case 'gif_animation_0': 
                                    
                                    if(get_option( 'gif_lien_animation' )=='')
                                    {
                                        echo 'Configurez votre animation GIF';
                                        $activeMenuLogo=false;                                        
                                    }
                                    else
                                    {             
                                        $activeMenuLogo=true;                             
                                        ?>                                    
                                        <img src="<?php echo get_option( 'gif_lien_animation' );?>" alt="animation personalisé" width="100%" height="100%"></img>
                                        <?php                                   
                                    } 
                                    break;
                                case 'gif_animation_1':
                                     $activeMenuLogo=true;       
                                     $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_1.gif';                                            
                                     ?>                                    
                                     <img src="<?php echo $gif_animation_url;?>" alt="animation personalisé" width="100%" height="100%"></img>
                                     <?php
                                     break;
                                case 'gif_animation_2':
                                    $activeMenuLogo=true;       
                                     $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_2.gif';                                            
                                     ?>                                    
                                     <img src="<?php echo $gif_animation_url;?>" alt="animation personalisé" width="100%" height="100%"></img>
                                     <?php
                                     break;
                                case 'gif_animation_3':
                                    $activeMenuLogo=true;       
                                     $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_3.gif';                                            
                                     ?>                                    
                                     <img src="<?php echo $gif_animation_url;?>" alt="animation personalisé" width="100%" height="100%"></img>
                                     <?php
                                     break;
                                case 'gif_animation_4':
                                    $activeMenuLogo=true;       
                                     $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_4.gif';                                            
                                     ?>                                    
                                     <img src="<?php echo $gif_animation_url;?>" alt="animation personalisé" width="100%" height="100%"></img>
                                     <?php
                                     break;
                                default:
                                    echo 'Configurez votre animation GIF';
                                    $activeMenuLogo=false; 
                                    break;
                             }
                            ?>
                        </div>
                    </div><?php
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {      ?>
                    <div class="visualiseur_animation">
                        <div class="visual">
                            <?php
                                $animation_selection= get_option( 'lotti_animation_selection' );
                                switch ($animation_selection) 
                                {
                                    case 'lotti_animation_0': 
                                       
                                       if(get_option( 'lotti_lien_animation' )=='')
                                       {
                                           echo 'Configurez votre animation lotti';
                                           $activeMenuLogo=false;       
                                       }
                                       else
                                       {
                                            $activeMenuLogo=true;       
                                            $lotti_animation_url=  get_option( 'lotti_lien_animation' );                               
                                       } 
                                        break;
                                    case 'lotti_animation_1':
                                        $activeMenuLogo=true;       
                                        $lotti_animation_url= 'https://assets1.lottiefiles.com/packages/lf20_5ia28iiv.json';
                                        break;
                                    case 'lotti_animation_2':
                                        $activeMenuLogo=true;       
                                        $lotti_animation_url= 'https://assets4.lottiefiles.com/packages/lf20_vv8jpd78.json';
                                        break;
                                    case 'lotti_animation_3':
                                        $activeMenuLogo=true;       
                                        $lotti_animation_url= 'https://assets5.lottiefiles.com/packages/lf20_f6whimsf.json';
                                        break;
                                    case 'lotti_animation_4':
                                        $activeMenuLogo=true;       
                                        $lotti_animation_url= 'https://assets1.lottiefiles.com/packages/lf20_kxsgasus.json';
                                        break;
                                    default:
                                        echo 'Configurez votre animation lotti';
                                        $activeMenuLogo=false; 
                                        break;
                                }
                                ?>
                                    
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

                                    <lottie-player id="svgContainer" src="<?php echo $lotti_animation_url; ?>"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop autoplay></lottie-player>    
     
                                    <?php
                            ?>
                        </div>
                    </div><?php
                }
                elseif(get_option('type_animation')=='animation CSS')
                {       ?>
                    <div class="visualiseur_animation">
                        
                        <?php
                            if(get_option( 'css_code_animation' )=='' )
                            {
                                echo 'Configurez votre animation';
                                $activeMenuLogo=false;       
                            }
                            else
                            {
                                $activeMenuLogo=true;       
                                $anim_css = get_option('css_code_animation');
                                switch ($anim_css) 
                                {
                                    case 'css_animation_1':
                                        include 'view/css/css_animation_1.php';
                                        break;
                                    case 'css_animation_2':
                                        include 'view/css/css_animation_2.php';
                                        break;
                                    case 'css_animation_3':
                                        include 'view/css/css_animation_3.php';
                                        break;
                                    case 'css_animation_4':
                                        include 'view/css/css_animation_4.php';
                                        break;
                                    case 'css_animation_5':
                                        include 'view/css/css_animation_5.php';
                                        break;
                                    case 'css_animation_6':
                                        include 'view/css/css_animation_6.php';
                                        break;
                                    case 'css_animation_7':
                                        include 'view/css/css_animation_7.php';
                                        break;
                                    }
                                }
                        ?>
                    </div><?php
                }
            ?>   
        </div>
<!-- cadre du logo -->
        <?php
        if (get_option('logo_isVivible')=='1') 
        {?>
            <div id="logo" style="width: 50px;height: 50px;">
                <?php
                if (get_option('menu_position')=='1') 
                {
                    if(get_option('logo_url')!='')
                    {?>
                        <img  src="<?php echo get_option('logo_url');?>" alt="image du logo" style="width: 100%; height: 100%">
                    <?php
                    }
                    else
                    {
                        echo 'Configurer votre logo';
                    }
                }
                ?>
            </div><?php
        }
        ?>
    </div>

<!-- cadre du menu -->
    <div id="menu">
        <button id="button" class="hand_Cursor" onclick="onclick_button()">
            <div class="button_content" id="button_content_menu"><?php if (get_option('menu_position')=='0'){echo '<';}else{if ($activeMenuLogo==true){echo '>';}else{echo '<';} } ?></div>
        </button>
        <?php
            if (get_option('menu_position')=='1')
            {
                echo '<button type="button" id="button_centrer" class="Pos_Button_Center_anim typo hand_Cursor" onclick="centrer(\'animation\')">
                <div class="button_content_center">CENTRER VOTRE ANIMATION</div>
            </button>';
            }
        ?>
        <?php
            $menu_pos = get_option( 'menu_position' );
            switch ($menu_pos) 
            {
                case '0':
                  // choix du type d'animation-->   
                    echo '<div class="typo position_menu_0">';
                
                    echo '<form action="options.php" method="POST">';
                    settings_fields( 'Mocha_Plugin_Settings' );
                    do_settings_sections( 'Mocha_Prod_Preloader_Type_page' );
                    do_settings_sections( 'Mocha_Prod_Preloader_menu_1_page' );
                    ?><p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="DEFINIR ANIMATION" style="background-color: #28283a;"></p>
                    <?php echo '</form></div>';
                    break;
                case '1':
                  //menu de personnalisation
                    if(get_option('type_animation')=='animation GIF')
                    {                    
                        include 'option/GIF_option.php';
                    }
                    elseif(get_option('type_animation')=='animation LottiFile')
                    {                    
                        include 'option/LottiFile_option.php';
                    }
                    elseif(get_option('type_animation')=='animation CSS')
                    {                    
                        include 'option/CSS_option.php';
                    }
                    else
                    {
                        ?><div style="position: relative;top: 100px;left:250px" ><p class="typo" >Vous n'avez pas choisi d'animation</p></div>
                        <?php
                    }
                    echo '</form>';
                    echo '<div class="typo bg_Yellow">';                
                    echo '<form action="options.php" method="POST">';
                    settings_fields( 'Mocha_Plugin_Settings' ); 
                    do_settings_sections( 'Mocha_Prod_Preloader_menu_0_page' );
                    ?><p class="submit retour_button"><input type="submit" name="submit" id="submit" class="button button-primary" value="RETOUR" style="background-color: #28283a;"></p>
                    <?php
                    echo '</form></div>';
                    break;
                default:
                  // choix du type d'animation-->   
                    echo '<div class="typo position_menu_0">';    
                    echo '<form action="options.php" method="POST">';
                    settings_fields( 'Mocha_Plugin_Settings' );
                    do_settings_sections( 'Mocha_Prod_Preloader_menu_1_page' );
                    do_settings_sections( 'Mocha_Prod_Preloader_Type_page' );
                    submit_button("definir animation");                    
                    echo '</form></div>';
                    break;
            }

            if (get_option('type_animation')!='')
            {
                if ($activeMenuLogo==false)
                {
                    echo '<p class="message typo">N\'oubliez pas de sauvegarder. Vous pourrez ensuite ajouter votre logo !</p>';
                }
            }
        ?>       

    </div>
    <div id="menu_logo">
        <button id="button_menu_logo" onclick="onclick_button_menu_logo()" >
            <div class="button_content" id="button_content_logo"><?php if (get_option('menu_position')=='0'){echo '>';}else{if($activeMenuLogo){ if(get_option('logo_isVivible')==''){echo '>';}else{echo '<';}}else{echo '>';}} ?></div>
        </button>
        <?php
            if (get_option('menu_position')=='1')
            {?>
                <button type="button" id="button_centrer" class="Pos_Button_Center_logo typo hand_Cursor" onclick="centrer('logo')" <?php if (get_option('logo_isVivible')==''){echo 'disabled';} ?>>
                <div class="button_content_center">CENTRER VOTRE LOGO</div>
            </button>
            <?php
            }
        ?>
        <?php
      // setting logo-->   
                    echo '<div class="typo position_menu_logo">';
                
                    echo '<form action="options.php" method="POST">';
                    settings_fields( 'Logo_Settings' );
                    do_settings_sections( 'Mocha_Prod_Preloader_logo_page' );
                    ?><p class="submit pos_save_logo_menu"><input type="submit" name="submit" id="submit" class="button button-primary" value="SAUVEGARDER & PREVISUALISER" style="background-color: #fff;color:#28283A"></p>
                    <?php echo '</form></div>';


        ?>

    </div>

<!-- cadre du tuto -->
  <?php
  if (get_option('menu_position')=='1')
  {
    if(get_option('tuto_affichage')=='')
    {?>
        <div id="tuto" class="typo">

            <form action="options.php" method="POST">

                <?php
                settings_fields( 'tuto_Settings' );
                do_settings_sections( 'Mocha_Prod_Preloader_tuto_page' );
                ?><p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="NE PLUS AFFICHER" style="background-color: #28283a;" ></p>
                
            </form>
            <article class="tuto_content">
            <p>Après avoir configuré votre animation (fenêtre de gauche) vous pouvez la positionner à l'aide du drag and drop à l'emplacement que vous souhaitez sur la page. <br> F5 pour rafraîchir la page si jamais vous n'avez pas sauvegarder vos emplacements</p>
            

            </article>
            <div id="INFO">INFORMATION</div>
        
        </div>
        <?php
    }
    else if (get_option('tuto_affichage')=='1')
    {?>
        <div id="tuto_close" class="typo">

            <form action="options.php" method="POST">

                <?php
                settings_fields( 'tuto_Settings' );
                do_settings_sections( 'Mocha_Prod_Preloader_tuto_page' );
                ?><p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="I" style="background-color: #28283a;" ></p>
                
            </form>
        
        </div>
        <?php
    }
  }
    
  ?>
    
<!-- style à appliquer -->
    <style>    
    
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;500;700;900&family=Montserrat:wght@300;500;700;900&display=swap');
      /**style puce radio */
        .puce_radio
        {
            position: relative;
            left:-200px;
        }
        .rad-label 
        {
            display: flex;
            align-items: center;
            border-radius: 100px;
            padding: 14px 16px;
            margin: 10px 0;

            cursor: pointer;
            transition: .3s;
        }

        .rad-label:hover,.rad-label:focus-within 
        {
            background: #00a993;
        }

        .rad-input 
        {
            position: absolute;
            left: 0;
            top: 0;
            width: 1px;
            height: 1px;
            opacity: 0;
            z-index: -1;
        }

        .rad-design 
        {
            width: 22px;
            height: 22px;
            border-radius: 100px;

            background: #28283A;
            position: relative;
        }

        .rad-design::before 
        {
            content: '';

            display: inline-block;
            width: inherit;
            height: inherit;
            border-radius: inherit;

            background: #ffffff;
            transform: scale(1.1);
            transition: .3s;
        }

        .rad-input:checked+.rad-design::before 
        {
            transform: scale(0);
        }

        .rad-text 
        {
            color: #ffffff;
            margin-left: 14px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 900;

            transition: .3s;
        }

        .rad-input:checked~.rad-text 
        {
            color: #28283A;
        }
      /**style généraux */
        .hand_Cursor
        {
            cursor: pointer;
        }
        h2
        {
            font-family: 'Montserrat Alternates', sans-serif;
            font-size: 25px;
            color: #28283A;
        }
        .typo
        {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            color:#28283a
        }
      /**style button */
        #button
        {
            width: 40px;
            height: 40px;
            background-color:#28283A;
            position: absolute;
            left: 950px;
            top: 30px;
            border-radius:50%;
            font-weight: bolder;
            color: #ffffff;
            font-size: 30px;
            display:flex;
        }
        #button_centrer
        {
            width: 250px;
            height: 30px;
            border-radius:4px;
            font-weight: bolder;
            font-size: 13px;
            display:flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .Pos_Button_Center_anim
        {
            position: absolute;
            left: 650px;
            top: 725px;
            background-color:#28283A;
            color: #ffffff;
        }
        .Pos_Button_Center_logo
        {
            position: absolute;
            left: 650px;
            top: 403px;
            background-color:#fff;
            color: #28283A;
        }
        .retour_button
        {
            position: absolute;
            bottom: 730px;
            left: 790px;
        }
        .Pos_Button
        {
            position:relative;
            top:<?php $variable=get_option('type_animation');switch ($variable) {case 'animation GIF':echo '-14px';break;case 'animation LottiFile':echo '-14px';break;case 'animation CSS':echo '11px';break;}?>;
        }
      
      /**style du menu */
        .message
        {
            position:absolute;
            bottom: <?php $variable=get_option('type_animation');switch ($variable) {case 'animation GIF':echo '145px';break;case 'animation LottiFile':echo '145px';break;case 'animation CSS':echo '160px';break;}?>;
            left: 350px;
        }        
        .position_menu_0
        {
            position: absolute;
            left: 385px;
            top: 60px;
            animation: 1s ease-out 0s 1 slideInFromLeft;
        }
        @keyframes slideInFromLeft 
        {
            0% 
            {
                transform: translateX(-100%);
            }
            100% 
            {
                transform: translateX(0);
            }
        }
        .position_menu_1
        {
            position: absolute;
            left: 350px;
            top: 20px;
        }
        #menu
        {
            position: relative;
            left: -330px;
            padding: 10px;
            padding-top: 30px;
            padding-right: 60px;
            background-color: #FCC600;
            width: 800px;
            height: 780px;
            border-radius: 0% 5% 5% 0%;
            transition: left 1s;
            z-index: 2;
            padding-left: 100px;
        }
        
        .wrap
        {
            margin: 0%;
        }
        #wpfooter
        {
            position: relative;
        }
      /**menu logo */
        /* The switch - the box around the slider */
            .switch 
            {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

        /* Hide default HTML checkbox */
            .switch input 
            {
                opacity: 0;
                width: 0;
                height: 0;
            }

        /* The slider */
            .slider 
            {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before 
            {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider 
            {
                background-color: #FCC600;
            }

            input:focus + .slider 
            {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before 
            {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

        /* Rounded sliders */
            .slider.round 
            {
                border-radius: 34px;
            }

            .slider.round:before 
            {
                border-radius: 50%;
            }
        .pos_save_logo_menu
        {
            position: absolute;
            bottom: -10px;
        }
        #logo_isVivible
        {
            z-index: 99999;
        }
        .position_menu_logo
        {
            position: absolute;
            left: 350px;
            top: -5px;
        }
        .position_menu_logo form h2
        {
            color: #FCC600;

        }
        .position_menu_logo form .form-table th
        {
            font-size:15px; 
            color: #fff;
        }
        #menu_logo
        {
            position: relative;
            left: -1100px;
            padding: 10px;
            padding-top: 30px;
            padding-right: 60px;
            background-color: #28283A;
            width: 800px;
            height: 400px;
            border-radius: 0% 5% 5% 0%;
            transition: left 1s;
            z-index: 2;
            padding-left: 100px;
            border: 2px solid #28283a;
            top: -550px;
        }
        #button_menu_logo
        {
            width: 40px;
            height: 40px;
            background-color:#fff;
            position: absolute;
            left: 950px;
            top: 350px;
            border-radius:50%;
            font-weight: bolder;
            color: #28283A;
            font-size: 30px;
            display:flex;
        }
        .button_content
        {
            line-height: 27px;
        }

      /**style de l'animation */ 
        body
        {
            overflow: hidden;            
        }
        .visualiseur_animation
        {
            display:flex;
            justify-content: center;
            align-self:center;
        }
        #animation
        {
            
            display:flex;
            justify-content: center;
            position: fixed;
            top: <?php
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_position_top')=='') 
                    {
                        echo '50%';
                    } 
                    else 
                    {
                        echo get_option('gif_position_top');
                    }
                    
                    
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {     
                    if (get_option('lotti_position_top')=='') 
                    {
                        echo '50%';
                    } 
                    else 
                    {
                        echo get_option('lotti_position_top');
                    }
                    
                }
                elseif(get_option('type_animation')=='animation CSS')
                {        
                    if (get_option('css_position_top')=='') 
                    {
                        echo '50%';
                    } 
                    else 
                    {  
                        echo get_option('css_position_top');
                    }
                }    
                ?>;
            left:<?php
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_position_left')=='') 
                    {
                        echo '75%';
                    } 
                    else 
                    {
                        echo get_option('gif_position_left');
                    }
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {  
                    if (get_option('lotti_position_left')=='') 
                    {
                        echo '75%';
                    } 
                    else 
                    {
                        echo get_option('lotti_position_left');
                    }   
                }
                elseif(get_option('type_animation')=='animation CSS')
                {      
                    if (get_option('css_position_left')=='') 
                    {
                        echo '75%';
                    } 
                    else 
                    {
                        echo get_option('css_position_left');
                    }  
                }    
                ?>;
            
        }
        <?php
            if (get_option('menu_position')=='1') 
            {?>
                #animation:hover
                {            
                    border: #28283A 4px dashed;
                    
                }
                #logo:hover
                {            
                    border: #28283A 4px dashed;
            
                }
                <?php
            }
        ?>
        #BackContainer
        {
            width: 1900px;
            height: 1200px; 
            position: fixed; 
            left: -20px; 
            background-color:<?php
                echo '#';
                if(get_option('type_animation')=='animation GIF')
                { 
                    echo get_option('gif_background_color');
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {     
                    echo get_option('lotti_background_color');
                }
                elseif(get_option('type_animation')=='animation CSS')
                {      
                    echo get_option('css_background_color');
                }    
                ?>;

        }

      /**style logo */
        #logo
        {
            position: fixed;
            top: <?php if (get_option('logo_top')==''){echo '50%';}else{echo get_option('logo_top');} ?>;
            left: <?php if (get_option('logo_left')==''){echo '75%';}else{echo get_option('logo_left');} ?>;
            transform: scale(<?php if(get_option('logo_scale'=='')){echo '1';}else{echo get_option('logo_scale');} ?>);
            z-index: 1000;
        }
      /**style tuto */
        #tuto_close
        {
            position: fixed;
            top: -20px;
            right: -190px;
            opacity: 0.3;
            transition: opacity 1s;

        }   
        #tuto_close:hover
        {
            opacity: 1;
            transition: opacity 1s;
        }
        #tuto
        {
            position: fixed;
            top: 30px;
            right: -330px;
            width: 400px;
            height: 200px;
            border: 2px #28283A solid;
            background-color: #FCC600;
            z-index: 10;
            border-bottom-left-radius: 80px 80px;
            display: flex;
            flex-direction: column;
            transition: right 1s;
        }
        #tuto:hover
        {          
            right: 0px;
        }
        #tuto form p, .tuto_content
        {
            position:absolute;
            top: -10px;
            right: 0px;
            
        }
        .pos_button_afficher_tuto .submit
        {
            position: absolute;
            top: 0px;
            left: 120px;
        }
        #INFO
        {
            position:absolute;
            top: 10px;
            left: -100px;
            padding: 1%;
            animation:alternate infinite 2s info_tile;
        }
        @keyframes info_tile
        {
            0%
            {                
                background-color: #fff;
                color: #28283A;
                border: #28283A solid 2px;
            }   
            50%
            {                
                background-color: #28283A;
                color: #fff;
                border: #fff solid 2px;
            }
            100%
            {                
                background-color: #fff;
                color: #28283A;
                border: #28283A solid 2px;
            }
        }
        .tuto_content
        {
            margin: 12% 6% ;
        }
        #close_tuto_tab
        {
            width: 40px;
            height: 40px;
            position: absolute;
            right: 15px;
            top: 140px;
            border-radius:50%;
            font-weight: bolder;
            color: #fff;
            font-size: 30px;
            display:flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 5px;
        }

    </style>
<!-- script à appliquer -->
    <script>
        
      /**Declaration variable
       *  */       
        var s = document.getElementById('BackContainer').style; 
        var backContainer = document.getElementById('BackContainer');
        var player = document.getElementById('svgContainer');
        var menu = document.getElementById('menu');
        var menu2 = document.getElementById('menu_logo');
        var animation = document.getElementById('animation').style;
        <?php if (get_option('logo_isVivible')=='1') 
        {
            echo 'var logo = document.getElementById(\'logo\').style';
        }
        ?>

        document.getElementById('menu_logo').style.left="<?php if (get_option('menu_position')=='0'){echo '-1100px';}else{if ($activeMenuLogo==true){ if(get_option('logo_isVivible')==''){echo '-980px';}else{echo '-340px';}}else{echo '-1100px';} } ?>";
      /** width et heigth #animation et #logo */      
        animation.width='<?php
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_width')=='')
                    {
                        echo '400px';
                    }
                    else
                    {
                        echo get_option('gif_width').'px';
                    }
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {      
                    if (get_option('lotti_width')=='')
                    {
                        echo '400px';
                    }
                    else
                    {
                        echo get_option('lotti_width').'px';
                    }
                }
                elseif(get_option('type_animation')=='animation CSS')
                {      
                    if (get_option('css_width')=='')
                    {
                        echo '400px';
                    }
                    else
                    {
                        echo get_option('css_width').'px';
                    }
                }
            ?> ';
        animation.height='<?php
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_height')=='')
                    {
                        echo '400px';
                    }
                    else
                    {
                        echo get_option('gif_height').'px';
                    }
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {      
                    if (get_option('lotti_height')=='')
                    {
                        echo '400px';
                    }
                    else
                    {
                        echo get_option('lotti_height').'px';
                    }
                }
                elseif(get_option('type_animation')=='animation CSS')
                {      
                    if (get_option('css_height')=='')
                    {
                        echo '400px';
                    }
                    else
                    {
                        echo get_option('css_height').'px';
                    }
                }
            ?> ';
        
        
        <?php if (get_option('logo_isVivible')=='1') 
        {?>
            logo.width='<?php if (get_option('logo_width')==''){echo '400px';}else{ echo get_option('logo_width').'px';}?>';
            logo.height='<?php if (get_option('logo_height')==''){echo '400px';}else{ echo get_option('logo_height').'px';}?>';
           <?php
        }
        ?>
      /** */
        document.getElementById('menu').style.left="<?php if (get_option('menu_position')=='0'){echo '-330px';}else{if ($activeMenuLogo==true){echo '-970px';}else{echo '-330px';} } ?>";
      /**Script drag and drop animation */
        
        var obj = document.getElementById('animation');
        var objPosTop = document.getElementById('objTop');
        var objPosLeft= document.getElementById('objLeft');
        obj.onmousedown = function(event) 
        {            
            if(menu2.style.left=="-340px")
            {                
                onclick_button_menu_logo();
            }
            if(menu.style.left=="-330px")
            {                
                onclick_button();
            }
            let shiftX = event.clientX - obj.getBoundingClientRect().left;
            let shiftY = event.clientY - obj.getBoundingClientRect().top;
            obj.style.position = 'fixed';
            obj.style.zIndex='9999';

            moveAt(event.pageX, event.pageY);

          // Déplace l'animation aux cordonnées (pageX, pageY)
          // Prenant en compte les changements initiaux
            function moveAt(pageX, pageY) 
            {
                obj.style.left = pageX - shiftX + 'px';
                obj.style.top = pageY - shiftY + 'px';
                objPosLeft.value = obj.style.left;
                objPosTop.value=obj.style.top;
                
            }

            function onMouseMove(event) 
            {
                moveAt(event.pageX, event.pageY);
            }

          // déplace l'animation à l’évènement mousemove
            document.addEventListener('mousemove', onMouseMove);

          // dépose l'animation, enlève les gestionnaires d’évènements dont on a pas besoin
            obj.onmouseup = function() 
            {
                obj.style.zIndex='999';
                document.removeEventListener('mousemove', onMouseMove);
                obj.onmouseup = null;
            };

        };
        obj.ondragstart = function() 
        {
            return false;
        };

    //
      /**Script drag and drop logo */
        <?php if (get_option('logo_isVivible')=='1') 
        {?>
            
        var logo = document.getElementById('logo');
        var logoPosTop = document.getElementById('logoTop');
        var logoPosLeft= document.getElementById('logoLeft');
        logo.onmousedown = function(event) 
        {
            if(menu2.style.left=="-340px")
            {                
                onclick_button_menu_logo();
            }
            if(menu.style.left=="-330px")
            {                
                onclick_button();
            }
            let shiftX = event.clientX - logo.getBoundingClientRect().left;
            let shiftY = event.clientY - logo.getBoundingClientRect().top;
            let logoWidth = '<?php if (get_option('logo_width')==''){echo '400px';}else{ echo get_option('logo_width').'px';}?>';
            let logoHeight = '<?php if (get_option('logo_height')==''){echo '400px';}else{ echo get_option('logo_height').'px';}?>';

            logo.style.position = 'fixed';
            logo.style.zIndex='9999';

            moveAt(event.pageX, event.pageY);

          // Déplace la logo aux cordonnées (pageX, pageY)
          // Prenant en compte les changements initiaux
            function moveAt(pageX, pageY) 
            {
                logo.style.left = pageX - shiftX + 'px';
                logo.style.top = pageY - shiftY + 'px';
                logo.style.width=logoWidth;
                logo.style.height=logoHeight;
                logoPosLeft.value = logo.style.left;
                logoPosTop.value=logo.style.top;
                
            }

            function onMouseMove(event) 
            {
                moveAt(event.pageX, event.pageY);
            }

          // déplace le logo à l’évènement mousemove
            document.addEventListener('mousemove', onMouseMove);

          // dépose le logo, enlève les gestionnaires d’évènements dont on a pas besoin
            logo.onmouseup = function() 
            {
                logo.style.zIndex='1000';
                document.removeEventListener('mousemove', onMouseMove);
                logo.onmouseup = null;
            };

        };
        logo.ondragstart = function() 
        {
            return false;
        };
           <?php
        }
        ?>

    //
      /**FONCTION CENTRER*/
        function centrer(idObj)
        {
            let objAcenter = document.getElementById(idObj).style;
            let centerLeft= (window.innerWidth/2)-(parseInt(objAcenter.width)/2);
            let centerTop= (window.innerHeight/2)-(parseInt(objAcenter.height)/2);
            objAcenter.left= centerLeft+'px';
            objAcenter.top= centerTop+'px';
            if(idObj=='animation')
            {
                objPosLeft.value = obj.style.left;
                objPosTop.value=obj.style.top;

            }
            else
            {
                <?php if (get_option('logo_isVivible')=='1') 
                    {
                        echo 'logoPosLeft.value = logo.style.left;
                        logoPosTop.value=logo.style.top;';
                    }                        
                        ?>                
            }            
        }
      
   
      /** script fade out
       */
        function timerFade()
        {
            s.opacity=1;           
            setTimeout("fadeOut()", 
              <?php  
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_duree_animation')=='') 
                    {
                        echo 2000;
                    } 
                    else 
                    {
                        $duree= get_option('gif_duree_animation');
                        echo $duree*1000;
                    }
                    
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {  
                    if (get_option('lotti_duree_animation')=='') 
                    {
                        echo 2000;
                    } 
                    else 
                    {
                        $duree= get_option('lotti_duree_animation');
                        echo $duree*1000;
                    }
                }
                elseif(get_option('type_animation')=='animation CSS')
                {    
                    if (get_option('css_duree_animation')=='') 
                    {
                        echo 2000;
                    } 
                    else 
                    {
                        $duree= get_option('css_duree_animation');
                        echo $duree*1000;
                    }
                }  

              ?>); 

        }
        function fadeOut()
        {            
            s.opacity = 1;
            (function fade()
            {                
                s.opacity-=.1
                if (s.opacity<0) 
                {
                    setTimeout("timerFade()", 1000); 
                }
                else 
                {
                    setTimeout(fade,60);
                }
            })();            
        }
        <?php
        if (!get_option('type_animation')=='')
        {            
            echo 'timerFade();';
        }
        ?>
        

    </script>
</div>