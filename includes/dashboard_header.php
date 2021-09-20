<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="row g-3">
        <div class="col-3 sm-none d-flex flex-column flex-shrink-0 p-2 vh-100 grey bg-dark">
            <div class="container _title">
                <div class="row g-2">
                    <div class="col-6">
                        <h1 class="ms-2 gold">GDA</h1>
                        <div class="row g-3 text-muted">
                            <div class="col-6 small text-end">
                                <a href="../index.php">
                                    <p>go back<br>to website</p>
                                </a>
                            </div>
                            <div class="col-6 small text-start">
                                <i class="fas fa-undo-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled ms-2 fs-5">
                            <li><span class="gold">G</span>reat</li>
                            <li><span class="gold">D</span>ashboard</li>
                            <li><span class="gold">A</span>dministrator</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="gold">
            <div class="current_text ms-5">
                <ul class="list-unstyled ms-1">
                    <a href="#" role="button">
                        <li>C</li>
                    </a>
                    <a href="#" role="button">
                        <li>R</li>
                    </a>
                    <a href="#" role="button">
                        <li>U</li>
                    </a>
                    <a href="#" role="button">
                        <li>D</li>
                    </a>
                </ul>
            </div>
            <hr class="gold">
            <div class="current_text ms-5">
                <h3 class="_title text-muted fs-5 text-decoration-underline">Administrator<br>Area</h3>
                <ul class="list-unstyled ms-1">
                    <a href="../views/login.php" role="button">
                        <li>Login</li>
                    </a>
                    <a href="../views/add_user.php" role="button">
                        <li>Add User</li>
                    </a>
                    <a href="../views/add_vehicles.php" role="button">
                        <li>Add Vehicles</li>
                    </a>
                </ul>
            </div>
        </div>