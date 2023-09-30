<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Results</title>
    <style>
        body {
            background-image: url(bg1.jpg);
            background-size: cover;
        }
        h1{
            margin-top: 5rem;
            text-align: center;
            font-family: Verdana;
        }
        table {
            width: 30%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(255,255,255,.5);
  
        }
        th, td, p {
            border: 1px solid #808080;
            padding: 8px;
            text-align: center;
            font-family: Verdana;
        }
    </style>

</head>
<body>
    <h1>WORD FREQUENCY RESULTS</h1>

    <?php
    // Function to calculate word frequency while ignoring stop words.
    function wordFrequencyCalculator($words, $stopWords) {
        $wordFrequency = array_count_values($words);
  
        // Remove stop words from the frequency array
        foreach ($stopWords as $stopWord) {
            unset($wordFrequency[$stopWord]);
        }

        return $wordFrequency;
    }

    // Function to sort word frequency based on user's choice.
    function sortWordFrequency($wordFrequency, $order) {
        if ($order === "asc") {
            asort($wordFrequency);
        } else {
            arsort($wordFrequency);
        }
        return $wordFrequency;
    }

    // Function to limit the number of words displayed
    function limiter($wordFrequency, $limit) {
        return array_slice($wordFrequency, 0, $limit);
    }

    // Define stop words
    $stopWords = ["the", "and", "in", "a", "is", "its", "an", "for"]; // Common stop words to ignore

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input and perform input validation
        
        $inputText = strtolower(trim($_POST['text']));
        $sortOrder = $_POST['sort']; // 'asc' or 'desc'
        $selectedLimit = (int)$_POST['limit']; // Number of words to display

        // Validate input
        if (empty($inputText) || $selectedLimit <= 0) {
            echo '<p>Please enter valid input and limit.</p>';
        } else {
            // Tokenize the input text into words
            $words = str_word_count($inputText, 1);

            // Calculate word frequency
            $wordFrequency = wordFrequencyCalculator($words, $stopWords);

            // Sort word frequency based on user's choice
            $sortedWordFrequency = sortWordFrequency($wordFrequency, $sortOrder);

            // Limit the number of words to display
            $limitedWordFrequency = limiter($sortedWordFrequency, $selectedLimit);

            // Output the results in a styled table
            echo '<table>';
            echo '<tr><th>Word</th><th>Frequency</th></tr>';

            foreach ($limitedWordFrequency as $word => $frequency) {
                // HTML escape user-generated content
                $word = htmlspecialchars($word);
                echo "<tr><td>$word</td><td>$frequency</td></tr>";
            }

            echo '</table>';
        }
    } else {
        // Handle the case where the form is not submitted
        echo '<p>No data submitted.</p>';
    }
    ?>

</body>
</html>
