const nome_equipe = document.getElementById("nome_equipe");
const logo_equipe = document.getElementById("logo_equipe");
const nome_usuario01 = document.getElementById("nome_usuario01");
const celular_usuario01 = document.getElementById("celular_usuario01");
const nome_usuario02 = document.getElementById("nome_usuario02");
const celular_usuario02 = document.getElementById("celular_usuario02");
const nome_usuario03 = document.getElementById("nome_usuario03");
const celular_usuario03 = document.getElementById("celular_usuario03");
const nome_usuario04 = document.getElementById("nome_usuario04");
const celular_usuario04 = document.getElementById("celular_usuario04");
const nome_usuario05 = document.getElementById("nome_usuario05");
const celular_usuario05 = document.getElementById("celular_usuario05");

function Enviar(Tipo) {
  //Valida caracteres especiais

  console.log(Tipo);

  if (nome_equipe.value === "") {
    alert("Campo 'NOME EQUIPE' Vazio");
    nome_equipe.focus;
    return;
  } else if (logo_equipe.value === "") {
    alert("Campo 'Logo EQUIPE' Vazio");
    logo_equipe.focus;
    return;
  } else if (nome_usuario01.value === "") {
    alert("Campo 'Nome Usuario 01' Vazio");
    nome_usuario01.focus;
    return;
  } else if (celular_usuario01.value === "") {
    alert("Campo 'Celular Usuário 01' Vazio");
    celular_usuario01.focus;
    return;
  } else if (nome_usuario02.value === "") {
    alert("Campo 'Nome Usuário 02' Vazio");
    nome_usuario02.focus;
    return;
  } else if (celular_usuario02.value === "") {
    alert("Campo 'Celular Usuário 02' Vazio");
    celular_usuario02.focus;
    return;
  } else if (nome_usuario03.value === "") {
    alert("Campo 'Nome Usuário' Vazio");
    nome_usuario03.focus;
    return;
  } else if (celular_usuario03.value === "") {
    alert("Campo 'Celular Usuário 03' Vazio");
    celular_usuario03.focus;
    return;
  } else if (nome_usuario04.value === "") {
    alert("Campo 'Nome Usuário 04' Vazio");
    nome_usuario04.focus;
    return;
  } else if (celular_usuario04.value === "") {
    alert("Campo 'Celular Usuário 04' Vazio");
    celular_usuario04.focus;
    return;
  } else if (nome_usuario05.value === "") {
    alert("Campo 'Nome Usuário 05' Vazio");
    nome_usuario05.focus;
    return;
  } else if (celular_usuario05.value === "") {
    alert("Campo 'Celular Usuário 05' Vazio");
    celular_usuario05.focus;
    return;
  }
}

const daysElement = document.querySelector("[data-dias]");
const hoursElement = document.querySelector("[data-hora]");
const minutesElement = document.querySelector("[data-minutos]");
const secondsElement = document.querySelector("[data-segundos]");

const render =(days, hours, minutes, seconds) =>{
    daysElement.innerHTML =days;
    hoursElement.innerHTML =hours;
    minutesElement.innerHTML=minutes;
    secondsElement.innerHTML=seconds;
};

const countdown = () => {
    const now = new Date();
    const nextYear =now.getFullYear() ;
    const targetDate = new Date(nextYear, 7, 29)

    const  timeLeft = targetDate - now;

    const days = Math.floor(timeLeft / (1000 * 60 *60 * 24));
    const hours = Math.floor((timeLeft % (1000*60*60 * 24)) /( 1000*60*60));
    const minutes = Math.floor((timeLeft % (1000*60*60)) /(1000*60));
    const seconds =Math.floor((timeLeft % (1000*60)) / 1000)
    
    render(days, hours, minutes, seconds);



    console.log(now);
}

setInterval(countdown, 1000);


function MenuShow(){
    let MenuMobile = document.querySelector('.Mobile-Menu')
    let MenuIcon = document.querySelector('.menu_icon')
    if(MenuMobile.classList.contains('open')){
        MenuMobile.classList.remove('open')
        MenuIcon.classList.remove('fa-xmark')
        MenuIcon.classList.add('fa-bars')
        
    }else{
        MenuMobile.classList.add('open')
        MenuIcon.classList.remove('fa-bars')
        MenuIcon.classList.add('fa-xmark')
        
        
    }
    console.log(MenuMobile)
}