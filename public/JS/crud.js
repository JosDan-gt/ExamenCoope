document.addEventListener('DOMContentLoaded', function () {
    var myModal = new bootstrap.Modal(document.getElementById('modClientes'));
});


const url = 'http://127.0.0.1:8000/api/clientes/';

document.addEventListener("DOMContentLoaded", function () {
    LlamarCliente();
});


function LlamarCliente() {
    fetch(url)
        .then(function (response) {
            if (!response.ok) {
                throw new Error('Error en la solicitud: ' + response.status);
            }

            return response.json();
        })
        .then(function (data1) {
            console.log(data1);

            var table = document.querySelector(".table");

            // Limpia la tabla antes de agregar nuevos datos
            while (table.querySelector("tbody").firstChild) {
                table.querySelector("tbody").firstChild.remove();
            }

            data1.forEach(clientes => {
                var newrow = document.createElement("tr");

                var th1 = document.createElement("th");
                th1.innerText = clientes.id_cli;

                var td1 = document.createElement("td");
                td1.innerText = clientes.Cod_Asociado;

                var td2 = document.createElement("td");
                td2.innerText = clientes.id_users;

                var td3 = document.createElement("td");
                td3.innerText = clientes.nombre;

                var td4 = document.createElement("td");
                td4.innerText = clientes.apellido1;
                
                var td5 = document.createElement("td");
                td5.innerText = clientes.apellido2;

                var td6 = document.createElement("td");
                td6.innerText = clientes.dpi;

                var td7 = document.createElement("td");
                td7.innerText = clientes.sexo;

                var td8 = document.createElement("td");
                td8.innerText = clientes.fecha_nac;
                
                var td9 = document.createElement("td");
                td9.innerText = clientes.estado_civ;

                newrow.appendChild(th1);
                newrow.appendChild(td1);
                newrow.appendChild(td2);
                newrow.appendChild(td3);
                newrow.appendChild(td4);
                newrow.appendChild(td5);
                newrow.appendChild(td6);
                newrow.appendChild(td7);
                newrow.appendChild(td8);
                newrow.appendChild(td9);


                var tdAcciones = document.createElement("td"); // Crea la celda de acciones

                // Crea el botón de Eliminar
                var btnEliminar = document.createElement("button");
                btnEliminar.innerText = "Eliminar";
                btnEliminar.classList.add("btn", "btn-danger", "mx-1"); // Estilo de Bootstrap
                btnEliminar.onclick = function () {
                    DeleteClientes(clientes.id_cli);
                };

                var btnEditar = document.createElement("button");
                btnEditar.innerText = "Editar";
                btnEditar.classList.add("btn", "btn-primary", "mx-1"); // Estilo de Bootstrap
                btnEditar.setAttribute("data-codigo-clientes", clientes.id_cli); // Agrega el código de cliente como atributo de datos
                btnEditar.setAttribute("data-bs-toggle", "modal"); // Activa el modal al hacer clic
                btnEditar.setAttribute("data-bs-target", "#modClientes"); // Define el objetivo del modal
                btnEditar.addEventListener("click", function () {
                    modificarClientes(clientes);
                }); // Agrega el evento click

                // Agrega el botón de Eliminar a la celda de acciones
                tdAcciones.appendChild(btnEliminar);
                tdAcciones.appendChild(btnEditar);

                // Agrega la celda de acciones a la fila
                newrow.appendChild(tdAcciones);

                table.querySelector("tbody").appendChild(newrow);
            });

        })
        .catch(function (error) {
            // Manejar errores
            console.error('Error en la solicitud:', error);
        });
}


function modificarClientes(clientes) {
    // Muestra el modal de edición
    var modal = new bootstrap.Modal(document.getElementById('modClientes'));

    // Completa los campos del formulario con los datos del cliente
    document.getElementById('codasociadoMod').value = clientes.cod_asociado;
    document.getElementById('idUserMod').value = clientes.id_users;
    document.getElementById('nombreClienteMod').value = clientes.nombre;
    document.getElementById('apellido1Mod').value = clientes.apellido1;
    document.getElementById('apellido2Mod').value = clientes.apellido2;
    document.getElementById('dpiMod').value = clientes.dpi;
    document.getElementById('sexoMod').value = clientes.sexo;
    document.getElementById('direccionClienteMod').value = clientes.direccion;
    document.getElementById('fechaNacMod').value = clientes.fecha_nac;
    document.getElementById('estadoCivilMod').value = clientes.estado_civ;

    // Agrega un evento de clic al botón "Guardar" del formulario de edición
    const guardarBtn = document.getElementById('guardarClienteMod');
    guardarBtn.addEventListener('click', function () {
        guardarClienteModificado(clientes);
    });
}