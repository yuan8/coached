
importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js')
  var config = {
    apiKey: "AIzaSyC-YQgjyH2H2UskYmclcDEWs74dSNjt1uo",
    authDomain: "coach-20c6a.firebaseapp.com",
    databaseURL: "https://coach-20c6a.firebaseio.com",
    projectId: "coach-20c6a",
    storageBucket: "coach-20c6a.appspot.com",
    messagingSenderId: "710077954056"
    };
  firebase.initializeApp(config);

var messaging = firebase.messaging();


messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  var notificationTitle = 'Background Message Title';
  var notificationOptions = {
    body: 'Background Message body.',
  };
  

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});