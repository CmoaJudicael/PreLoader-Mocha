<div class="typo position_menu_1" >
    <form action="options.php" method="POST">
        <?php
        
            settings_fields( 'Mocha_Plugin_Settings' );
            do_settings_sections( 'Mocha_Prod_Preloader_Type_hidden_page' );
            do_settings_sections( 'Mocha_Prod_Preloader_Gif_page' );

            
            if (get_option('type_animation')!='')
            {
                if ($activeMenuLogo==false)
                {
                    echo '<p class="message typo">N\'oubliez pas de sauvegarder pour enregistrer vos réglages et prévisualiser, avant de mettre en ligne. Vous pourrez ensuite ajouter votre logo !</p>';
                }
            }
            ?>
            
            <div class="flexD flex-just-evenly">
            <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary Pos_Button" value="SAUVEGARDER & PREVISUALISER" style="background-color: #28283a;"></p>
            <?php
            if (get_option('menu_position')=='1')
            {
                echo '<p class="submit"><button type="button" id="button_centrer" class="typo hand_Cursor submit button-primary button Pos_Button" style="background-color: #28283a;" onclick="centrer(\'animation\')" >CENTRER VOTRE ANIMATION</button></p>';
            }
            ?>
            </div>
            <?php 
            do_settings_sections( 'button_OnOff_page' );
            do_settings_sections( 'Mocha_Prod_Preloader_menu_1_page' );
        ?>
    </form>
    
</div>
