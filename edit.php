<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Teacher</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php 
		$getTeacherByID = getTeacherByID($pdo, $_GET['id']); 
	?>
	<h1>Edit the teacher!</h1>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo htmlspecialchars($getTeacherByID['first_name']); ?>" required>
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo htmlspecialchars($getTeacherByID['last_name']); ?>" required>
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email" value="<?php echo htmlspecialchars($getTeacherByID['email']); ?>" required>
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" value="<?php echo htmlspecialchars($getTeacherByID['gender']); ?>" required>
		</p>
		<p>
			<label for="subjectSpecialty">Subject Specialty</label> 
			<input type="text" name="subject_specialty" value="<?php echo htmlspecialchars($getTeacherByID['subject_specialty']); ?>" required>
		</p>
		<p>
			<label for="qualification">Qualification</label> 
			<input type="text" name="qualification" value="<?php echo htmlspecialchars($getTeacherByID['qualification']); ?>" required>
		</p>
		<p>
			<label for="yearsExperience">Years of Experience</label> 
			<input type="number" name="years_of_experience" value="<?php echo htmlspecialchars($getTeacherByID['years_of_experience']); ?>" required>
		</p>
		<p>
			<label for="schoolName">School Name</label> 
			<input type="text" name="school_name" value="<?php echo htmlspecialchars($getTeacherByID['school_name']); ?>" required>
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address" value="<?php echo htmlspecialchars($getTeacherByID['address']); ?>" required>
		</p>
		<p>
			<label for="nationality">Nationality</label> 
			<input type="text" name="nationality" value="<?php echo htmlspecialchars($getTeacherByID['nationality']); ?>" required>
		</p>
		<p>
			<input type="submit" value="Save" name="editTeacherBtn">
		</p>
	</form>
</body>
</html>
