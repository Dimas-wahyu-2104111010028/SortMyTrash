// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAuth } from "firebase/auth";
import { collection, getFirestore } from "firebase/firestore"

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
// Your web app's Firebase configuration

const firebaseConfig = {
  apiKey: "AIzaSyBtuqqTwl_CYGlnIsHGOcTRF960APq2ptg",
  authDomain: "sortmytrash.firebaseapp.com",
  projectId: "sortmytrash",
  storageBucket: "sortmytrash.appspot.com",
  messagingSenderId: "318699901997",
  appId: "1:318699901997:web:c95e7b057fa6f686d254a4"
};
 
// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Firebase Authentication and get a reference to the service
export const auth = getAuth(app);
export const db = getFirestore(app)
export const edukasiCollection = collection(db, "edukasi")
export default app;