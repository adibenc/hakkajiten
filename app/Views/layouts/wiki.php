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
</body>

</html>