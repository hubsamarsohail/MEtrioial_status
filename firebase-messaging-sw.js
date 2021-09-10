importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
    apiKey: "AIzaSyBMnLcMHm3jZlShT3hO7nct_HqYa-Js4xI",
    authDomain: "matrimonial-test-56cdb.firebaseapp.com",
    projectId: "matrimonial-test-56cdb",
    databaseURL: "https://matrimonial-test-56cdb-default-rtdb.firebaseio.com/",
    storageBucket: "matrimonial-test-56cdb.appspot.com",
    messagingSenderId: "496189311163",
    appId: "1:496189311163:web:636df311e75f62539a419e",
    measurementId: "G-SMX5V9RTM8"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: 'https://images.theconversation.com/files/93616/original/image-20150902-6700-t2axrz.jpg' //your logo here
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});
