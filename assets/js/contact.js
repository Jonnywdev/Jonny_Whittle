const contactForm = document.querySelector('#contact-form');


contactForm.addEventListener('submit1', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
});

function hidecontactform() {
    var x = document.getElementById('contact-form');
    var y = document.getElementById('form-submitted');
    
      y.style.display = 'block';
      x.style.display = 'none';
    
  }
