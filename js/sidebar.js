// Variables
const $sidebar = document.getElementById('sidebar');
const $options = document.getElementById('options');
const $toggleSidebar = document.getElementById('toggle-sidebar');
const $toggleOptions = document.getElementById('toggle-options');

// Functions

const handleSidebar = () =>  $sidebar.classList.toggle('hidden');

const handleOptions = () => $options.classList.toggle('active');

const handleHiddenOptions = () => $options.classList.remove('active');

// Executions

document.addEventListener('click', e => {
    
    if (e.target === $toggleSidebar || e.target.matches('#toggle-sidebar *')) {
        // e.preventDefault();
        handleSidebar();
    } 

    if (e.target === $toggleOptions || e.target.matches('#toggle-options *')) {
        // e.preventDefault();
        handleOptions();
    } else {
        handleHiddenOptions();
    }
})