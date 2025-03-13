<?php 

// Define function to evaluate the quiz
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;

    // Compare the user's correct answers
    foreach ($questions as $index => $question) {
        if (isset($answers[$index]) && strtolower(trim($answers[$index])) === strtolower(trim($question['correct']))) {
            $score++;
        }
    }

    return $score;
}

//  questions array with  the correct answer
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

//empty array to store answers
$userAnswers = [];

// Ask question and collect answer section
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answer = readline("Your answer: ");
    $userAnswers[] = $answer;
}


$score = evaluateQuiz($questions, $userAnswers);

//score Display
echo "You scored $score out of " . count($questions) . ".\n";


?>