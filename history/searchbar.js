
const button = document.querySelector('.searchbutton');

button.addEventListener('click', function() {
    const press = document.querySelector('.hotdogs');
    press.classList.toggle('display');
});

button.addEventListener('click', function() {
    const icon = document.querySelector('.icon');
    icon.classList.toggle('display');
});