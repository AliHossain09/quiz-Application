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
?>