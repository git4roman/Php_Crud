<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    padding: 6px;
    text-align: center;
}
</style>

<body>
    <button><a href="adduser.php">Add User</a></button>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>mobile</th>
            <th>password</th>
            <th>operation</th>
        </tr>
        <?php
    include 'connect.php';

    $sql = "Select * from `crud`";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($result)){
        $id= $row['id'] ;
        $name= $row['name'];
        $email= $row['email'];
        $mobile= $row['mobile'];
        $password= $row['password'];

        echo "<tr>
        <td>$id</td>
        <td>$name</td>
        <td>$email</td>
        <td>$mobile</td>
        <td>$password</td>
        <td><button name='update'><a href='update.php?id=$id'>Update</a></button>
        <button name='delete'><a href='delete.php?id=$id'>Delete</a></button>
    </td>
        

        </tr> ";
        }

        ?>

    </table>


</body>

</html>