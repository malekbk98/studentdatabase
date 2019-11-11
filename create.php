<!--
    Author: Malek Ben Khalifa
    Date: 28-10-2019
    Exercice: TP3
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Create</title>
</head>

<body>
    <?php
include 'dbconnexion.php';
?>
        <div class="container">
            <fieldset>
                <h1 class="text-center text-muted display-4">Add Student</h1>
                <br>
                <br>
                <form action="store.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control text-center">
                            <br>
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control text-center">
                            <br>
                        </div>
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control text-center">
                            <br>
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control text-center">
                            <br>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="index.php">
                        <button type="submit" class="btn btn-dark">Cancel</button>
                    </a>
                </form>
            </fieldset>
        </div>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>