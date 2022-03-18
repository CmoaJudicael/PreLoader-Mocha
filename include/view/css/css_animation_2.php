<!--NENUPHAR-->
<div class="loader">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>

<style>
 /**styler anim */
 .loader {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 8px;
}
.loader div {
  width: 60px;
  height: 60px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: <?php if (get_option('css_couleur_animation')!='') {echo '#'.get_option('css_couleur_animation');}else{echo '#28283A';};?>;
  border-radius: 50%;
}
.loader div:before,
.loader div:after {
  content: '';
  width: 60px;
  height: 60px;
  position: absolute;
  border-radius: 50%;
}
.loader div:before {
  background-color: <?php if (get_option('css_couleur_animation_3')!='') {echo '#'.get_option('css_couleur_animation_3');}else{echo '#dadada';};?>;
  animation: scale-1 2400ms linear infinite;
}
.loader div:after {
  background-color: <?php if (get_option('css_couleur_animation_2')!='') {echo '#'.get_option('css_couleur_animation_2');}else{echo '#28283A';};?>;
  animation: scale-2 2400ms linear infinite;
}
.loader div:nth-child(2):before,
.loader div:nth-child(2):after {
  animation-delay: 300ms;
}
.loader div:nth-child(3):before,
.loader div:nth-child(3):after {
  animation-delay: 600ms;
}
.loader div:nth-child(4):before,
.loader div:nth-child(4):after {
  animation-delay: 900ms;
}
.loader div:nth-child(5):before,
.loader div:nth-child(5):after {
  animation-delay: 1200ms;
}
.loader div:nth-child(6):before,
.loader div:nth-child(6):after {
  animation-delay: 1500ms;
}
.loader div:nth-child(7):before,
.loader div:nth-child(7):after {
  animation-delay: 1800ms;
}
.loader div:nth-child(8):before,
.loader div:nth-child(8):after {
  animation-delay: 2100ms;
}
.loader div:nth-child(9):before,
.loader div:nth-child(9):after {
  animation-delay: 2400ms;
}
@-moz-keyframes scale-1 {
  0% {
    transform: scale(0);
    z-index: 2;
  }
  50%, 100% {
    transform: scale(1);
  }
}
@-webkit-keyframes scale-1 {
  0% {
    transform: scale(0);
    z-index: 2;
  }
  50%, 100% {
    transform: scale(1);
  }
}
@-o-keyframes scale-1 {
  0% {
    transform: scale(0);
    z-index: 2;
  }
  50%, 100% {
    transform: scale(1);
  }
}
@keyframes scale-1 {
  0% {
    transform: scale(0);
    z-index: 2;
  }
  50%, 100% {
    transform: scale(1);
  }
}
@-moz-keyframes scale-2 {
  0%, 50% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@-webkit-keyframes scale-2 {
  0%, 50% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@-o-keyframes scale-2 {
  0%, 50% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes scale-2 {
  0%, 50% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}


</style>