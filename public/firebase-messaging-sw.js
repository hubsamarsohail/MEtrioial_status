importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
    apiKey: "AIzaSyADo4pQIAcS5BwYsiZvyy7KUWadt5iGAik",
    authDomain: "matrimonial-136ed.firebaseapp.com",
    projectId: "matrimonial-136ed",
    storageBucket: "matrimonial-136ed.appspot.com",
    messagingSenderId: "770549021072",
    appId: "1:770549021072:web:63aea20a463dc51d4e9b15",
    measurementId: "G-5Z42CRC60C"
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
