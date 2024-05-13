// inspired from gemini

class Question{
	question = ""
	answer = ""

	isAnswered = false

	constructor(q,a){
		this.question = q
		this.answer = a
	}
}

class Quizer{
	questions = [
		/* { question: "What is the capital of France?", answer: "Paris" },
		{ question: "What is the tallest mountain in the world?", answer: "Mount Everest" },
		{ question: "What is the name of the world's largest ocean?", answer: "Pacific Ocean" }, */
	];
	
	/*
	questions = [
		"indonesia",
		"malaysia",
		"singapore",
		"us",
		"uk",
	].map((e)=>{
		return new Question("c", e)
	})
	*/
	
	// Current question index
	currentQuestion = null;
	currentQuestionIndex = 0;
	
	//els
	answerInput = null
	
	constructor() {
		this.answerInput = document.getElementById("answer-input");
	}

	conditionalAddQindex() {
		return this.questions.length <= this.currentQuestionIndex
	}

	setupQuestions(qs) {
		this.questions = qs.map((e)=>{
			return new Question("c", e)
		})
		return this
	}

	// Update question display
	updateQuestion() {
		this.currentQuestion = this.questions[this.currentQuestionIndex];
		document.getElementById("question").textContent = this.currentQuestion.question;
	}
	
	// Create answer table with empty cells
	createAnswerTable() {
		let cn = 4
		const table = document.getElementById("answer-table");
		table.innerHTML = ""; // Clear existing content
	
		let row = document.createElement("tr");
		for (let i = 0; i < this.questions.length; i++) {
			const cell = document.createElement("td");
			cell.textContent = "-"; // Initially empty cell
			row.appendChild(cell);
			if(i%cn == 0){
				table.appendChild(row);
				row = document.createElement("tr");
			}
		}
		table.appendChild(row);
	}
	
	replaceVowels(str) {
		// Matches all vowels with diacritics and nasalized ü
		const vowelRegex = new RegExp("[àáǎãäāèéěêëìíǐîïòóǒôõùúǔûüǖǘǚǜń]", "g");
		try{
			return str.replace(vowelRegex, (match) => vowelMapping[match]);
		}catch(e){
			return str
		}
	}
	
	// Function to calculate word/phrase similarity (Levenshtein distance)
	calculateSimilarity(str1, str2) {
		if(!str1 || !str2){
			return 0
		}

		str1 = this.replaceVowels(str1)
		str2 = this.replaceVowels(str2)
	
		const len1 = str1.length;
		const len2 = str2.length;
		let matrix = [];
	
		// Generate a matrix filled with zeroes
		for (let i = 0; i <= len1; i++) {
			matrix[i] = [i];
		}
	
		for (let j = 0; j <= len2; j++) {
			matrix[0][j] = j;
		}
	
		// Fill the matrix with Levenshtein distance values
		for (let i = 1; i <= len1; i++) {
			for (let j = 1; j <= len2; j++) {
				if (str1[i - 1] === str2[j - 1]) {
				matrix[i][j] = matrix[i - 1][j - 1];
				} else {
				const deletion = matrix[i - 1][j] + 1;
				const insertion = matrix[i][j - 1] + 1;
				const substitution = matrix[i - 1][j - 1] + 1;
				matrix[i][j] = Math.min(deletion, insertion, substitution);
				}
			}
		}
	
		// Calculate similarity score (1 - normalized Levenshtein distance)
		const distance = matrix[len1][len2];
		return 1 - (distance / Math.max(len1, len2));
	}
	
	iterQuest(qs, ans){
		for(let q of qs){
			let correct = this.compare(ans, q.answer)
			if(correct) break
		}
	}
	
	appendPush(t, correctAnswer){
		for(let r of t.rows){
			let cells = Array.from( r.cells )
				.filter((e) => e.innerText == "-")
			let append = cells.length > 0
			if(append){
				let cell = append ? cells[0] : null
				cell.textContent = correctAnswer

				break
			}
		}
	}

	compare(answer, correctAnswer){
		const similarity = this.calculateSimilarity(answer, correctAnswer);
	
		if (similarity >= 0.8) {
			document.getElementById("message").textContent = "Correct!";
			this.currentQuestionIndex++; // Move to next question

			/*
			if (this.currentQuestionIndex >= this.questions.length) {
				// All questions answered
				document.getElementById("message").textContent = "You've finished the quiz!";
			} else {
			}
			*/

			// updateQuestion();
			this.answerInput.value = ""; // Clear answer input
	
			// Update answer table with correct answer for previous question
			const table = document.getElementById("answer-table");
			// const cells = table.rows[0].cells;
			try{
				this.appendPush(table, correctAnswer)
				// cells[this.currentQuestionIndex - 1]
				// 	.textContent = correctAnswer; // Update previous cell
			}catch(e){
				console.log(e)
			}
			
			return true
		} else {
			document.getElementById("message").textContent = "Incorrect. Try a similar answer or see the answer (" + correctAnswer + ")";
			return false
		}
	}
	
	submit(e, ctx = null) {
		e.preventDefault();
		const answer = this.answerInput.value.trim().toLowerCase();
		this.currentQuestion = this.questions[this.currentQuestionIndex];
		// const correctAnswer = currentQuestion.answer.toLowerCase();
	
		this.iterQuest(this.questions, answer)
	}

	init(){
		// Check answer on submit
		let ansForm = document.getElementById("answer-form")
		// this.submit
		let ctx = this
		
		let fn = function(e){
			ctx.submit(e)
		}

		ansForm.addEventListener("submit", fn)
		ansForm.addEventListener("change", fn);
		
		this.createAnswerTable(); // Create table on page load
		this.updateQuestion(); // Display first question

		return this
	}

	setupUI(){
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

		return this
	}

	reset(){
		this.currentQuestion = null;
		this.currentQuestionIndex = 0;

		return this
	}
}

/*

let qz = new Quizer()
qz.setupQuestions([])
	.init()
*/