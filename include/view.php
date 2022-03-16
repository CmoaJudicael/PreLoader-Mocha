

<?php
if (get_option('button_OnOff') == "on")
{
    ?>
    <div class="mocha" id="preloader">

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
                                            $lotti_animation_url=  get_option( 'lotti_lien_animation');                               
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
                                        $lotti_animation_url= 'https://assets1.lottiefiles.com/packages/lf20_er9uet9r.json';
                                        break;
                                    case 'lotti_animation_4':
                                        $activeMenuLogo=true;       
                                        $lotti_animation_url= 'https://assets1.lottiefiles.com/packages/lf20_kxsgasus.json';
                                        break;
                                    case 'lotti_animation_5':
                                        $activeMenuLogo=true;       
                                        $lotti_animation_url= 'https://assets1.lottiefiles.com/packages/lf20_yx2u7eke.json';
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
                                    case 'css_animation_8':
                                        include 'view/css/css_animation_8.php';
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
                        <img id="img_logo" src="<?php echo get_option('logo_url');?>" alt="image du logo" style="width: 100%; height: 100%">
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
<!-- style à appliquer -->
    <style> 
      /**style de l'animation */ 
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
            <?php
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_size')=='') 
                    {
                        echo 'transform: scale(1);';
                    } 
                    else 
                    {
                        echo 'transform: scale('.get_option('gif_size').');';
                    }
                    
                    
                }
                elseif(get_option('type_animation')=='animation LottiFile')
                {     
                    if (get_option('lotti_size')=='') 
                    {
                        echo 'transform: scale(1);';
                    } 
                    else 
                    {
                        echo 'transform: scale('.get_option('lotti_size').');';
                    }
                    
                }
                elseif(get_option('type_animation')=='animation CSS')
                {        
                    if (get_option('css_size')=='') 
                    {
                        echo 'transform: scale(1);';
                    } 
                    else 
                    {  
                        echo 'transform: scale('.get_option('css_size').');';
                    }
                }    
                ?>
       
        }
        
        #BackContainer
        {
            position: fixed; 
            z-index: 99999;
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
      
    </style>
<!-- script à appliquer -->
    <script>
        
    /**Declaration variable */       
         
          var largeurScreen = window.innerWidth;
          var longueurScreen = window.innerHeight;
          var s = document.getElementById('BackContainer').style; 
          var backContainer = document.getElementById('BackContainer');
          var player = document.getElementById('svgContainer');
          var animation = document.getElementById('animation').style;
          <?php if (get_option('logo_isVivible')=='1') 
          {
              echo 'var logo = document.getElementById(\'logo\').style';
          }
          ?>
  
        
    /* size screen */
          function resizing()
          {
              largeurScreen = window.innerWidth;
              longueurScreen = window.innerHeight;
  
              s.width = (largeurScreen+100)+'px';
              s.height = (longueurScreen+100)+'px';
              longueurScreen = window.innerHeight;
  
            /** width et heigth #animation et #logo */      
          
              largeurScreen =(window.innerWidth*20)/100;
              animation.width=largeurScreen+'px';
              animation.height=largeurScreen+'px';
          
          
              <?php if (get_option('logo_isVivible')=='1')
              {?>
                  largeurScreen =(window.innerWidth*20)/100;
                  logo.width=largeurScreen+'px';
                  logo.height=largeurScreen+'px';
              <?php
              }
              ?>
          }
  
          window.onresize = resizing;
          
          resizing();
          
        /** */
        //
        //
    /** script fade out */
      window.addEventListener("DOMContentLoaded", function(event) 
        {          
            date = new Date;
			charg_aft = date.getTime();
            
            var loadTime = charg_aft-charg_bef;
            console.log('loadtime : '+loadTime);
            if (loadTime< <?php  
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_duree_animation')=='') 
                    {
                        echo 3000;
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
                        echo 3000;
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
                        echo 3000;
                    } 
                    else 
                    {
                        $duree= get_option('css_duree_animation');
                        echo $duree*1000;
                    }
                }  ?>
            )
           {
               var timePreloader =  parseInt(<?php  
                if(get_option('type_animation')=='animation GIF')
                { 
                    if (get_option('gif_duree_animation')=='') 
                    {
                        echo 3000;
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
                        echo 3000;
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
                        echo 3000;
                    } 
                    else 
                    {
                        $duree= get_option('css_duree_animation');
                        echo $duree*1000;
                    }
                }  

              ?>) - loadTime;
              
               setTimeout("fadeOut()", timePreloader);  
           } 
           else 
           {
               fadeOut();
           }
        });
        function fadeOut()
        {
            
            console.log('fonction fadeout');

            document.documentElement.scrollTop = 0;
            fade();
        }
        function fade()
        {
            
            
            let styleOp = window.getComputedStyle(backContainer).getPropertyValue('opacity');
            if(styleOp>0)
            {
                styleOp-=0.01;
                backContainer.style.opacity = styleOp;
                setTimeout(fade,6);
            }
            else
            {
                s.display="none";
                var body = document.body;
                var remChild = document.getElementById('preloader');
                var garbage = body.removeChild(remChild);
            }
        }
      

    </script>
<!---->

 </div>
 <?php
}

?>