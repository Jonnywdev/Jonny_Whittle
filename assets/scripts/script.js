const navGrow = document.querySelector('.extend-nav');
const toggle = document.querySelector('#toggle');

toggle.addEventListener('click', () => {
    navGrow.classList.toggle('show-nav');
})