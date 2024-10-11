<?php
function seeAllDreamProfessions($pdo) {
    $stmt = $pdo->query("SELECT * FROM dream_professions");
    return $stmt->fetchAll();
}

function getDreamProfessionById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM dream_professions WHERE profession_id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function insertDreamProfession($pdo, $professionName, $company, $email, $phone, $address, $salary, $experience, $jobType) {
    $stmt = $pdo->prepare("INSERT INTO dream_professions (profession_name, company, email, phone, address, salary, experience, job_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$professionName, $company, $email, $phone, $address, $salary, $experience, $jobType]);
}

function editDreamProfession($pdo, $professionId, $professionName, $company, $email, $phone, $address, $salary, $experience, $jobType) {
    $stmt = $pdo->prepare("UPDATE dream_professions SET profession_name = ?, company = ?, email = ?, phone = ?, address = ?, salary = ?, experience = ?, job_type = ? WHERE profession_id = ?");
    $stmt->execute([$professionName, $company, $email, $phone, $address, $salary, $experience, $jobType, $professionId]);
}

function deleteDreamProfession($pdo, $professionId) {
    $stmt = $pdo->prepare("DELETE FROM dream_professions WHERE profession_id = ?");
    $stmt->execute([$professionId]);
}
?>

