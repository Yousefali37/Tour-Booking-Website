<?php

    $connection = mysqli_connect("localhost","root","","book-db");
    
    if(isset($_POST["send"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $requset = " insert into book_form(name,email,phone,address,location,guests,arrivals,leaving) values
        ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

        mysqli_query($connection, $requset);
        
        header('location:book.php');
        echo 'your Trip Has Been Placed Successfuly';
    }
    else{
        echo 'something went wrong try again';
    }