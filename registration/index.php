<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=spencerp_ace_db', 'spencerp_ace_user', 'Mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e) {
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

if (isset($_POST['name']) && is_numeric($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $eventSat = $_POST['eventSat'];
    $eventSun = $_POST['eventSun'];
    $type = $_POST['type'];
    $emergName = $_POST['emergName'];
    $emergNum = $_POST['emergNum'];
    $specialAccomms = $_POST['specialAccomms'];

    try {
        $sql = 'INSERT INTO register SET
            name = :name,
            age = :age,
            gender = :gender,
            email = :email,
            eventSat = :eventSat,
            eventSun = :eventSun,
            type = :type,
            emergName = :emergName,
            emergNum = :emergNum,
            specialAccomms = :specialAccomms';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':age', $_POST['age']);
        $s->bindValue(':gender', $_POST['gender']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':eventSat', $_POST['eventSat']);
        $s->bindValue(':eventSun', $_POST['eventSun']);
        $s->bindValue(':type', $_POST['type']);
        $s->bindValue(':emergName', $_POST['emergName']);
        $s->bindValue(':emergNum', $_POST['emergNum']);
        $s->bindValue(':specialAccomms', $_POST['specialAccomms']);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding your question: ' . $e->getMessage();
        include 'includes/error.html.php';
        exit();
    }

    include 'success.html.php';

} else {
    include 'register.html.php';
}
