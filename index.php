<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Counter</title>
   
</head>
<style>
    /* Style the body and center the form */
body {
    font-family: Verdana;
    background-image: url(bg1.jpg);
    background-size: cover;
    text-align: center;
    padding: 20px;
}

/* Style the form container */
form {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 600px;
    margin: 0 auto;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

/* Style form labels and inputs */
label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

textarea,
select,
input[type="number"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-right: auto;
    margin-left: auto;
}

/* Style the submit button */
input[type="submit"] {
    background-color: #007bff;
    font-size: 15px;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
<body>
    <h1>WORD FREQUENCY COUNTER</h1>
    
    <form action="process.php" method="post">
        <label for="text">Paste your text here:</label><br>
        <textarea id="text" name="text" rows="10" cols="50" required></textarea><br><br>
        
        <label for="sort">Sort by frequency:</label>
        <select id="sort" name="sort">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select><br><br>
        
        <label for="limit">Number of words to display:</label>
        <input type="number" id="limit" name="limit" value="10" min="1"><br><br>
        
        <input type="submit" value="Calculate Word Frequency">
    </form>
</body>
</html>
