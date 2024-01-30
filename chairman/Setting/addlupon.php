<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADD LUPON MEMBER</title>
        <link rel="stylesheet" href="../../style/addlupon.css">
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
                       <p class="font-weight-bold" display="block" > Add Lupon Member</p>
                </div>    
                <!---form selection----><br>
                    

                    <form action="#" class="container">

                 
                            <a href="lupon.php"><i class="fas fa-angle-left dropdown">Back</i></a>

                            <span> Information
                            </span>
                            <hr style="
                            border: 2px solid #246dec;
                            margin: 2px -1px;
                            ">

                        
                        <div class="col-md-2"> 
                       
                  <label for="name">Name</label>
                        <input type="text" id="name" name="name"  placeholder="Name" required>

                    <br>
                    <label for="email">Email</label>
                        <input type="text" id="email" name="email"  placeholder="Name" required>
                            <br>
                            <div class="drop-zone">
                                <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                <input type="file" name="image" class="drop-zone__input" required>
                            </div> 
                            
                    
                        <div class="button-container-1">
                            <input type="submit" value="Submit">
                            
                          </div>
                        </div>
                        
                    </form>
    
                </main>
                <!--main container end-->
                <footer>
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
            </footer>
            
                </div>
  

                <script src="../../js/uploadpic.js"></script>
    </body>
</html>
      