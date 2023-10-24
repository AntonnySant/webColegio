// script.js
// document.getElementById("btnInicioSesion").addEventListener("submit", function(event) {
//   event.preventDefault();  //Evita que se envie el formulario por defecto

//   // capturar los nombre de los campos del formulario
//   const usuario = userInput.value;
//   const contrasena = passInput.value;

//   console.log("Usuario: " + usuario);
//   console.log("contrasena: " + contrasena);

//   //Cierre de modal
//   myModal.style.display = "none";

// })  

// document.getElementById("btn_registro").addEventListener("submit", function(event) {
//   event.preventDefault(); // Evita el envío del formulario por defecto

//   const username = document.getElementById("nombreUsuario").value;
//   const email = document.getElementById("correoElectronico").value;
//   const password = document.getElementById("contrasena").value;
//   const profile = document.getElementById("selectPerfil").value;
//   const message = document.getElementById("message");

//   if (username.trim() === "" || password.trim() === "") {
//       message.innerHTML = "Por favor, complete todos los campos.";
//       message.style.color = "red";
//   } else {
//       // Aquí puedes realizar el envío del formulario o realizar otras acciones
//       message.innerHTML = "Registro exitoso.";
//       message.style.color = "green";
//       // Limpia los campos del formulario
//       document.getElementById("registrationForm").reset();
//   }
// });


document.getElementById("openModalBtn").onclick = function () {
  document.getElementById("loginModal").style.display = "block";
};

document.getElementById("closeModalBtn").onclick = function () {
  document.getElementById("loginModal").style.display = "none";
};

window.onclick = function (event) {
  if (event.target === document.getElementById("loginModal")) {
    document.getElementById("loginModal").style.display = "none";
  }
};

const openModalButton = document.getElementById("openModal");
const closeModalButton = document.getElementById("closeModal");
const registrationModal = document.getElementById("registrationModal");

openModalButton.addEventListener("click", () => {
  registrationModal.style.display = "block";
});

closeModalButton.addEventListener("click", () => {
  registrationModal.style.display = "none";
});

window.addEventListener("click", (event) => {
  if (event.target === registrationModal) {
    registrationModal.style.display = "none";
  }
});

var myModal = document.getElementById("myModal");
var myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", function () {
  myInput.focus();
});
