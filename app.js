let c_icon = document.querySelector('.comment-icon')
let overlay = document.querySelector('.overlay')
let close_btn = document.querySelector('.close-overlay')
let content = document.querySelector('.my-overlay-content')
let more_btn = document.querySelector('.more-btn')
let menu_container = document.querySelector('.menu-container')
c_icon.addEventListener('click', () => {
    overlay.classList.remove('d-none')
    overlay.classList.add('d-flex')
    content.classList.add('animate-content')
})
close_btn.addEventListener('click', () => {
    overlay.classList.remove('d-flex')
    overlay.classList.add('d-none')
    content.classList.remove('animate-content')
})



more_btn.addEventListener('click', () => {
    menu_container.classList.toggle('d-none')
})

