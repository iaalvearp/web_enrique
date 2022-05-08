document.getElementById('nav__img').addEventListener('click', mostrar_menu);
document.getElementById('back__menu').addEventListener('click', ocultar_menu);


nav = document.getElementById('nav__menu');
bg_menu = document.getElementById('back__menu');


const mostrar_menu = () => {
    nav.style.right = "0";
    bg_menu.style.display = "block";
};

const ocultar_menu = () => {
    nav__menu.style.right = "-380px";
    bg_menu.style.display = "none";
};