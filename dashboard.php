<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dashboard.css">
     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <header>
    <div class="dashboard-container">
    <div class="dashboard-header">
        <div class="logo-container">
        <img src="images/dashboard.png" alt="">
        </div>
        <div class="dashboard-header-right">
            <div class="notification-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 22c1.1 0 2-.9 2-2h-4a2 2 0 0 0 2 2m6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1z" />
            </svg>
            <p>Notification</p>
            </div>
            <div class="profile">
            <img src="images/profile.jpg" alt="">
            <p>Welcome, John Doe</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6z" />
            </svg>
            </div>
        </div>
    </div>
    </header>


<div class="dashboard-content">
    <div class="dashboard-content-button">
        <div class="search-container">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
        <div class="button-container">
            <button>Add</button>
            <button>Edit</button>
            <button>Delete</button>
        </div>
    </div>

        <div class="form-container">
            <h1>Personal Information</h1>
            <form action="#" method="post">
                <div class="input-row">
                    <div>
                    <label for="fName">First Name</label><br>
                    <input type="text" id="fName" name="fName" required>
                    </div>
                    <div>
                    <label for="lName">Last Name</label><br>
                    <input type="text" id="lName" name="lName" required>
                    </div>
                    <div>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                    <label for="suffix">Suffix</label><br>
                    <select id="suffix" name="suffix">
                        <option value="">Select suffix</option>
                        <option value="Jr.">Jr.</option>
                        <option value="Sr.">Sr.</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                    </select>
                    </div>
                </div>
                <div class="input-row">
                <div>
                    <label for="sex">Sex</label><br>
                    <input type="radio" id="male" name="sex" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="female">
                    <label for="female">Female</label>
                </div>
                <div>
                    <label for="DOB">Date of Birth</label><br>
                    <input type="date" id="DOB" name="DOB" required>
                </div>
                <div>
                    <label for="maritalStatus">Marital Status</label></label><br>
                    <select id="maritalStatus" name="maritalStatus">
                        <option value="">Select marital status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>
                <div>
                    <label for="contactNo">Contact Number</label><br>
                    <input type="tel" id="contactNo" name="contactNo" required>
                </div>
                </div>
                
            <h1>Address</h1>
                <div class="input-row">

                <div>
                <label for="homeNo">Home Number</label><br>
                <input type="text" id="homeNo" name="homeNo" required>
                </div>
                <div>
                <label for="street">Street</label><br>
                <input type="text" id="street" name="street" required>
                </div>
                <div>
                <label for="baranggay">Baranggay</label><br>
                <input type="text" id="baranggay" name="baranggay" required>
                </div>
                <div>
                <label for="city">City</label><br>
                <input type="text" id="city" name="city" required>
                </div>

                </div>
                <div class="input-row">
                    
                <div>
                <label for="province">Province</label><br>
                <input type="text" id="province" name="province" required>
                </div>
                <div>
                <label for="region">Region</label><br>
                <input type="text" id="region" name="region" required>
                </div>

                </div>

            <h1>Identity</h1>
                <div class="input-row">

                    <div>
                    <label for="idType">Type of ID</label><br>
                    <select name="idType" id="idType">
                        <option value="SSS">SSS</option>
                        <option value="TIN">TIN</option>
                        <option value="PAGIBIG">PAGIBIG</option>
                        <option value="PhilHealth">PhilHealth</option>
                        <option value="PAN">PAN</option>
                        <option value="SSS">SSS</option>
                        <option value="GSIS">GSIS</option>
                        <option value="National ID">National ID</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Voter's ID">Voter's ID</option>
                        <option value="Driver's License">Driver's License</option>
                        <option value="Passport">Passport</option>
                    </select>
                    </div>
                    <div>
                    <label for="idNo">ID Number</label><br>
                    <input type="text" id="idNo" name="idNo" required>
                    </div>
                    <div>
                        <label for="expiryDate">Expiry Date</label><br>
                        <input type="date" id="expiryDate" name="expiryDate" required>
                    </div>
                    <div>
                        <label for="photo">Upload photo of ID</label><br>
                        <input type="file" id="idPhoto" name="idPhoto">
                    </div>

                </div>

            <h1>Employer Details</h1>
                <div class="input-row">
                    <div>
                        <label for="employerName">Name of Employer</label><br>
                        <input type="text" id="employerName" name="employerName" required>
                    </div>
                    <div>
                        <label for="noOfYearsWorked">No. of Years with Employer</label><br>
                        <input type="number" id="noOfYearsWorked" name="noOfYearsWorked" required>
                    </div>
                    <div>
                        <label for="position">Position</label><br>
                        <input type="text" id="position" name="position">
                    </div>
                    <div>
                        <label for="phoneNoEmployer">Employer's Phone Number</label><br>
                        <input type="tel" id="phoneNoEmployer" name="phoneNoEmployer">
                    </div>
                </div>
                <div class="input-row">
                    <div>
                        <label for="salary">Salary</label><br>
                        <input type="number" id="salary" name="salary">
                    </div>
                </div>

            <h1>Employer Address</h1>
                <div class="input-row">
                    <div>
                    <label for="homeNo">Home Number</label><br>
                    <input type="text" id="homeNo" name="homeNo" required>
                    </div>
                    <div>
                    <label for="street">Street</label><br>
                    <input type="text" id="street" name="street" required>
                    </div>
                    <div>
                    <label for="baranggay">Baranggay</label><br>
                    <input type="text" id="baranggay" name="baranggay" required>
                    </div>
                    <div>
                    <label for="city">City</label><br>
                    <input type="text" id="city" name="city" required>
                    </div>
                </div>
                <div class="input-row">
                    <div>
                    <label for="province">Province</label><br>
                    <input type="text" id="province" name="province" required>
                    </div>
                    <div>
                    <label for="region">Region</label><br>
                    <input type="text" id="region" name="region" required>
                    </div>
                </div>

            <h1>Insurance Details</h1>
                <div class="input-row">
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                </div> 
                <div class="input-row">
                    <div>
                    </div>
                    <div>
                    </div>
                </div>
            <h1>Collateral</h1>  
                <div class="input-row">
                    <div>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
</body>
</html>