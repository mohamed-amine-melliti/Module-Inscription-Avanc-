<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect("localhost", "root", "", "finaltest");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $capitale = $_REQUEST['gender'];


    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO college VALUES ('$first_name','$last_name','$capitale')";

    if(mysqli_query($conn, $sql)){

    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</center>
</body>

</html>
