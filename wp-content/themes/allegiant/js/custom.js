var slideIndex = 1;
var k = 1;

jQuery(document).ready(function(){
   // jQuery(".img-box > img").css({'width':(jQuery(".img-detail").width()+'px')});
});

//showDivs(slideIndex);

function plusDivs(n, imgClass, showImageClass ) {


// jQuery(".img-box > img").css({'width':(jQuery(".img-detail").width()+'px')});
  // var pic  = jQuery('.img-box');
  // console.log('showImageClass = ' + '.'+showImageClass+'')
  // console.log('pic.width() = ' + pic.width())
 
  

  showDivs(slideIndex += n, imgClass);
  k++;
  var x = document.getElementsByClassName(imgClass);
  if(k > x.length){
    k=1;
  }
  jQuery(".paging_"+imgClass+"").html(k+"/"+x.length);
}

function minusDivs(n, imgClass) {
  showDivs(slideIndex += n, imgClass);
  k--;
  var x = document.getElementsByClassName(imgClass);
  if(k < 1) {
    k = x.length
  }
  jQuery(".paging_"+imgClass+"").html(k+"/"+x.length);
}

function showDivs(n, imgClass) {
  
  jQuery(".img-box > img").css({'width':(jQuery(".img-detail").width()+'px')});
  var i;
  var x = document.getElementsByClassName(imgClass);

  if (n > x.length) {
    slideIndex = 1
  }

  if (n < 1) {
    slideIndex = x.length
  }

  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }

  x[slideIndex-1].style.display = "block";  
}


// ========================================================


// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

