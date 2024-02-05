
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../css/form.css">
    <style>
      .hidden {
        display: none;
      }
    </style>

    <title>NBBSP</title>
        <meta name="description" content="barangay management information system" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#03a9f4" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@site" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:title" content="barangay management information system" />
        <meta name="twitter:description" content="barangay management information system" />
        <meta name="twitter:image" content="" />

        <!-- Open Graph -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Barangay management information system" />
        <meta property="og:description" content="Barangay management information system" />
        <meta property="og:site_name" content="My App" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />

        <link rel="manifest" href="../html/manifest.json" />
        <script async src="https://unpkg.com/pwacompat" crossOrigin="anonymous"></script>

        <!-- Apple touch icon -->
        <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon_120.png" />
    </head>


        <script>
            if ("serviceWorker" in navigator) {
                window.addEventListener("load", function () {
                    navigator.serviceWorker
                        .register("../html/serviceWorker.js")
                        .then((registration) => {
                            console.log("SW registration successful");
                        });
                });
            }
        </script>
    </body>
<body>
<div class="wrapper">
    <!-- Sidebar bg -->
    <img src="assets/img/sidebar-bg.jpg" alt="sidebar img" class="bg-image">

    <!--=============== HEADER ===============-->
    <header class="header">
        <div class="header__container container">
            <div class="header__toggle" id="header-toggle">
                <i class="ri-menu-line"></i>
            </div>


    </header>

    <!--=============== SIDEBAR ===============-->
    <div class="sidebar" id="sidebar">
         <nav class="sidebar__container">
            <div class="sidebar__logo">
               <img src="../img/logo-modified.png" alt="" class="sidebar__logo-img">
            </div>

            <div class="sidebar__content">
              
               <div class="sidebar__list">
                  <a href="./profile.html" class="sidebar__link active-link">
                     <i class="ri-user-line"></i>
                     <span class="sidebar__link-name">Profile</span>
                     <span class="sidebar__link-floating">Profile</span>
                  </a>

                  <a href="./manageacc.php" class="sidebar__link">
                     <i class="ri-registered-line"></i>
                     <span class="sidebar__link-name">Manage Account</span>
                     <span class="sidebar__link-floating">Manage Account</span>
                  </a>
                  <a href="./request.php" class="sidebar__link">
                     <i class="ri-file-edit-line"></i>
                     <span class="sidebar__link-name">Request</span>
                     <span class="sidebar__link-floating">Request</span>
                  </a>

                  <a href="./complaint.php" class="sidebar__link">
                     <i class="ri-archive-fill"></i>
                     <span class="sidebar__link-name">Complaint Box</span>
                     <span class="sidebar__link-floating">Complaint Box</span>
                  </a>
               </div>

              
               <div class="sidebar__list">
                  <a href="./aboutus/AboutUs.html" class="sidebar__link">
                     <i class="ri-information-fill"></i>
                     <span class="sidebar__link-name">About Us</span>
                     <span class="sidebar__link-floating">About Us</span>
                  </a>


                  <a href="./index.html" class="sidebar__link">
                     <i class="ri-logout-box-r-line"></i>
                     <span class="sidebar__link-name">Logout</span>
                     <span class="sidebar__link-floating">Logout</span>
                  </a>
               </div>
            </div>

            <div class="sidebar__account">
               <img src="../img/user.png" alt="sidebar image" class="sidebar__perfil">

               <div class="sidebar__names">
                  <h3 class="sidebar__name">Will Lens</h3>
                  <span class="sidebar__email">willens@email.com</span>
               </div>

               <i class="ri-arrow-right-s-line"></i>
            </div>
         </nav>
      </div>

    <!--=============== MAIN ===============-->
  <main class="main-container" id="main">
  <form action="" method="POST">
    <label for="formSelector">Select a Type of Document:</label>
    <select id="formSelector" name="doctype">
          <option value="">---Select----</option>
          <option value="barangayID">Barangay ID</option>
          <option value="barangayIndigency">Barangay Indigency</option>
          <option value="barangayCertificate">Barangay Certificate</option>
          <option value="certificateJobseeker">Certificate Jobseeker</option>
          <option value="oathTakingJobseeker">Oath Taking Jobseeker</option>
          <option value="businessClearance">Business Clearance</option>
          <option value="businessClosure">Business Clearance-Closure</option>
          <option value="certificateLegalGuardian">Certificate for Legal Guardian</option>
          <option value="certificateNoBirth">Certificate No Birth-certificate</option>
          <option value="certificateBurial">Certificate Burial</option>
          <option value="fisheriesCertification">Fisheries Certification</option>
          <option value="permitOccasion">Permit Occasion</option>
          <option value="soloParent">Solo Parent</option>
          <option value="travelPermit">Travel Permit</option>
        </select><br><br>

        <label for="amount">Amount</label>
        <input type="num" name="am" id="amount"><br><br>
    </form>
       
        <div id="form">
          <div id="barangayID" class="form hidden">
            <h3>Barangay ID</h3>
            <form action="id.html" method="POST">
              <label for="lname">SurName</label>
              <input type="text" id="lname" name="lname"  placeholder="Last Name" required>
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="fname"  placeholder="First Name" required><br>
              <label for="mname">Middle Name</label>
              <input type="text" id="mname" name="mname"  placeholder="Middle Name" required>
              <label for="ename">Ext.(Jr/Sr) </label>
              <input type="text" id="ename" name="ename"  placeholder="(Jr/Sr)" required><br>
              <label for="presentadd"> Present Address</label>
              <input type="text" id="presentadd" name="Hnum" placeholder="House Number" required>
              <input type="text" id="presentadd" name="street" placeholder=" Street " required>
              <input type="text" id="presentadd" name="Brgy" placeholder=" Barangay" required>
              <input type="text" id="presentadd" name="municipality" placeholder="Municipality" required>
              <input type="text" id="presentadd" name="province" placeholder="Province" required><br>
              <label for="dob">Date of Birth</label>
              <input type="date" id="dob" name="dob" required>
              <label for="gender">Sex</label>
              <select name="gender" required>
                <option> -Select- </option>
                <option value="male ">Male</option>
                <option value="female">Female</option>
              </select>
              <label for="status">Civil Status</label>
              <select name="marital" required>
                <option>-select-</option>
                <option value="single ">Single</option>
                <option value="married">Married</option>
                <option value="separated">Legally Separated</option>
                <option value="widowed">Widowed</option>
              </select>
              <hr style="
              border: 2px solid #246dec;
              margin: 2px -1px;
              ">
              <h2>Physical Address</h2>
              <label for="requestname">Name</label>
              <input type="text" id="requestname" name="name" placeholder="Enter Name" required><br>
              <label for="relation">Relation</label>
              <input type="text" id="relation" name="relation" placeholder="Enter Relation" required><br>
              <label for="contact">Contact Number</label>
              <input type="number" id="contact" name="contact" required placeholder="Enter your phone number"required>
     
              <div id="paypal-button-container"></div>

              <input type="submit" value="Submit">
            </form>
          </div>
          <div id="barangayIndigency" class="form hidden">
            <h3>Barangay Indigency</h3>
            <form action="brgyindigency" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="status">Civil Status</label>
                <select name="marital" required>
                  <option>-select-</option>
                  <option value="single ">Single</option>
                  <option value="married">Married</option>
                  <option value="separated">Legally Separated</option>
                  <option value="widowed">Widowed</option>
                </select><br>
                <label for="presentadd"> Present Address</label>
                <input type="text" id="presentadd" name="Hnum" placeholder="House Number" required>
                <input type="text" id="presentadd" name="street" placeholder=" Street " required>
                <input type="text" id="presentadd" name="Brgy" placeholder=" Barangay" required>
                <input type="text" id="presentadd" name="municipality" placeholder="Municipality" required>
                <input type="text" id="presentadd" name="province" placeholder="Province" required><br>
                <label for="request">Requested By </label>
                <input type="text" id="request" name="request" placeholder="Requestor Name" required><br>
                <label for="notes">Reason for Requesting</label>
                <input type="text" id="notes" name="notes" placeholder="Reason" required><br>
    
              <input type="submit" value="Submit">
            </form>
          </div>
          <div id="barangayCertificate" class="form hidden">
              <h3>Barangay Certificate</h3>
              <form action="certificate.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="status">Civil Status</label>
                <select name="marital" required>
                  <option>-select-</option>
                  <option value="single ">Single</option>
                  <option value="married">Married</option>
                  <option value="separated">Legally Separated</option>
                  <option value="widowed">Widowed</option>
                </select><br>
                <label for="presentadd"> Present Address</label>
                <input type="text" id="presentadd" name="Hnum" placeholder="House Number" required>
                <input type="text" id="presentadd" name="street" placeholder=" Street " required>
                <input type="text" id="presentadd" name="Brgy" placeholder=" Barangay" required>
                <input type="text" id="presentadd" name="municipality" placeholder="Municipality" required>
                <input type="text" id="presentadd" name="province" placeholder="Province" required><br>
                <label for="notes">Reason for Requesting</label>
                <input type="text" id="notes" name="notes" placeholder="Reason" required><br>
    
              <input type="submit" value="Submit">
            </form>            
        </div>
            <div id="certificateJobseeker" class="form hidden">
              <h3>Certificate Jobseeker</h3>
              <form action="jobseeker.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="year">Years/Months of Residency on Brgy</label>
                <input type="num" id="year" name="year" placeholder="Ex. 10 Years" required>
                
             
              <input type="submit" value="Submit">
            </form>   
            </div>
            <div id="oathTakingJobseeker" class="form hidden">
              <h3>Oath Taking Jobseeker</h3>
              <form action="oath.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="add">Full Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Full Address" required><br>
                <label for="year">Years/Months of Residency on Brgy</label>
                <input type="text" id="year" name="year" placeholder="Ex. 10 Years" required>
             
              <input type="submit" value="Submit">
            </form>  
            </div>
            <div id="businessClearance" class="form hidden">
              <h3>Business Clearance</h3>
              <form action="Business.html" method="POST">
                <label for="Busitrade">Type of Business/services</label>
                <input type="text" id="Busitrade" name="Busitrade" placeholder="Enter Type of Business/services" required><br>
                <label for="manager">Operator/Manager</label>
                <input type="text" id="manager" name="manager" placeholder="Enter Operator/Manager" required><br>
                <label for="add">Full Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Business Address" required><br>
                <div id="paypal-button-container-1"></div>

                <input type="submit" value="Submit">
              </form>
            </div>
            <div id="businessClosure" class="form hidden">
              <h3>Business Clearance-Closure</h3>
              <form action="closure.html" method="POST">
                <label for="Busitrade">Type of Business/services</label>
                <input type="text" id="Busitrade" name="Busitrade" placeholder="Enter Type of Business/services" required><br>
                <label for="manager">Operator/Manager</label>
                <input type="text" id="manager" name="manager" placeholder="Enter Operator/Manager" required><br>
                <label for="add">Full Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Business Address" required><br>
                <div id="paypal-button-container-2"></div>

                <input type="submit" value="Submit">
              </form>
            </div>
            <div id="certificateLegalGuardian" class="form hidden">
              <h3>Certificate for Legal Guardian</h3>
              <form action="legalguardian.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="add">Full Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Full Address" required><br>
                <label for="child">Name of the Child</label>
                <input type="text" id="child" name="child" placeholder="Enter Full Name of the Child" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>

                <input type="submit" value="Submit">
              </form>
            </div>
            <div id="certificateNoBirth" class="form hidden">
              <h3>Certificate No Birth-certificate</h3>
              <form action="nobirth.html" method="POST">
                <label for="requestname">Name of Guardian</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Name of Guardian" required><br>
                <label for="add">Full Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Full Address" required><br>
                <label for="child">Name of the Child</label>
                <input type="text" id="child" name="child" placeholder="Enter Full Name of the Child" required><br>
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
                <label for="bplace">Birth Place</label>
                <input type="text" id="bplace" name="bplace" placeholder="Municipality" required>       
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>

                <input type="submit" value="Submit">
              </form>
            </div>
            <div id="certificateBurial" class="form hidden">
              <h3>Certificate Burial</h3>
              <form action="burial.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="status">Civil Status</label>
                <select name="marital" required>
                  <option>-select-</option>
                  <option value="single ">Single</option>
                  <option value="married">Married</option>
                  <option value="separated">Legally Separated</option>
                  <option value="widowed">Widowed</option>
                </select><br>
                <label for="add">Full Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Full Address" required><br>
                <label for="Deceased">Name of Deceased</label>
                <input type="text" id="Deceased" name="Deceased" placeholder="Enter Full Name of Deceased" required><br>
                

               <input type="submit" value="Submit">
              </form>
            </div>
            <div id="fisheriesCertification" class="form hidden">
              <h3>Fisheries Certification</h3>
              <form action="fisheries.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="add">Full Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Full Address" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="gender">Sex</label>
               <select name="gender" required>
                <option> -Select- </option>
                <option value="male ">Male</option>
                <option value="female">Female</option>
               </select>
               <div id="paypal-button-container-3"></div>

                <input type="submit" value="Submit">
              </form>
            </div>
            <div id="permitOccasion" class="form hidden">
              <h3>Permit Occasion</h3>
              <form action="occasion.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="type">Type of Event</label>
                <input type="text" id="type" name="type" placeholder="Ex. Birthday" required>
                <label for="dob">Time of event</label>
                <input type="text" id="dob" name="dob" placeholder="Ex. 1pm to 10pm"required><br>
                <label for="add">Location of Event</label>
                <input type="text" id="add" name="add" placeholder="Enter Location of the Event" required><br>
                <div id="paypal-button-container-4"></div>

                <input type="submit" value="Submit">
              </form>
            </div>
           
            <div id="soloParent" class="form hidden">
              <h3>Solo Parent</h3>
              <form action="solo.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="age">Age</label>
                <input type="num" id="age" name="age" placeholder="Enter age" required>
                <label for="add">Address</label>
                <input type="text" id="add" name="add" placeholder="Enter Full Address" required><br>
                <label for="dob">Solo Parent Since </label>
                <input type="month" id="dob" name="dob" placeholder="MM/YYYY" required>
                <label for="no">No. of Children</label>
                <input type="num" id="no" name="no" placeholder="Enter No. of Children" required>

                <input type="submit" value="Submit">
              </form>
            </div>
            <div id="travelPermit" class="form hidden">
              <h3>Travel Permit</h3>
              <form action="travel.html" method="POST">
                <label for="requestname">Full Name</label>
                <input type="text" id="requestname" name="name" placeholder="Enter Full Name" required><br>
                <label for="weight">Load/Karga(kg)</label>
                <input type="number" id="weight" name="weight" placeholder=" kg" required>
                <label for="add">From(Location)</label>
                <input type="text" id="add" name="add" placeholder="Enter Location" required><br>
                <label for="desti">Destination</label>
                <input type="text" id="desti" name="desti" placeholder="Enter Destination" required><br>
                <label for="dob">Date of Departure </label>
                <input type="month" id="dob" name="dob" required>
                <label for="type">Type of Vehicle</label>
                <input type="text" id="type" name="type" placeholder="Enter Type of Vehicle" required><br>
                <label for="plate">Plate Number</label>
                <input type="text" id="plate" name="plate" placeholder="Enter Plate Number" required>
                <label for="drive">Driver </label>
                <input type="text" id="drive" name="drive" placeholder="Enter Driver Name" required><br>
                <div id="paypal-button-container-5"></div>

                <input type="submit" value="submit">
              </form>
            </div>
      
        </div>
      
  </main>

    <footer>
        Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
    </footer>

<!--=============== MAIN JS ===============-->
<script src="../js/sidebar.js"></script>
<script>
  document.getElementById('formSelector').addEventListener('change', function() {
    var selectedValue = this.value;
    var forms = document.querySelectorAll('.form');
    forms.forEach(function(form) {
      if (form.id === selectedValue) {
        form.classList.remove('hidden');
      } else {
        form.classList.add('hidden');
      }
    });
  });
</script>
<script>
  const formSelector = document.getElementById('formSelector');
  const amountInput = document.getElementById('amount');

  formSelector.addEventListener('change', function() {
    const selectedOption = formSelector.value;

    // Define your logic to determine the amount based on the selected option
    let amount = 0;
    switch (selectedOption) {
      case 'barangayID':
        amount = 50; 
        break;
      case 'barangayIndigency':
        amount = 0; 
        break;
      case 'barangayCertificate':
        amount = 0; 
        break;
      case 'certificateJobseeker':
        amount = 0; 
        break;
      case 'oathTakingJobseeker':
        amount = 0; 
        break;
      case 'businessClearance':
        amount = 100; 
        break;
      case 'businessClosure':
        amount = 50; 
        break;
      case 'certificateLegalGuardian':
        amount = 0; 
        break;
      case 'certificateNoBirth':
        amount = 50; 
        break;
      case 'certificateBurial':
        amount = 0; 
        break;
      case 'fisheriesCertification':
        amount = 50; 
        break;  
      case 'permitOccasion':
        amount = 50; 
        break;
      case 'soloParent':
        amount = 0; 
        break;
      case 'travelPermit':
        amount = 50; 
        break;
    }

    // Update the amount input field
    amountInput.value = amount;
  });

  
</script>
<script src="https://www.paypal.com/sdk/js?client-id=ASp3h09Cc5tbBBbx8uMLDkfe7Aed8hzPaRnU_56wAn389m2uHfPuKa3RuoedYN69CS6GOFMDUjUMp0jW"></script>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: amountInput.value // Use the dynamically updated amount
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      console.log('Data :' + data);
      console.log('Action : ' + actions);
      return actions.order.capture().then(function(details) {
        console.log(details.payer.name.given_name);
      });
    },
    style: {
      layout: 'vertical',
      disableFunding: 'credit,card' // Remove debit or credit card button
    }
  }).render('#paypal-button-container');
</script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: amountInput.value // Use the dynamically updated amount
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      console.log('Data :' + data);
      console.log('Action : ' + actions);
      return actions.order.capture().then(function(details) {
        console.log(details.payer.name.given_name);
      });
    },
    style: {
      layout: 'vertical',
      disableFunding: 'credit,card' // Remove debit or credit card button
    }
  }).render('#paypal-button-container-1');
</script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: amountInput.value // Use the dynamically updated amount
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      console.log('Data :' + data);
      console.log('Action : ' + actions);
      return actions.order.capture().then(function(details) {
        console.log(details.payer.name.given_name);
      });
    },
    style: {
      layout: 'vertical',
      disableFunding: 'credit,card' // Remove debit or credit card button
    }
  }).render('#paypal-button-container-2');
</script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: amountInput.value // Use the dynamically updated amount
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      console.log('Data :' + data);
      console.log('Action : ' + actions);
      return actions.order.capture().then(function(details) {
        console.log(details.payer.name.given_name);
      });
    },
    style: {
      layout: 'vertical',
      disableFunding: 'credit,card' // Remove debit or credit card button
    }
  }).render('#paypal-button-container-3');
</script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: amountInput.value // Use the dynamically updated amount
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      console.log('Data :' + data);
      console.log('Action : ' + actions);
      return actions.order.capture().then(function(details) {
        console.log(details.payer.name.given_name);
      });
    },
    style: {
      layout: 'vertical',
      disableFunding: 'credit,card' // Remove debit or credit card button
    }
  }).render('#paypal-button-container-4');
</script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: amountInput.value // Use the dynamically updated amount
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      console.log('Data :' + data);
      console.log('Action : ' + actions);
      return actions.order.capture().then(function(details) {
        console.log(details.payer.name.given_name);
      });
    },
    style: {
      layout: 'vertical',
      disableFunding: 'credit,card' // Remove debit or credit card button
    }
  }).render('#paypal-button-container-5');
</script> 

</body>
</html>