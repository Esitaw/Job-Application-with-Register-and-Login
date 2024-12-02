<?php  

require_once 'dbConfig.php';

function getAllTeachers($pdo) {
	$sql = "SELECT * FROM teachers 
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}


function getTeacherByID($pdo, $id) {
	$sql = "SELECT * FROM teachers WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForATeacher($pdo, $searchQuery) {
	$sql = "SELECT * FROM teachers WHERE 
			CONCAT(
				first_name, 
				last_name, 
				email, 
				gender, 
				subject_specialty, 
				qualification, 
				years_of_experience, 
				school_name, 
				address, 
				nationality
			) LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function insertNewTeacher($pdo, $first_name, $last_name, $email, $gender, $subject_specialty, $qualification, $years_of_experience, $school_name, $address, $nationality) {
	$sql = "INSERT INTO teachers 
			(
				first_name, 
				last_name, 
				email, 
				gender, 
				subject_specialty, 
				qualification, 
				years_of_experience, 
				school_name, 
				address, 
				nationality
			) VALUES (?,?,?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$first_name, 
		$last_name, 
		$email, 
		$gender, 
		$subject_specialty, 
		$qualification, 
		$years_of_experience, 
		$school_name, 
		$address, 
		$nationality
	]);

	if ($executeQuery) {
		return true;
	}
}

function editTeacher($pdo, $first_name, $last_name, $email, $gender, $subject_specialty, $qualification, $years_of_experience, $school_name, $address, $nationality, $id) {
	$sql = "UPDATE teachers
			SET 
				first_name = ?, 
				last_name = ?, 
				email = ?, 
				gender = ?, 
				subject_specialty = ?, 
				qualification = ?, 
				years_of_experience = ?, 
				school_name = ?, 
				address = ?, 
				nationality = ?
			WHERE id = ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$first_name, 
		$last_name, 
		$email, 
		$gender, 
		$subject_specialty, 
		$qualification, 
		$years_of_experience, 
		$school_name, 
		$address, 
		$nationality, 
		$id
	]);

	if ($executeQuery) {
		return true;
	}
}


function deleteTeacher($pdo, $id) {
	$sql = "DELETE FROM teachers WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}

?>
