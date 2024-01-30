

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BARANGAY INFORMATON</title>
        <link rel="stylesheet" href="../../style/brgyinfo.css">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    
    </head>
    <body>

        <!--wrapper start-->
        <div class="wrapper">

        <?php include "../sidebar/sidebar.php";?>
            <!--main container start-->
            <main class="main-container">
                     
                
                <div class="mid-title-2">
                        <p class="font-weight-bold" display="block" > BARANGAY INFO</p>
                </div>    
                <!---form selection----><br>
                    
                    <form action="#">
                        <h2>Barangay Information
                        </h2>
                        <hr style="
                        border: 2px solid #246dec;
                        margin: 2px -1px;
                        ">
                        <div class="file-upload">
                            <Label for="myfile" required>Barangay Logo </Label>
                            <input class="file-upload__input" type="file" name="image[]" id="image" multiple required>
                            <button class="file-upload__button" type="button">Choose File(s)</button>
                            <span class="file-upload__label"></span>
                        </div>
                  
                        <br>
                        <label for="presentadd"> Present Address</label>
                        <input type="text" id="presentadd" name="house_num" placeholder="House Number" required>
                        <input type="text" id="presentadd" name="street" placeholder=" Street " required>
                        <input type="text" id="presentadd" name="barangay" placeholder=" Barangay" required>
                        <input type="text" id="presentadd" name="municipality" placeholder="Municipality" required>
                        <input type="text" id="presentadd" name="province" placeholder="Province">
                        <br>
                        
                        <label for="contact">Contact Number</label>
                        <input type="number" id="contact" name="contact" placeholder="Enter your phone number" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <br>


                        <h2>Barangay Official
                        </h2>
                        <hr style="
                        border: 2px solid #246dec;
                        margin: 2px -1px;
                        ">


                        <label for="brgycap">Barangay Captain</label>
                        <input type="text" id="brgycap" name="barangay_cap"   required><br>
                        
                          <h4>Barangay Councilors</h4>  <br>
                         <label for="brgycoun">1.</label>
                        <input type="text" id="brgycoun" name="b_councilor1"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal1"   >
                        <br>
                        <label for="brgycoun">2.</label>
                        <input type="text" id="brgycoun" name="b_councilor2"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal2"   >
                        <br>
                        <label for="brgycoun">3.</label>
                        <input type="text" id="brgycoun" name="b_councilor3"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal3"   >
                        <br>
                        <label for="brgycoun">4.</label>
                        <input type="text" id="brgycoun" name="b_councilor4"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal4"   >
                        <br>
                        <label for="brgycoun">5.</label>
                        <input type="text" id="brgycoun" name="b_councilor5"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal5"   >
                        <br>
                        <label for="brgycoun">6.</label>
                        <input type="text" id="brgycoun" name="b_councilor6"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal6"   >
                        <br>
                        <label for="brgycoun">7.</label>
                        <input type="text" id="brgycoun" name="b_councilor7"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal7"   >
                        <br>
                        <label for="brgycoun">8.</label>
                        <input type="text" id="brgycoun" name="b_councilor8"   >
                        <label for="personalbg">Personal Background</label>
                        <input type="text" id="personalbg" name="b_personal8"   >
                        <br>
                        <h2>Barangay Official Staff
                        </h2>
                        <hr style="
                        border: 2px solid #246dec;
                        margin: 2px -1px;
                        ">
                        
                             
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name1"  >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position1"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name2"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position2"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name3"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position3"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name4"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position4"   >
                        <br>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name5"   >
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position5"   >
                        <br>
                        
                        <div class="button-container">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                          </div>
                        
                    </form>
    
                </main>
                <!--main container end-->
                <footer>
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
                    </footer>
           
        </div>
        <!--wrapper end-->
    <script>
Array.prototype.forEach.call(
  document.querySelectorAll(".file-upload__button"),
  function(button) {
    const hiddenInput = button.parentElement.querySelector(
      ".file-upload__input"
    );
    const label = button.parentElement.querySelector(".file-upload__label");
    const defaultLabelText = "No file(s) selected";

    // Set default text for label
    label.textContent = defaultLabelText;
    label.title = defaultLabelText;

    button.addEventListener("click", function() {
      hiddenInput.click();
    });

    hiddenInput.addEventListener("change", function() {
      const filenameList = Array.prototype.map.call(hiddenInput.files, function(
        file
      ) {
        return file.name;
      });

      label.textContent = filenameList.join(", ") || defaultLabelText;
      label.title = label.textContent;
    });
  }
);

    </script>    
        <script src="../../js/uploadpic.js"></script>
    </body>
</html>
      