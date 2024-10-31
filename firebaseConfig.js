// Importación de módulos
import { initializeApp } from 'firebase/app';
import { getAnalytics } from 'firebase/analytics';
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from 'firebase/auth';
import { getFirestore, doc, setDoc } from 'firebase/firestore';

// Configuración de Firebase
const firebaseConfig = {
  apiKey: "AIzaSyBfQNav7Q42I99rs1HS_bvzdX9lFRNSsHE",
  authDomain: "wikiwish-dd499.firebaseapp.com",
  projectId: "wikiwish-dd499",
  storageBucket: "wikiwish-dd499.firebasestorage.app",
  messagingSenderId: "1081827241138",
  appId: "1:1081827241138:web:63385c0d4914d1fdd4adab",
  measurementId: "G-BTR1XMRYYW"
};

// Inicialización de Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);
const db = getFirestore(app);

// Exportar módulos
export { auth, createUserWithEmailAndPassword, signInWithEmailAndPassword, db, doc, setDoc };
