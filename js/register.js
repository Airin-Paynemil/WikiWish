import { auth, createUserWithEmailAndPassword, db, doc, setDoc } from '../firebaseConfig';

// Registro de usuario
const submit = document.getElementById('submit');
submit.addEventListener("click", function(event) { 
    event.preventDefault();
    const userName = document.getElementById('userName').value;
    const emailRegister = document.getElementById('emailRegister').value;
    const passwordRegister = document.getElementById('passwordRegister').value;
    console.log("Valores capturados:", userName, emailRegister, passwordRegister); // <- Aquí
    createUserWithEmailAndPassword(auth, emailRegister, passwordRegister)
        .then((userCredential) => {
            const user = userCredential.user;
            console.log("Usuario creado:", user); // <- Y aquí
            // Guardar información adicional en Firestore
            setDoc(doc(db, "users", user.uid), {
                userName: userName,
                email: emailRegister
            })
            .then(() => {
                alert("Cuenta creada y datos guardados.");
            })
            .catch((error) => {
                alert("Error al guardar datos: " + error.message);
            });
        })
        .catch((error) => {
            alert("Error de registro: " + error.message);
        });
});
