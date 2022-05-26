<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>



    <?php



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];



        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = 'test';

        $myconnect = mysqli_connect($servername, $username, $password, $database);

        $sql = "INSERT INTO `form_tab`(`s.no`, `name`, `email`, `address`, `city`) VALUES ('','$email','$name','$address','$city');";

        $output = mysqli_query($myconnect, $sql);

        if ($output) {
            echo "Successfully submited!!";
        } else {
            echo "Try Again!!";
        }

        // if (!$myconnect) {
        //     die("sorry" . mysqli_connect_error());
        // } else {
        //     echo "succesfully creates";
        // }
    }
    ?>


    <form class="g-3 m-2" action="/codesphp/form.php" method="post">
        <div class="row">
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-3">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" name="city" id="city" class="form-control" id="inputCity">
        </div>

        </div>
        <div class="col-12 m-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>