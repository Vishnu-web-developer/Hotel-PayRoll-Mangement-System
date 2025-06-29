<?php
include 'libs/load.php';
include 'libs/db_conn.php';

// Create a new instance of the DB class to establish a database connection
$db = new DB();

// Get the database connection object
$conn = $db->getConnection();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);

    // Check for null values
    if (!empty($name) && !empty($address) && !empty($blood_group) && !empty($role) && !empty($salary) && !empty($contact_number)) {
        // Insert data into database
        $sql = "INSERT INTO workers (name, address, blood_group, role, salary, contact_number) VALUES ('$name', '$address', '$blood_group', '$role', '$salary', '$contact_number')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("New Worker addes sucessfull")</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required";
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Add Worker</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/add_worker.css">

</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>
    <?php load_template("_theme_buttn"); ?>


    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <?php load_template("_svg"); ?>
    </svg>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <?php load_template("_header"); ?>

    </header>

    <div class="container-fluid">
        <div class="row">
            <?php load_template('_nav'); ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2>Add Worker</h2>
                <form class="row g-3" action="add_worker.php" method="POST">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter worker's name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="inputAddress" name="address" placeholder="Enter worker's address" rows="4" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="inputBloodGroup" class="form-label">Blood Group</label>
                        <input type="text" class="form-control" id="inputBloodGroup" name="blood_group" placeholder="Enter worker's blood group" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputRole" class="form-label">Role</label>
                        <select id="inputRole" class="form-select" name="role" required>
                            <option selected>Choose...</option>
                            <option value="Cooking Master">Cooking Master</option>
                            <option value="Supplier">Supplier</option>
                            <option value="Cleaner">Cleaner</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Delivery Man">Delivery Man</option>
                            <option value="Watch Man">Watch Man</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputSalary" class="form-label">Salary</label>
                        <input type="number" class="form-control" id="inputSalary" name="salary" placeholder="Enter worker's salary" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputContact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="inputContact" name="contact_number" placeholder="Enter worker's contact number" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add Worker</button>
                    </div>
                </form>

            </main>

        </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>

</body>

</html>