<?php

if ( ! class_exists( 'Preloader_Mocha_Opt' ) ) 
{
	class Preloader_Mocha_Opt
    {
		/**
	 	* Constructeur pur cette class.
	 	*/
		public function __construct() 
        {
            //Creation des parametres
            
            creation_parametre();
            creation_section();            
            creation_settings_field();

		}
	}
//
//déclaration des parametres des options
    function creation_parametre()
    {
    //
    //settings logo
      //
      //logo_url
        register_setting( 
            'Logo_Settings', // Settings group.
            'logo_url',        // Setting name
            array(
                'type'              => 'string',
                'description'       => '',
                'sanitize_callback' => 'sanitize_text_field'
            )   
            
        );    
      //     
      //logo_scale
        register_setting( 
            'Logo_Settings', // Settings group.
            'logo_scale',        // Setting name
            array(
                'type'              => 'string',
                'description'       => '',
                'sanitize_callback' => 'sanitize_text_field'
            )   
            
        );   
      //     
      //logo_left
          register_setting( 
              'Logo_Settings', // Settings group.
              'logo_left',        // Setting name
              array(
                  'type'              => 'string',
                  'description'       => '',
                  'sanitize_callback' => 'sanitize_text_field'
              )   
              
          );   
      //     
      //logo_top
            register_setting( 
                'Logo_Settings', // Settings group.
                'logo_top',        // Setting name
                array(
                    'type'              => 'string',
                    'description'       => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )   
                
            ); 
      //     
      //logo_width
            register_setting( 
                'Logo_Settings', 
                'logo_width',
                array(
                    'type'              => 'text',
                    'description'       => 'longueur',
                    'sanitize_callback' => 'sanitize_text_field'
                )        
            );
      //     
      //logo_height
            register_setting( 
                'Logo_Settings', 
                'logo_height',
                array(
                    'type'              => 'text',
                    'description'       => 'hauteur',
                    'sanitize_callback' => 'sanitize_text_field'
                )        
            );
      //          
      //logo_isVisible
            register_setting( 
                'Logo_Settings', 
                'logo_isVivible',     
            );
            
    //
    //settings généraux
      //
      //type animation
        register_setting( 
            'Mocha_Plugin_Settings', // Settings group.
            'type_animation',        // Setting name
            array(
                'type'              => 'string',
                'description'       => '',
                'sanitize_callback' => 'sanitize_text_field'
            )   
            
        );    
      //     
      //position menu personnalisation
        register_setting( 
            'Mocha_Plugin_Settings', // Settings group.
            'menu_position',        // Setting name
            array(
                'type'              => 'string',
                'description'       => '',
                'sanitize_callback' => 'sanitize_text_field'
            )   
            
        ); 
    //
    //settings GIF animation    
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_lien_animation',
            array(
                'type'              => 'url',
                'description'       => 'url du gif',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_animation_selection',
            array(
                'type'              => 'text',
                'description'       => 'choix animation',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_background_color',
            array(
                'type'              => 'text',
                'description'       => 'Couleur d du fond du preloader',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_width',
            array(
                'type'              => 'text',
                'description'       => 'longueur',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_height',
            array(
                'type'              => 'text',
                'description'       => 'hauteur',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_duree_animation',
            array(
                'type'              => 'text',
                'description'       => 'duree',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_position_top',
            array(
                'type'              => 'text',
                'description'       => 'position en %',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'gif_position_left',
            array(
                'type'              => 'text',
                'description'       => 'position en %',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
    //
    //settings Lotti animation   
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_animation_selection',
            array(
                'type'              => 'text',
                'description'       => 'selection du lotti',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_lien_animation',
            array(
                'type'              => 'url',
                'description'       => 'url du lotti',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_background_color',
            array(
                'type'              => 'text',
                'description'       => 'Couleur d du fond du preloader',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_width',
            array(
                'type'              => 'text',
                'description'       => 'longueur',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_height',
            array(
                'type'              => 'text',
                'description'       => 'hauteur',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_duree_animation',
            array(
                'type'              => 'text',
                'description'       => 'duree',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_position_top',
            array(
                'type'              => 'text',
                'description'       => 'position en %',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'lotti_position_left',
            array(
                'type'              => 'text',
                'description'       => 'position en %',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
    //
    //settings CSS animation   
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_code_animation',
            array(
                'type'              => 'select',
                'description'       => 'selection du css',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_background_color',
            array(
                'type'              => 'text',
                'description'       => 'Couleur d du fond du preloader',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_couleur_animation',
            array(
                'type'              => 'text',
                'description'       => 'Couleur d du fond du preloader',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_couleur_animation_2',
            array(
                'type'              => 'text',
                'description'       => 'longueur',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_couleur_animation_3',
            array(
                'type'              => 'text',
                'description'       => 'hauteur',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_duree_animation',
            array(
                'type'              => 'text',
                'description'       => 'duree',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );   
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_position_top',
            array(
                'type'              => 'text',
                'description'       => 'position en %',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
        register_setting( 
            'Mocha_Plugin_Settings', 
            'css_position_left',
            array(
                'type'              => 'text',
                'description'       => 'position en %',
                'sanitize_callback' => 'sanitize_text_field'
            )        
        );
    //
    //SETTING TUTO
        register_setting( 
            'tuto_Settings', // Settings group.
            'tuto_affichage',        // Setting name
            array(
                'type'              => 'text',
                'description'       => '',
                'sanitize_callback' => ''
            )   
            
        ); 
        
    //
    
    }
    

//
//Creation des sections de parametres
    function creation_section()
    {
    //
    //section GIF
        add_settings_section( 
            'animation_gif_option',                   // Section ID
            'Configuration Animation GIF',  // Title
            'section_GIF',            // Callback or empty string
            'Mocha_Prod_Preloader_Gif_page'            // Page to display the section in.
        );
    //
    //section Lotti
        add_settings_section( 
            'animation_Lotti_option',                   // Section ID
            'Configuration Animation lotti',  // Title  
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_Lotti_page'              // Page to display the section in.
        );
    //
    //section CSS
        add_settings_section( 
            'animation_CSS_option',                   // Section ID
            'Configuration Animation CSS',  // Title
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_CSS_page'            // Page to display the section in.
        );
    //
    //section type hidden
        add_settings_section( 
            'type_hidden_animation',                   // Section ID
            'Type d\'animation choisi',  // Title
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_Type_hidden_page'            // Page to display the section in.
        );
    //
    //section logo
        add_settings_section( 
            'logo_animation',                   // Section ID
            'Intégrez votre logo',  // Title
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_logo_page'            // Page to display the section in.
        );
    //
    //section type
        add_settings_section( 
            'definition_type_animation',                   // Section ID
            'Choisir le type d\'animation',  // Title
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_Type_page'            // Page to display the section in.
        );
    //
    //section menu hidden0
        add_settings_section( 
            'menu_hidden_animation_0',                   // Section ID
            '',  // Title
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_menu_0_page'            // Page to display the section in.
        );
    //
    //section menu hidden1
        add_settings_section( 
            'menu_hidden_animation_1',                   // Section ID
            '',  // Title
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_menu_1_page'            // Page to display the section in.
        );
    //
    //section tuto
        add_settings_section( 
            'tutoriel',                   // Section ID
            '',  // Title
            '',            // Callback or empty string
            'Mocha_Prod_Preloader_tuto_page'            // Page to display the section in.
        );    
    //
    //fonction callback
        function section_GIF()
        {

        }
        function section_Lotti()
        {

        }
        function section_CSS()
        {
        
        }
    }

//
//creation des settings_field
    function creation_settings_field()
    {
    //
    //Tuto_setting_field
      //tuto_affichage
            add_settings_field( 
                'tuto_affichage_field',                // Field ID
                '',                       // Title
                __( 'tuto_affichage_field_markup', 'example' ),     // Callback to display the field
                'Mocha_Prod_Preloader_tuto_page',                // Page
                'tutoriel',                      // Section
            );
            function tuto_affichage_field_markup( $args )
            {
                $setting = get_option( 'tuto_affichage' );
                $value   = $setting ?: '';
                ?>
                    <input class="regular-text" type="hidden" name="tuto_affichage" value="<?php if(get_option('tuto_affichage')==''){ echo esc_attr( '1' );}else if(get_option('tuto_affichage')=='1'){echo esc_attr( '' );}else{echo esc_attr( '' );}?>">
                <?php
            }
    //
    //Gif setting field
      //gif_animation_selection
        add_settings_field( 
            'gif_animation_selection_field',                // Field ID
            'Choix du GIF :',                       // Title
            __( 'gif_animation_selection_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Gif_page',                // Page
            'animation_gif_option',                      // Section
        );
        function gif_animation_selection_field( $args )
        {
            $setting = get_option( 'gif_animation_selection' );
            $value   = $setting ?: '';
            ?>
                <select type="select" name="gif_animation_selection" id="code_gif" >
                    <option value="gif_animation_0" <?php if (get_option( 'gif_animation_selection')=='gif_animation_0'){echo 'selected';} ?>>animation gif personnalisé</option>
                    <option value="gif_animation_1" <?php if (get_option( 'gif_animation_selection')=='gif_animation_1'){echo 'selected';} ?>>animation gif 1</option>
                    <option value="gif_animation_2" <?php if (get_option( 'gif_animation_selection')=='gif_animation_2'){echo 'selected';} ?>>animation gif 2</option>
                    <option value="gif_animation_3" <?php if (get_option( 'gif_animation_selection')=='gif_animation_3'){echo 'selected';} ?>>animation gif 3</option>
                    <option value="gif_animation_4" <?php if (get_option( 'gif_animation_selection')=='gif_animation_4'){echo 'selected';} ?>>animation gif 4</option>
                </select>
            <?php
        }
      //lien_animation_gif
        add_settings_field( 
            'lien_animation_field',                // Field ID
            'GIF URL (media) :',                       // Title
            __( 'GIF_lien_animation_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Gif_page',                // Page
            'animation_gif_option',                      // Section
        );
        function GIF_lien_animation_field( $args )
        {
            $setting = get_option( 'gif_lien_animation' );
            $value   = $setting ?: '';
            
            $animation_selection= get_option( 'gif_animation_selection' );
            switch ($animation_selection) 
            {
                case 'gif_animation_0':
                    ?>    
                        <input class="regular-text" type="url" name="gif_lien_animation" value="<?php echo esc_attr( $value );?>">
                    <?php
                    break;
                case 'gif_animation_1':
                    $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_1.gif';
                    ?>    
                        <input class="regular-text hidd" type="url" name="gif_lien_animation" value="<?php echo $gif_animation_url;?>" disabled >
                        
                    <?php
                    break;
                case 'gif_animation_2':
                    $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_2.gif';
                    ?>    
                        <input class="regular-text hidd" type="url" name="gif_lien_animation" value="<?php echo $gif_animation_url;?>" disabled >
                        
                    <?php
                    break;
                case 'gif_animation_3':
                    $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_3.gif';
                    ?>    
                        <input class="regular-text hidd" type="url" name="gif_lien_animation" value="<?php echo $gif_animation_url;?>" disabled >
                        
                    <?php
                    break;
                case 'gif_animation_4':
                    $gif_animation_url= plugin_dir_url(__FILE__) . 'view/gif/animation_gif_4.gif';
                    ?>    
                        <input class="regular-text hidd" type="url" name="gif_lien_animation" value="<?php echo $gif_animation_url;?>" disabled >
                        
                    <?php
                    break;
                default:
                    ?>    
                        <input class="regular-text" type="url" name="gif_lien_animation" value="<?php echo esc_attr( $value );?>">
                    <?php
                    break;
            }
            
        }
      //bg color
        add_settings_field( 
            'bg_color_field',                // Field ID
            'Background-color : #',                       // Title
            __( 'background_color_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Gif_page',                // Page
            'animation_gif_option',                      // Section
        );
        function background_color_field( $args )
        {
            $setting = get_option( 'gif_background_color' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="gif_background_color" value="<?php echo esc_attr( $value );?>">
                <p>(exemple : ffff)</p>
            <?php
        }
      //gif_width
          add_settings_field( 
              'gif_width_field',                // Field ID
              'Width (largeur) : px',                       // Title
              __( 'gif_width_field', 'example' ),     // Callback to display the field
              'Mocha_Prod_Preloader_Gif_page',                // Page
              'animation_gif_option',                      // Section
          );
          function gif_width_field( $args )
          {
              $setting = get_option( 'gif_width' );
              $value   = $setting ?: '';
              ?>
  
                  <input class="regular-text" type="text" name="gif_width" value="<?php echo esc_attr( $value );?>">
                  <p>(exemple : 400)</p>
              <?php
          }
      //gif_height
              add_settings_field( 
                  'gif_height_field',                // Field ID
                  'Height (hauteur) : px',                       // Title
                  __( 'gif_height_field', 'example' ),     // Callback to display the field
                  'Mocha_Prod_Preloader_Gif_page',                // Page
                  'animation_gif_option',                      // Section
              );
              function gif_height_field( $args )
              {
                  $setting = get_option( 'gif_height' );
                  $value   = $setting ?: '';
                  ?>
      
                      <input class="regular-text" type="text" name="gif_height" value="<?php echo esc_attr( $value );?>">
                  <?php
              }
      //gif_duree_animation
            add_settings_field( 
                'gif_duree_animation',                // Field ID
                'Duree animation : s',                       // Title
                __( 'gif_duree_animation_field', 'example' ),     // Callback to display the field
                'Mocha_Prod_Preloader_Gif_page',                // Page
                'animation_gif_option',                      // Section
            );
            function gif_duree_animation_field( $args )
            {
                $setting = get_option( 'gif_duree_animation' );
                $value   = $setting ?: '';
                ?>
    
                    <input class="regular-text" type="text" name="gif_duree_animation" value="<?php echo esc_attr( $value );?>">
                    <p>(exemple : 2)</p>
                <?php
            }
      //gif_position_top
        add_settings_field( 
            'gif_position_top_field',                // Field ID
            '',                       // Title
            __( 'gif_position_top_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Gif_page',                // Page
            'animation_gif_option',                      // Section
        );
        function gif_position_top_field( $args )
        {
            $setting = get_option( 'gif_position_top' );
            $value   = $setting ?: '';
            ?>

                <input id="objTop" class="regular-text" type="hidden" name="gif_position_top" value="<?php echo esc_attr( $value );?>">
            <?php
        }    
      //gif_position_left
        add_settings_field( 
            'gif_position_left_field',                // Field ID
            '',                       // Title
            __( 'gif_position_left_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Gif_page',                // Page
            'animation_gif_option',                      // Section
        );
        function gif_position_left_field( $args )
        {
            $setting = get_option( 'gif_position_left' );
            $value   = $setting ?: '';
            ?>

                <input id="objLeft" class="regular-text" type="hidden" name="gif_position_left" value="<?php echo esc_attr( $value );?>">
            <?php
        }  
        
    //
    //Lotti setting field
      //lotti_animation_selection
        add_settings_field( 
            'lotti_animation_selection_field',                // Field ID
            'Choix du lotti :',                       // Title
            __( 'lotti_animation_selection_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
        function lotti_animation_selection_field( $args )
        {
            $setting = get_option( 'lotti_animation_selection' );
            $value   = $setting ?: '';
            ?>
                <select name="lotti_animation_selection" id="code_lotti">
                    <option value="lotti_animation_0" <?php if (get_option( 'lotti_animation_selection')=='lotti_animation_0'){echo 'selected';} ?>>animation lotti personnalisé</option>
                    <option value="lotti_animation_1" <?php if (get_option( 'lotti_animation_selection')=='lotti_animation_1'){echo 'selected';} ?>>animation lotti 1</option>
                    <option value="lotti_animation_2" <?php if (get_option( 'lotti_animation_selection')=='lotti_animation_2'){echo 'selected';} ?>>animation lotti 2</option>
                    <option value="lotti_animation_3" <?php if (get_option( 'lotti_animation_selection')=='lotti_animation_3'){echo 'selected';} ?>>animation lotti 3</option>
                    <option value="lotti_animation_4" <?php if (get_option( 'lotti_animation_selection')=='lotti_animation_4'){echo 'selected';} ?>>animation lotti 4</option>
                </select>
            <?php
        }
      //lotti_lien_animation
        add_settings_field( 
            'lotti_lien_animation_field',                // Field ID
            'LottiFile URL (media) :',                       // Title
            __( 'lotti_lien_animation_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
        function lotti_lien_animation_field( $args )
        {
            $setting = get_option( 'lotti_lien_animation' );
            $value   = $setting ?: '';
            
            $animation_selection= get_option( 'lotti_animation_selection' );
            switch ($animation_selection) 
            {
                case 'lotti_animation_0':
                    ?>    
                        <input class="regular-text" type="url" name="lotti_lien_animation" value="<?php echo esc_attr( $value );?>">
                    <?php
                    break;
                case 'lotti_animation_1':
                    $lotti_animation_url='https://assets1.lottiefiles.com/packages/lf20_5ia28iiv.json';
                    ?>    
                        
                        <input class="regular-text" type="url" name="lotti_lien_animation" value="<?php echo esc_attr( $lotti_animation_url);?>" readonly="readonly">
                    <?php
                    break;
                case 'lotti_animation_2':
                    $lotti_animation_url='https://assets4.lottiefiles.com/packages/lf20_vv8jpd78.json';
                    ?>    
                        
                        <input class="regular-text" type="url" name="lotti_lien_animation" value="<?php echo esc_attr( $lotti_animation_url);?>" readonly="readonly">
                    <?php
                    break;
                case 'lotti_animation_3':
                    $lotti_animation_url='https://assets5.lottiefiles.com/packages/lf20_f6whimsf.json';
                    ?>    
                        
                        <input class="regular-text" type="url" name="lotti_lien_animation" value="<?php echo esc_attr( $lotti_animation_url);?>" readonly="readonly">
                    <?php
                    break;
                case 'lotti_animation_4':
                    $lotti_animation_url='https://assets1.lottiefiles.com/packages/lf20_kxsgasus.json';
                    ?>    
                        
                        <input class="regular-text" type="url" name="lotti_lien_animation" value="<?php echo esc_attr( $lotti_animation_url);?>" readonly="readonly">
                    <?php
                    break;
                    
                
                default:
                    ?>    
                        <input class="regular-text" type="url" name="lotti_lien_animation" value="<?php echo esc_attr( $value );?>">
                    <?php
                    break;
            }

        }
      //lotti_background_color
        add_settings_field( 
            'lotti_background_color_field',                // Field ID
            'Background-color : #',                       // Title
            __( 'lotti_background_color_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
        function lotti_background_color_field( $args )
        {
            $setting = get_option( 'lotti_background_color' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="lotti_background_color" value="<?php echo esc_attr( $value );?>">
                <p>(exemple : ffff)</p>
            <?php
        }
      //lotti_width
        add_settings_field( 
            'lotti_width_field',                // Field ID
            'Width (largeur) : px',                       // Title
            __( 'lotti_width_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
        function lotti_width_field( $args )
        {
            $setting = get_option( 'lotti_width' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="lotti_width" value="<?php echo esc_attr( $value );?>">
                <p>(exemple : 400)</p>
            <?php
        }
      //lotti_height
        add_settings_field( 
            'lotti_height_field',                // Field ID
            'Height (hauteur) : px',                       // Title
            __( 'lotti_height_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
        function lotti_height_field( $args )
        {
            $setting = get_option( 'lotti_height' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="lotti_height" value="<?php echo esc_attr( $value );?>">
                
            <?php
        }
      //lotti_duree_animation
        add_settings_field( 
            'lotti_duree_animation_field',                // Field ID
            'Duree animation : s',                       // Title
            __( 'lotti_duree_animation_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
        function lotti_duree_animation_field( $args )
        {
            $setting = get_option( 'lotti_duree_animation' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="lotti_duree_animation" value="<?php echo esc_attr( $value );?>">
                <p>(exemple : 1)</p>
            <?php
        }
      //lotti_position_top
        add_settings_field( 
            'lotti_position_top_field',                // Field ID
            '',                       // Title
            __( 'lotti_position_top_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
        function lotti_position_top_field( $args )
        {
            $setting = get_option( 'lotti_position_top' );
            $value   = $setting ?: '';
            ?>

                <input id="objTop" class="regular-text" type="hidden" name="lotti_position_top" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //lotti_position_left
        add_settings_field( 
            'lotti_position_left_field',                // Field ID
            '',                       // Title
            __( 'lotti_position_left_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Lotti_page',                // Page
            'animation_Lotti_option',                      // Section
        );
          function lotti_position_left_field( $args )
          {
              $setting = get_option( 'lotti_position_left' );
              $value   = $setting ?: '';
              ?>
  
                  <input id="objLeft" class="regular-text" type="hidden" name="lotti_position_left" value="<?php echo esc_attr( $value );?>">
              <?php
          }
    //
    //CSS setting field
      //css_code_animation
        add_settings_field( 
            'css_code_animation_field',                // Field ID
            'Choix animation CSS :',                       // Title
            __( 'css_code_animation_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
        function css_code_animation_field( $args )
        {
            $setting = get_option( 'css_code_animation' );
            $value   = $setting ?: '';
            ?>
                <select name="css_code_animation" id="code_css">
                    <option value="css_animation_1" <?php if (get_option( 'css_code_animation')=='css_animation_1'){echo 'selected';} ?>>Digital cube</option>
                    <option value="css_animation_2" <?php if (get_option( 'css_code_animation')=='css_animation_2'){echo 'selected';} ?>>Nenuphar</option>
                    <option value="css_animation_3" <?php if (get_option( 'css_code_animation')=='css_animation_3'){echo 'selected';} ?>>Mini fish</option>
                    <option value="css_animation_4" <?php if (get_option( 'css_code_animation')=='css_animation_4'){echo 'selected';} ?>>Flip flap</option>
                    <option value="css_animation_5" <?php if (get_option( 'css_code_animation')=='css_animation_5'){echo 'selected';} ?>>Design géométrique </option>
                    <option value="css_animation_6" <?php if (get_option( 'css_code_animation')=='css_animation_6'){echo 'selected';} ?>>Rain color</option>
                    <option value="css_animation_7" <?php if (get_option( 'css_code_animation')=='css_animation_7'){echo 'selected';} ?>>Xplode</option>
                </select>
            <?php
        }
      //css_background_color
        add_settings_field( 
            'css_background_color_field',                // Field ID
            'Background-color : #',                       // Title
            __( 'css_background_color_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
        function css_background_color_field( $args )
        {
            $setting = get_option( 'css_background_color' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="css_background_color" value="<?php echo esc_attr( $value );?>">
                <p>(exemple : ffff)</p>
            <?php
        }
      //css_couleur_animation   
        add_settings_field( 
            'css_couleur_animation_field',                // Field ID
            'Couleur animation : #',                       // Title
            __( 'css_couleur_animation_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
        function css_couleur_animation_field( $args )
        {
            $setting = get_option( 'css_couleur_animation' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="css_couleur_animation" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //css_couleur_animation_2
        add_settings_field( 
            'css_couleur_animation_2_field',                // Field ID
            'Couleur animation : #',                       // Title
            __( 'css_couleur_animation_2_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
        function css_couleur_animation_2_field( $args )
        {
            $setting = get_option( 'css_couleur_animation_2' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="css_couleur_animation_2" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //css_couleur_animation_3
        add_settings_field( 
            'css_couleur_animation_3_field',                // Field ID
            'Couleur animation : #',                       // Title
            __( 'css_couleur_animation_3_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
        function css_couleur_animation_3_field( $args )
        {
            $setting = get_option( 'css_couleur_animation_3' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="css_couleur_animation_3" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //css_duree_animation
        add_settings_field( 
            'css_duree_animation_field',                // Field ID
            'Duree animation : s',                       // Title
            __( 'css_duree_animation_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
        function css_duree_animation_field( $args )
        {
            $setting = get_option( 'css_duree_animation' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="css_duree_animation" value="<?php echo esc_attr( $value );?>">
                <p>(exemple : 1)</p>
            <?php
        }
      //css_position_top
        add_settings_field( 
            'css_position_top_field',                // Field ID
            '',                       // Title
            __( 'css_position_top_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
          function css_position_top_field( $args )
          {
              $setting = get_option( 'css_position_top' );
              $value   = $setting ?: '';
              ?>
  
                  <input id="objTop" class="regular-text" type="hidden" name="css_position_top" value="<?php echo esc_attr( $value );?>">
              <?php
          }
      //css_position_left
        add_settings_field( 
            'css_position_left_field',                // Field ID
            '',                       // Title
            __( 'css_position_left_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_CSS_page',                // Page
            'animation_CSS_option',                      // Section
        );
          function css_position_left_field( $args )
          {
              $setting = get_option( 'css_position_left' );
              $value   = $setting ?: '';
              ?>
  
                  <input id="objLeft" class="regular-text" type="hidden" name="css_position_left" value="<?php echo esc_attr( $value );?>">
              <?php
          }
    //
    //logo settings field
      //logo_url
        add_settings_field( 
            'logo_url_field',                // Field ID
            'Url de l\'image du logo : ',                       // Title
            __( 'logo_url_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_logo_page',                // Page
            'logo_animation',                      // Section
        );
        function logo_url_field( $args )
        {
            $setting = get_option( 'logo_url' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="logo_url" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //logo_scale
        add_settings_field( 
            'logo_scale_field',                // Field ID
            'Scale : ',                       // Title
            __( 'logo_scale_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_logo_page',                // Page
            'logo_animation',                      // Section
        );
        function logo_scale_field( $args )
        {
            $setting = get_option( 'logo_scale' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="logo_scale" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //logo_width
        add_settings_field( 
            'logo_width_field',                // Field ID
            'Width (largeur) : px',                       // Title
            __( 'logo_width_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_logo_page',                // Page
            'logo_animation',                      // Section
        );
        function logo_width_field( $args )
        {
            $setting = get_option( 'logo_width' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="logo_width" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //logo_height
        add_settings_field( 
            'logo_height_field',                // Field ID
            'Height (hauteur) : px',                       // Title
            __( 'logo_height_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_logo_page',                // Page
            'logo_animation',                      // Section
        );
        function logo_height_field( $args )
        {
            $setting = get_option( 'logo_height' );
            $value   = $setting ?: '';
            ?>

                <input class="regular-text" type="text" name="logo_height" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //logo_isVivible
        add_settings_field( 
            'logo_isVivible',                // Field ID
            'Visible',                       // Title
            __( 'logo_isVivible', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_logo_page',                // Page
            'logo_animation',                      // Section
        );
        function logo_isVivible( $args )
        {
            $setting = get_option( 'logo_isVivible' );
            $value   = $setting ?: '';
            ?>
                <label class="switch">
                    <input id="logo_isVivible" class="regular-text" type="checkbox" name="logo_isVivible" value="<?php echo esc_attr( '1' );?>" <?php checked(1, get_option('logo_isVivible'), true); ?>>   
                    <span class="slider round"></span>
                </label>
                
            <?php
        }
      //logo_left
        add_settings_field( 
            'logo_left_field',                // Field ID
            '',                       // Title
            __( 'logo_left_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_logo_page',                // Page
            'logo_animation',                      // Section
        );
        function logo_left_field( $args )
        {
            $setting = get_option( 'logo_left' );
            $value   = $setting ?: '';
            ?>

                <input id="logoLeft" class="regular-text" type="hidden" name="logo_left" value="<?php echo esc_attr( $value );?>">
            <?php
        }
      //logo_top
        add_settings_field( 
            'logo_top_field',                // Field ID
            '',                       // Title
            __( 'logo_top_field', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_logo_page',                // Page
            'logo_animation',                      // Section
        );
        function logo_top_field( $args )
        {
            $setting = get_option( 'logo_top' );
            $value   = $setting ?: '';
            ?>

                <input id="logoTop" class="regular-text" type="hidden" name="logo_top" value="<?php echo esc_attr( $value );?>">
            <?php
        }        
    //
    //type setting hidden field
      //Animation type hidden
        add_settings_field( 
            'hidden_type_animation',                // Field ID
            '',                       // Title
            __( 'type_hidden_animation_field_markup', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Type_hidden_page',                // Page
            'type_hidden_animation',                      // Section
        );
        function type_hidden_animation_field_markup( $args )
        {
            $setting = get_option( 'type_animation' );
            $value   = $setting ?: '';
            echo $value;
            ?>
                <input class="regular-text" type="hidden" name="type_animation" value="<?php echo esc_attr( $value );?>">
            <?php
        }
    //   
    //menu position
      //menu_position_hidden 1
            add_settings_field( 
                'hidden_menu_position_1',                // Field ID
                '',                       // Title
                __( 'menu_hidden_animation_field_markup', 'example' ),     // Callback to display the field
                'Mocha_Prod_Preloader_menu_1_page',                // Page
                'menu_hidden_animation_1',                      // Section
            );
            function menu_hidden_animation_field_markup( $args )
            {
                $setting = get_option( 'menu_position' );
                $value   = $setting ?: '';
                ?>
                    <input class="regular-text" type="hidden" name="menu_position" value="<?php echo esc_attr( '1' );?>">
                <?php
            }
      //menu_position_hidden 0
        add_settings_field( 
            'hidden_menu_position_0',                // Field ID
            '',                       // Title
            __( 'pos_hidden_animation_field_markup', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_menu_0_page',                // Page
            'menu_hidden_animation_0',                      // Section
        );
        function pos_hidden_animation_field_markup( $args )
        {
            $setting = get_option( 'menu_position' );
            $value   = $setting ?: '';
            ?>
                <input class="regular-text" type="hidden" name="menu_position" value="<?php echo esc_attr( '0' );?>">
            <?php
        }
    //
    //type setting field
      //type animation
        add_settings_field( 
            'def_type_animation',                // Field ID
            '',                       // Title
            __( 'type_animation_field_markup', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Type_page',                // Page
            'definition_type_animation',                      // Section
        );
        function type_animation_field_markup( $args )
        {
            $setting = get_option( 'type_animation' );
            $value   = $setting ?: '';
            ?>
                <div class="puce_radio">

                    <label class="rad-label regular-text">
                        <input type="radio" class="rad-input" name="type_animation" value="animation GIF" <?php if($value=='animation GIF'){echo "checked";} ?>>
                        <div class="rad-design"></div>
                        <div class="rad-text">Animation GIF</div>
                    </label>

                    <label class="rad-label regular-text">
                        <input type="radio" class="rad-input" name="type_animation" value="animation LottiFile" <?php if($value=='animation LottiFile'){echo "checked";} ?>>
                        <div class="rad-design"></div>
                        <div class="rad-text">Animation LottiFile</div>
                    </label>

                    <label class="rad-label regular-text">
                        <input type="radio" class="rad-input" name="type_animation" value="animation CSS" <?php if($value=='animation CSS'){echo "checked";} ?>>
                        <div class="rad-design"></div>
                        <div class="rad-text">Animation CSS</div>
                    </label>
                </div>            
            <?php
        }  
      //menu_position
        add_settings_field( 
            'hidden_menu_position',                // Field ID
            '',                       // Title
            __( 'pos_animation_field_markup', 'example' ),     // Callback to display the field
            'Mocha_Prod_Preloader_Type_page',                // Page
            'definition_type_animation',                      // Section
        );
        function pos_animation_field_markup( $args )
        {
            $setting = get_option( 'menu_position' );
            $value   = $setting ?: '';
            echo $value;
            ?>
                <input class="regular-text" type="hidden" name="menu_position" value="<?php echo esc_attr( '1' );?>">
            <?php
        }      
    
        
    }
//
// Instantiate the plugin class.
	$Preloader_Mocha_opt = new Preloader_Mocha_Opt();

}
?>