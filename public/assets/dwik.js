// dib's wiki script

let ases = document.querySelectorAll("li a, th a, div a")
let uls = document.querySelectorAll("ul")
let ols = document.querySelectorAll("ol")
let divs = document.querySelectorAll("div")
let tables = document.querySelectorAll("table")

uls.forEach((e) => {
	e.className = "hlist"
})
ols.forEach((e) => {
	e.className = "hlist"
})

tables.forEach((e) => {
	e.className = "table table-bordered table-striped table-responsive"
})
ases.forEach((e) => {
	let el = e
	let url = `https://en.wikipedia.org/wiki/${el.href}`
	url = url.replace("file:///wiki/", "")
	url = url.replace("file:///D:/wiki/", "")
	url = url.replace("http://localhost/wiki/", "")
	url = url.replace(`${baseUrl}wiki/`, "")
	// console.log(url)

	e.onclick = function (e) {
		e.preventDefault();

		console.log(e, arguments, this)
		console.log("test")

		window.open(url, "_blank")
	}
	el.href = url
})

function mtoggle(t = null) {
	ols.forEach((e) => {
		e.classList.toggle("hlist")
	})
	uls.forEach((e) => {
		e.classList.toggle("hlist")
	})
}

function toggleLists() {
	// Get all list items in the document
	var listItems = document.querySelectorAll('ol, ul');

	// Iterate through each list item
	listItems.forEach(function(list) {
		// Check if it's an ordered list (ol)
		if (list.tagName.toLowerCase() === 'ol') {
			// Convert ol to ul
			var ul = document.createElement('ul');
			Array.from(list.children).forEach(function(li) {
				ul.appendChild(li.cloneNode(true));
			});
			list.parentNode.replaceChild(ul, list);
		} else if (list.tagName.toLowerCase() === 'ul') {
			// Convert ul to ol
			var ol = document.createElement('ol');
			Array.from(list.children).forEach(function(li) {
				ol.appendChild(li.cloneNode(true));
			});
			list.parentNode.replaceChild(ol, list);
		}
	});
}

// Call the function to toggle lists
// toggleLists();
