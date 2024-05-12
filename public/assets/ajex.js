// wip
class Ajex {
	constructor() {
		this.contentType = false;
	}

	setContentType(contentType) {
		this.contentType = contentType;
		return this;
	}

	setJsonContentType() {
		return this.setContentType("application/json");
	}

	getContentType() {
		return this.contentType;
	}

	withCsrf(csrfTokenSelector) {
		const csrfToken = document.querySelector(csrfTokenSelector).content;
		return this.sendRequest(function (xhr) {
			xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
		});
	}

	sendRequest(method, url, data, successCallback=null, errorCallback=null) {
		/* return async (method, url, data, successCallback, errorCallback) => {
		}; */

		let ctx = this

		return new Promise(function(resolve, reject){
			const xhr = new XMLHttpRequest();

			xhr.open(method, url, true);
			xhr.onload = function(e) {
				let json = JSON.parse(xhr.response)
				if(json){
					resolve(json)
					return
				}
				resolve(xhr.response);
			};

			/* xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					if (xhr.status >= 200 && xhr.status < 300) {
						if (successCallback) {
							const response = JSON.parse(xhr.responseText);
							successCallback(response);
						}
					} else if (errorCallback) {
						errorCallback(xhr);
					}
				}

				return xhr.responseText
			}; */

			if (ctx.contentType === "application/json") {
				xhr.setRequestHeader("Content-Type", "application/json");
				data = JSON.stringify(data);
			}

			xhr.send(data);

			// return xhr.response
			// return xhr
		})
	}

	get(url, data, successCallback, errorCallback) {
		return this.sendRequest(
			"GET",
			url,
			data,
			successCallback,
			errorCallback
		);
	}

	post(url, data, successCallback, errorCallback) {
		return this.sendRequest(null)(
			"POST",
			url,
			data,
			successCallback,
			errorCallback
		);
	}

	put(url, data, successCallback, errorCallback) {
		data._method = "PUT";
		return this.sendRequest(null)(
			"POST",
			url,
			data,
			successCallback,
			errorCallback
		);
	}

	patch(url, data, successCallback, errorCallback) {
		data._method = "PATCH";
		return this.sendRequest(null)(
			"POST",
			url,
			data,
			successCallback,
			errorCallback
		);
	}

	delete(url, data, successCallback, errorCallback) {
		return this.sendRequest(null)(
			"DELETE",
			url,
			data,
			successCallback,
			errorCallback
		);
	}
}

// Usage Example
/* const ajex = new Ajex();

// Set CSRF token (replace with your selector)
ajex.withCsrf('meta[name="csrf-token"]');

ajex.get(
	"your/api/url", {
		data: "example"
	},
	function (response) {
		console.log(response);
	},
	function (xhr) {
		console.error(xhr.statusText);
	}
); */