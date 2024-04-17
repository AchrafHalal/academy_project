import './bootstrap';

let ul = document.querySelector('ul');
let toggle = document.querySelector('#toggle');
let div_ul = document.querySelector('#div-ul');

toggle.addEventListener('click', () => {
    ul.classList.toggle('hidden');
    ul.classList.toggle('absolute');
    div_ul.classList.toggle('bg-white');
});
