<div class="typo position_menu_1" >
    <form action="options.php" method="POST">
        <?php
        
            settings_fields( 'Mocha_Plugin_Settings' );
            do_settings_sections( 'Mocha_Prod_Preloader_Type_hidden_page' );
            do_settings_sections( 'Mocha_Prod_Preloader_Lotti_page' );
            ?><p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary Pos_Button" value="SAUVEGARDER & PREVISUALISER" style="background-color: #28283a;"></p>
            <?php 
            do_settings_sections( 'Mocha_Prod_Preloader_menu_1_page' );
        ?>
    </form>
</div>