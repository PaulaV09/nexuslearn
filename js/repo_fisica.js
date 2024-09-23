const dropzone = document.getElementById('dropzone');
const archivos = document.getElementById('archivos');
const lista_archivos = document.getElementById('lista_archivos');

// Prevenir el comportamiento por defecto en el evento 'dragover' y 'drop'
dropzone.addEventListener('dragover', e => {
    e.preventDefault();
    dropzone.classList.add('hover'); // Añadir algún estilo visual cuando el archivo esté sobre la zona
});

dropzone.addEventListener('dragleave', e => {
    dropzone.classList.remove('hover');
});

dropzone.addEventListener('drop', e => {
    e.preventDefault();
    dropzone.classList.remove('hover');
    uploadArchivos(e, e.dataTransfer.files);
});

// Evento de selección manual de archivos
archivos.addEventListener('change', e => {
    uploadArchivos(e, archivos.files);
});

function uploadArchivos(e, files) {
    e.preventDefault();

    const FD = new FormData();

    for (let file of files) {
        FD.append('files[]', file);
    }

    fetch('php/upload_fisica.php', { method: 'POST', body: FD })
        .then(response => response.json())
        .then(json => {
            lista_archivos.innerHTML = '';
            json.forEach(file => {
                let fileName = file.split('/').pop();
                lista_archivos.innerHTML += `
                    <li>
                        <a href='${file}' download>${fileName}</a>
                    </li>
                `;
            });
        })
        .catch(e => console.error(e));

    archivos.value = ''; // Resetea el input
}
