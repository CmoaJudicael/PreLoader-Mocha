<div class="scene">
    <div class="plane">
        <div class="cube cube--0">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--0"></div>
        <div class="cube cube--1">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--1"></div>
        <div class="cube cube--2">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--2"></div>
        <div class="cube cube--3">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--3"></div>
        <div class="cube cube--4">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--4"></div>
        <div class="cube cube--5">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--5"></div>
        <div class="cube cube--6">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--6"></div>
        <div class="cube cube--7">
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
            <div class="cube__side"></div>
        </div>
        <div class="shadow shadow--7"></div>
    </div>
</div>

<style>
/**animation */
*:after,
*:before {
  box-sizing: border-box;
}
:root {
  --hue: 185;
  --radius: 5.5;
  --size: 4;
}
[type='checkbox'] {
  position: absolute;
  left: 100%;
  opacity: 0;
  height: 0;
  width: 0;
}
.scene {
  perspective: 800px;
  transform-style: preserve-3d;
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.plane {
  height: 5vmin;
  width: 5vmin;
  transform-style: preserve-3d;
  transform: rotateX(-40deg) rotateY(-45deg) rotateX(90deg);
}
.cube,
.shadow {
  --width: var(--size);
  --height: var(--size);
  --depth: var(--size);
  height: calc(var(--depth) * 1vmin);
  width: calc(var(--width) * 1vmin);
  transform-style: preserve-3d;
  position: absolute;
  font-size: 1rem;
  animation: jump 0.8s calc(var(--d) * 1s) infinite;
  transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 0);
}
.cube > div:nth-of-type(1),
.shadow > div:nth-of-type(1) {
  background:  <?php if (get_option('css_couleur_animation_2')!='') {echo '#'.get_option('css_couleur_animation_2');}else{echo '#dadada';};?>;
  height: calc(var(--height) * 1vmin);
  width: 100%;
  transform-origin: 50% 50%;
  transform: rotateX(-90deg);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotateX(-90deg) translate3d(0, 0, calc((var(--depth) / 2) * 1vmin));
}
.cube > div:nth-of-type(2),
.shadow > div:nth-of-type(2) {
  background: hsl(var(--hue), 60%, 60%);
  height: calc(var(--height) * 1vmin);
  width: 100%;
  transform-origin: 50% 50%;
  transform: translate(-50%, -50%) rotateX(-90deg) rotateY(180deg) translate3d(0, 0, calc((var(--depth) / 2) * 1vmin));
  position: absolute;
  top: 50%;
  left: 50%;
}
.cube > div:nth-of-type(3),
.shadow > div:nth-of-type(3) {
  background: <?php if (get_option('css_couleur_animation_3')!='') {echo '#'.get_option('css_couleur_animation_3');}else{echo '#dadada';};?>;
  height: calc(var(--height) * 1vmin);
  width: calc(var(--depth) * 1vmin);
  transform: translate(-50%, -50%) rotateX(-90deg) rotateY(90deg) translate3d(0, 0, calc((var(--width) / 2) * 1vmin));
  position: absolute;
  top: 50%;
  left: 50%;
}
.cube > div:nth-of-type(4),
.shadow > div:nth-of-type(4) {
  background: hsl(var(--hue), 60%, 55%);
  height: calc(var(--height) * 1vmin);
  width: calc(var(--depth) * 1vmin);
  transform: translate(-50%, -50%) rotateX(-90deg) rotateY(-90deg) translate3d(0, 0, calc((var(--width) / 2) * 1vmin));
  position: absolute;
  top: 50%;
  left: 50%;
}
.cube > div:nth-of-type(5),
.shadow > div:nth-of-type(5) {
  background: <?php if (get_option('css_couleur_animation')!='') {echo '#'.get_option('css_couleur_animation');}else{echo '#28283A';};?>;
  height: calc(var(--depth) * 1vmin);
  width: calc(var(--width) * 1vmin);
  transform: translate(-50%, -50%) translate3d(0, 0, calc((var(--height) / 2) * 1vmin));
  position: absolute;
  top: 50%;
  left: 50%;
}
.cube > div:nth-of-type(6),
.shadow > div:nth-of-type(6) {
  background: hsl(var(--hue), 60%, 65%);
  height: calc(var(--depth) * 1vmin);
  width: calc(var(--width) * 1vmin);
  transform: translate(-50%, -50%) translate3d(0, 0, calc((var(--height) / 2) * -1vmin)) rotateX(180deg);
  position: absolute;
  top: 50%;
  left: 50%;
}
.shadow {
  animation: none;
  background: radial-gradient(#000, transparent);
  transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(1);
  animation: shadow 0.8s calc(var(--d) * 1s) infinite;
}
.cube--0,
.shadow--0 {
  --x: 1;
  --y: 0;
  --d: -0.7;
}
.cube--1,
.shadow--1 {
  --x: 1;
  --y: -1;
  --d: -0.6;
}
.cube--2,
.shadow--2 {
  --x: 0;
  --y: -1;
  --d: -0.5;
}
.cube--3,
.shadow--3 {
  --x: -1;
  --y: -1;
  --d: -0.4;
}
.cube--4,
.shadow--4 {
  --x: -1;
  --y: 0;
  --d: -0.3;
}
.cube--5,
.shadow--5 {
  --x: -1;
  --y: 1;
  --d: -0.2;
}
.cube--6,
.shadow--6 {
  --x: 0;
  --y: 1;
  --d: -0.1;
}
.cube--7,
.shadow--7 {
  --x: 1;
  --y: 1;
  --d: 0;
}
.cube--7 .lds-roller,
.shadow--7 .lds-roller {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.cube--7 .lds-roller div,
.shadow--7 .lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 40px 40px;
}
.cube--7 .lds-roller div:after,
.shadow--7 .lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #fff;
  margin: -4px 0 0 -4px;
}
.cube--7 .lds-roller div:nth-child(1),
.shadow--7 .lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.cube--7 .lds-roller div:nth-child(1):after,
.shadow--7 .lds-roller div:nth-child(1):after {
  top: 63px;
  left: 63px;
}
.cube--7 .lds-roller div:nth-child(2),
.shadow--7 .lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.cube--7 .lds-roller div:nth-child(2):after,
.shadow--7 .lds-roller div:nth-child(2):after {
  top: 68px;
  left: 56px;
}
.cube--7 .lds-roller div:nth-child(3),
.shadow--7 .lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.cube--7 .lds-roller div:nth-child(3):after,
.shadow--7 .lds-roller div:nth-child(3):after {
  top: 71px;
  left: 48px;
}
.cube--7 .lds-roller div:nth-child(4),
.shadow--7 .lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.cube--7 .lds-roller div:nth-child(4):after,
.shadow--7 .lds-roller div:nth-child(4):after {
  top: 72px;
  left: 40px;
}
.cube--7 .lds-roller div:nth-child(5),
.shadow--7 .lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.cube--7 .lds-roller div:nth-child(5):after,
.shadow--7 .lds-roller div:nth-child(5):after {
  top: 71px;
  left: 32px;
}
.cube--7 .lds-roller div:nth-child(6),
.shadow--7 .lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.cube--7 .lds-roller div:nth-child(6):after,
.shadow--7 .lds-roller div:nth-child(6):after {
  top: 68px;
  left: 24px;
}
.cube--7 .lds-roller div:nth-child(7),
.shadow--7 .lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.cube--7 .lds-roller div:nth-child(7):after,
.shadow--7 .lds-roller div:nth-child(7):after {
  top: 63px;
  left: 17px;
}
.cube--7 .lds-roller div:nth-child(8),
.shadow--7 .lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.cube--7 .lds-roller div:nth-child(8):after,
.shadow--7 .lds-roller div:nth-child(8):after {
  top: 56px;
  left: 12px;
}
@-moz-keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-o-keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-moz-keyframes jump {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 0);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 3.5vmin);
  }
}
@-webkit-keyframes jump {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 0);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 3.5vmin);
  }
}
@-o-keyframes jump {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 0);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 3.5vmin);
  }
}
@keyframes jump {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 0);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), 3.5vmin);
  }
}
@-moz-keyframes shadow {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(1);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(0.85);
    opacity: 0.2;
  }
}
@-webkit-keyframes shadow {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(1);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(0.85);
    opacity: 0.2;
  }
}
@-o-keyframes shadow {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(1);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(0.85);
    opacity: 0.2;
  }
}
@keyframes shadow {
  0%, 30%, 100% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(1);
  }
  15% {
    transform: translate3d(calc((var(--x) * var(--radius)) * 1vmin), calc((var(--y) * var(--radius)) * -1vmin), calc(var(--size) * -0.5vmin)) scale(0.85);
    opacity: 0.2;
  }
}


</style>