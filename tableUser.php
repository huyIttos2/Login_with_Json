<?php
include 'function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    $username = $_POST['username'];
$password = $_POST['password'];
$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];
saveFileJson($user, 'data.json');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListUsername</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center">List user</h1>
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead class="thead-dark">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Username</th>
                </tr>
                </thead>
                <tbody>
                <?php $users = readFileJson('data.json')
                ?>
                <?php foreach ($users as $key => $user): ?>
                    <tr>
                        <td><?php echo $user['username'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <form action="delete.php" method="post">
                <input type="text" name="field">
                <button type="submit">Delete by UserName</button>
            </form>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
