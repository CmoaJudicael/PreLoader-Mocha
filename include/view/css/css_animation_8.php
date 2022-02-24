<div id="cadre">
    <div class="text"><p id="anim"></p><p id="barre">|</p></div>
</div>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Sanchez&display=swap');
    .visualiseur_animation
    {
        width: 100%;
        height: 100%;
    }
    #cadre
    {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
    }
    #barre
    {
        width: 2px;
        animation-duration: 1s;
        animation-name: clignoter;
        animation-iteration-count: infinite;
        transition: none;
        <?php if (get_option('size_anim_8')==''){ echo 'font-size : 10px';}else{ echo 'font-size : '.get_option( 'size_anim_8' ).'px'; } ?>
    }
    @keyframes clignoter 
    {
        0%   { opacity:1; }
        40%   {opacity:0; }
        100% { opacity:1; }
    }
    .text
    {
        font-family: 'Sanchez', serif;
        display: flex;
        justify-content: center;
        align-items : center;
    }


  
</style>

<script>
    <?php 
    if(get_option( 'text_anim_8' )=="")
    {
        $text_anim =  'je ne sais pas quoi écrire :je sais :je vais écrire quelque chose :';
    } 
    else
    {
        $text_anim = get_option( 'text_anim_8' );
    }
?>
    var animText = document.getElementById('anim');
    animText.style.fontSize = '<?php if (get_option('size_anim_8')==''){ echo '10';}else{ echo get_option( 'size_anim_8' ); } ?>px';    
    var text_anim = "<?php echo $text_anim; ?>";
    var text_tab = [];
    var txt = "";
    var step = 0;
    var text_num = 0;

    for (i=0; i< text_anim.length; i++) 
    { 
        if(text_anim[i]!=':')
        {
            txt += text_anim[i];
        }
        else
        {
            text_tab.push(txt);
            txt = "";
        }   
    }
    

    function init_anim()
    {
        animText.style.width = "100%";
        animText.style.height= "100%";
        animText.innerHTML = "";
        affiche();        
    }
    function delayAffiche()
    {
        step +=1;
        setTimeout(affiche, 200);
    }
    function delayRetrait()
    {
        setTimeout(retrait, 100);
    }
    function affiche()
    {
        if(step < text_tab[text_num].length)
        {
            let str = text_tab[text_num];
            let c = str[step];
            animText.innerHTML += c;
            delayAffiche();
        }
        else
        {
            step = 0;
            delayRetrait();
        }


    }
    function retrait()
    {
        if(step < animText.innerHTML.length)
        {
            animText.innerHTML = animText.innerHTML.substring(0, animText.innerHTML.length-1);
            delayRetrait();
        }
        else
        {
            animText.innerHTML = "";
            if (text_num == text_tab.length-1) 
            {
                text_num = 0;
            }
            else
            {
                text_num +=1;
            }
            affiche();
        }


    }



    init_anim();

</script>