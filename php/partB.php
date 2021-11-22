<?php

// The four variables of our database
$host = "localhost";
$username = "root";
$user_pass = "10102000";
$database_in_use = "dbmsprojectpartb";

// Creating database connection instance
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

//-----------------------------------DEFINING VARIABLES-------------------------------------
//-----------------------------------Personal info------------------------------------------

$nameform= $_POST["fname"];
$genderform=$_POST["gender"];
$bloodform=$_POST["blood"];
$dobform=$_POST["dob"];
$contactform = $_POST["contact"];
$emcontactform = $_POST["emcontact"];
$emailform = $_POST["email"];
$aadharform = $_POST["aadhar"];
$fanameform = $_POST["faname"];
$faoccuform = $_POST["foccupation"];
$monameform = $_POST["moname"];
$moccupationform = $_POST["moccupation"];

//----------------------------------JEE form------------------------------------------------

$branchform = $_POST["branch"];
$disform = $_POST["dis"];
$roundnoform = $_POST["roundno"];
$jeerollform = $_POST["jeeroll"];
$genrankform = $_POST["genrank"];
$catrankform = $_POST["catrank"];
$allotmentcatform = $_POST["category"];

//------------------------------------Fee form-----------------------------------------------
$jossaddform = $_POST["a"];
$jossadateform = $_POST["b"];
$jossaamtform = $_POST["c"];
$instddform = $_POST["d"];
$instdateform = $_POST["e"];
$instamtform = $_POST["f"];
$totalamtform = $_POST["g"];

//--------------------------------------hostel enclosure scanned------------------------------
$hostelwantedform = $_POST["hostelwanted"];
$salform = $_POST["sal"];
$jeercform = $_POST["jeerc"];
$photoidform = $_POST["photoid"];
$dobcertform = $_POST["dobcert"];
$markcertform = $_POST["markscert"];
$icertform = $_POST["icert"];
$acardform = $_POST["acard"];
$ccertform = $_POST["cc"];
$castevalidform = $_POST["cvalidity"];
$nclcertform = $_POST["nclcert"];
$pwdcertform = $_POST["pwdcert"];
$tccertform = $_POST["tccert"];
$mccertform = $_POST["mcert"];
$gcertform = $_POST["gcert"];
$tenthmarkform = $_POST["y1"];
$twelvemarkform = $_POST["y2"];
$ewscertform = $_POST["y6"];

//--------------------------------Address-----------------------------------------
$cstrform = $_POST["addr"];
$pstrform = $_POST["paddr"];
$ccityform = $_POST["city"];
$pcityform = $_POST["pcity"];
$cstateform = $_POST["state"];
$pstateform = $_POST["pstate"];
$pinform = $_POST["pin"];
$ppinform = $_POST["ppin"];
$crescontact = $_POST["rcon"];
$prescontact = $_POST["prcon"];

//----------------------------Educational details--------------------------------
$tenboardname = $_POST["10board"];
$tenstreamform = $_POST["10sub"];
$tenyearform = $_POST["10yop"];
$tenmarksform = $_POST["10marks"]; 
$tenpercform = $_POST["10per"];
$twelveboardname = $_POST["12board"];
$twelvestreamform = $_POST["12sub"];
$twelveyearform = $_POST["12yop"];
$twelvemarksform = $_POST["12marks"]; 
$twelvepercform = $_POST["12per"];


//--------------------------------SQL Queries-------------------------------------

$sql = "INSERT INTO personal_info (id , name, gender, blood, dob) VALUES (NULL, '$nameform', '$genderform', '$bloodform', '$dobform')";
$result = $mysqli->query($sql);

$fetchingCurruID = "SELECT max(id) AS `uID` from `personal_info`";
$rsFCU = mysqli_query($mysqli, $fetchingCurruID);
$row = $rsFCU->fetch_assoc();
$id = $row["uID"];

$sql1 = "INSERT INTO contact_info (id, mobile, em_mobile, email, aadhar, f_mobile, f_occupation, m_mobile, m_occupation) VALUES ('$id', '$contactform', '$emcontactform', '$emailform', '$aadharform', '$fanameform', '$faoccuform', '$monameform', '$moccupationform')";
$result = $mysqli->query($sql1);

$sql2 = "INSERT INTO jee_info (id, branch, disability, round_no, jee_roll, air_gen, air_category, allotment_cate) VALUES ('$id', '$branchform', '$disform', '$roundnoform', '$jeerollform', '$genrankform', '$catrankform', '$allotmentcatform')";
$result = $mysqli->query($sql2);

$sql3 = "INSERT INTO fee_info (id, jossa_dd, jossa_date, jossa_amt, inst_dd, inst_date, inst_amt, total_amt) VALUES ('$id', '$jossaddform', '$jossadateform', '$jossaamtform', '$instddform', '$instdateform', '$instamtform', '$totalamtform')";
$result = $mysqli->query($sql3);

$sql4 = "INSERT INTO hostel_enclosure_scanned (id, hostel, seat_allot, jee_rank, photo_id, birth_certificate, marksheet, income_cert, aadhar_cert, caste_cert, caste_validity, ncl_cert, pwd_cert, tc_cert, mig_cert, gap_cert, 10mark_cert, 12mark_cert, ews_cert) VALUES ('$id', '$hostelwantedform', '$salform', '$jeercform', '$photoidform', '$dobcertform', '$markcertform', '$icertform', '$acardform', '$ccertform', '$castevalidform', '$nclcertform', '$pwdcertform', '$tccertform', '$mccertform', '$gcertform', '$tenthmarkform', '$twelvemarkform', '$ewscertform')";
$result = $mysqli->query($sql4);

$sql5 = "INSERT INTO address (id, corr_street, corr_city, corr_state, corr_pin, corr_phone, perm_street, perm_city, perm_state, perm_pin, perm_phone) VALUES ('$id', '$cstrform', '$ccityform', '$cstateform', '$pinform', '$crescontact', '$pstrform', '$pcityform', '$pstateform', '$pinform', '$prescontact')";
$result = $mysqli->query($sql5);

$sql6 = "INSERT INTO education_info (id, 10thboard, 10thstream, 10thyear, 10thmarks, 10thperct, 12thboard, 12thstream, 12thyear, 12thmarks, 12thperct) VALUES ('$id', '$tenboardname', '$tenstreamform', '$tenyearform', '$tenmarksform', '$tenpercform', '$twelveboardname', '$twelvestreamform', '$twelveyearform', '$twelvemarksform', '$twelvepercform')";
$result = $mysqli->query($sql6);

$mysqli->close();
?>