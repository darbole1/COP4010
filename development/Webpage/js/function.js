var aboutpop = document.getElementById('aboutUs');
var aboutbtn = document.getElementById('aboutbtn');
var dispop = document.getElementById('disclaimer');
var disbtn = document.getElementById('disbtn');
var locpop = document.getElementById('location');
var locbtn = document.getElementById('locbtn');
var x = document.getElementsByClassName('close')[0];
var y = document.getElementsByClassName('close')[1];

/******'X' Close******/
x.onclick = function() {aboutpop.style.display = 'none';}
y.onclick = function() {dispop.style.display = 'none';}
/******Close Pop-Ups******/
window.onclick = function(event)
{
    if (event.target == aboutpop)
        aboutpop.style.display = 'none';
	else if (event.target == dispop)
		dispop.style.display = 'none';
	else if (event.target == locpop)
		locpop.style.display = 'none';
}

aboutbtn.onclick = function() {aboutpop.style.display = 'block';}
disbtn.onclick = function() {dispop.style.display = 'block';}
locbtn.onclick = function() {locpop.style.display = 'block';}
