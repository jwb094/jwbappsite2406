const btn = document.querySelector('.video_modal_btn');
const videoContainer = document.querySelector('.video-container');
const close = document.querySelector('.close');
const popUpVideoModal = document.getElementById("c_video-modal");

btn.addEventListener('click',()=>{
  videoContainer.classList.add('show');
  popUpVideoModal.play();
});

close.addEventListener('click',()=>{
  popUpVideoModal.pause();
  videoContainer.classList.remove('show');
});