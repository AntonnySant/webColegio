document.getElementById("loginForm").addEventListener("submit", function(event){
  event.preventDefault();

  //capturar los valores de correo y contraseña
  const correoLogin = document.getElementById("emailLogin").value;
  const passLogin = document.getElementById("passIngreso").value;

  if (correoLogin === "usuario@hola.com" && passLogin === "contraseña") {
    window.location.href = "pagina2.html"
  } else {
    alert("Credeciales incorrectas. por favor, intentalo de nuevo.")
  }

})



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
