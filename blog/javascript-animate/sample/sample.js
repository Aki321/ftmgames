console.log('-animation-');

const fadein = document.getElementById('fadein');
fadein.animate({
  opacity: [0, 1]
}, 1500)


const fadeout = document.getElementById('fadeout');
fadeout.animate({
    opacity: [0, 1]
  }, {
    direction: 'reverse',
    duration: 1500
})


const coloriter = document.getElementById('coloriter');
coloriter.animate({
    color: ['#409EFF', '#FF409E']
  }, {
    duration: 1500,
    iterations: Infinity
})


const fill = document.getElementById('fill');
fill.animate({
    opacity: [0, 1]
  }, {
    delay: 500,
    direction: 'reverse',
    duration: 1500,
    easing: 'ease-in-out',
    fill: 'forwards'
  })

const laterally1 = document.getElementById('laterally1');
laterally1.animate([ { left:   '0px' },
{ left: '-20px' },
{ left: '100px' },
{ left:  '50px' }
], 2000);  /* spacing はデフォルト値 "distribute" */



const laterally2 = document.getElementById('laterally2');
laterally2.animate([ { left:   '0px' },
{ left: '-20px' },
{ left: '100px' },
{ left:  '50px' }
], { duration: 2000, spacing: "paced(left)" });


const vertically = document.getElementById('vertically');
vertically.animate([
    // keyframes
    { transform: 'translate3D(0, 0, 0)' }, 
    { transform: 'translate3D(0, -300px, 0)' }
  ], { 
    // timing options
    duration: 1000,
    iterations: Infinity
  });

const opacity = document.getElementById('opacity');
opacity.animate({
    opacity: [ 0, 1 ], // [ フレーム 1, フレーム 2 ]
    color: [ "#fff", "#000" ] // [ フレーム 1, フレーム 2 ]
  }, 3000);

const opacity2 = document.getElementById('opacity2');
opacity2.animate([ 
    { // フレーム 1
      opacity: 0,
      color: "#fff"
    }, 
    { // フレーム 2
      opacity: 1,
        color: "#000"
    }
  ], 2000);
             