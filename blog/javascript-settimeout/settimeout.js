const distance = 160;
const moveBox = document.getElementById('moveBox');
const boxStyle = window.getComputedStyle(moveBox);

function vertically(){
    document.getElementById('moveBox').animate([
    { top:          '0px', left:          '0px' },
    { top:`${distance}px`, left:          '0px' },
    { top:`${distance}px`, left:`${distance}px` },
    { top:          '0px', left:`${distance}px` },
    { top:          '0px', left:          '0px' }
    ], {
        duration: 20000,
        iterations: Infinity
    });
}



moveBox.onclick = function(){
    moveBox.style.backgroundColor="red";
    console.log(boxStyle.backgroundColor);
    setTimeout(erace, 5000); 
}

function erace() {
    moveBox.style.display="none";
}






onload = vertically;

console.log(boxStyle.backgroundColor);