<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DBMS Mini Project</title>
    <link rel="stylesheet" href="../css/partB.css" />
  </head>

  <body>
  <?php
        $host = "localhost";
        $username = "root";
        $password = "10102000";
        $database_connect = "dbmsprojectpartb";
        $conn = mysqli_connect($host, $username, $password, $database_connect);
    
        if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $conn -> connect_error;
            exit();
        }

        $id = $_GET['ID'];
        $fetchingDetails = "SELECT * from `personal_info` where `id` = '$id'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $name = $row["name"];
        $gender = $row["gender"];
        $blood = $row["blood"];
        $dob = $row["dob"];

        $fetchingDetails = "SELECT * from `address` where id = '$id'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $corr_street = $row["corr_street"]; 
        $corr_city = $row["corr_city"];
        $corr_state = $row["corr_state"];
        $corr_pin = $row["corr_pin"];
        $corr_phone = $row["corr_phone"];
        $perm_street = $row["perm_street"];
        $perm_city = $row["perm_city"];
        $perm_state = $row["perm_state"];
        $perm_pin = $row["perm_pin"];
        $perm_phone = $row["perm_phone"];

        $fetchingDetails = "SELECT * from `contact_info` where id = '$id'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $mobile = $row["mobile"]; 
        $em_mobile = $row["em_mobile"];
        $email = $row["email"];
        $aadhar = $row["aadhar"];
        $f_mobile = $row["f_mobile"];
        $f_occupation = $row["f_occupation"];
        $m_mobile = $row["m_mobile"];
        $m_occupation = $row["m_occupation"];

        $fetchingDetails = "SELECT * from `education_info` where id = '$id'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $tboard = $row["10thboard"]; 
        $tstream = $row["10thstream"]; 
        $tyear = $row["10thyear"]; 
        $tmarks = $row["10thmarks"]; 
        $tpercent = $row["10thperct"]; 
        $t2board = $row["12thboard"]; 
        $t2stream = $row["12thstream"]; 
        $t2year = $row["12thyear"]; 
        $t2marks = $row["12thmarks"]; 
        $t2percent = $row["12thperct"]; 

        $fetchingDetails = "SELECT * from `fee_info` where id = '$id'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $jossa_dd = $row["jossa_dd"]; 
        $jossa_date = $row["jossa_date"]; 
        $jossa_amt = $row["jossa_amt"]; 
        $inst_dd = $row["inst_dd"]; 
        $inst_date = $row["inst_date"]; 
        $inst_amt = $row["inst_amt"]; 
        $total_amt = $row["total_amt"]; 

        $fetchingDetails = "SELECT * from `hostel_enclosure_scanned` where id = '$id'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $hostel = $row["hostel"]; 
        $seat_allot = $row["seat_allot"]; 
        $jee_rank = $row["jee_rank"]; 
        $photo_id = $row["photo_id"]; 
        $birth_certificate = $row["birth_certificate"]; 
        $marksheet = $row["marksheet"]; 
        $income_cert = $row["income_cert"]; 
        $aadhar_cert = $row["aadhar_cert"]; 
        $caste_cert = $row["caste_cert"]; 
        $caste_validity = $row["caste_validity"]; 
        $ncl_cert = $row["ncl_cert"]; 
        $pwd_cert = $row["pwd_cert"]; 
        $tc_cert = $row["tc_cert"]; 
        $mig_cert = $row["mig_cert"]; 
        $gap_cert = $row["gap_cert"]; 
        $tenmark_cert = $row["10mark_cert"]; 
        $tenptwomark_cert = $row["12mark_cert"]; 
        $ews_cert = $row["ews_cert"]; 

        $fetchingDetails = "SELECT * from `jee_info` where id = '$id'";
        $rsFCU = mysqli_query($conn, $fetchingDetails);
        $row = $rsFCU->fetch_assoc();
        $branch = $row["branch"]; 
        $disability = $row["disability"]; 
        $round_no = $row["round_no"]; 
        $jee_roll = $row["jee_roll"]; 
        $air_gen = $row["air_gen"];         
        $air_category = $row["air_category"]; 
        $allotment_cate = $row["allotment_cate"]; 
    ?>
    <h2>
      <center><u>Application form for admission to B.Tech Programme</u></center>
    </h2>
    <p style="font-size: 18px">
      Enter Details from here onwards <u>(ALL ENTRIES IN CAPITAL LETTERS)</u>
    </p>
    <form action="../php/partB.php" method="post">
      <label for="profile"> Upload recent photo: </label>
      <input type="file" id="profile" name="profile" />
      <br /><br />

      <label for="fname"> Name in English: </label>
      <?php echo $name ?>
      <br /><br />

      <table cellpadding="4">
        <tr>
          <td>
            <label for="gender">Gender: </label>
            <?php echo $gender ?>
            <br /><br />
          </td>

          <td>
            <label for="blood">Blood group: </label>
            <?php echo $blood ?>
            <br /><br />
          </td>
        </tr>
      </table>

      <label for="dob">Date of Birth: </label>
      <?php echo $dob ?>
      <br /><br />

      <label for="contact">Mobile number: </label>
      <?php echo $mobile ?>
      <br /><br />

      <label for="emcontact">Emergency number: </label>
      <?php echo $em_mobile ?>
      <br /><br />

      <label for="email">Email: </label>
      <?php echo $email ?>
      <br /><br />

      <label for="aadhar">Aadhar: </label>
      <?php echo $aadhar ?>
      <br /><br />

      <table cellpadding="4" bordercolor="black" border="1">
        <tr>
          <td>
            <label for="faname">Father's name: </label>
            <?php echo $f_mobile ?>
          </td>
          <td>
            <label for="foccupation">Occupation: </label>
            <?php echo $f_occupation ?>
          </td>
        </tr>
        <tr>
          <td>
            <label for="moname">Mother's name: </label>
            <?php echo $m_mobile ?>
          </td>
          <td>
            <label for="moccupation">Occupation: </label>
            <?php echo $m_occupation ?>
          </td>
        </tr>
      </table>
      <br /><br />

      <label for="branch">Branch: </label>
      <?php echo $branch ?>
      <br /><br />
      <label for="dis">Physical Disability: </label>
      <?php echo $disability ?>
      <label for="discert"
        >If Yes,attach verification report by IIITN committee.</label
      >
      <input type="file" id="discert" name="discert" />
      <br /><br />

      <h4><u>JEE Mains details: </u></h4>
      <table border="1" cellpadding="4">
        <tr>
          <td>Round number</td>
          <td><?php echo $round_no ?></td>
        </tr>
        <tr>
          <td>JEE roll number</td>
          <td>
            <label for="jeeroll"></label>
            <?php echo $jee_roll ?>
          </td>
        </tr>
        <tr>
          <td>JEE AIR</td>
          <td>
            <label for="generalrank">General</label>
            <?php echo $air_gen ?>
            <label for="categoryrank">Category(If applicable)</label>
            <?php echo $air_category ?>
          </td>
        </tr>
        <tr>
          <td>Allotment Category:</td>
          <td>
            <label for="category"></label>
            <?php echo $allotment_cate ?>
          </td>
        </tr>
      </table>
      <br /><br />

      <h4><u>Details of Fee payment: </u></h4>
      <table border="1" cellpadding="4">
        <tr>
          <td>Sr. No</td>
          <td>Details</td>
          <td>DD/ECS no.</td>
          <td>Date</td>
          <td>Amount</td>
        </tr>
        <tr>
          <td>1.</td>
          <td>JOSAA 2021 councilling</td>
          <td><?php echo $jossa_dd ?></td>
          <td><?php echo $jossa_date	 ?></td>
          <td><?php echo $jossa_amt ?></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>At institute while reporting</td>
          <td><?php echo $inst_dd ?></td>
          <td><?php echo $inst_date ?></td>
          <td><?php echo $inst_amt ?></td>
        </tr>
        <tr>
          <td>3.</td>
          <td><b>Total Amount</b></td>
          <td></td>
          <td></td>
          <td><?php echo $total_amt ?></td>
        </tr>
      </table>
      <br />

      <p>
        <b>Whether Hostel required or not: </b>
        <?php echo $hostel ?>
      </p>

      <h4><u>List of enclosures</u></h4>

      <table cellpadding="4" border="1">
        <tr>
          <td>1) Seat allotment letter</td>
          <td>
          <?php echo $seat_allot ?>
          </td>
          <td>8) Caste Certificate</td>
          <td>
          <?php echo $caste_cert ?>
          </td>
        </tr>
        <tr>
          <td>2) JEE rank card</td>
          <td>
          <?php echo $jee_rank ?>
          </td>
          <td>9) Caste validity</td>
          <td>
          <?php echo $caste_validity ?>
          </td>
        </tr>
        <tr>
          <td>3) Photo ID proof</td>
          <td>
          <?php echo $photo_id ?>
          </td>
          <td>10) Non-Creamy layer certificate</td>
          <td>
          <?php echo $ncl_cert ?>
          </td>
        </tr>
        <tr>
          <td>4) Certificate of date of birth</td>
          <td>
          <?php echo $birth_certificate ?>
          </td>
          <td>11) Certificate for persons with disabilities</td>
          <td>
          <?php echo $pwd_cert ?>
          </td>
        </tr>
        <tr>
          <td>5) Qualifying Examination Mark-Sheet</td>
          <td>
          <?php echo $marksheet ?>
          </td>
          <td>12) Transfer Certificate</td>
          <td>
          <?php echo $tc_cert ?>
          </td>
        </tr>
        <tr>
          <td>6) Income certificate (For EWS)</td>
          <td>
          <?php echo $income_cert ?>
          </td>
          <td>13) Migration Certificate</td>
          <td>
          <?php echo $mig_cert ?>
          </td>
        </tr>
        <tr>
          <td>7) Aadhar card</td>
          <td>
          <?php echo $aadhar_cert ?>
          </td>
          <td>14) Gap certificate</td>
          <td>
          <?php echo $gap_cert ?>
          </td>
        </tr>
      </table>

      <h4><u>Address Information</u></h4>
      <table cellpadding="4" border="1">
        <tr>
          <td>Address for correspondence</td>
          <td>Permanent Address</td>
        </tr>
        <tr>
          <td>
            <label for="city">City: </label
            ><?php echo $corr_city ?>
          </td>
          <td>
            <label for="pcity">City: </label
            ><?php echo $perm_city ?>
          </td>
        </tr>
        <tr>
          <td>
            <label for="state">State: </label
            ><?php echo $corr_state ?>
          </td>
          <td>
            <label for="pstate">State: </label
            ><?php echo $perm_state ?>
          </td>
        </tr>
        <tr>
          <td>
            <label for="pin">PIN: </label
            ><?php echo $corr_pin ?>
          </td>
          <td>
            <label for="ppin">PIN: </label
            ><?php echo $perm_pin ?>
          </td>
        </tr>
        <tr>
          <td>
            <label for="rcon">Residential contact: </label
            ><?php echo $corr_phone ?>
          </td>
          <td>
            <label for="prcon">Residential contact: </label
            ><?php echo $perm_phone ?>
          </td>
        </tr>
      </table>
      <br /><br />

      <h4><u>Education</u></h4>
      <table cellpadding="4" border="1">
        <tr>
          <td>Class</td>
          <td>Name of Board</td>
          <td>Subject</td>
          <td>Year of Passing</td>
          <td>Marks Obtained</td>
          <td>Percentage/GPA/Grade</td>
        </tr>
        <tr>
          <td>10th/SSC</td>
          <td>
            <label for="10board"></label
            ><?php echo $tboard ?>
          </td>
          <td>
            <label for="10sub"></label
            ><?php echo $tstream ?>
          </td>
          <td>
            <label for="10yop"></label
            ><?php echo $tyear ?>
          </td>
          <td>
            <label for="10marks"></label
            ><?php echo $tmarks ?>
          </td>
          <td>
            <label for="10per"></label
            ><?php echo $tpercent ?>
          </td>
        </tr>
        <tr>
          <td>12th/SSC</td>
          <td>
            <label for="12board"></label
            ><?php echo $t2board ?>
          </td>
          <td>
            <label for="12sub"></label
            ><?php echo $t2stream ?>
          </td>
          <td>
            <label for="12yop"></label
            ><?php echo $t2year ?>
          </td>
          <td>
            <label for="12marks"></label
            ><?php echo $t2marks ?>
          </td>
          <td>
            <label for="12per"></label
            ><?php echo $t2percent ?>
          </td>
        </tr>
      </table>
      <br /><br />

      <h4><u>Uploaded Scanned Copies</u></h4>
      <table cellpadding="4" border="1">
        <tr>
          <td>10th Marksheet</td>
          <td>
          <?php echo $tenmark_cert ?>
          </td>
        </tr>
        <tr>
          <td>12th Marksheet</td>
          <td>
          <?php echo $tenptwomark_cert ?>
          </td>
        </tr>
        <tr>
          <td>Aadhar</td>
          <td>
          <?php echo $aadhar_cert ?>
          </td>
        </tr>
        <tr>
          <td>Category Certificate</td>
          <td>
          <?php echo $caste_cert ?>
          </td>
        </tr>
        <tr>
          <td>PWD certificate</td>
          <td>
          <?php echo $pwd_cert ?>
          </td>
        </tr>
        <tr>
          <td>EWS certificate (If applicable)</td>
          <td>
          <?php echo $ews_cert ?>
          </td>
        </tr>
      </table>

      <h4>Declaration by the applicant</h4>
      <h4>
        <u
          ><b
            >I certified that all information provided by me in this form is
            correct to the best of my knowledge and belief. I understand that
            any willful misrepresentation of facts will result in my dismissal
            from the Institute. If admitted, I shall abide by all rules and
            regulations of the Institute.</b
          ></u
        >
      </h4>
      <p>Upload scanned image of signature</p>
      <label for="sign"><input type="file" id="sign" name="sign" /></label>
      <br /><br />
    </form>
  </body>
</html>
