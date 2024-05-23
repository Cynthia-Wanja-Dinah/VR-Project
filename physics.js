
        // JavaScript for handling the quiz logic and toast notifications

        const questions = [
            {
                question: "What is the capital of France?",
                options: ["Paris", "London", "Rome"],
                answer: "Paris"
            },
            {
                question: "What is the capital of Germany?",
                options: ["Berlin", "Madrid", "Vienna"],
                answer: "Berlin"
            },
            {
                question: "What is the capital of Italy?",
                options: ["Rome", "Paris", "Berlin"],
                answer: "Rome"
            }
        ];

        let currentQuestionIndex = 0;

        const form = document.getElementById('quiz-form');
        const questionElement = document.getElementById('question');
        const toastElement = document.getElementById('toast');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const selectedOption = form.elements['capital'].value;
            const correctAnswer = questions[currentQuestionIndex].answer;

            showToast(selectedOption === correctAnswer ? "Correct!" : "Wrong!");

            if (selectedOption === correctAnswer) {
                currentQuestionIndex = (currentQuestionIndex + 1) % questions.length;
                setTimeout(loadNextQuestion, 3000); // Load next question after 3 seconds
            }
        });

        function showToast(message) {
            toastElement.textContent = message;
            toastElement.className = "show";
            setTimeout(function() {
                toastElement.className = toastElement.className.replace("show", "");
            }, 3000);
        }

        function loadNextQuestion() {
            const nextQuestion = questions[currentQuestionIndex];
            questionElement.textContent = nextQuestion.question;
            form.innerHTML = nextQuestion.options.map((option, index) => `
                <input type="radio" id="option${index}" name="capital" value="${option}">
                <label for="option${index}">${option}</label><br>
            `).join('') + '<button type="submit">Submit</button>';
        }
    </script>