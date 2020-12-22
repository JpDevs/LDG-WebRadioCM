// Função para abrir e fechar os Modal's
function iniciaModal(modalID){
    const modal = document.getElementById(modalID);
    if(modal){
        modal.classList.add('mostrarModal');

        modal.addEventListener('click', (e) => {
            if(e.target.id == modalID || e.target.id == 'btnFechar') {
                modal.classList.remove('mostrarModal');
            }
        })
    }

}

//Evento do botão Pedidos
const btnPedidos = document.getElementById('pedidos');
btnPedidos.addEventListener('click', () => iniciaModal('modalPedidos'));

const btnVagas = document.getElementById('vagas');
btnVagas.addEventListener('click', () => iniciaModal('modalVagas'));