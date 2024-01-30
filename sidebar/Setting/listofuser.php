

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIST OF USER</title>
        <link rel="stylesheet" href="../../style/listofuser.css">
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
                <div class="main-cards-1">

                    <div class="card-1">
                      <div class="card-inner-1">
                        <p class="text-primary">Barangay Staff</p>
                      </div>
                      <button><a href="Addmember.php">Add Member</a></button>
                      
                    </div>
          
                    <div class="card-1">
                      <div class="card-inner-1">
                        <p class="text-primary">Total Barangay Staff</p>
                      </div>
                      <span class="text-primary font-weight-bold">9</span>
                    </div>
          
                    <div class="card-1">
                      <div class="card-inner-1">
                        <p class="text-primary">Barangay Staff Credits</p>
                      </div>
                      <span class="text-primary font-weight-bold">10</span>
                    </div>
                </div>
                
                <div class="mid-title-2">
                        <p class="font-weight-bold" display="block" > List of User</p>
                </div>    
                <!---data table selection---->
                  
 
                <div class="table">
                    <iframe src="./datatables/listuserdata.html" frameborder="0" width="100%" height="600"></iframe>
                </div>  
                    
    
                </main>
                <!--main container end-->
                <footer>
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
                    </footer>
           
        </div>
       
        <!--wrapper end-->

        
    </body>
</html>
      