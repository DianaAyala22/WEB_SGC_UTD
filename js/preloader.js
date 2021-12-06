// Variables
const $containerPreloader = document.getElementById('container-preloader');

// Functions
const handleHiddenPreloader = () => $containerPreloader.classList.add('hidden');

// Executions
window.addEventListener('load', handleHiddenPreloader);