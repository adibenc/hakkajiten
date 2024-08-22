<html>

<head>
	<title>
		<?= $this->renderSection('title') ?>
	</title>
	<link href="<?= $_asset ?>//wiki/style.css">
	<link href="<?= $_asset ?>//dwik.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<script>
		let baseUrl = '<?= $_baseurl ?>'
	</script>
</head>

<body>
<!-- contents -->
<?= $this->renderSection('content') ?>
<script src="<?= $_asset ?>/dwik.js"></script>
<?= $this->renderSection('scripts') ?>
<!-- ./contents -->
<script>
function elementToJson(element, depth=0) {
	let result = null;

	if (element.nodeType === Node.ELEMENT_NODE) {
		result = {}
		let tag = element.tagName.toLowerCase();
		result.tag = tag
		// result.attributes = {};
		result.children = [];
		result.el = element
		// result.text = element.text
		let tx = element.textContent
		result.text = tx.length <= 64 ? tx : "-"
		result.depth = depth

		// Handle attributes

		/*
		for (const attribute of element.attributes) {
			result.attributes[attribute.name] = attribute.value;
		}
		*/

		if(depth > 6){
			// return result
		}
		if(["ul", "ol"].includes(tag)){
			// console.log(tag, element)
			let lis = Array.from(element.children).map((e)=>{
				// console.log(e.textContent)
				return {
					title: e.textContent.trim(),
					href: "#wip"
				}
			})

			return lis
		}
		// Handle children
		for (const child of element.childNodes) {
			let x = elementToJson(child, depth+1)
			if(x){
				result.children.push(x);
			}
		}
	} else if (element.nodeType === Node.TEXT_NODE) {
		// result.text = element.textContent.trim();
	}

	return result;
}

// let tables = document.querySelectorAll('table')
let json = []
for(let t of tables){
	json.push(
		elementToJson(t)
	)
}

</script>
</body>

</html>