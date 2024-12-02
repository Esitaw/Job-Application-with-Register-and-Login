<?php  

require_once 'dbConfig.php'; 
require_once 'models.php';  


// Example: Inserting a new teacher
if (isset($_POST['insertTeacherBtn'])) {
    try {
        // Assuming you have your form data and PDO connection
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        // ... other form fields

        // Insert query
        $query = "INSERT INTO teachers (first_name, last_name, email, gender, subject_specialty, qualification, years_of_experience, school_name, address, nationality) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($query);
        $stmt->execute([$first_name, $last_name, $email, $_POST['gender'], $_POST['subject_specialty'], $_POST['qualification'], $_POST['years_of_experience'], $_POST['school_name'], $_POST['address'], $_POST['nationality']]);

        // Set success message and status code
        $_SESSION['message'] = 'Teacher inserted successfully!';
        $_SESSION['statusCode'] = 200;  // Success status code
    } catch (Exception $e) {
        // If there's an error, set the error message and status code
        $_SESSION['message'] = 'An error occurred: ' . $e->getMessage();
        $_SESSION['statusCode'] = 400;  // Error status code
    }

    header('Location: ../index.php');
    exit();
}



if (isset($_POST['editTeacherBtn'])) {
	$editTeacher = editTeacher(
		$pdo,
		$_POST['first_name'], 
		$_POST['last_name'], 
		$_POST['email'], 
		$_POST['gender'], 
		$_POST['subject_specialty'], 
		$_POST['qualification'], 
		$_POST['years_of_experience'], 
		$_POST['school_name'], 
		$_POST['address'], 
		$_POST['nationality'], 
		$_GET['id']
	);

	if ($editTeacher) {
		$_SESSION['message'] = "Teacher successfully updated!";
		header("Location: ../index.php");
		exit();
	}
}

if (isset($_POST['deleteTeacherBtn'])) {
	$deleteTeacher = deleteTeacher($pdo, $_GET['id']);

	if ($deleteTeacher) {
		$_SESSION['message'] = "Teacher successfully deleted!";
		header("Location: ../index.php");
		exit();
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForATeacher = searchForATeacher($pdo, $_GET['searchInput']);
	foreach ($searchForATeacher as $row) {
		echo "<tr> 
				<td>{$row['id']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['email']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['subject_specialty']}</td>
				<td>{$row['qualification']}</td>
				<td>{$row['years_of_experience']}</td>
				<td>{$row['school_name']}</td>
				<td>{$row['address']}</td>
				<td>{$row['nationality']}</td>
			  </tr>";
	}
}

?>
