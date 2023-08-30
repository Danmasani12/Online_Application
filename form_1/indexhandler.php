<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'form';

    $conn = mysqli_connect($server, $username, $password, $db_name) or die ("Can't connect to database");

    if ($_POST['submit']) {
        $jamb_number = $_POST['jambnumber'];
        $jamb_year = $_POST['jambyear'];
        $course = $_POST['course'];
        $surname = $_POST['surname'];
        $first_name = $_POST['firstname'];
        $middle_name = $_POST['middlename'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone_number = $_POST['phonenumber'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $address = $_POST['address'];
        $sponsor_name = $_POST['sponsorname'];
        $email_of_sponsor = $_POST['emailofsponsor'];
        $relationship_with_sponsor = $_POST['relationwithsponsor'];
        $religion = $_POST['religion'];
        $marital_status = $_POST['maritalstatus'];
        $date_of_birth = $_POST['days']."/".$_POST['month']."/".$_POST['year'];
        $exam_type = $_POST['examtype'];
        $exam_year = $_POST['examyear'];
        $exam_no = $_POST['examno'];
        $subjects = $_POST['subject'];
        $grade = $_POST['grade'];


        $s = "INSERT into application_form (jamb_number, jamb_year, course, surname, first_name, last_name, middle_name, email,
        gender, phone_number, country, state, address, sponsor_name, email_of_sponsor, relationship_with_sponsor,
        religion, marital_status, date_of_birth, exam_type, exam_year, exam_no, subjects, grade) 
        values (null,\"$jamb_number\", \"$jamb_year\", \"$course\", \"$surname\", \"$first_name\", \"$last_name\", \"$middle_name\", \email\",
        \gender\", \phone_number\", \country\", \state\", \"$address\", \"$sponsor_name\", \"$email_of_sponsor\", \"$relationship_with_sponsor\",
        \"$religion\", \"$marital_status\", \"$date_of_birth\", \"$exam_type\", \"$exam_year\", \"$exam_no\", \"$subjects\", \"$grade\")";

        $result = mysqli_query($conn, $s);

        if($result) {
            echo 'Successful';
        }
        else {
            echo 'not successful';
        }
    }
?>