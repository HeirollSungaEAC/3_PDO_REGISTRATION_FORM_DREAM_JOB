<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dream Profession</title>
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
    <?php $getProfessionById = getDreamProfessionById($pdo, $_GET['profession_id']); ?>
    <form action="core/handleForms.php?profession_id=<?php echo $_GET['profession_id']; ?>" method="POST">
        <p>
            <label for="professionName">Profession Name</label> 
            <input type="text" name="professionName" value="<?php echo $getProfessionById['profession_name']; ?>" required>
        </p>
        <p>
            <label for="company">Company</label> 
            <input type="text" name="company" value="<?php echo $getProfessionById['company']; ?>" required>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $getProfessionById['email']; ?>" required>
        </p>
        <p>
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="<?php echo $getProfessionById['phone']; ?>" required>
        </p>
        <p>
            <label for="address">Address</label>
            <input type="text" name="address" value="<?php echo $getProfessionById['address']; ?>" required>
        </p>
        <p>
            <label for="salary">Salary</label>
            <input type="number" name="salary" value="<?php echo $getProfessionById['salary']; ?>" required>
        </p>
        <p>
            <label for="experience">Experience Required</label>
            <input type="text" name="experience" value="<?php echo $getProfessionById['experience']; ?>" required>
        </p>
        <p>
            <label for="jobType">Job Type</label>
            <input type="text" name="jobType" value="<?php echo $getProfessionById['job_type']; ?>" required>
        </p>
        <input type="submit" name="editProfessionBtn" value="Update">
    </form>
</body>
</html>
