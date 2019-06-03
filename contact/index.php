<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=spencerp_ace_db', 'spencerp_ace_user', 'Mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $question = $_POST['question'];

    try {
        $sql = 'INSERT INTO contact SET
            name = :name,
            email = :email,
            type = :type,
            question = :question';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':type', $_POST['type']);
        $s->bindValue(':question', $_POST['question']);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding your question: ' . $e->getMessage();
        include 'includes/error.html.php';
        exit();
    }

    include 'success.html.php';

} else {
    include 'contact.html.php';
}
