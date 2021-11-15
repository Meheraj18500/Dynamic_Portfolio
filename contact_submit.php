<?php  

    // DB connection
    $connect = mysqli_connect("localhost", "root", "", "php_crud");
    if (!$connect) {
        die("Database Not Connected");
    }

    if (isset($_POST['submit'])) {
                                    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        

        $query = "INSERT INTO contact(`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')";
        $insert_message = mysqli_query($connect, $query);
        if (!$insert_message) {
            die("Message Faild" . mysqli_error($connect));
        }else{
            header("Location: index.php");
        }
    }
?>