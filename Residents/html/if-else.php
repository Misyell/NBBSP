<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_barangay";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Extract form data
    $formSelector = isset($_POST['formSelector']) ? $_POST['formSelector'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';


    // Initialize variables for other form-specific data

    // Insert data based on document type
    if ($formSelector	 === "barangayID") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $ename = $_POST['ename'];
        $Hnum = $_POST['Hnum'];
        $street = $_POST['street'];
        $Brgy = $_POST['Brgy'];
        $municipality = $_POST['municipality'];
        $province = $_POST['province'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $marital = $_POST['marital'];
        $name = $_POST['name'];
        $relation = $_POST['relation'];
        $contact = $_POST['contact'];

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO bid (formSelector, amount, lname, fname, mname, ename, Hnum, street, Brgy, municipality, province, dob, gender, marital, name, relation, contact)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssssssssssssss", $formSelector, $amount, $lname, $fname, $mname, $ename, $Hnum, $street, $Brgy, $municipality, $province, $dob, $gender, $marital, $name, $relation, $contact);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
            
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    }
    elseif ($formSelector === "barangayIndigency") {
        $formSelector = $_POST['formSelector'];
        $amount = $_POST['amount'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $marital = $_POST['marital'];
        $Hnum = $_POST['Hnum'];
        $street = $_POST['street'];
        $Brgy = $_POST['Brgy'];
        $municipality = $_POST['municipality'];
        $province = $_POST['province'];
        $request = $_POST['request'];
        $notes = $_POST['notes'];
    
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgyindigency (formSelector, amount, name, age, marital, Hnum, street, Brgy, municipality, province, request, notes)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        if ($stmt) {
            $stmt->bind_param("ssssssssssss", $formSelector, $amount, $name, $age, $marital, $Hnum, $street, $Brgy, $municipality, $province, $request, $notes);
    
            // Execute the prepared statement
            if ($stmt->execute()) {
                echo '<script>alert("New record created successfully");</script>';
                header('Location: id.php');
            } else {
                echo "Error executing SQL query: " . $stmt->error;
            }
            $stmt->close(); // Close the prepared statement
        } else {
            echo "Error preparing SQL statement: " . $conn->error;
        }
    
    } elseif ($formSelector	 === "barangayCertificate") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $marital = $_POST['marital'];
        $Hnum = $_POST['Hnum'];
        $street = $_POST['street'];
        $Brgy = $_POST['Brgy'];
        $municipality = $_POST['municipality'];
        $province = $_POST['province'];
        $request = $_POST['request'];
        $notes = $_POST['notes'];
       
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgycertificate (formSelector, amount, name, age, marital, Hnum, street, Brgy, municipality, province, request, notes)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssssssssss", $formSelector, $amount, $name, $age, $marital, $Hnum, $street, $Brgy, $municipality, $province, $request, $notes);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } elseif ($formSelector	 === "certificateJobseeker") {
        $formSelector = $_POST['formSelector'];
        $amount = $_POST['amount'];
          $name = $_POST['name'];
          $age = $_POST['age'];
          $marital = $_POST['year'];
      
         
          // Use prepared statement to prevent SQL injection
          $stmt = $conn->prepare("INSERT INTO brgycertjob (formSelector, amount, name, age, year)
          VALUES (?, ?, ?, ?, ?)");
  
          $stmt->bind_param("sssss", $formSelector, $amount, $name, $age, $year);
  
          // Execute the prepared statement
          if ($stmt->execute()) {
              echo '<script>alert("New record created successfully");</script>';
          } else {
              echo "Error: " . $stmt->error;
          }
          $stmt->close();
    }elseif ($formSelector	 === "oathTakingJobseeker") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $marital = $_POST['year'];
    
       
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgyoathjob (formSelector, amount, name, age, address, year)
        VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssss", $formSelector, $amount, $name, $age, $address, $year);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();

    } elseif ($formSelector	 === "businessClearance") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $Busitrade = $_POST['Busitrade'];
        $manager = $_POST['manager'];
        $address = $_POST['address'];
    
       
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgybusiclear (formSelector, amount, Busitrade, manager, address)
        VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("sssss", $formSelector, $amount, $Busitrade, $manager, $address);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();

    } elseif ($formSelector	 === "businessClosure") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $Busitrade = $_POST['Busitrade'];
        $manager = $_POST['manager'];
        $address = $_POST['address'];
    
       
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgybusiclos (formSelector, amount, Busitrade, manager, address)
        VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("sssss", $formSelector, $amount, $Busitrade, $manager, $address);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();

    } elseif ($formSelector	 === "certificateLegalGuardian") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $child = $_POST['child'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
       
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgycertlegalg (formSelector, amount, name, address, child, age, dob)
        VALUES (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssss", $formSelector, $amount, $name, $address, $child, $age, $dob);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($formSelector	 === "certificateNoBirth") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $child = $_POST['child'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $bplace = $_POST['bplace'];

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgycertnobirth (formSelector, amount, name, address, child, age, dob, bplace)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssssss", $formSelector, $amount, $name, $address, $child, $age, $dob, $bplace);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($formSelector	 === "certificateBurial") { 
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $marital = $_POST['marital'];
        $address = $_POST['address'];
        $deceased = $_POST['deceased'];

 

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgycertburial (formSelector, amount, name,  age, marital, address, deceased)
        VALUES (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssss", $formSelector, $amount, $name, $age, $marital, $address, $deceased);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }elseif ($formSelector	 === "fisheriesCertification") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $age = $_POST['age'];
 

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO brgycertfish (formSelector, amount, name,  age, address)
        VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("sssss", $formSelector, $amount, $name, $age, $address);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($formSelector	 === "permitOccasion") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $bod = $_POST['bod'];
        $address = $_POST['address'];
 

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO  brgypermocc (formSelector, amount, name,  type, bod, address)
        VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssss", $formSelector, $amount, $name, $type, $bod, $address);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($formSelector	 === "soloParent") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $age = $_POST['age	'];
        $address = $_POST['address'];
        $bod = $_POST['bod'];
        $no = $_POST['no'];

 

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO  brgysoloparent (formSelector, amount, name,  age, address, bod, no)
        VALUES (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssss", $formSelector, $amount, $name, $age, $address, $bod, $no);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($formSelector	 === "travelPermit") {
      $formSelector = $_POST['formSelector'];
      $amount = $_POST['amount'];
        $name = $_POST['name'];
        $weight = $_POST['weight	'];
        $address = $_POST['address'];
        $desti = $_POST['desti'];
        $dob = $_POST['dob'];
        $type = $_POST['type'];
        $plate = $_POST['plate'];
        $drive = $_POST['drive'];


 

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO  brgytravelpirm (formSelector, amount, name,  weight, address, desti, dob, type, plate, drive)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssssssss", $formSelector, $amount, $name,  $weight, $address, $desti, $dob, $type, $plate, $drive);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }


    
    $conn->close();

  }
?>

