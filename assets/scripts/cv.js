const cvGrow = document.querySelector('.extend-nav-cv');
const cvToggle = document.querySelector('#cv-toggle');


cvToggle.addEventListener('click', () => {
    cvGrow.classList.toggle('cv-nav-show');
})