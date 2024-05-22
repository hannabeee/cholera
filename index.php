<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPIS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Header with navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Student's Login</a>
                    </li>
                    <!-- Add more navigation links here if needed -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Existing content -->
    <div class="wrapper">
        <img src="325672730_961885291443586_1156869176267253069_n.jpg" alt="Northwest Samar State University" class="logo" style="display: block; margin: 0 auto; width: 150px; height: auto;">
        <h2>Admin</h2>
        <form action="#" method="post">
            <div class="input-field">
                <input type="email" id="email" name="email" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-field">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <input type="submit" class="login" name="login" placeholder="Submit" required>
            <a href="login.php">Student's Login</a>
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DQ3Ld4kz5YXwBf4a2RM5SnH2jyx0" crossorigin="anonymous"></script>
</body>
</html>
