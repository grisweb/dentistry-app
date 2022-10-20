function setIsModalHidden() {
    const modal = document.querySelector('.sign-in-modal');
    modal.classList.toggle('_hidden');
}

function setIsSecondModalHidden() {
    const signInModal = document.querySelector('.sign-in-modal');
    signInModal.classList.toggle('_hidden');

    const modal = document.querySelector('.register-modal');
    modal.classList.toggle('_hidden');
}



