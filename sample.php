

<?php
// used to connect to the database
$host = "localhost";
$db_name = "sample-db";
$username = "root";
$password = "";

if(isset($_POST['db-samp'])){

    try {
        $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $score = $_POST['score'];
        $avgs = $_POST['avgs'];

        // insert query
        $query = "START TRANSACTION;
                    INSERT INTO sample1 (name, age) VALUES  (:name, :age);
                    INSERT INTO sample2 VALUES (last_insert_id(), :gender);
                    INSERT INTO sample3 VALUES (last_insert_id(), :score, :avgs);
                COMMIT";

        // prepare query for execution
        $stmt = $con->prepare($query);

        // bind the parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':score', $score);
        $stmt->bindParam(':avgs', $avgs);

        // Execute the query
        $stmt->execute();
    }

    // show error
    catch (PDOException $exception) {
        die('ERROR: ' . $exception->getMessage());
    }
}
?>

<form method="post" action="sample.php">
    name
    <input type="text" name="name"><br><br>
    age
    <input type="text" name="age"><br><br>
    gender
    <input type="text" name="gender"><br><br>
    score
    <input type="text" name="score"><br><br>
    average
    <input type="text" name="avgs"><br><br>
    <input type="submit" value="Submit" name="db-samp">
</form>