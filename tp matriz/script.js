document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("data-form");
    const tableBody = document.querySelector("#data-table tbody");
    const submitButton = document.getElementById("submit-button");

    submitButton.addEventListener("click", () => {
        const proyecto = document.getElementById("proyectos").value;
        const estado = document.getElementById("estado").value;
        const actividad = document.getElementById("actividades").value;
        const recurso = document.getElementById("recurso").value;

        if (proyecto!="Selecione una opcion" && estado!="Selecione una opcion" && actividad && recurso!="Selecione una opcion") {
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td>${proyecto}</td>
                <td>${actividad}</td>
                <td>${estado}</td>
                <td>${recurso}</td>
            `;
            tableBody.appendChild(newRow);

            form.reset();
        }
    });
    
});

document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById("data-form");
        const tableBody = document.querySelector("#data-table2 tbody");
        const submitButton = document.getElementById("submit-button");
    
    submitButton.addEventListener("click", () => {
        const nombre= document.getElementById("nombre").value;
        const apellido= document.getElementById("apellido").value;
        const dni = document.getElementById("dni").value;
        const rol = document.getElementById("rol").value;

        if (nombre && apellido && dni && rol!="Selecione una opcion") {
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td>${nombre}</td>
                <td>${apellido}</td>
                <td>${dni}</td>
                <td>${rol}</td>
            `;
            tableBody.appendChild(newRow);

            form.reset();
        }
    });
});

//js de poyectos

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("data-form");
    const tableBody = document.querySelector("#data-table2 tbody");
    const submitButton = document.getElementById("submit-button");

submitButton.addEventListener("click", () => {
    const nombre= document.getElementById("nombre").value;
    const fechainicio = document.getElementById("fechainicio").value;


    if (nombre && fechainicio) {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${nombre}</td>
            <td>${fechainicio}</td>

        `;
        tableBody.appendChild(newRow);

        form.reset();
    }
});
});