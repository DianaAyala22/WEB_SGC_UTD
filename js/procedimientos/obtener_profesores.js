// Variables
const $templateProfesores = document.getElementById('template-documents-profesores').content;
const $fragmentProfesores = document.createDocumentFragment();
const $selectOptionsProfesores = document.querySelector('.select-options-profesores');
const $cardAmountDocents = document.getElementById('card-amount-docents');

// Functions
const getProcceduresDocents = async () => {
    try {
        const request = await fetch('../php/procedimientos/obtener_procedimientos_profesores.php');
        const data = await request.json();
        
        showProcceduresDocents(data);

    }catch(error) {
        console.log(error);
    }
}

const showProcceduresDocents = (data) => {

    $cardAmountDocents.querySelector('.card-amount-number').textContent = data.length;

    if (data.length > 0) {
        data.forEach(el => {
            $templateProfesores.querySelector('.document-option').dataset.src = `../php/procedimientos/archivos/${el.archivo}`;
            $templateProfesores.querySelector('.document-option-name').textContent = el.nombre;
    
            $clone = $templateProfesores.cloneNode(true);
            $fragmentProfesores.appendChild($clone);
        });
    
        $selectOptionsProfesores.appendChild($fragmentProfesores);
        document.querySelector('.document-options-message').classList.remove('active');

    } else {
        document.querySelector('.document-options-message').classList.add('active');
    }
}

// Executions
document.addEventListener('DOMContentLoaded', getProcceduresDocents);
