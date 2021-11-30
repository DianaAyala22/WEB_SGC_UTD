// Functions
const showSelectOptions = (e) => {
    e.stopPropagation();
    e.target.querySelector('.select-options').classList.toggle('active');
    e.target.querySelector('.select-icon').classList.toggle('active');
}

// Executions
document.addEventListener('click', (e) => {
    
    if(e.target.matches('#select')) {
        // e.preventDefault();
        e.stopPropagation();
        showSelectOptions(e);
    }
})