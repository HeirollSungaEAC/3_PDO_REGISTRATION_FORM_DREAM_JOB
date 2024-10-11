<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewProfessionBtn'])) {
    $professionName = $_POST['professionName'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $experience = $_POST['experience'];
    $jobType = $_POST['jobType'];
    
    // Insert into database
    insertDreamProfession($pdo, $professionName, $company, $email, $phone, $address, $salary, $experience, $jobType);
    header('Location: ../index.php');
}

if (isset($_POST['editProfessionBtn'])) {
    $professionId = $_GET['profession_id'];
    $professionName = $_POST['professionName'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $experience = $_POST['experience'];
    $jobType = $_POST['jobType'];
    
    // Update in database
    editDreamProfession($pdo, $professionId, $professionName, $company, $email, $phone, $address, $salary, $experience, $jobType);
    header('Location: ../index.php');
}

if (isset($_POST['deleteProfessionBtn'])) {
    $professionId = $_GET['profession_id'];
    // Delete from database
    deleteDreamProfession($pdo, $professionId);
    header('Location: ../index.php');
}
?>
