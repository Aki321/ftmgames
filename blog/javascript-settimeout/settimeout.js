const distance = 160;
const moveBox = document.getElementById('moveBox');
const boxStyle = getComputedStyle(moveBox);
let timerId;

function boxmover(){
    document.getElementById('moveBox').animate([
    { top:          '0px', left:          '0px' },
    { top:`${distance}px`, left:          '0px' },
    { top:`${distance}px`, left:`${distance}px` },
    { top:          '0px', left:`${distance}px` },
    { top:          '0px', left:          '0px' }
    ], {
        duration: 15000,
        iterations: Infinity
    });
}


moveBox.onclick = function(){
    if(boxStyle.backgroundColor.match(/rgb\(255, 255, 255\)/)){
        console.log(`白色なので赤色に変更します`);
        moveBox.style.backgroundColor="red";
        console.log(boxStyle.backgroundColor);
        timerId = setTimeout(erace, 5000);

    } else {
        console.log(`赤色なので白色に変更します`);
        moveBox.style.backgroundColor="white";
        clearTimeout(timerId);
    }
}

function erace() {
    moveBox.style.display="none";
}

onload = boxmover;