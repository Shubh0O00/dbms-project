<?php
    $host = "localhost";
    $username = "root";
    $password = "10102000";
    $database_connect = "dbmsprojectparta";
    $conn = mysqli_connect($host, $username, $password, $database_connect);

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }

    //before table details
    $AcademicYear = $_POST["AcademicYear"];
    $Semester = $_POST["Semester"];
    $dof = $_POST["dof"];
    $Branch = $_POST["Branch"];
    $Section = $_POST["Section"];

    //echo $AcademicDetails;

    //for subjects
    $sub1 = $_POST["sub1"];
    $sub2 = $_POST["sub2"];
    $sub3 = $_POST["sub3"];
    $sub4 = $_POST["sub4"];
    $sub5 = $_POST["sub5"];
    $sub6 = $_POST["sub6"];

    //echo $sub1;
    //quesiton 1
    $ans[0] = $_POST["sub1Q1"];
    $ans[1] = $_POST["sub2Q1"];
    $ans[2] = $_POST["sub3Q1"];
    $ans[3] = $_POST["sub4Q1"];
    $ans[4] = $_POST["sub5Q1"];
    $ans[5] = $_POST["sub6Q1"];

    //quesiton 1 ids
    $quesID[0] = "sub1Q1";
    $quesID[1] = "sub2Q1";
    $quesID[2] = "sub3Q1";
    $quesID[3] = "sub4Q1";
    $quesID[4] = "sub5Q1";
    $quesID[5] = "sub6Q1";

    //echo $sub1Q1;

    //quesiton 2i
    $ans[6] = $_POST["sub1Q2i"];
    $ans[7] = $_POST["sub2Q2i"];
    $ans[8] = $_POST["sub3Q2i"];
    $ans[9] = $_POST["sub4Q2i"];
    $ans[10] = $_POST["sub5Q2i"];
    $ans[11] = $_POST["sub6Q2i"];
    //echo $sub1Q2i;

    //quesiton 2i ids
    $quesID[6] = "sub1Q2i";
    $quesID[7] = "sub2Q2i";
    $quesID[8] = "sub3Q2i";
    $quesID[9] = "sub4Q2i";
    $quesID[10] = "sub5Q2i";
    $quesID[11] = "sub6Q2i";

    //quesiton 2ii
    $ans[12] = $_POST["sub1Q2ii"];
    $ans[13] = $_POST["sub2Q2ii"];
    $ans[14] = $_POST["sub3Q2ii"];
    $ans[15] = $_POST["sub4Q2ii"];
    $ans[16] = $_POST["sub5Q2ii"];
    $ans[17] = $_POST["sub6Q2ii"];
    //echo $sub1Q2ii;

    //quesiton 2ii ids
    $quesID[12] = "sub1Q2ii";
    $quesID[13] = "sub2Q2ii";
    $quesID[14] = "sub3Q2ii";
    $quesID[15] = "sub4Q2ii";
    $quesID[16] = "sub5Q2ii";
    $quesID[17] = "sub6Q2ii";

    //quesiton 2iii
    $ans[18] = $_POST["sub1Q2iii"];
    $ans[19] = $_POST["sub2Q2iii"];
    $ans[20] = $_POST["sub3Q2iii"];
    $ans[21] = $_POST["sub4Q2iii"];
    $ans[22] = $_POST["sub5Q2iii"];
    $ans[23] = $_POST["sub6Q2iii"];
    //echo $sub1Q2iii;

    //quesiton 2iii ids
    $quesID[18] = "sub1Q2iii";
    $quesID[19] = "sub2Q2iii";
    $quesID[20] = "sub3Q2iii";
    $quesID[21] = "sub4Q2iii";
    $quesID[22] = "sub5Q2iii";
    $quesID[23] = "sub6Q2iii";

    //quesiton 2iv
    $ans[24] = $_POST["sub1Q2iv"];
    $ans[25] = $_POST["sub2Q2iv"];
    $ans[26] = $_POST["sub3Q2iv"];
    $ans[27] = $_POST["sub4Q2iv"];
    $ans[28] = $_POST["sub5Q2iv"];
    $ans[29] = $_POST["sub6Q2iv"];
    //echo $sub1Q2iv;

    //quesiton 2iv ids
    $quesID[24] = "sub1Q2iv";
    $quesID[25] = "sub2Q2iv";
    $quesID[26] = "sub3Q2iv";
    $quesID[27] = "sub4Q2iv";
    $quesID[28] = "sub5Q2iv";
    $quesID[29] = "sub6Q2iv";

    //quesiton 2v
    $ans[30] = $_POST["sub1Q2v"];
    $ans[31] = $_POST["sub2Q2v"];
    $ans[32] = $_POST["sub3Q2v"];
    $ans[33] = $_POST["sub4Q2v"];
    $ans[34] = $_POST["sub5Q2v"];
    $ans[35] = $_POST["sub6Q2v"];
    //echo $sub1Q2v;

    //quesiton 2v ids
    $quesID[30] = "sub1Q2v";
    $quesID[31] = "sub2Q2v";
    $quesID[32] = "sub3Q2v";
    $quesID[33] = "sub4Q2v";
    $quesID[34] = "sub5Q2v";
    $quesID[35] = "sub6Q2v";

    //quesiton 3
    $ans[36] = $_POST["sub1Q3"];
    $ans[37] = $_POST["sub2Q3"];
    $ans[38] = $_POST["sub3Q3"];
    $ans[39] = $_POST["sub4Q3"];
    $ans[40] = $_POST["sub5Q3"];
    $ans[41] = $_POST["sub6Q3"];
    //echo $sub1Q3;

    //quesiton 3
    $quesID[36] = "sub1Q3";
    $quesID[37] = "sub2Q3";
    $quesID[38] = "sub3Q3";
    $quesID[39] = "sub4Q3";
    $quesID[40] = "sub5Q3";
    $quesID[41] = "sub6Q3";

    //quesiton 4
    $ans[42] = $_POST["sub1Q4"];
    $ans[43] = $_POST["sub2Q4"];
    $ans[44] = $_POST["sub3Q4"];
    $ans[45] = $_POST["sub4Q4"];
    $ans[46] = $_POST["sub5Q4"];
    $ans[47] = $_POST["sub6Q4"];
    //echo $sub1Q4;

    //quesiton 4
    $quesID[42] = "sub1Q4";
    $quesID[43] = "sub2Q4";
    $quesID[44] = "sub3Q4";
    $quesID[45] = "sub4Q4";
    $quesID[46] = "sub5Q4";
    $quesID[47] = "sub6Q4";

    //quesiton 5
    $ans[48] = $_POST["sub1Q5"];
    $ans[49] = $_POST["sub2Q5"];
    $ans[50] = $_POST["sub3Q5"];
    $ans[51] = $_POST["sub4Q5"];
    $ans[52] = $_POST["sub5Q5"];
    $ans[53] = $_POST["sub6Q5"];
    //echo $sub1Q5;

    //quesiton 5
    $quesID[48] = "sub1Q5";
    $quesID[49] = "sub2Q5";
    $quesID[50] = "sub3Q5";
    $quesID[51] = "sub4Q5";
    $quesID[52] = "sub5Q5";
    $quesID[53] = "sub6Q5";

    //below table details
    $attendance = $_POST["AttendancePer"];
    $cgpa = $_POST["CGPA"];
    //echo $attendance;
    //echo $cgpa;

    $insertFordetails = "INSERT INTO `details` (`AcademicYear`, `Semester`, `DOF`, `Branch`, `Section`, `Attendance`, `CGPA`) VALUES ('$AcademicYear', '$Semester', str_to_date('$dof', '%d-%m-%Y'), '$Branch', '$Section', '$attendance', '$cgpa')";
    $rsIFD = mysqli_query($conn, $insertFordetails);
    if ($rsIFD) {
        $fetchingCurruID = "SELECT max(uID) AS `uID` from `details`";
        $rsFCU = mysqli_query($conn, $fetchingCurruID);
        $row = $rsFCU->fetch_assoc();
        $uId = $row["uID"];

        $subjectId = 1;
        $insertForSubject = "INSERT INTO `Subject` (`subId`, `uID`, `subName`) VALUES ('$subjectId', '$uId', '$sub1')";
        $rsIFS = mysqli_query($conn, $insertForSubject);
        $subjectId = 2;
        $insertForSubject = "INSERT INTO `Subject` (`subId`, `uID`, `subName`) VALUES ('$subjectId', '$uId', '$sub2')";
        $rsIFS = mysqli_query($conn, $insertForSubject);
        $subjectId = 3;
        $insertForSubject = "INSERT INTO `Subject` (`subId`, `uID`, `subName`) VALUES ('$subjectId', '$uId', '$sub3')";
        $rsIFS = mysqli_query($conn, $insertForSubject);
        $subjectId = 4;
        $insertForSubject = "INSERT INTO `Subject` (`subId`, `uID`, `subName`) VALUES ('$subjectId', '$uId', '$sub4')";
        $rsIFS = mysqli_query($conn, $insertForSubject);
        $subjectId = 5;
        $insertForSubject = "INSERT INTO `Subject` (`subId`, `uID`, `subName`) VALUES ('$subjectId', '$uId', '$sub5')";
        $rsIFS = mysqli_query($conn, $insertForSubject);
        $subjectId = 6;
        $insertForSubject = "INSERT INTO `Subject` (`subId`, `uID`, `subName`) VALUES ('$subjectId', '$uId', '$sub6')";
        $rsIFS = mysqli_query($conn, $insertForSubject);
        //echo $uId;

        for($itr = 0; $itr<54; $itr++)
        {
            $subjectId = ($itr+1)%6;
            if($subjectId == 0)
                $subjectId = 6;
            $insertForAnswers = "INSERT INTO `Answers` (`uID`, `subId`, `qId`, `answer`) VALUES ('$uId', '$subjectId', '$quesID[$itr]', '$ans[$itr]')";
            $rsIFA = mysqli_query($conn, $insertForAnswers);
        }
        echo "<h1>Record Added Successfully</h1>";
    }

    $conn->close();
?>