// Variables
const $modal = document.getElementById('modal');
const $btnClose = document.getElementById('modal-button-close');

// Functions
const handleOpenModal = (e) => {
    $modal.classList.add('active');
    $modal.querySelector('.modal-document').src = e.target.dataset.src;
};
const handleCloseModal = () => $modal.classList.remove('active');

// Executions
document.addEventListener('click', (e) => {
    
    if (e.target.matches('.modal-button-open') || e.target.matches('.modal-button-open *')) {
        handleOpenModal(e);
    }else {
        handleCloseModal();
    }
    
    if (e.target === $btnClose || e.target.matches('#modal-button-close *')) {
        handleCloseModal();
    }
});