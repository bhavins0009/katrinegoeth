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

