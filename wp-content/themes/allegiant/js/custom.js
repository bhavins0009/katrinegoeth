var slideIndex = 1;
//showDivs(slideIndex);

function plusDivs(n, imgClass) {
  showDivs(slideIndex += n, imgClass);
}

function showDivs(n, imgClass) {
  var i;
  var x = document.getElementsByClassName(imgClass);
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }

  x[slideIndex-1].style.display = "block";  
}

jQuery(document).ready(function() {
  jQuery(".img-box img").css({
    'width': (jQuery(".img-detail").width() + 'px')
  });
});