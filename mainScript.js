/* Sticky Nav Bar*/
window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});

/* Accordion */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
this.classList.toggle("active");
var panel = this.nextElementSibling;
if (panel.style.maxHeight) {
  panel.style.maxHeight = null;
} else {
  panel.style.maxHeight = panel.scrollHeight + "px";
} 
});
}

/* Toggle Menu */
function toggleMenu(){
  const menuToggle = document.querySelector('.menuToggle');
  const navigation = document.querySelector('.navigation');
  menuToggle.classList.toggle('active');
  navigation.classList.toggle('active')
}


/* slideShow */

var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btnSlider');
let currentSlide = 1;
// Javascript for image slider manual navigation
var manualNav = function(manual){
slides.forEach((slide) => {
    slide.classList.remove('active');

    btns.forEach((btnSlider) => {
        btnSlider.classList.remove('active');
    });
});

slides[manual].classList.add('active');
btns[manual].classList.add('active');
}

btns.forEach((btnSlider, i) => {
btnSlider.addEventListener("click", () => {
    manualNav(i);
    currentSlide = i;
});
});

// Javascript for image slider autoplay navigation
var repeat = function(activeClass){
let active = document.getElementsByClassName('active');
let i = 1;

var repeater = () => {
    setTimeout(function(){
        [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
        });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
            i = 0;
        }
        if(i >= slides.length){
            return;
        }
        repeater();
    }, 10000);
}
repeater();
}
repeat();

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tablecars");
  switching = true;
  dir = "asc"; 
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 2; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("td")[n];
      y = rows[i + 1].getElementsByTagName("td")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;      
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

function startediting(id)
{
	var IDelement = document.getElementById('ID'+id);
	var nameelement = document.getElementById('name'+id);
	var priceelement = document.getElementById('price'+id);
	var photoelement = document.getElementById('photo'+id);
	var specselement = document.getElementById('specs'+id);
	var actionelement = document.getElementById('action'+id);
	IDelement.innerHTML = "<input form = 'elementform"+id+"' class = 'inputfield' type = 'text' value = '"+IDelement.innerHTML+"' name ='ID' required>";
	nameelement.innerHTML = "<input form = 'elementform"+id+"' class = 'inputfield' type = 'text' value = '"+nameelement.innerHTML+"' name = 'name' required>";
	priceelement.innerHTML = "<input form = 'elementform"+id+"' class = 'inputfield' type = 'text' value = '"+priceelement.innerHTML+"' name = 'price' required>";
	photoelement.innerHTML = "<input form = 'elementform"+id+"' class = 'inputfield' type = 'file' value = '"+photoelement.innerHTML+"' name = 'photo' required>";
	specselement.innerHTML = "<input form = 'elementform"+id+"' class = 'inputfield' type = 'text' value = '"+specselement.innerHTML+"' name = 'specs' required>";
	actionelement.innerHTML = "<input form = 'elementform"+id+"' type = 'submit' style=' width:70px; ' name = 'editbutton' class = 'submitbutton' value = 'Save'><input form = 'elementform"+id+"' type='hidden' name='car' value='"+id+"'><button style=' width: 70px; height: 25px; align-items: center; margin: 0 auto; background-color: #808080; border-radius: 5px; ' class = 'submitbutton' onclick = 'cancelediting(\""+id+"\")'>Cancel</button>";
}

function cancelediting(id)
{
	location.reload(true)
}
