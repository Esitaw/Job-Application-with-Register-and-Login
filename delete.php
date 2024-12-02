<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Teacher</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this teacher?</h1>
	<?php 
		$getTeacherByID = getTeacherByID($pdo, $_GET['id']); 
	?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1; height: 500px;">
		<h2>First Name: <?php echo htmlspecialchars($getTeacherByID['first_name']); ?></h2>
		<h2>Last Name: <?php echo htmlspecialchars($getTeacherByID['last_name']); ?></h2>
		<h2>Email: <?php echo htmlspecialchars($getTeacherByID['email']); ?></h2>
		<h2>Gender: <?php echo htmlspecialchars($getTeacherByID['gender']); ?></h2>
		<h2>Subject Specialty: <?php echo htmlspecialchars($getTeacherByID['subject_specialty']); ?></h2>
		<h2>Qualification: <?php echo htmlspecialchars($getTeacherByID['qualification']); ?></h2>
		<h2>Years of Experience: <?php echo htmlspecialchars($getTeacherByID['years_of_experience']); ?></h2>
		<h2>School Name: <?php echo htmlspecialchars($getTeacherByID['school_name']); ?></h2>
		<h2>Address: <?php echo htmlspecialchars($getTeacherByID['address']); ?></h2>
		<h2>Nationality: <?php echo htmlspecialchars($getTeacherByID['nationality']); ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteTeacherBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>
		</div>
	</div>
</body>
</html>
