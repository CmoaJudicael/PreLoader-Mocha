<!--XPLODE-->
<div id="cadre">
    <div class="text"></div>
</div>



<style id="styleAnimation">
    #cadre
    {
        display: flex;
        align-items: center;
    }
    <?php
    for ($i=0; $i < 15; $i++) 
    { 
        for ($j=0; $j < 6; $j++) 
        { 
            $x=(int)rand(-400,400);
            $y=(int)rand(-400,400);
            $widthAnim=(int)rand(5,30);
            $heightAnim=$widthAnim;
            echo '@keyframes test'.$i.$j.'{60%{transform: translate('.$x.'px, '.$y.'px) rotate(180deg);width: '.$widthAnim.'px;height: '.$heightAnim.'px;}80%{transform: translate(0px, 0px);}}';
        }
    }

    ?>


  
</style>

<script>
    var color_array =['<?php if (get_option('css_couleur_animation')!='') {echo '#'.get_option('css_couleur_animation');}else{echo '#28283a';};?>','<?php if (get_option('css_couleur_animation_2')!='') {echo '#'.get_option('css_couleur_animation_2');}else{echo '#fcc600';};?>','<?php if (get_option('css_couleur_animation_3')!='') {echo '#'.get_option('css_couleur_animation_3');}else{echo '#C6383F';};?>'];
    var moncadre=document.getElementById('cadre');
    var numCarre_1=0;
    var numCarre_2=0;
    var contenairCarre=[];
    function newBubble()
        {
            let rond=document.createElement('div');
            let nbr=Math.floor(Math.random() * 3);
            let timeAnim=Math.floor(Math.random() * (5 - 2)) + 2;
            let rand=Math.floor(Math.random() * 400);
            let an=Math.floor(Math.random() * 3);


            var dim= '20px';
            rond.style.backgroundColor= color_array[nbr];
            rond.style.width= dim;            
            rond.style.height= dim;
            rond.style.borderRadius='25%';
            rond.style.position='absolute';
            rond.style.left= '-5px';
            rond.style.top='-5px';
            rond.className='carre';
            moncadre.append(rond);


            contenairCarre.push(rond); 
        }
    
    function remBubble(rond)
    {
        rond.remove();
    }

    function anim()
    {
        let keyFrameString = '';
        let compteur = 0;
        let x=0;
        while(compteur<90)
        {
            newBubble();
            compteur+=1;
        }
        for (let i = 0; i < 15; i++) 
        {
            for (let j = 0; j < 6; j++) 
            {
                let animName='3s infinite test'+i+j;
                contenairCarre[x].style.animation=animName;
                x++;
            }
            
        }
        

    }
    anim();


</script>