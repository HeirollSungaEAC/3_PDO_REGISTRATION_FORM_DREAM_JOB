<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Dream Profession</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
        table, th, td {
          border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>Are you sure you want to delete this dream profession?</h1>
    <?php $getProfessionById = getDreamProfessionById($pdo, $_GET['profession_id']); ?>
    <form action="core/handleForms.php?profession_id=<?php echo $_GET['profession_id']; ?>" method="POST">
        <div class="professionContainer" style="border-style: solid; font-family: 'Arial';">
            <p>Profession Name: <?php echo $getProfessionById['profession_name']; ?></p>
            <p>Company: <?php echo $getProfessionById['company']; ?></p>
            <p>Email: <?php echo $getProfessionById['email']; ?></p>
            <p>Phone: <?php echo $getProfessionById['phone']; ?></p>
            <p>Address: <?php echo $getProfessionById['address']; ?></p>
            <p>Salary: <?php echo $getProfessionById['salary']; ?></p>
            <p>Experience Required: <?php echo $getProfessionById['experience']; ?></p>
            <p>Job Type: <?php echo $getProfessionById['job_type']; ?></p>
            <input type="submit" name="deleteProfessionBtn" value="Delete">
        </div>
    </form>
</body>
</html>
