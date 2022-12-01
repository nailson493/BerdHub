<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.13.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.13.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA_SX3hrMUIQz_Glub3cLA8ZHA6_iBdCKE",
    authDomain: "barber-363413.firebaseapp.com",
    projectId: "barber-363413",
    storageBucket: "barber-363413.appspot.com",
    messagingSenderId: "583864575311",
    appId: "1:583864575311:web:3c7565cbf22f36d936913a",
    measurementId: "G-QY48YS6X1L"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>