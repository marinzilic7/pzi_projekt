const GameSliderImages = document.querySelector('.games_slider_images');
const GameSliderImagesAll = document.querySelectorAll('.games_slider_images_all img ');

//BUTTONS

const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");

//Brojac

let counter = 1;

const size = GameSliderImagesAll[0].clientWidth;

GameSliderImages.style.transform = 'translateX(' + (-size * counter) + 'px)';

//buttons_postavke

nextBtn.addEventListener("click", () => {
  if(counter >= GameSliderImagesAll.length-1) return;
  GameSliderImages.style.transition = "transform 0.4s ease-in-out";
  counter++;
  GameSliderImages.style.transform = 'translateX(' + (-size * counter) + 'px)';
  GameSliderImages.style.overflow = "visible"
  
});


prevBtn.addEventListener("click", () => {
  if(counter <= 0) return;
  GameSliderImages.style.transition = "transform 0.4s ease-in-out";
  counter--;
  GameSliderImages.style.transform = 'translateX(' + (-size * counter) + 'px)';
  GameSliderImages.style.overflowX = "visible"
});


GameSliderImages.addEventListener('transitionend', () =>{
    if(GameSliderImagesAll[counter].id === 'lastClone'){
      GameSliderImages.style.transition = 'none'; 
      counter = GameSliderImagesAll.length - 2; 
      GameSliderImages.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
     if(GameSliderImagesAll[counter].id === 'firstClone'){
      GameSliderImages.style.transition = 'none'; 
      counter = GameSliderImagesAll.length - counter; 
      GameSliderImages.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }


   
    
})






