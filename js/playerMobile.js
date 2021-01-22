const audio = document.querySelector('audio');
const button = document.querySelector('#buttonPPMob');
const imgButton = document.querySelector('#imgPPMob');

button.addEventListener('click', () => {
    if(audio.paused){
        audio.play();
        imgButton.src = './img/icons/svg/pausa.svg';
    }else{
        audio.pause();
        imgButton.src = './img/icons/svg/botao-play.svg';
    }
})