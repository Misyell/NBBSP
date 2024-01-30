
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $housetype = $_POST["housetype"];
    $housenum = $_POST["housenum"];
    $famnum = $_POST["famnum"];
    $residenttype = $_POST["residenttype"];
    $gender = $_POST["gender"];
    $lname = $_POST["lname"];
    $ename = $_POST["ename"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $contact =$_POST["contact"];
    $year =  $_POST["year"];
    $myFile =$_POST["myFile"];
    $dob =  $_POST["dob"];
    $brn =  $_POST["brn"];
    $brd = $_POST["brd"];
    $weight =  $_POST["weight"];
    $height =  $_POST["height"];
    $nationality =$_POST["nationality"];
    $bplace = $_POST["bplace"];
    $marital = $_POST["marital"];
    $soloparent =  $_POST["soloparent"];
    $permadd =$_POST["permadd"];
    $Hnum =$_POST["Hnum"];
    $street =$_POST["street"];
    $Brgy =$_POST["Brgy"];
    $municipality =$_POST["municipality"];
    $province =$_POST["province"];
    $osy =$_POST["osy"];
    $voter =$_POST["voter"];
    $ofw =$_POST["ofw"];
    $country = $_POST["country"];
    $job =$_POST["job"];
    $skill =$_POST["skill"];
    $idnum = $_POST["idnum"];
    $tin = $_POST["tin"];
    $pwd =  $_POST["pwd"]; 
	
	
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "db_barangay";

    $data = mysqli_connect($host, $user, $password, $db);
    
    if ($data->connect_error) {
        echo "$data->connect_error";
        die("Connection Failed: " . $data->connect_error);
    } else {
        $stmt = $data->prepare("INSERT INTO `tblresident`(`housetype`, `housenum`, `famnum`, `residenttype`, `gender`, `lname`, `ename`, `fname`, `mname`, `contact`, `year`, `myFile`, `dob`, `brn`, `brd`, `weight`, `height`, `nationality`, `bplace`, `marital`, `soloparent`, `permadd`, `Hnum`, `street`, `Brgy`, `municipality`, `province`, `osy`, `voter`, `ofw`, `country`, `job`, `skill`, `idnum`, `tin`, `pwd`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
        $stmt->bind_param('ssssssssssssssssssssssssssssssssssss', $housetype, $housenum, $famnum, $residenttype, $gender, $lname, $ename, $fname, $mname, $contact, $year, $myFile, $dob, $brn, $brd, $weight, $height, $nationality, $bplace, $marital, $soloparent, $permadd, $Hnum, $street, $Brgy, $municipality, $province, $osy, $voter, $ofw, $country, $job, $skill, $idnum, $tin, $pwd);
        
        $execval = $stmt->execute();
        
        if ($execval) {
            echo "Registration successfully...";
        } else {
            echo "Error during registration: " . $stmt->error;
        }

        $stmt->close();
        $data->close();
    }
}
?>
