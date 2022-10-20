const videoBtn = document.querySelector('#video-btn');
const photoBtn = document.querySelector('#photo-btn');
let galleryVideo = document.querySelector('.gallery__video');
let galleryPhotos = document.querySelector('.gallery__photos');
let gallery = document.querySelector('.gallery');

videoBtn.addEventListener('click', function () {
    galleryPhotos.classList.add('_hidden');
    galleryVideo.classList.remove('_hidden');

    photoBtn.classList.add('invert-btn');
    photoBtn.classList.remove('button');

    videoBtn.classList.remove('invert-btn');
    videoBtn.classList.add('button');
})

photoBtn.addEventListener('click', function () {
    galleryPhotos.classList.remove('_hidden');
    galleryVideo.classList.add('_hidden');

    photoBtn.classList.remove('invert-btn');
    photoBtn.classList.add('button');

    videoBtn.classList.add('invert-btn');
    videoBtn.classList.remove('button');
})

function fullScreenPhoto(value) {
   let src = value.children[0].src;

    let modal = document.createElement('div');
    modal.classList.add('image-modal');

    let modalContent = document.createElement('div');
    modalContent.classList.add('image-modal__content');

    let image = document.createElement('img');
    image.classList.add('image-modal__img');
    image.src = src;
    modalContent.appendChild(image);

    let modalContentCloseBtn = document.createElement('button');
    modalContentCloseBtn.classList.add('close-btn');
    modalContentCloseBtn.classList.add('image-modal__close-btn');
    let closeImg = document.createElement("img");
    closeImg.src = '../img/close.png';
    modalContentCloseBtn.appendChild(closeImg);
    modalContent.appendChild(modalContentCloseBtn);

    modal.appendChild(modalContent);
    gallery.appendChild(modal);


    document.querySelector('.image-modal__close-btn').addEventListener('click', function () {
        modal.remove();
    })
}

