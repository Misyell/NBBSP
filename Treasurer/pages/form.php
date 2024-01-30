<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tresurer | Certificate Report</title>
        <link rel="stylesheet" href="../style/form.css">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    </head>
    <body>
    <?php include "../sidebar/sidebar.php";?>

        <!--wrapper start-->
        <div class="wrapper">
         
            <!--main container start-->
            <main class="main-container">
                     
                
                <div class="mid-title-2">
                        <p class="font-weight-bold" display="block" > Certificate Report</p>
                </div>    
                <!---form selection----><br>
             
                    <form action="#">
                        <h2>Certificate Form
                        </h2>
                        <hr style="
                        border: 2px solid #246dec;
                        margin: 2px -1px;
                        ">
                       <label for="lname">Last Name</label>
                       <input type="text" id="lname" name="lname"  placeholder=" Number of Boys" required>
                      
                       <label for="fname">First Name</label>
                       <input type="text" id="fname" name="fname" placeholder="Number of Girls"required>
                       <br>
                       <label for="add">Address</label>
                       <input type="text" id="add" name="address" placeholder="Number of PDW's"required>
                       
                       <label for="reqtype">Type of Request</label>
                       <select name="trequest" required>
                         <option> -Select- </option>
                         <option value="brgyclear ">Barangay Clearance</option>
                         <option value="brgycer">Barangay Certificate</option>
                         <option value="brgyid">Barangay ID</option>
                         <option value="brgyin">Barangay Indigency</option>
                      
                       </select><br>
                       <label for="fee"> Fee</label>
                       <select name="fee" required>
                         <option> -Select- </option>
                         <option value="20 ">20</option>
                         <option value="30">30 </option>
                         <option value="40"> 40</option>
                         <option value="50">50 </option> 
                        <option value="60"> 60</option>
                         <option value="70"> 70</option>
                         <option value="80">80 </option>
                         <option value="90">90</option>
                         <option value="100">100 </option>
                      
                      
                      
                       <div class="button-container-1">
                           <input type="submit" value="Submit">
                           
                         </div>
                    </form>
                  
                </main>
                <!--main container end-->
                <footer>
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
                    </footer>
           
        </div>
        <!--wrapper end-->

        <script src="uploadpic.js"></script>
    </body>
</html>
      