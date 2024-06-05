<?= $this->extend('layouts/bs') ?>
<?= $this->section('content') ?>
<style>
pre {
	white-space: pre-wrap;       /* Since CSS 2.1 */
	white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
	white-space: -pre-wrap;      /* Opera 4-6 */
	white-space: -o-pre-wrap;    /* Opera 7 */
	word-wrap: break-word;       /* Internet Explorer 5.5+ */
}
</style>
<h1>FCM test</h1>
<pre id="pr1"></pre>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://www.gstatic.com/firebasejs/10.12.0/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.12.0/firebase-analytics-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.12.0/firebase-messaging-compat.js"></script>
<script>
// Initialize Firebase with a default Firebase project

const firebaseConfig = {
	apiKey: "<?= env('FIREBASE_APIKEY') ?>",
	authDomain: "<?= env('FBASE_AUTHDOMAIN') ?>",
	projectId: "<?= env('FBASE_PROJECTID') ?>",
	storageBucket: "<?= env('FBASE_STORAGEBUCKET') ?>",
	messagingSenderId: "<?= env('FBASE_MESSAGINGSENDERID') ?>",
	appId: "<?= env('FBASE_APPID') ?>",
	measurementId: "<?= env('FBASE_MEASUREMENTID') ?>V"
};

registerServiceWorker("/firebase-messaging-sw.js")

firebase.initializeApp(firebaseConfig);

console.log(firebase.app().name);  // "[DEFAULT]"
// console.log(otherProject.name);    // "otherProject"

const messaging = firebase.messaging();

function requestPermission() {
	console.log('Requesting permission...');
	Notification.requestPermission().then((permission) => {
		if (permission === 'granted') {
			console.log('Notification permission granted.');
		}
	})
}

requestPermission()

let pr1 = document.getElementById("pr1")

messaging.getToken({ 
	vapidKey: "<?= env('FBASE_VAPID') ?>"
}).then((currentToken) => {
	if (currentToken) {
		cl("ct", currentToken)
		cl(currentToken)
		// Send the token to your server and update the UI if necessary
		// ...
		pr1.innerHTML = currentToken
	} else {
		// Show permission request UI
		console.log('No registration token available. Request permission to generate one.');
		// ...
	}
}).catch((err) => {
	console.log('An error occurred while retrieving token. ', err);
});

messaging.onMessage((payload) => {
  console.log('Message received. ', payload);
  // ...
});
</script>
<?= $this->endSection() ?>
