function flash() {
    var text = document.getElementById('foo');
    text.style.color = (text.style.color=='green') ? 'red':'green';
}
var clr = setInterval(flash, 1000);

function flash1() {
    var text1 = document.getElementById('foo1');
    text1.style.color = (text1.style.color=='yellow') ? 'Aqua':'yellow';
}
var clr1 = setInterval(flash1, 1000);


function flash2() {
    var text2 = document.getElementById('foo2');
    text2.style.color = (text2.style.color=='yellow') ? 'Aqua':'yellow';
}
var clr2 = setInterval(flash2, 1000);


function flash3() {
    var text3 = document.getElementById('foo3');
    text3.style.color = (text3.style.color=='yellow') ? 'GreenYellow':'yellow';
}
var clr3 = setInterval(flash3, 1000);


