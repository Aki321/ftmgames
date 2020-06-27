onload = winSizeMon;
onresize = winSizeMon;

function winSizeMon() {
    const output = document.getElementById("windowSize");
    output.textContent = `縦: ${innerHeight}px / 横: ${innerWidth}px`;
}



