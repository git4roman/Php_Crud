<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'connect.php';
    $id= $_GET['id'];
    $sql = "Select * from `crud` where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    $name= $row['name'];
    $email= $row['email'];
    $mobile= $row['mobile'];
    $password= $row['password'];
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];

            $sql = "update `crud` set name='$name', email='$email', mobile='$mobile', password='$password' Where id=$id" ;
            $result = mysqli_query($con,$sql);

            if($result){
                header('location: display.php');
            }
            else{
                die(mysqli_error($con)); 
            }
                  
        }
    
    ?>

    <header>
        <h1> Update Users</h1>
    </header>

    <form action="" method="post">

        <table>
            <table>
                <tr>
                    <th><label for="name">Name: </label></th>
                    <td>
                        <input type="text" id="name" name="name" value=<?php echo $name ?> />
                    </td>
                </tr>
                <tr>
                    <th><label for="email">Email: </label></th>
                    <td>
                        <input type="email" id="email" name="email" value=<?php echo $email ?> />
                    </td>
                </tr>
                <tr>
                    <th><label for="mobile">Mobile: </label></th>
                    <td>
                        <input type="text" id="mobile" name="mobile" value=<?php echo $mobile ?> />
                    </td>
                </tr>
                <tr>
                    <th><label for="password">Password: </label></th>
                    <td>
                        <input type="text" id="password" name="password" value=<?php echo $password ?> />
                    </td>
                </tr>

            </table>
        </table>
        <button name="submit" type=" submit">Submit</button>
    </form>

</body>

</html>