<?= $this->extend('layouts/bs') ?>
<?= $this->section('content') ?>
<h1>FCM test</h1>
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

messaging.getToken({ 
	vapidKey: "<?= env('FBASE_VAPID') ?>"
}).then((currentToken) => {
	if (currentToken) {
		cl("ct", currentToken)
		cl(currentToken)
		// Send the token to your server and update the UI if necessary
		// ...
		
	} else {
		// Show permission request UI
		console.log('No registration token available. Request permission to generate one.');
		// ...
	}
}).catch((err) => {
	console.log('An error occurred while retrieving token. ', err);
});
</script>
<?= $this->endSection() ?>
