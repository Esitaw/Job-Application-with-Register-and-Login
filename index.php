<?php 
require_once 'core/dbConfig.php'; 
require_once 'core/models.php'; 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job Application</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" 
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
	</script>
</head>
<body>

<?php if (isset($_SESSION['message']) && isset($_SESSION['statusCode'])): ?>
    <div style="text-align: center; margin: 10px;">
        <?php if ($_SESSION['statusCode'] === 200): ?>
            <div style="color: green; background-color: ghostwhite; border: solid 1px green; padding: 10px;">
                <h3><?php echo $_SESSION['message']; ?></h3>
            </div>
        <?php elseif ($_SESSION['statusCode'] === 400): ?>
            <div style="color: red; background-color: ghostwhite; border: solid 1px red; padding: 10px;">
                <h3><?php echo $_SESSION['message']; ?></h3>
            </div>
        <?php endif; ?>
    </div>
    <?php unset($_SESSION['message'], $_SESSION['statusCode']); ?>
<?php endif; ?>

<div class="search-container">
	<p>Welcome, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?>!</p>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
		<input type="text" name="searchInput" placeholder="Search here" value="<?php echo isset($_GET['searchInput']) ? htmlspecialchars($_GET['searchInput']) : ''; ?>">
		<button type="submit" name="searchBtn">Search</button>
	</form>
	<p><a href="index.php">Clear Search Query</a></p>
	<p><a href="insert.php">Insert New Teacher</a></p>
</div>

<table border="1" cellspacing="0" cellpadding="10" style="width:100%; margin-top: 20px; text-align: left;">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Subject</th>
			<th>Qualification</th>
			<th>School Name</th>
			<th>Years of Experience</th>
			<th>Nationality</th>
			<th>Date Added</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if (!isset($_GET['searchBtn'])):
			$teachers = getAllTeachers($pdo); 
		else:
			$teachers = searchForATeacher($pdo, $_GET['searchInput']);
		endif;

		if (!empty($teachers)):
			foreach ($teachers as $teacher): ?>
				<tr>
					<td><?php echo htmlspecialchars($teacher['first_name']); ?></td>
					<td><?php echo htmlspecialchars($teacher['last_name']); ?></td>
					<td><?php echo htmlspecialchars($teacher['email']); ?></td>
					<td><?php echo htmlspecialchars($teacher['gender']); ?></td>
					<td><?php echo htmlspecialchars($teacher['address']); ?></td>
					<td><?php echo htmlspecialchars($teacher['subject_specialty']); ?></td>
					<td><?php echo htmlspecialchars($teacher['qualification']); ?></td>
					<td><?php echo htmlspecialchars($teacher['school_name']); ?></td>
					<td><?php echo htmlspecialchars($teacher['years_of_experience']); ?></td>
					<td><?php echo htmlspecialchars($teacher['nationality']); ?></td>
					<td><?php echo htmlspecialchars($teacher['date_added']); ?></td>
					<td>
						<a href="edit.php?id=<?php echo $teacher['id']; ?>">Edit</a> | 
						<a href="delete.php?id=<?php echo $teacher['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;
		else: ?>
			<tr>
				<td colspan="12" style="text-align: center;">No records found.</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>
</body>
</html>
