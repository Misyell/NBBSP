<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PRIMARY LIST/HOUSEHOLD</title>
        <link rel="stylesheet" href="../../style/primlist.css">
        <link rel="stylesheet" href="../../style/sidebar.css">
        <link rel="stylesheet" href="../../style/header.css">
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
                        <p class="font-weight-bold" display="block" > PRIMARY LIST/HOUSEHOLD </p>
                </div>    
                <!---data table selection---->
                  
 
                <div class="table">
                    <iframe src="./datatables/primlist.php" frameborder="0" width="100%" height="600"></iframe>
                </div>  
                    
                <iframe src="" frameborder="0" width="100%" height="600"></iframe>

                </main>
                <!--main container end-->
                <footer>
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
            </footer>           
        </div>
        <!--wrapper end-->

        
    </body>
</html>
      