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
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];

            $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
            $result = mysqli_query($con,$sql);

            if($result){
                header('location: display.php');
            }
                  
        }
    
    ?>

    <header>
        <h1> Add Users</h1>
    </header>


    <form action="" method="post">

        <table>
            <table>
                <tr>
                    <th><label for="name">Name: </label></th>
                    <td>
                        <input type="text" id="name" name="name" />
                    </td>
                </tr>
                <tr>
                    <th><label for="email">Email: </label></th>
                    <td>
                        <input type="email" id="email" name="email" />
                    </td>
                </tr>
                <tr>
                    <th><label for="mobile">Mobile: </label></th>
                    <td>
                        <input type="text" id="mobile" name="mobile" />
                    </td>
                </tr>
                <tr>
                    <th><label for="password">Password: </label></th>
                    <td>
                        <input type="password" id="password" name="password" />
                    </td>
                </tr>

            </table>
        </table>
        <button name="submit" type=" submit">Submit</button>
        <button><a href="display.php">Cancel</a></button>
    </form>

</body>

</html>