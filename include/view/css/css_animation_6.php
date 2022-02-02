<div id="cadre">

</div>



<style>
    #cadre
    {
        position: fixed;
        top:0px;
        left:0px;
    }
    @keyframes bubbleMove
    {
        0%
        {
            top: 0px;

        }
        100%
        {
            top:800px;

        }
    }
      


  
</style>

<script>
    var color_array =['<?php if (get_option('css_couleur_animation')!='') {echo '#'.get_option('css_couleur_animation');}else{echo '#28283a';};?>','<?php if (get_option('css_couleur_animation_2')!='') {echo '#'.get_option('css_couleur_animation_2');}else{echo '#fcc600';};?>','<?php if (get_option('css_couleur_animation_3')!='') {echo '#'.get_option('css_couleur_animation_3');}else{echo '#C6383F';};?>'];
    var moncadre=document.getElementById('cadre');
    
    function newBubble()
        {
            let maxWidth = window.innerWidth;
            let rond=document.createElement('div');
            let nbr=Math.floor(Math.random() * 4);
            let timeAnim=Math.floor(Math.random() * (5 - 1)) + 1;
            let rand=Math.floor(Math.random() * maxWidth);

            var dim= ((Math.floor(Math.random() * 50))+'px');
            rond.style.backgroundColor= color_array[nbr];
            rond.style.width= dim;            
            rond.style.height= dim;
            rond.style.borderRadius='50%';
            rond.style.position='absolute';
            rond.style.left= (rand)+'px';
            rond.style.top='0px';
            rond.style.animation=timeAnim+'s ease-out 0s 1 bubbleMove';
            moncadre.append(rond)
            let count = 0;
            let int=0;
            setTimeout(remBubble,1000,rond);
            
        }
    
    function remBubble(rond)
    {
        rond.remove();
    }

    function anim()
    {

        newBubble();       

    }
    setInterval(anim,50);


</script>