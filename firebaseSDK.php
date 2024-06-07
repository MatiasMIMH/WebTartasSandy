<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBFRIXVQ1WrKd8oI0Hr8PAdm2ykh8mbu6A",
    authDomain: "tartassandy.firebaseapp.com",
    databaseURL: "https://tartassandy-default-rtdb.europe-west1.firebasedatabase.app",
    projectId: "tartassandy",
    storageBucket: "tartassandy.appspot.com",
    messagingSenderId: "62999069254",
    appId: "1:62999069254:web:c06bb34160f1624fc7c047",
    measurementId: "G-YV88M7M6TS"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getAnalytics(app);

  const dbRef = ref(database);

  get(dbRef).then((snapshot) => {
    if (snapshot.exists()) {
        console.log(snapshot.val());
        } else {
            console.log("No data available");
            }
  }).catch((error) => {
    console.error(error);
  });
</script>