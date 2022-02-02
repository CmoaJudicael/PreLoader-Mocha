<!-- Google Chrome -->
<div class="infinityChrome">
    <div></div>
    <div></div>
    <div></div>
</div>

<!-- Safari and others -->
<div class="infinity">
    <div>
        <span></span>
    </div>
    <div>
        <span></span>
    </div>
    <div>
        <span></span>
    </div>
</div>

<!-- Stuff -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: none;">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
            <feBlend in="SourceGraphic" in2="goo" />
        </filter>
    </defs>
</svg>

<style>
 /**styler anim */
 .infinity {
  width: 120px;
  height: 60px;
  position: relative;
}
.infinity div, .infinity span {
  position: absolute;
}
.infinity div {
  top: 0;
  left: 50%;
  width: 60px;
  height: 60px;
  animation: rotate 6.9s linear infinite;
}
.infinity div span {
  left: -8px;
  top: 50%;
  margin: -8px 0 0 0;
  width: 16px;
  height: 16px;
  display: block;
  background: #8C6FF0;
  box-shadow: 2px 2px 8px rgba(140, 111, 240, 0.09);
  border-radius: 50%;
  transform: rotate(90deg);
  animation: move 6.9s linear infinite;
}
.infinity div span:before, .infinity div span:after {
  content: '';
  position: absolute;
  display: block;
  border-radius: 50%;
  width: 14px;
  height: 14px;
  background: inherit;
  top: 50%;
  left: 50%;
  margin: -7px 0 0 -7px;
  box-shadow: inherit;
}
.infinity div span:before {
  animation: drop1 0.8s linear infinite;
}
.infinity div span:after {
  animation: drop2 0.8s linear infinite 0.4s;
}
.infinity div:nth-child(2) {
  animation-delay: -2.3s;
}
.infinity div:nth-child(2) span {
  animation-delay: -2.3s;
}
.infinity div:nth-child(3) {
  animation-delay: -4.6s;
}
.infinity div:nth-child(3) span {
  animation-delay: -4.6s;
}
.infinityChrome {
  width: 128px;
  height: 60px;
}
.infinityChrome div {
  position: absolute;
  width: 16px;
  height: 16px;
  background: <?php if (get_option('css_couleur_animation')!='') {echo '#'.get_option('css_couleur_animation');}else{echo '#dadada';};?>;
  box-shadow: 2px 2px 8px rgba(140, 111, 240, 0.09);
  border-radius: 50%;
  animation: moveSvg 6.9s linear infinite;
  -webkit-filter: url(#goo);
  filter: url(#goo);
  transform: scaleX(-1);
  offset-path: path("M64.3636364,29.4064278 C77.8909091,43.5203348 84.4363636,56 98.5454545,56 C112.654545,56 124,44.4117395 124,30.0006975 C124,15.5896556 112.654545,3.85282763 98.5454545,4.00139508 C84.4363636,4.14996252 79.2,14.6982509 66.4,29.4064278 C53.4545455,42.4803627 43.5636364,56 29.4545455,56 C15.3454545,56 4,44.4117395 4,30.0006975 C4,15.5896556 15.3454545,4.00139508 29.4545455,4.00139508 C43.5636364,4.00139508 53.1636364,17.8181672 64.3636364,29.4064278 Z");
}
.infinityChrome div:before, .infinityChrome div:after {
  content: '';
  position: absolute;
  display: block;
  border-radius: 50%;
  width: 14px;
  height: 14px;
  background: inherit;
  top: 50%;
  left: 50%;
  margin: -7px 0 0 -7px;
  box-shadow: inherit;
}
.infinityChrome div:before {
  animation: drop1 0.8s linear infinite;
}
.infinityChrome div:after {
  animation: drop2 0.8s linear infinite 0.4s;
}
.infinityChrome div:nth-child(2) {
  animation-delay: -2.3s;
}
.infinityChrome div:nth-child(3) {
  animation-delay: -4.6s;
}
@keyframes moveSvg {
  0% {
    offset-distance: 0%;
  }
  25% {
    background: <?php if (get_option('css_couleur_animation_2')!='') {echo '#'.get_option('css_couleur_animation_2');}else{echo '#5628EE';};?>;
  }
  75% {
    background: <?php if (get_option('css_couleur_animation_3')!='') {echo '#'.get_option('css_couleur_animation_3');}else{echo '#23C4F8';};?>;
  }
  100% {
    offset-distance: 100%;
  }
}
@keyframes rotate {
  50% {
    transform: rotate(360deg);
    margin-left: 0;
  }
  50.0001%, 100% {
    margin-left: -60px;
  }
}
@keyframes move {
  0%, 50% {
    left: -8px;
  }
  25% {
    background: <?php if (get_option('css_couleur_animation_2')!='') {echo '#'.get_option('css_couleur_animation_2');}else{echo '#5628EE';};?>;
  }
  75% {
    background: <?php if (get_option('css_couleur_animation_3')!='') {echo '#'.get_option('css_couleur_animation_3');}else{echo '#23C4F8';};?>;
  }
  50.0001%, 100% {
    left: auto;
    right: -8px;
  }
}
@keyframes drop1 {
  100% {
    transform: translate(32px, 8px) scale(0);
  }
}
@keyframes drop2 {
  0% {
    transform: translate(0, 0) scale(0.9);
  }
  100% {
    transform: translate(32px, -8px) scale(0);
  }
}
.infinity {
  display: none;
}


</style>