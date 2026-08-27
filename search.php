<?php

include 'db.php';

$search = $_GET['search'];

$sql = "SELECT * FROM students
        WHERE name LIKE '%$search%'
        OR email LIKE '%$search%'
        OR phone LIKE '%$search%'
        OR gender LIKE '%$search%'
        OR course LIKE '%$search%'
        OR address LIKE '%$search%'
        ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Search Results</h1>

    <div class="top-bar">

        <a href="index.php" class="btn back-btn">
            All Students
        </a>

        <form action="search.php" method="GET" class="search-form">
            <input type="text"
                   name="search"
                   value="<?php echo htmlspecialchars($search); ?>"
                   required>

            <button type="submit" class="btn search-btn">
                Search
            </button>
        </form>

    </div>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Age</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>

        <?php

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo htmlspecialchars($row['name']); ?></td>

            <td><?php echo htmlspecialchars($row['email']); ?></td>

            <td><?php echo htmlspecialchars($row['phone']); ?></td>

            <td><?php echo htmlspecialchars($row['gender']); ?></td>

            <td><?php echo htmlspecialchars($row['course']); ?></td>

            <td><?php echo $row['age']; ?></td>

            <td><?php echo htmlspecialchars($row['address']); ?></td>

            <td class="actions">

                <a href="view_student.php?id=<?php echo $row['id']; ?>"
                   class="view">
                   View
                </a>

                <a href="edit_student.php?id=<?php echo $row['id']; ?>"
                   class="edit">
                   Edit
                </a>

                <a href="delete_student.php?id=<?php echo $row['id']; ?>"
                   class="delete"
                   onclick="return confirm('Are you sure you want to delete this student?');">
                   Delete
                </a>

            </td>

        </tr>

        <?php

            }

        } else {

        ?>

        <tr>
            <td colspan="9">No matching student found.</td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>