<?= $this->extend('layouts/bs') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
	<?php preout($list) ?>
	<ol>
	<?php 
	foreach($list as $l){
		$link = str_replace(".php","", $l);
		echo <<<HTML
		<li>
			<a href="$_baseurl/wiki/$link">
			$_baseurl/wiki/$link
			</a>
		</li>
		HTML;
	}
	?>
	</ol>
</div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
let ases = document.querySelectorAll("li a, th a, div a")
ases.forEach((e) => {
	let el = e
	let url = el.href
	url = url.replace("file:///wiki/", "")
	url = url.replace("file:///D:/wiki/", "")

	e.onclick = function (e) {
		e.preventDefault();

		console.log(e, arguments, this)
		console.log("test")

		window.open(url, "_blank")
	}
	el.href = url
})
</script>
<?= $this->endSection() ?>