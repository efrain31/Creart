// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyA63Q-ZuYrhKnlxTiv80m4ySXtTfQU6nKw",
  authDomain: "cosmeticoshost.firebaseapp.com",
  projectId: "cosmeticoshost",
  storageBucket: "cosmeticoshost.appspot.com",
  messagingSenderId: "336389179706",
  appId: "1:336389179706:web:4657f754a9c3d523a7a803",
  measurementId: "G-FV4S2N4EHC"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);