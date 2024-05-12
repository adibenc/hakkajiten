// gg https://gemini.google.com/app/dcb1690081495e79
// Array of questions and answers

class Question{
	question = ""
	answer = ""

	isAnswered = false

	constructor(q,a){
		this.question = q
		this.answer = a
	}
}

let questions = [
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
let currentQuestionIndex = 0;

//els
const answerInput = document.getElementById("answer-input");

// Update question display
function updateQuestion() {
	const currentQuestion = questions[currentQuestionIndex];
	document.getElementById("question").textContent = currentQuestion.question;
}

// Create answer table with empty cells
function createAnswerTable() {
	const table = document.getElementById("answer-table");
	table.innerHTML = ""; // Clear existing content

	const row = document.createElement("tr");
	for (let i = 0; i < questions.length; i++) {
	const cell = document.createElement("td");
	cell.textContent = "-"; // Initially empty cell
	row.appendChild(cell);
	}
	table.appendChild(row);
}

function replaceVowels(str) {
	const vowelRegex = new RegExp("[àáǎãäèéěêëìíǐîïòóǒôõùúǔûüǖǘǚǜń]", "g"); // Matches all vowels with diacritics and nasalized ü
	return str.replace(vowelRegex, (match) => vowelMapping[match]);
}

// Function to calculate word/phrase similarity (Levenshtein distance)
function calculateSimilarity(str1, str2) {
	str1 = replaceVowels(str1)
	str2 = replaceVowels(str2)

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

function iterQuest(qs, ans){
	for(q of qs){
		let correct = compare(ans, q.answer)
		if(correct) break
	}
}

function compare(answer, correctAnswer){
	const similarity = calculateSimilarity(answer, correctAnswer);

	if (similarity >= 0.8) {
		document.getElementById("message").textContent = "Correct!";
		currentQuestionIndex++; // Move to next question
		if (currentQuestionIndex === questions.length) {
			// All questions answered
			document.getElementById("message").textContent = "You've finished the quiz!";
		} else {
			// updateQuestion();
			answerInput.value = ""; // Clear answer input

			// Update answer table with correct answer for previous question
			const table = document.getElementById("answer-table");
			const cells = table.rows[0].cells;
			cells[currentQuestionIndex - 1].textContent = correctAnswer; // Update previous cell
		}
		
		return true
	} else {
		document.getElementById("message").textContent = "Incorrect. Try a similar answer or see the answer (" + correctAnswer + ")";
		return false
	}
}

function submit(event) {
	event.preventDefault();
	const answer = answerInput.value.trim().toLowerCase();
	const currentQuestion = questions[currentQuestionIndex];
	// const correctAnswer = currentQuestion.answer.toLowerCase();

	iterQuest(questions, answer)
}

// Check answer on submit
let ansForm = document.getElementById("answer-form")
ansForm.addEventListener("submit", submit)
ansForm.addEventListener("change", submit);

createAnswerTable(); // Create table on page load
updateQuestion(); // Display first question

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