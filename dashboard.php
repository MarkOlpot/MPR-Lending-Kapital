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
    <nav>
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
    </nav>


<div class="dashboard-content">

    <div class="dashboard-content-button">
        <div class="search-container">
            <input type="text" placeholder="Search" class="search-input">
            <button class="search-btn">Search</button>
        </div>
        <div class="button-container">
            <button class="add-btn">Add</button>
            <button disabled class="edit-btn">Edit</button>
            <button disabled class="delete-btn">Delete</button>
        </div>
    </div>

        <div class="form-container">
            <h1>Personal Information</h1>
            <form action="#" method="post">
                <div class="input-row">
                    <div>
                    <label for="fName">First Name</label><br>
                    <input type="text" id="fName" name="fName" placeholder="First Name" class="input-text" required>
                    </div>
                    <div>
                    <label for="lName">Middle Name</label><br>
                    <input type="text" id="lName" name="lName" class="input-text" required>
                    </div>
                    <div>
                    <label for="email">Surname</label><br>
                    <input type="text" id="surname" name="surname"  class="input-text" required>
                    </div>
                    <div>
                    <label for="suffix">Suffix</label><br>
                    <select id="suffix" name="suffix"  class="input-text">
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
                    <input type="radio" id="male" name="sex" value="male" class="input-radio">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="female" class="input-radio">
                    <label for="female">Female</label>
                </div>
                <div>
                    <label for="DOB">Date of Birth</label><br>
                    <input type="date" id="DOB" name="DOB" class="input-text" required>
                </div>
                <div>
                    <label for="maritalStatus">Marital Status</label></label><br>
                    <select id="maritalStatus" name="maritalStatus" class="input-text">
                        <option value="">Select marital status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>
                <div>
                    <label for="contactNo">Contact Number</label><br>
                    <input type="tel" id="contactNo" name="contactNo" required class="input-text">
                </div>
                </div>

            <h1>Address</h1>
                <div class="input-row">

                <div>
                <label for="homeNo">Home Number</label><br>
                <input type="text" id="homeNo" name="homeNo" class="input-text" required>
                </div>
                <div>
                <label for="street">Street</label><br>
                <input type="text" id="street" name="street" class="input-text" required>
                </div>
                <div>
                <label for="baranggay">Baranggay</label><br>
                <input type="text" id="baranggay" name="baranggay" class="input-text" required>
                </div>
                <div>
                <label for="city">City</label><br>
                <input type="text" id="city" name="city" class="input-text" required>
                </div>

                </div>
                <div class="input-row-few">
                    
                <div>
                <label for="province">Province</label><br>
                <input type="text" id="province" name="province" class="input-text" required>
                </div>
                <div>
                <label for="region">Region</label><br>
                <input type="text" id="region" name="region" class="input-text" required>
                </div>

                </div>

            <h1>Identity</h1>
                <div class="input-row">

                    <div>
                    <label for="idType">Type of ID</label><br>
                    <select name="idType" id="idType" class="input-text">
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
                    <input type="text" id="idNo" name="idNo" class="input-text" required >
                    </div>
                    <div>
                        <label for="expiryDate">Expiry Date</label><br>
                        <input type="date" id="expiryDate" name="expiryDate" class="input-text" required>
                    </div>
                    <div>
                        <label for="photo">Upload photo of ID</label><br>
                        <input type="file" id="idPhoto" name="idPhoto" >
                    </div>

                </div>

            <h1>Employer Details</h1>
                <div class="input-row">
                    <div>
                        <label for="employerName">Name of Employer</label><br>
                        <input type="text" id="employerName" name="employerName" class="input-text" required>
                    </div>
                    <div>
                        <label for="noOfYearsWorked">No. of Years with Employer</label><br>
                        <input type="number" id="noOfYearsWorked" class="input-text" name="noOfYearsWorked" required>
                    </div>
                    <div>
                        <label for="position">Position</label><br>
                        <input type="text" id="position" name="position" class="input-text">
                    </div>
                    <div>
                        <label for="phoneNoEmployer">Employer's Phone Number</label><br>
                        <input type="tel" id="phoneNoEmployer" name="phoneNoEmployer" class="input-text">
                    </div>
                </div>
                <div class="input-row">
                    <div>
                        <label for="salary">Salary</label><br>
                        <input type="number" id="salary" name="salary" class="input-text">
                    </div>
                </div>

            <h1>Employer Address</h1>
                <div class="input-row">
                    <div>
                    <label for="homeNo">Home Number</label><br>
                    <input type="text" id="homeNo" name="homeNo" class="input-text" required>
                    </div>
                    <div>
                    <label for="street">Street</label><br>
                    <input type="text" id="street" name="street" class="input-text" required>
                    </div>
                    <div>
                    <label for="baranggay">Baranggay</label><br>
                    <input type="text" id="baranggay" name="baranggay" class="input-text" required>
                    </div>
                    <div>
                    <label for="city">City</label><br>
                    <input type="text" id="city" name="city" class="input-text" required>
                    </div>
                </div>
                <div class="input-row-few">
                    <div>
                    <label for="province">Province</label><br>
                    <input type="text" id="province" name="province" class="input-text" required>
                    </div>
                    <div>
                    <label for="region">Region</label><br>
                    <input type="text" id="region" name="region" class="input-text" required>
                    </div>
                </div>

            <h1>Insurance Details</h1>
                <div class="input-row">
                    <div>
                    <label for="insuranceType">Type of Insurance</label><br>
                    <select name="insuranceType" id="insuranceType" class="input-text">
                        <option value="Health Insurance">Health Insurance</option>
                        <option value="Life Insurance">Life Insurance</option>
                        <option value="Single Premium">Single Premium</option>
                        <option value="Family Premium">Family Premium</option>
                        <option value="None">None</option>
                    </select>
                    </div>
                    <div>
                        <label for="issuedDate" >Date Issued</label><br>
                        <input type="date" id="issuedDate" name="issuedDate" class="input-text">
                    </div>
                    <div>
                        <label for="expiryDate">Expiry Date</label><br>
                        <input type="date" id="expiryDate" name="expiryDate" class="input-text">
                    </div>
                    <div>
                        <label for="uploadInsurance">Upload Insurance</label><br>
                        <input type="file">
                    </div>
                </div> 
                <div class="input-row-few">
                    <div>
                        <label for="dependentName">Name of Dependent</label><br>
                        <input type="text" id="dependentName" name="dependentName" class="input-text">
                    </div>
                    <div>
                        <label for="dependentContactNo">Dependent Contact No.</label><br>
                        <input type="tel" class="input-text">
                    </div>
                </div>

            <h1>Collateral</h1>  
                <div class="input-row">
                    <div>
                        <label for="collateral">Upload Pictures of Collateral</label><br>
                        <input type="file" multiple>
                    </div>
                </div> 
            <div class="button-container">
            <input type="submit" value="Confirm" class="confirmBtn">
            </div>
            </form>
        </div>
    </div>
</div>

<div class="table-container">
    <div class="table-button-container">
        <div class="table-button-group">
        <button>All</button>
        <button>Payment</button>
        <button>Loan</button>
        <button>Grocery Item</button>
        </div>

        <div class="table-button-add">
            <button>Add new</button>
        </div>
    </div>
    <table>
        <tr>
            <th>Transaction Date</th>
            <th>Due Date</th>
            <th>Reference #</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Interest Rate</th>
            <th>Promisory Note</th>
            <th>Remarks</th>
            <th>Balance</th>

        </tr>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>123 Main St</td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>Doe</td>
    </table>
</div>
</body>
</html>