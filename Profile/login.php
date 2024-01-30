
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
       
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background:url(../img/loginbg.png);
            background-size: cover;
  }

        .login-container {
            display: flex;
    align-items: center;

    border-radius: 10px;
    padding: 20px;
    max-width: 600px;

    width: 600px;
    height: 347px;
    background: white;
   }

        .logo-column {
            flex: 1;
    text-align: center;
    font-size: 16px;
    font-family: serif;
    font-weight: 600;


        }

        .form-column {
        flex: 1;
    padding-left: 17px;
    margin-top: -10px;
    margin-right: 17px;
        }
        center {
            background: #5ab9c1;
            width: 192px;
            padding: 10px;
            font-weight: 600;
            font-size: 14px;
            margin: 20px 46px;
            margin-top: 3px;
            border-radius: 10px;
        }
        .logo {
            max-width: 174px;
            border-radius: 50%;
        }

        .form-group {
            margin-bottom: 20px;
        }
        .form-group-1 {
            margin: 9px;
            text-align: center;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
    width: 100%;
    padding: 7px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.form-group select {
 
    width: 104%;
    padding: 7px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
hr {
    color: black;
    height: -webkit-fill-available;
}
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icons ul{
    margin-left: -45px;
    margin-top: 3px;

        }
        .social-icons ul li{
            display: inline-block;
    font-size: 22px;

        }
        .social-icons ul li a{
            margin: 4px;

        }

        button {
    padding: 7px;
    width: 73px;
    font-weight: 700;
}
@media (max-width: 768px) {
            
            .login-container {
                width: 83%; 
                padding:4px ;
            }
            .logo {
                max-width: 91px;
                margin: 7px;
            }
            .form-group{
                margin-bottom: 9px;
                margin-left: 12px;
            }
            .form-column {
                padding: 0; /* Remove padding on smaller screens */
            }
            .form-group input {
                width: 90%;
            }
            .form-group select {
                width: 95%;
                
            }

            .remember-forgot {
                flex-direction: row;
                padding: 0px 16px;
                font-size: small;
            }
            button {
                width: 70px;
            }

            .social-icons {
                margin-top: 0px; 
            }

        }
    </style>
</head>
<body>
    <div class="login-container">
        
            <div class="logo-column">
                <img class="logo" src="../img/logo.jpg" alt="Logo">
                <p>Welcome to NBBS Proper Barangay Management Information System</p>
            </div>
            <hr>
        <div class="form-column">
            <center><span>LOGIN YOUR ACCOUNT</span></center>
            <?php 

					error_reporting(0);
					session_start();
					session_destroy();
			
				echo $_SESSION['loginMessage'];
			

					?>
            <form action="check.php" method="post">

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="user-types">User Type:</label>
                    <select name="type" class="form-select mb-3" required>
                        <option>--Select User Type--</option>
                        <option value="chairman" >Chairman</option>
                        <option value="admin" >Secretary</option>
                        <option value="treasurer" >Treasurer</option>
                    </select>
                </div>
               
                <div class="form-group-1">
                    <button type="submit" name="btn_login">Login</button>  
                    <hr>
                </div>
              
                
                <div class="social-icons">
                    <ul class="profile-dropdown-list">
                        <li class="profile-dropdown-list-item">
                            <a href="">
                                <i class="fab fa-facebook-square" style="color: #046ee5;"></i>

                            </a>
                        </li>
                        <li class="profile-dropdown-list-item">
                            <a href="">
                                <i class="fab fa-twitter" style="color: #005eff;"></i>
                            </a>
                        </li>
                        <li class="profile-dropdown-list-item">
                            <a href="">
                                <i class="far fa-envelope" style="color: #f03333;"></i>
                            </a>
                        </li>
                        <li class="profile-dropdown-list-item">
                            <a href="">
                                <i class="fab fa-instagram" style="color: #000000;"></i>
                            </a>
                        </li>
                <hr> 
                    </ul>
                  

                    
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>

