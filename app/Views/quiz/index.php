<?= $this->extend('layouts/bs') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
	<h1>Word Quiz</h1>
	<p id="question">
		countries
	</p>
	<form id="answer-form">
		<select id="s1">
		</select>
		<input type="text" id="answer-input" placeholder="Enter your answer">
		<button type="submit">Submit</button>
	</form>
	<p id="message"></p>
	<table id="answer-table" class="table"></table>
	<div id="modal" class="modal"></div>
</div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="<?= $_asset ?>/maps.js"></script>
<!-- <script src="script.js"></script> -->
<script src="<?= $_asset ?>/quizer.js"></script>
<script src="<?= $_asset ?>/qss.js"></script>
<script src="<?= $_asset ?>/ajex.js"></script>
<script>
let gl = {
	
}
let qzs = [
	"country1",
	"ch1",
]
let qz = new Quizer()
let ajex = new Ajex()
let s1

function reloadQuestion(arr){
	qz.reset()
		.setupQuestions(arr)
		.init()
		.setupUI()
}

document.addEventListener("DOMContentLoaded", function() {
	s1 = document.getElementById("s1")
	qz.setupQuestions(qss.country1)
		.reset()
		.init()
		.setupUI()
	Object.keys(qss).map((e) => {
		let o = document.createElement("option");
		o.value = e
		o.textContent = e
		s1.appendChild(o)
		return e
	})

	s1.addEventListener("change", async function(e){
		let sv = s1.value
		let qs = qss[s1.value]
		if(qs[0].includes("json")){
			let r = await ajex.get(`${base.asset}/__int/${qs[0]}`)
			reloadQuestion(r.data.map(qs[1]))
			return
		}

		reloadQuestion(qs)
	})
})
</script>
<?= $this->endSection() ?>
