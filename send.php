<?php
// Set up all variables
$response = array();
$response['request'] = 'failed';
$response['error'] = 'unknown';

// Connenct to database
include 'mysqlcredentials.php';

// Check connection
if ($pdo === false) {
    $response['error'] = 'Could not connect to database.';
    goto end;
} else {
        $name = $_POST['name'];
        $klasse = $_POST['klasse'];
        $wunsch = $_POST['wunsch'];

        // prepare statement
        $statement = $pdo->prepare("INSERT INTO nachrichten (name, klasse, wunsch) VALUES (?, ?, ?)");

        // execute statement and put response into array
        $statement->execute(array($name, $klasse, $wunsch));

        // response
        if ($statement->rowCount() == 1) {
            $response['request'] = 'success';
            unset($response['error']);
        }
}

end:
// Encode response array into json
echo json_encode($response, JSON_PRETTY_PRINT);
