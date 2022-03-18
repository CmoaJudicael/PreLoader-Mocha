<!--DESIGN GEOGRAPHIQUE-->
<figure>
  <div></div><div></div>
  <div></div><div></div>
  <div></div><div></div>
  <div></div><div></div>
</figure>



<style>
 /**styler anim */

    figure
    {margin:0;transform:translate(-50%,-50%) rotate(0deg) scale(1.4,1.4);position:absolute;left:50%;top:50%;border-radius:150px;box-sizing:border-box;animation:rotation 20s infinite linear;}

    figure div:after
    {
        content:"";
        width:20px;
        height:20px;
        border:1px solid <?php if (get_option('css_couleur_animation')!='') {echo '#'.get_option('css_couleur_animation');}else{echo '#28283A';};?>;
        box-sizing:border-box;position:absolute;
        left:20px;top:20px;
        animation:shuffle 2s infinite alternate;
    }

    figure div:nth-child(1){transform:rotate(0deg)}
    figure div:nth-child(1):after{animation-delay:-0.5s;}
    figure div:nth-child(2){transform:rotate(45deg)}
    figure div:nth-child(2):after{animation-delay:-1s;}
    figure div:nth-child(3){transform:rotate(90deg)}
    figure div:nth-child(3):after{animation-delay:-1.5s;}
    figure div:nth-child(4){transform:rotate(135deg)}
    figure div:nth-child(4):after{animation-delay:-2s;}
    figure div:nth-child(5){transform:rotate(180deg)}
    figure div:nth-child(5):after{animation-delay:-2.5s;}
    figure div:nth-child(6){transform:rotate(225deg)}
    figure div:nth-child(6):after{animation-delay:-3s;}
    figure div:nth-child(7){transform:rotate(270deg)}
    figure div:nth-child(7):after{animation-delay:-3.5s;}
    figure div:nth-child(8){transform:rotate(315deg)}
    figure div:nth-child(8):after{animation-delay:-4;}

    @keyframes rotation
    {
        100%{transform:translate(-50%,-50%) rotate(-360deg) scale(1.4,1.4);}
    }
    @keyframes shuffle
    {
        50%{transform:scale(0.4,0.4) rotate(-90deg);border-radius:50%;
            border:1px solid <?php if (get_option('css_couleur_animation_2')!='') {echo '#'.get_option('css_couleur_animation_2');}else{echo '#28283A';};?>;
        }            
        100%
        {
            border:1px solid <?php if (get_option('css_couleur_animation_3')!='') {echo '#'.get_option('css_couleur_animation_3');}else{echo '#C6383F';};?>;
        }
    }


</style>