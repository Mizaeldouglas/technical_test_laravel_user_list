function showLoading() {
    document.getElementById('loadingContainer').style.display = 'flex';
}

function hideLoading() {
    document.getElementById('loadingContainer').style.display = 'none';
}

//  Mostrar o "loading" antes de fazer a solicitação da API
showLoading();

// Esconder o "loading" quando os dados da API forem carregados
setTimeout(function () {
    hideLoading();
}, 2000); // espera de 3 segundos
