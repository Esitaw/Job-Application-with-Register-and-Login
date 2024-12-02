<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert New Teacher</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Insert a New Teacher</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" required>
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name" required>
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email" required>
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" required>
		</p>
		<p>
			<label for="subjectSpecialty">Subject Specialty</label> 
			<input type="text" name="subject_specialty" required>
		</p>
		<p>
			<label for="qualification">Qualification</label> 
			<input type="text" name="qualification" required>
		</p>
		<p>
			<label for="yearsExperience">Years of Experience</label> 
			<input type="number" name="years_of_experience" required>
		</p>
		<p>
			<label for="schoolName">School Name</label> 
			<input type="text" name="school_name" required>
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address" required>
		</p>
		<p>
			<label for="nationality">Nationality</label> 
			<input type="text" name="nationality" required>
		</p>
		<p>
			<input type="submit" name="insertTeacherBtn" value="Insert Teacher">
		</p>
	</form>
</body>
</html>
