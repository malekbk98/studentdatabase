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
    <title>TP</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-muted display-4">Student List DSI21 -ISET BIZERTE 2019-</h1>
        <br>
        <a href="create.php">
            <button class="btn btn-primary">Create Student</button>
        </a>
        <br>
        <br>
        <table class="table table-hover">
            <tr class="bg-dark text-white">
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td colspan="2" class="text-center">Tools</td>
            </tr>
            <?php      
            include 'dbconnexion.php';
            $req= $conx->prepare('SELECT * From students');
            $req->execute();

            while($data = $req->fetch()){
                echo '<tr>';
                echo '<td>'.$data['id'].'</td>';
                echo '<td>'.$data['firstname'].'</td>';
                echo '<td>'.$data['lastname'].'</td>';
                echo '<td>'.$data['email'].'</td>';
                echo '<td>'.$data['phone'].'</td>';
                echo '<td><a href="edit.php?id='.$data['id'].'"><button class="btn btn-primary glyphicon glyphicon-edit">Edit</button></a></td>';
                echo '<td><a href="delete.php?id='.$data['id'].'"><button class="btn btn-danger">Delete</button></a></td>';
                echo '</tr>';
            }
            
            if (!empty($_GET['alert'])){
                echo $_GET['alert'];
            }

        ?>
        </table>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>