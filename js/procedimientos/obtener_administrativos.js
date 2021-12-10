// Variables
const $templateAdministrativos = document.getElementById('template-documents-administrativos').content;
const $fragmentAdministrativos = document.createDocumentFragment();
const $selectOptionsAdministrativos = document.querySelector('.select-options-administrativos');
const $cardAmountAdministratives = document.getElementById('card-amount-administratives');

// Functions
const getProcceduresAdministratives = async () => {
    try {
        const request = await fetch('../php/procedimientos/obtener_procedimientos_administrativos.php');
        const data = await request.json();
        
        showProcceduresAdministratives(data);

    }catch(error) {
        console.log(error);
    }
}

const showProcceduresAdministratives = (data) => {

    $cardAmountAdministratives.querySelector('.card-amount-number').textContent = data.length;

    if (data.length > 0) {

        data.forEach(el => {
            $templateAdministrativos.querySelector('.document-option').dataset.src = `../php/procedimientos/archivos/${el.archivo}`;
            $templateAdministrativos.querySelector('.document-option-name').textContent = el.nombre;
    
            $clone = $templateAdministrativos.cloneNode(true);
            $fragmentAdministrativos.appendChild($clone);
        });
    
        $selectOptionsAdministrativos.appendChild($fragmentAdministrativos);
        document.querySelector('.document-options-message-administratives').classList.remove('active');
        
    } else {
        document.querySelector('.document-options-message-administratives').classList.add('active');
    }
}

// Executions
document.addEventListener('DOMContentLoaded', getProcceduresAdministratives);
