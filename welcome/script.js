const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
const navLogo = document.querySelector('#navbar__logo');
const allLinks = document.querySelectorAll('.navbar__item');
const navButton = document.querySelector('#Contact');
const welcomeAni=document.querySelector('.welcomeAni');

// Display Mobile Menu
const mobileMenu = () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);

for(let i=0;i<allLinks.length;i++)
{
  allLinks[i].addEventListener('click', mobileMenu);
}

navButton.addEventListener('click', mobileMenu);

welcomeAni.addEventListener("animationend", ()=>{
  welcomeAni.remove();
})