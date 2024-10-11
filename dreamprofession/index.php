<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Profession Registration</title>
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
    <h3>Register Your Dream Profession Here</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="professionName">Profession Name</label> <input type="text" name="professionName" required></p>
        <p><label for="company">Company</label> <input type="text" name="company" required></p>
        <p><label for="email">Email</label> <input type="email" name="email" required></p>
        <p><label for="phone">Phone</label> <input type="text" name="phone" required></p>
        <p><label for="address">Address</label> <input type="text" name="address" required></p>
        <p><label for="salary">Salary</label> <input type="number" name="salary" required></p>
        <p><label for="experience">Experience Required</label> <input type="text" name="experience" required></p>
        <p><label for="jobType">Job Type</label> <input type="text" name="jobType" required></p>
        <input type="submit" name="insertNewProfessionBtn" value="Register">
    </form>

    <table style="width:100%; margin-top: 50px;">
      <tr>
        <th>Profession ID</th>
        <th>Profession Name</th>
        <th>Company</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Salary</th>
        <th>Experience Required</th>
        <th>Job Type</th>
        <th>Date Added</th>
        <th>Action</th>
      </tr>

      <?php $seeAllDreamProfessions = seeAllDreamProfessions($pdo); ?>
      <?php foreach ($seeAllDreamProfessions as $row) { ?>
      <tr>
        <td><?php echo $row['profession_id']; ?></td>
        <td><?php echo $row['profession_name']; ?></td>
        <td><?php echo $row['company']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['salary']; ?></td>
        <td><?php echo $row['experience']; ?></td>
        <td><?php echo $row['job_type']; ?></td>
        <td><?php echo $row['date_added']; ?></td>
        <td>
            <a href="editDreamProfession.php?profession_id=<?php echo $row['profession_id'];?>">Edit</a>
            <a href="deleteDreamProfession.php?profession_id=<?php echo $row['profession_id'];?>">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
</body>
</html>
