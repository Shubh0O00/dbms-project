<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DBMS Mini Project</title>
    <link rel="stylesheet" href="../css/partA.css" />
    <script src="../javascript/app.js"></script>
  </head>

  <body>
    <h1>
      <center>Part I - Feedback System</center>
    </h1>
    <hr />
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

        $uId = $_GET['uID'];
        $fetchingDetails = "SELECT * from `details` where uID = '$uId'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $AcademicYear = $row["AcademicYear"];
        $Semester = $row["Semester"];
        $DOF = $row["DOF"];
        $Branch = $row["Branch"];
        $Section = $row["Section"];
        $Attendance = $row["Attendance"];
        $CGPA = $row["CGPA"]; 
        
        $fetchingSubjects = "SELECT * from `subject` where uID = '$uId'";
        $rsFCU = mysqli_query($conn, $fetchingSubjects);
        
        if ($rsFCU->num_rows > 0)
        {
          while($row = $rsFCU->fetch_assoc())
          {
            $sub[$row["subId"]] = $row["subName"];
          }
        }

        $fetchingAnswers = "SELECT `qId`,`answer` from `answers` where uID = '$uId'";
        $rsFCU = mysqli_query($conn, $fetchingAnswers);
        
        if ($rsFCU->num_rows > 0)
        {
          while($row = $rsFCU->fetch_assoc())
          {
            $answer[$row["qId"]] = $row["answer"];
          }
        }
        
    ?>

      <form>
      <label for="User Id">User Id:</label>
      <?php echo $uId ?>
      <label for="AcademicYear">Academic Year:</label>
      <?php echo $AcademicYear ?>
      <label for="Semester">Semester:</label>
      <?php echo $Semester ?>
      <label for="dof">Date Of Feedback:</label>
      <?php echo $DOF ?>
      <label for="Branch">Branch:</label>
      <?php echo $Branch ?>
      <label for="Section">Section:</label>
      <?php echo $Section ?>
      <br /><br />
      <hr />
      <br /><br />
      <table id="feedbackTable">
        <thead>
          <tr>
            <th id="sno" style="width: 6%">S.No.</th>
            <th id="description" style="width: 30%">Description</th>
            <th id="subject" style="width: 64%" colspan="6">
              Subject Name and Code
            </th>
          </tr>
        </thead>

        <tr>
          <td></td>
          <td>Course Contents</td>
          <td><?php echo $sub[1] ?></td>
          <td><?php echo $sub[2] ?></td>
          <td><?php echo $sub[3] ?></td>
          <td><?php echo $sub[4] ?></td>
          <td><?php echo $sub[5] ?></td>
          <td><?php echo $sub[6] ?></td>
        </tr>

        <tr>
          <td>1.</td>
          <td>
            Has the Teacher covered entire Syllabus as prescribed by University?
            <br />
            (Yes/No)
          </td>
          <td>
          <?php echo $answer["sub1Q1"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q1"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q1"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q1"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q1"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q1"] ?>
          </td>
        </tr>

        <tr>
          <td>2.</td>
          <td>Effectiveness of Teacher in Terms of:</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>i.</td>
          <td>Technical Content</td>
          <td>
          <?php echo $answer["sub1Q2i"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q2i"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q2i"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q2i"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q2i"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q2i"] ?>
          </td>
        </tr>

        <tr>
          <td>ii.</td>
          <td>Communication Skills</td>
          <td>
          <?php echo $answer["sub1Q2ii"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q2ii"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q2ii"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q2ii"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q2ii"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q2ii"] ?>
          </td>
        </tr>

        <tr>
          <td>iii.</td>
          <td>
            Availability beyond normal classes <br />and co-operation to solve
            individual <br />problems
          </td>
          <td>
          <?php echo $answer["sub1Q2iii"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q2iii"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q2iii"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q2iii"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q2iii"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q2iii"] ?>
          </td>
        </tr>

        <tr>
          <td>iv.</td>
          <td>Pace on which contents were covered</td>
          <td>
          <?php echo $answer["sub1Q2iv"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q2iv"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q2iv"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q2iv"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q2iv"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q2iv"] ?>
          </td>
        </tr>

        <tr>
          <td>v.</td>
          <td>Overall Effectiveness</td>
          <td>
          <?php echo $answer["sub1Q2v"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q2v"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q2v"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q2v"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q2v"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q2v"] ?>
          </td>
        </tr>

        <tr>
          <td>3.</td>
          <td>How do you rate the contents of the curricular ?</td>
          <td>
          <?php echo $answer["sub1Q3"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q3"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q3"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q3"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q3"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q3"] ?>
          </td>
        </tr>

        <tr>
          <td>4.</td>
          <td>How do you rate lab experiments, if applicable?</td>
          <td>
          <?php echo $answer["sub1Q4"] ?>
          </td>
          <td>
          <?php echo $answer["sub2Q4"] ?>
          </td>
          <td>
          <?php echo $answer["sub3Q4"] ?>
          </td>
          <td>
          <?php echo $answer["sub4Q4"] ?>
          </td>
          <td>
          <?php echo $answer["sub5Q4"] ?>
          </td>
          <td>
          <?php echo $answer["sub6Q4"] ?>
          </td>
        </tr>

        <tr>
          <td>5.</td>
          <td>Any Remarks</td>
          <td><?php echo $answer["sub1Q5"] ?></td>
          <td><?php echo $answer["sub2Q5"] ?></td>
          <td><?php echo $answer["sub3Q5"] ?></td>
          <td><?php echo $answer["sub4Q5"] ?></td>
          <td><?php echo $answer["sub5Q5"] ?></td>
          <td><?php echo $answer["sub6Q5"] ?></td>
        </tr>
      </table>
      <br />

      <h2>
        <center>
          (Rating : 5-Excellent, 4-Very Good, 3- Good, 2- Average, 1- Below
          Average)
        </center>
      </h2>

      <label for="AttendancePer">Attendance %: </label>
      <?php echo $Attendance ?>
      <br />
      <br />
      <label for="CGPA">CGPA:</label>
      <?php echo $CGPA ?>
      <br />
    </form>
  </body>
</html>
