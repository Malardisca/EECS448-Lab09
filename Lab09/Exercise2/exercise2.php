<?php
    function collectionService($answer)
    {
        return $_POST[$answer];
    }
    function keyCheck($answer, $key) 
    {
        global $numCorrect;
        if ($answer == $key) 
        {
            $numCorrect++;
        }
    }
    $numCorrect = 0;
    echo "Which Pizza store sales the most pizza in 2020? <br>";
    echo "You answered: ". collectionService("A") . "<br>";
    keyCheck(collectionService("A"), "A: Dominos");
    echo "Correct answer: A: Dominos <br> <br>";

    echo "Question 2: Which one was founded in Kansas?<br>";
    echo "You answered: ". collectionService("B") . "<br>";
    keyCheck(collectionService("B"), "B: PizzaHut");
    echo "Correct answer: B: PizzaHut <br> <br>";

    echo "Question 3: Which headquarters is in TX?<br>";
    echo "You answered: ". collectionService("C") . "<br>";
    keyCheck(collectionService("C"), "C: Cicis");
    echo "Correct answer: C: Cicis <br> <br>";

    echo "Question 4: Which one was founded in New York?<br>";
    echo "You answered: ". collectionService("D") . "<br>";
    keyCheck(collectionService("D"), "D: Sbarro");
    echo "Correct answer: D: Sbarro <br> <br>";

    echo "Question 5: Which one was founded in Ohio?<br>";
    echo "You answered: ". collectionService("E") . "<br>";
    keyCheck(collectionService("E"), "E: Marco");
    echo "Correct answer: E: Marco <br> <br> <br>";

    echo "You have correctly answered: <b>" . $numCorrect . "</b> Question(s)! <br>";
    echo "<b>You received a score of: " . ($numCorrect / 5 * 100) . "% <br>";
?>
