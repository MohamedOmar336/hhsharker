/**
 * Here is is the code snippet to initialize Firebase Messaging in the Service
 * Worker when your app is not hosted on Firebase Hosting.
 *
 *
 * */

 // Give the service worker access to Firebase Messaging.
 // Note that you can only use Firebase Messaging here. Other Firebase libraries
 // are not available in the service worker.
 importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
 importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

 // Initialize the Firebase app in the service worker by passing in
 // your app's Firebase config object.
 // https://firebase.google.com/docs/web/setup#config-object
 firebase.initializeApp({
    apiKey: "AIzaSyDXrOKuqnjDvWm8IZ2r3wM8ZY_fG_QamOg",
    authDomain: "hhshaker-282b0.firebaseapp.com",
    projectId: "hhshaker-282b0",
    storageBucket: "hhshaker-282b0.appspot.com",
    messagingSenderId: "567064391154",
    appId: "1:567064391154:web:40574f6824350b17764f6b",
    measurementId: "G-N2VKVTGWMX"
 });

 // Retrieve an instance of Firebase Messaging so that it can handle background
 // messages.
 const messaging = firebase.messaging();


// If you would like to customize notifications that are received in the
// background (Web app is closed or not in browser focus) then you should
// implement this optional method.
// Keep in mind that FCM will still show notification messages automatically
// and you should use data messages for custom notifications.
// For more info see:
// https://firebase.google.com/docs/cloud-messaging/concept-options
messaging.onBackgroundMessage(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);

//   // Send a message to the web page
//   self.clients.matchAll().then(clients => {
//     clients.forEach(client => {
//       client.postMessage(payload);
//     });
//   });

//   self.registration.showNotification(notificationTitle, notificationOptions);

//   if(!alert("New Order Added")) location.reload();
});
