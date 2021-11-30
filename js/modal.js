// Variables
const $modal = document.getElementById('modal');
const $btnClose = document.getElementById('modal-button-close');

// Functions
const handleOpenModal = () => $modal.classList.add('active');
const handleCloseModal = () => $modal.classList.remove('active');

// Executions
document.addEventListener('click', (e) => {
    
    if (e.target.matches('.modal-button-open') || e.target.matches('.modal-button-open *')) {
        // e.preventDefault();
        handleOpenModal();
    }else {
        handleCloseModal();
    }
    
    if (e.target === $btnClose || e.target.matches('#modal-button-close *')) {
        // e.preventDefault();
        handleCloseModal();
    }
});