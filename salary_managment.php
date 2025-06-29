<?php
include 'libs/load.php';
include 'libs/db_conn.php';

// Create a new instance of the DB class to establish a database connection
$db = new DB();

// Get the database connection object
$conn = $db->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection


    // Get form data
    $name = $_POST["name"];
    $role = $_POST["role"];
    $newSalary = $_POST["new_salary"];

    // Check if the role matches the name
    $sql = "SELECT * FROM workers WHERE name='$name' AND role='$role'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "<script type='text/javascript'>alert('Error: Role does not match the given name.');</script>";
    } else {
        // Prepare and bind parameters for the query
        $stmt = $conn->prepare("UPDATE workers SET salary=? WHERE name=? AND role=?");
        $stmt->bind_param("dss", $newSalary, $name, $role);

        // Execute the query
        if ($stmt->execute()) {
            $message = "Salary updated successfully for $name.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $error_message = "Error updating salary: " . $stmt->error;
            echo "<script type='text/javascript'>alert('$error_message');</script>";
        }
        // Close statement
        $stmt->close();
    }

    // Close database connection
    $conn->close();
}
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
    <title>Worker List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/salary_managment.css">

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
                <h2>Salary Management</h2>
                <form action="" method="POST">
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Worker's Name" aria-label="Worker's Name" name="name" required>
                    </div>
                    <div class="col-sm">
                        <select class="form-select" aria-label="Worker's Role" name="role" required>
                            <option value="Cooking Master">Cooking Master</option>
                            <option value="Supplier">Supplier</option>
                            <option value="Cleaner">Cleaner</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Delivery Man">Delivery Man</option>
                            <option value="Watch Man">Watch Man</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="number" class="form-control" placeholder="New Salary" aria-label="New Salary" name="new_salary" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Update Salary</button>
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