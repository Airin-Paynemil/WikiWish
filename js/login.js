import { auth, signInWithEmailAndPassword } from "../firebaseConfig.js";

// Inicio de sesión de usuario
const loginSubmit = document.getElementById('login-submit');

loginSubmit.addEventListener("click", function(event) { 
  event.preventDefault();
  const emailLogin = document.getElementById('emailLogin').value;
  const passwordLogin = document.getElementById('passwordLogin').value;
  signInWithEmailAndPassword(auth, emailLogin, passwordLogin)
    .then((userCredential) => {
      const user = userCredential.user;
      console.log("Correo electrónico del usuario:", user.email);
      console.log("ID del usuario:", user.uid);
      // Acceder a otros datos del usuario
    })
    .catch((error) => {
      alert("Error de inicio de sesión: " + error.message);
    });
});