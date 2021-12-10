// Variables
const $templateDirectivos = document.getElementById('template-documents-directivos').content;
const $fragmentDirectivos= document.createDocumentFragment();
const $selectOptionsDirectivos = document.querySelector('.select-options-directivos');
const $cardAmountDirectives = document.getElementById('card-amount-directives');

// Functions
const getProcceduresDirectives = async () => {
    try {
        const request = await fetch('../php/procedimientos/obtener_procedimientos_directivos.php');
        const data = await request.json();
        
        showProcceduresDirectives(data);

    }catch(error) {
        console.log(error);
    }
}

const showProcceduresDirectives = (data) => {

    $cardAmountDirectives.querySelector('.card-amount-number').textContent = data.length;

    if (data.length > 0) {
        data.forEach(el => {
            $templateDirectivos.querySelector('.document-option').dataset.src = `../php/procedimientos/archivos/${el.archivo}`;
            $templateDirectivos.querySelector('.document-option-name').textContent = el.nombre;
    
            $clone = $templateDirectivos.cloneNode(true);
            $fragmentDirectivos.appendChild($clone);
        });
    
        $selectOptionsDirectivos.appendChild($fragmentDirectivos);
        document.querySelector('.document-options-message-directives').classList.remove('active');
        
    } else {
        document.querySelector('.document-options-message-directives').classList.add('active');
    }
}

// Executions
document.addEventListener('DOMContentLoaded', getProcceduresDirectives);
