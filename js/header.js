// Variables
const $toggle = document.getElementById('user-actions-toggle');
const $actions = document.getElementById('user-actions');

// Functions
const handleShowActions = (e) => {
    $actions.classList.toggle('active');
}

const handleHiddenActions = (e) => {
    $actions.classList.remove('active');
}

// Executions
document.addEventListener('click', (e) => {
    if(e.target === $toggle || e.target.matches('#user-actions-toggle *')) {
        handleShowActions(e);
    }else {
        handleHiddenActions(e);
    }

});