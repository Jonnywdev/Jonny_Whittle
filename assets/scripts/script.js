const navGrow = document.querySelector('.extend-nav');
const toggle = document.querySelector('#toggle');
const cvGrow = document.querySelector('.extend-nav-cv');
const cvToggle = document.querySelector('#cv-toggle');

toggle.addEventListener('click', () => {
    navGrow.classList.toggle('show-nav');
})

cvToggle.addEventListener('click', () => {
    cvGrow.classList.toggle('cv-nav-show');
})