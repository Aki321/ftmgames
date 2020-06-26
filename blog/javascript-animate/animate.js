function fadein(){
  document.getElementById('fadein').animate({
    opacity: [ 0, 1 ],
    color: [ "#fff", "#000" ]
  }, 2000);
}

function fadeout(){
  document.getElementById('fadeout').animate({
    opacity: [0, 1]
  }, {
    direction: 'reverse',
    duration: 2000,
    easing: 'ease-in-out',
    fill: 'forwards'
  })
}

function laterally(){
  document.getElementById('laterally').animate([
    { left:    '0px' },
    { left: '-100px' },
    { left:  '100px' },
    { left:    '0px' }
  ], 2000);
}

function vertically(){
  document.getElementById('vertically').animate([
    { top:    '0px' },
    { top: '-100px' },
    { top:  '100px' },
    { top:    '0px' }
  ], 2000);
}  