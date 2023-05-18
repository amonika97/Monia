$(document).ready(function(){
    $(window).on('scroll', function(){
        if($(window).scrollTop()){
            $(".navigation").addClass('bgc');
        }else{
            $(".navigation").removeClass('bgc');
        };
    });
});

//menu
document.addEventListener("DOMContentLoaded", function() {
  let navigation = document.querySelector('.bars');
  let navMenu = document.querySelector('.custom-menu');

  navigation.addEventListener("click", function(event) {
    event.preventDefault();
    navMenu.classList.toggle('active');
  });

  document.addEventListener("click", function(event) {
    if (!event.target.closest('.bars') && !event.target.closest('.custom-menu')) {
      navMenu.classList.remove('active');
    }
  });
});


  

//search button

let searchBtn = document.querySelector('#searchBtn');
let searchClose = document.querySelector('#searchClose');
let searchBox = document.querySelector('.searchBox');

 searchBtn .onclick =  function(){
    searchBox.classList.add('active');
    searchClose.classList.add('active');
    searchBtn.classList.add('active');
 };

 searchClose .onclick =  function(){
    searchBox.classList.remove('active');
    searchClose.classList.remove('active');
    searchBtn.classList.remove('active');
 };


//Search ends
//Slide-starts
let sliderImages = document.querySelectorAll('.slide');
let arrowLeft = document.querySelector('#arrow-left');
let arrowRight = document.querySelector('#arrow-right');
let current = 0;

function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = 'none';
  }
}

function startSlide() {
  reset();
  sliderImages[0].style.display = 'block';
}

function slideLeft() {
  reset();
  current--;
  if (current < 0) {
    current = sliderImages.length - 1;
  }
  sliderImages[current].style.display = 'block';
}

function slideRight() {
  reset();
  current++;
  if (current >= sliderImages.length) {
    current = 0;
  }
  sliderImages[current].style.display = 'block';
}

arrowLeft.addEventListener('click', function() {
  slideLeft();
});

arrowRight.addEventListener('click', function() {
  slideRight();
});

startSlide();

//Slide-ends















