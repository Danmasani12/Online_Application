<?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamb_number = $_POST['jamb-number'];
        $jamb_year = $_POST['jamb-year'];
        $course = $_POST['course'];
        $surname = $_POST['surname'];
        $first_name = $_POST['first-name'];
        $middle_name = $_POST['middle-name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone_number = $_POST['phone-number'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $address = $_POST['address'];
        $sponsor_name = $_POST['sponsor-name'];
        $email_of_sponsor = $_POST['email-of-sponsor'];
        $relationship_with_sponsor = $_POST['relation-with-sponsor'];
        $religion = $_POST['religion'];
        $marital_status = $_POST['marital-status'];
        $date_of_birth = $_POST['days']."/".$_POST['month']."/".$_POST['year'];
        $exam_type = $_POST['exam-type'];
        $exam_year = $_POST['exam-year'];
        $exam_no = $_POST['exam-no'];
        $subjects = $_POST['subject'];
        $grade = $_POST['grade'];

        

        
            echo 'Successful';
       
            
    }
