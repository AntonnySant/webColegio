// Datos de estudiantes y notas (simulados)
const estudiantes = [
    { nombre: "Hendy Tomas Rubio Arenales", nota: 80, nota2: 60, nota3: 70, nota4: 8.0, nota5: 8.0,nota6: 8.0,nota7: 8.0,nota8: 8.0,nota9: 8.0,nota10: 8.0 },
    { nombre: "Angel Gabriel Quintana Leon", nota: 85 },
    { nombre: "Diego Salazar Tapiaz", nota: 92 },
    { nombre: "Sebastian Fernandez Zarta", nota: 92 },
    { nombre: "Alejandro Sanchez Leon", nota: 92 }
    // Agrega más estudiantes y notas aquí
];

// Función para poblar la tabla
function poblarTabla() {
    const tableBody = document.querySelector("#studentTable tbody");

    estudiantes.forEach(estudiante => {
        const row = document.createElement("tr");
        const nombreCell = document.createElement("td");
        const notaCell = document.createElement("td");
        const notaCell1 = document.createElement("td");
        const notaCell2 = document.createElement("td");

        nombreCell.textContent = estudiante.nombre;
        notaCell.textContent = estudiante.nota;
        notaCell1.textContent = estudiante.nota2;
        notaCell2.textContent = estudiante.nota3;

        row.appendChild(nombreCell);
        row.appendChild(notaCell);
        row.appendChild(notaCell1);
        row.appendChild(notaCell2);

        tableBody.appendChild(row);
    });
}

// Llama a la función para poblar la tabla al cargar la página
poblarTabla();
