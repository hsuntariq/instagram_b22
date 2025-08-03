let c_icon = document.querySelectorAll('.comment-icon')
let overlay = document.querySelector('.overlay')
let close_btn = document.querySelector('.close-overlay')
let content = document.querySelector('.my-overlay-content')
let more_btn = document.querySelector('.more-btn')
let menu_container = document.querySelector('.menu-container')
let choose_post = document.querySelector('.choose-post')
let preview_image = document.querySelector('.preview-image')
let preview_video = document.querySelector('.preview-video')
let model_content = document.querySelector('.content-modal')
let b_arrow = document.querySelector('.b-arrow')
let b_arrow2 = document.querySelector('.b-arrow2')
let modal_heading = document.querySelector('.modal-heading')
let next_btn = document.querySelector('.next-btn')
let next_btn2 = document.querySelector('.next-btn2')
let share_btn = document.querySelector('.share-btn')
let post_section = document.querySelector('.post-section')
let caption_section = document.querySelector('.caption-section')
let create_btn = document.querySelector('.create')
let post_underlay = document.querySelector('.post-underlay')
let post_box = document.querySelector('.post-box')
let post_video = document.querySelectorAll('.post-video')
let volume_btn = document.querySelectorAll('.volume-btn')
let main_content = document.querySelector('.main-content')








c_icon.forEach((item, index) => {

    item.addEventListener('click', () => {
        overlay.classList.remove('d-none')
        overlay.classList.add('d-flex')
        content.classList.add('animate-content')
    })
})
close_btn.addEventListener('click', () => {
    overlay.classList.remove('d-flex')
    overlay.classList.add('d-none')
    content.classList.remove('animate-content')
})



more_btn.addEventListener('click', () => {
    menu_container.classList.toggle('d-none')
})




choose_post.addEventListener('input', (e) => {
    modal_heading.innerHTML = 'Crop'
    b_arrow.classList.remove('d-none')
    next_btn.classList.remove('d-none')

    model_content.classList.add('d-none')
    let file = e.target.files[0]
    let url = URL.createObjectURL(file)
    if (file.type.startsWith('image')) {
        preview_image.classList.remove('d-none')
        preview_video.classList.add('d-none')
        preview_image.src = url
    } else if (file.type.startsWith('video')) {
        preview_video.classList.remove('d-none')
        preview_image.classList.add('d-none')
        preview_video.src = url
    }
    console.log(file)
})
b_arrow.addEventListener('click', (e) => {
    modal_heading.innerHTML = 'Crate a new post'
    b_arrow.classList.add('d-none')
    preview_image.classList.add('d-none')
    preview_video.classList.add('d-none')
    model_content.classList.remove('d-none')
    preview_image.src = ''
    preview_video.src = ''
    caption_section.style.width = '0%'
    post_section.style.width = '100%'
    next_btn.classList.add('d-none')
    next_btn2.classList.add('d-none')
})

next_btn.addEventListener('click', () => {
    caption_section.style.width = '30%'
    post_section.style.width = '70%'
    next_btn.classList.add('d-none')
    next_btn2.classList.remove('d-none')
})


create_btn.addEventListener('click', () => {
    post_underlay.classList.remove('d-none')
})


post_underlay.addEventListener('click', () => {
    post_underlay.classList.add('d-none')
})

post_box.addEventListener('click', (e) => {
    e.stopPropagation()
})

// volume_btn.addEventListener('click', () => {
//     if (post_video.muted) {
//         post_video.muted = false
//         volume_btn.classList.add('bi-volume-up')
//         volume_btn.classList.remove('bi-volume-mute')
//     } else {
//         post_video.muted = true
//         volume_btn.classList.remove('bi-volume-up')
//         volume_btn.classList.add('bi-volume-mute')

//     }
// })



// main_content.addEventListener('scroll', (e) => {
//     let trigger = window.innerHeight / 2
//     console.log(post_video[0].getBoundingClientRect())
// })


volume_btn.forEach((item, index) => {
    item.addEventListener('click', () => {

        if (post_video[index].muted) {
            post_video.forEach((video, index) => {
                video.muted = true
            })
            post_video[index].muted = false
            item.classList.remove('bi-volume-mute')
            item.classList.add('bi-volume-up')

        } else {
            post_video.forEach((video, index) => {
                video.muted = true
            })
            post_video[index].muted = true
            item.classList.add('bi-volume-mute')
            item.classList.remove('bi-volume-up')


        }
    })
})