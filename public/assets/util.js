const cl = console.log

const registerServiceWorker = async (fname="sw.js") => {
	const swRegistration = await navigator.serviceWorker.register(fname); //notice the file name
	return swRegistration;
}