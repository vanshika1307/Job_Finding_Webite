<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <title>People Consultancy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.class">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <script>
    const stateCityData = {
      "Andaman & Nicobar": ["Alipur", "Andaman Island", "Anderson Island", "Arainj-Laka-Punga", "Austinabad", "Bamboo Flat", "Barren Island", "Beadonabad", "Betapur", "Bindraban", " Bonington", "Brookesabad", "Cadell Point", "Calicut", "Chetamale", "Cinque Islands", "Defence Island", "Digilpur", "Dolyganj", "Flat Island", "Geinyale", " Great Coco Island", "Haddo", "Havelock Island",
        "Henry Lawrence Island", "Herbertabad", "Hobdaypur", "Ilichar", "Ingoie", "Inteview Island", "Jangli Ghat", "Jhon Lawrence Island", "Karen", "Kartara", "KYD Islannd", "Landfall Island", "Little Andmand", "Little Coco Island", "Long Island", "Maimyo", "Malappuram", "Manglutan", "Manpur", "Mitha Khari", "Neill Island", "Nicobar Island", "North Brother Island", "North Passage Island", "North Sentinel Island", "Nothen Reef Island", "Outram Island", "Pahlagaon", "Palalankwe", "Passage Island", " Phaiapong", "Phoenix Island", "Port Blair", "Preparis Island",
        "Protheroepur", "Rangachang", "Rongat", "Rutland Island", "Sabari", "Saddle Peak", "Shadipur", " Smith Island",
        "Sound Island", "South Sentinel Island", "Spike Island", "Tarmugli Island", "Taylerabad", "Titaije", "Toibalawe", "Tusonabad", "West Island", "Wimberleyganj", "Yadita"],
      // "Andaman & Nicobar": ["Port Blair"],
      "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur"],
      "Arunachal Pradesh": ["Itanagar", "Tawang", "Pasighat"],
      "Assam": ["Dispur", "Guwahati", "Silchar"],
      "Bihar": ["Patna", "Gaya", "Bhagalpur"],
      "Chandigarh": ["Chandigarh"],
      "Chhattisgarh": ["Raipur", "Bhilai", "Bilaspur"],
      "Dadra & Nagar Haveli": ["Silvassa"],
      "Daman & Diu": ["Daman", "Diu"],
      "Delhi": ["New Delhi", "Dwarka", "Rohini"],
      "Goa": ["Panaji", "Margao", "Vasco da Gama"],
      "Gujarat": ["Ahmedabad", "Surat", "Vadodara"],
      "Haryana": ["Gurgaon", "Faridabad", "Panipat"],
      "Himachal Pradesh": ["Shimla", "Manali", "Dharamshala"],
      "Jammu & Kashmir": ["Srinagar", "Jammu", "Anantnag"],
      "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad"],
      "Karnataka": ["Bengaluru", "Mysuru", "Mangaluru"],
      "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode"],
      "Lakshadweep": ["Kavaratti"],
      "Madhya Pradesh": ["Bhopal", "Indore", "Jabalpur"],
      "Maharashtra": ["Mumbai", "Pune", "Nagpur"],
      "Manipur": ["Imphal", "Thoubal", "Bishnupur"],
      "Meghalaya": ["Shillong", "Tura", "Nongstoin"],
      "Mizoram": ["Aizawl", "Lunglei", "Champhai"],
      "Nagaland": ["Kohima", "Dimapur", "Mokokchung"],
      "Orissa": ["Bhubaneswar", "Cuttack", "Rourkela"],
      "Pondicherry": ["Puducherry", "Karaikal", "Mahe"],
      "Punjab": ["Ludhiana", "Amritsar", "Chandigarh"],
      "Rajasthan": ["Jaipur", "Udaipur", "Jodhpur"],
      "Sikkim": ["Gangtok", "Namchi", "Gyalshing"],
      "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai"],
      "Tripura": ["Agartala", "Udaipur", "Dharmanagar"],
      "Uttar Pradesh": ["Lucknow", "Kanpur", "Varanasi"],
      "Uttaranchal": ["Dehradun", "Haridwar", "Nainital"],
      "West Bengal": ["Kolkata", "Howrah", "Darjeeling"]
    };

    // Function to populate the state dropdown
    function print_state(stateDropdownId) {
      const stateDropdown = document.getElementById(stateDropdownId);
      stateDropdown.innerHTML = ""; // Clear previous options

      // Add default option
      stateDropdown.options[0] = new Option("Select State", "");

      let i = 1;
      for (const state in stateCityData) {
        stateDropdown.options[i] = new Option(state, state);
        i++;
      }
    }

    // Function to populate the city dropdown based on selected state
    function print_city(cityDropdownId, stateIndex) {
      const stateDropdown = document.getElementById("sts");
      const cityDropdown = document.getElementById(cityDropdownId);

      const selectedState = stateDropdown.options[stateIndex].value;
      const cities = stateCityData[selectedState] || [];

      // Clear previous city options
      cityDropdown.innerHTML = "";

      // Add default option
      cityDropdown.options[0] = new Option("Select City", "");

      // Populate the city dropdown based on the selected state
      cities.forEach((city, index) => {
        cityDropdown.options[index + 1] = new Option(city, city);
      });
    }

    function validatePhoto(input) {
      const file = input.files[0];
      const maxSize = 2 * 1024 * 1024; // 2MB in bytes

      if (file) {
        // Check file type
        const fileType = file.type;
        if (fileType !== 'image/jpeg' && fileType !== 'image/jpg' && fileType !== 'image/png') {
          alert('Only .jpg, .jpeg, .png formats allowed.');
          input.value = ''; // Clear input if invalid
          return;
        }

        // Check file size
        if (file.size > maxSize) {
          alert('File size must be less than or equal to 2MB.');
          input.value = ''; // Clear input if file size exceeds limit
          return;
        }

        // Optional: Display preview
        const reader = new FileReader();
        reader.onload = function (e) {
          const photoPreview = document.getElementById('photoPreview');
          photoPreview.src = e.target.result;
          photoPreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
      }
    }
  </script>


</head>

<body>
  <!-- Navigation bar --><!-- Navigation bar --><!-- Navigation bar --><!-- Navigation bar -->
  <nav class="navbar sticky-top" style="box-shadow: 5px 5px 5px 5px #f4f4f4;">
    <div class="container-fluid">
      <div class="container">
        <div class="navbar-header navbar-inverse">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a class="navbar-brand" href="#">People's Consulting &nbsp;</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FF7722;"><strong>Jobs</strong>
                <span class="caret"></span>&nbsp;</a>
              <ul class="dropdown-menu">
                <li><a href="#">Top Locations</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Top Categories</a></li>
                <li><a href="#">Courses</a></li>
              </ul>
            </li>
            <!-- <li class="active"><a href="#">Page 2</a></li> -->
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                style="color:rgb(123, 199, 230);"><strong>Internship </strong><span class="caret"></span> &nbsp;</a>
              <ul class="dropdown-menu">
                <li><a href="#">Top Locations</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Top Categories</a></li>
                <li><a href="#">Courses</a></li>
              </ul>
            </li>
            <!-- <li class="active"><a href="#">Page 3</a></li> -->
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#046A38;"><strong>Courses
                </strong><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Top Locations</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Top Categories</a></li>
                <li><a href="#">Courses</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="margin-top: 5px;">
            <button type="button" class="btn btn-primary">
              <li><a href="Login.html" style="color:white; text-decoration: none;"><span
                    class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </button>

          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid" style="padding: 0; margin: 0;">
    <img src="1.jpg" style="width: 100vw; height: auto;">
  </div>
  <br>
  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <div class="container">
    <div class="row">
      <h4 class="perhead h3">Personal Information</h4>
      <hr>
      <form id="myForm" method="POST" action="registration.php" enctype="multipart/form-data">

        <div class="recdiv5">
          <div>
            <label for="FirstName">First Name</label>
            <input type="text" required class="form-control" oninput="firstNameValidation()" maxlength="50"
              name="first_name" id="FirstName" placeholder="Enter your First name" value>
            <span id="firstNameValidationMessage" style="color: red;"></span>
          </div>
          <div>
            <label for="MiddleName">Middle Name</label>
            <input type="text" class="form-control" oninput="middleNameValidation()" name="middle_name" maxlength="50"
              id="MiddleName" placeholder="Enter your Middle name" value>
            <span id="middleNameValidationMessage" style="color: red;"></span>
          </div>
          <div>
            <label for="LastName">Last Name</label>
            <input type="text" class="form-control" oninput="lastNameValidation()" required name="last_name"
              maxlength="50" id="LastName" placeholder="Enter your Last name" value>
            <span id="lastNameValidationMessage" style="color: red;"></span>
          </div>
        </div>
        <div class="recdiv5">
          <div>
            <label for="dob">Date Of Birth</label>
            <input type="date" class="form-control" id="dob" required name="dob" oninput="checkAge()"
              placeholder="Enter your Date Of Birth" value>
            <span style="color:red" id="ageValidationMessage"></span>
          </div>
          <div>
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" name="age" placeholder="Your Age">
          </div>

          <div>
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
              <option>Male</option>
              <option>Female</option>
              <option>Transgender</option>
            </select>
          </div>
        </div>

        <div class="recdiv1heading">
          <h4 class="perhead h3">Contact</h4>
          <hr>
        </div>
        <div class="recdiv2">
          <div>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="emailInput" maxlength="50"
              placeholder="Enter your Email" oninput="validateEmail()" required>
            <span style="color:red" id="emailValidationMessage"></span>
          </div>
          <div>
            <label for="FatherName">Father's Name</label>
            <input type="text" oninput="fatherNameValidation()" class="form-control" name="father_name" required
              id="FatherName" maxlength="50" placeholder="Enter your Father's Name" value>
            <span id="fatherNameValidationMessage" style="color: red;"></span>
          </div>
          <div>
            <label for="MotherName">Mother's Name</label>
            <input required type="text" class="form-control" oninput="motherNameValidation()" name="mother_name"
              id="MotherName" maxlength="50" placeholder="Enter your Mother's Name" value>
            <span id="motherNameValidationMessage" style="color: red;"></span>
          </div>
        </div>
        <div class="recdiv3">
          <div>
            <label for="phone">Contact No.</label>
            <input type="text" oninput="validatePhone()" required class="form-control" name="contact" id="phoneInput"
              placeholder="Enter your Contact No." value>
            <span style="color:red" id="phoneValidationMessage"></span>
          </div>
          <div>
            <label for="address1">Address Line 1</label>
            <input type="text" required class="form-control" name="address1" id="address1" maxlength="50"
              placeholder="Enter your Address Line 1" value>
          </div>
          <div>
            <label for="address2">Address Line 2</label>
            <input type="text" class="form-control" name="address2" id="address2" maxlength="50"
              placeholder="Enter your Address Line 2" value>
          </div>
        </div>
        <div class="recdiv4">
          <div>
            <label for="state">State</label>

            <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="form-control"
              required></select>
            <script language="javascript">
              print_state("sts");
            </script>
          </div>

          <div>
            <label for="city">City</label>
            <select id="state" name="city" class="form-control" required></select>

          </div>

        </div>
        <div class="recdiv1heading">
          <h4 class="perhead h3">Qualification</h4>
          <hr>
        </div>
      
        <div class="education-section">
          <!-- Highest Education Level -->
          <div>
            <label for="education">Highest Education Level</label>
            <select id="education" name="education" required class="form-control">
              <option value="">Select your education level</option>
              <option value="Secondary">Secondary</option>
              <option value="Higher Secondary">Higher Secondary</option>
              <option value="Undergraduate">Undergraduate (Bachelors)</option>
              <option value="Graduate">Graduate (Masters)</option>
              <option value="Post Graduate">Post Graduate (Doctorate)</option>
            </select>
          </div>

          <!-- Stream / Field of Study -->
          <div>
            <label for="stream">Stream / Field of Study</label>
            <select id="stream" name="stream" required class="form-control">
              <option value="">Select your stream</option>
              <option value="Science">Science</option>
              <option value="Commerce">Commerce</option>
              <option value="Arts">Arts</option>
              <option value="Engineering">Engineering</option>
              <option value="Law">Law</option>
              <option value="Management">Management</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Medical">Medical</option>
            </select>
          </div>

          <!-- Degree -->
          <div>
            <label for="degree">Degree</label>
            <select id="degree" name="degree" required class="form-control">
              <option value="">Select your degree</option>
              <option value="NA">NA</option>
              <option value="BTech">BTech (Engineering)</option>
              <option value="BCom">BCom (Commerce)</option>
              <option value="BSc">BSc (Science)</option>
              <option value="BA">BA (Arts)</option>
              <option value="LLB">LLB (Law)</option>
              <option value="MBA">MBA (Management)</option>
              <option value="BCA">BCA (Computer Applications)</option>
              <option value="MBBS">MBBS (Medical)</option>
            </select>
          </div>

          <!-- Specialization/Major -->
          <div>
            <label for="specialization">Specialization/Major</label>
            <input type="text" class="form-control" name="specialization" id="specialization" maxlength="100"
              placeholder="Enter your Major or Specialization (if any)">
          </div>

          <!-- Board Name / University -->
          <div>
            <label for="board">Board Name / University</label>
            <input type="text" class="form-control" required name="board_name" id="board" maxlength="50"
              placeholder="Enter your Board/University Name">
          </div>

          <!-- College Name -->
          <div>
            <label for="college_name">College Name</label>
            <input type="text" class="form-control" required name="college_name" id="college_name" maxlength="50"
              placeholder="Enter your College Name">
          </div>

          <!-- University Name -->
          <div>
            <label for="university_name">University Name</label>
            <input type="text" class="form-control" required name="university_name" id="university_name" maxlength="50"
              placeholder="Enter your University Name">
          </div>

          <!-- Graduation Year -->
          <div>
            <label for="grad_year">Graduation Year</label>
            <input type="number" class="form-control" name="grad_year" id="grad_year" min="2000" max="2030"
              placeholder="Enter your Graduation Year">
          </div>
          <!-- GPA/Percentage -->
          <div>
            <label for="gpa">GPA/Percentage</label>
            <input type="text" class="form-control" name="gpa" id="gpa" maxlength="5"
              placeholder="Enter your GPA or Percentage">
          </div>

          <!-- Certifications -->
          <div>
            <label for="certifications">Certifications</label>
            <textarea class="form-control" name="certifications" id="certifications" maxlength="500"
              placeholder="Enter any relevant certifications (e.g., PMP, AWS, etc.)"></textarea>
          </div>

          <!-- Relevant Coursework -->
          <div>
            <label for="coursework">Relevant Coursework</label>
            <textarea class="form-control" name="coursework" id="coursework" maxlength="500"
              placeholder="Enter any relevant coursework that applies to the job you're applying for"></textarea>
          </div>

          <!-- Extracurricular Activities -->
          <div>
            <label for="extracurricular">Extracurricular Activities</label>
            <textarea class="form-control" name="extracurricular" id="extracurricular" maxlength="500"
              placeholder="Mention any extracurricular activities (clubs, sports, leadership roles)"></textarea>
          </div>
        </div>
        <div class="recdiv1heading">
          <h4 class="perhead h3">Work Experience</h4>
          <hr>
        </div>
        <div class="recdiv7">
          <div>
            <label for="currentcompany">Current Company</label>
            <input type="text" class="form-control" name="current_company" id="currentcompany"
              placeholder="Enter your Current Company">
          </div>
          <div>
            <label for="company_location">Company Location</label>
            <input type="text" class="form-control" name="company_location" id="company_location"
              placeholder="Enter company location">
          </div>
          <div>
            <label for="designation">Designation</label>
            <select id="designation" name="designation" class="form-control" style="display: inline;">
              <option>NA</option>
              <option value="zonal_head">Zonal Head</option>
              <option value="regional_head">Regional Head</option>
              <option value="cluster_head">Cluster Head</option>
              <option value="branch_manager">Branch Manager</option>
              <option value="operation_manager">Operations Manager</option>
              <option value="hr_manager">HR Manager</option>
              <option value="it_manager">IT Manager</option>
              <option value="admin_manager">Admin Manager</option>
              <option value="sales_manager">Sales Manager</option>
              <option value="Interns">Interns</option>
              <option value="Volunteers">Volunteers</option>
              <option value="Receptionist">Receptionist</option>
              <option value="Relationship_manager">Relationship Manager</option>
              <option value="Guard">Guard</option>
              <option value="help_staff">Help Staff</option>
            </select>
          </div>
          <div>
            <label for="experience">Experience</label>
            <select id="experience" name="experience" class="form-control" style="display: inline;">
              <option>No Experience</option>
              <option>0-2 Years</option>
              <option>2-4 Years</option>
              <option>4-6 Years</option>
              <option>6-8 Years</option>
              <option>8-10 Years</option>
              <option>10+ Years</option>
            </select>
          </div>
          <div>
            <label for="start_date">Start Date</label>
            <input type="month" class="form-control" name="start_date" id="start_date">
          </div>
          <div>
            <label for="end_date">End Date</label>
            <input type="month" class="form-control" name="end_date" id="end_date"
              placeholder="Present if currently employed">
          </div>
        </div>

        <div class="recdiv8">
          <div>
            <label for="responsibilities">Job Responsibilities / Achievements</label><br>
            <textarea class="form-control" name="responsibilities" id="responsibilities" maxlength="300" rows="7"
              placeholder="Describe your responsibilities and key achievements"></textarea>
          </div>
          <div>
            <label for="skills_used">Skills/Technologies Used</label><br>
            <textarea class="form-control" name="skills_used" id="skills_used" maxlength="200" rows="7"
              placeholder="List relevant skills or technologies used"></textarea>
          </div>
          <div>
            <label for="remarks">Remarks</label><br>
            <textarea class="remarks" class="form-control" name="remarks" maxlength="50" id="remarks"
              maxlength="200"></textarea>
          </div>
          <div>
            <label for="myfile">Resume</label><br>
            <input type="file" name="myfile" required accept=".pdf, .docx" onchange="validateFile(this)">
            <!-- <span style="color:red;">**Your file extension must be .pdf or .docx and Size ≤ 2MB**</span> -->
            <span id="fileValidationMessage" style="color:red;"></span>
          </div>

          <div>
            <label for="passport_photo">Passport Size Photo</label><br>
            <input type="file" name="passport_photo" id="passport_photo" accept=".jpg, .jpeg, .png"
              onchange="validatePhoto(this)" required>
            <!-- <small style="color:;">**Only .jpg, .jpeg, .png formats allowed. Size ≤ 2MB**</small> -->
            <img id="photoPreview" src="#" alt="Your Passport Photo"
              style="display:none; max-width:150px; margin-top:10px;">
          </div>

        </div>
        <div class="recdiv9" style="padding-top: 2rem;text-align: center;">
          <button type="submit" name="submit" id="submit" value="submit" class="custom-btn">Submit</button>
        </div>

      </form>
    </div>
  </div>


  </div>
  </div>

  <script>

    //Validation first name
    function firstNameValidation() {
      var fatherNameInput = document.getElementById("FirstName");
      var fatherNameValidation = document.getElementById("firstNameValidationMessage");
      var submitButton = document.getElementById("submit");
      var fatherName = fatherNameInput.value;
      var nameRegex = /^[A-Za-z]+$/;
      if (nameRegex.test(fatherName)) {
        fatherNameValidation.textContent = "";
        fatherNameInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        fatherNameValidation.textContent = "Please enter a valid Name";
        fatherNameInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    //Validation Middle name
    function middleNameValidation() {
      var fatherNameInput = document.getElementById("MiddleName");
      var fatherNameValidation = document.getElementById("middleNameValidationMessage");
      var submitButton = document.getElementById("submit");
      var fatherName = fatherNameInput.value;
      var nameRegex = /^[A-Za-z]+$/;
      if (nameRegex.test(fatherName)) {
        fatherNameValidation.textContent = "";
        fatherNameInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        fatherNameValidation.textContent = "Please enter a valid Name";
        fatherNameInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    //Validation last name
    function lastNameValidation() {
      var fatherNameInput = document.getElementById("LastName");
      var fatherNameValidation = document.getElementById("lastNameValidationMessage");
      var submitButton = document.getElementById("submit");
      var fatherName = fatherNameInput.value;
      var nameRegex = /^[A-Za-z]+$/;
      if (nameRegex.test(fatherName)) {
        fatherNameValidation.textContent = "";
        fatherNameInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        fatherNameValidation.textContent = "Please enter a valid Name";
        fatherNameInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    //Validation fathers name
    function fatherNameValidation() {
      var fatherNameInput = document.getElementById("FatherName");
      var fatherNameValidation = document.getElementById("fatherNameValidationMessage");
      var submitButton = document.getElementById("submit");
      var fatherName = fatherNameInput.value;
      var nameRegex = /^[A-Za-z\s]+$/;
      if (nameRegex.test(fatherName)) {
        fatherNameValidation.textContent = "";
        fatherNameInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        fatherNameValidation.textContent = "Please enter a valid Name";
        fatherNameInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    //Mother fathers name
    function motherNameValidation() {
      var motherNameInput = document.getElementById("MotherName");
      var motherNameValidation = document.getElementById("motherNameValidationMessage");
      var submitButton = document.getElementById("submit");
      var motherName = motherNameInput.value;
      var nameRegex = /^[A-Za-z\s]+$/;
      if (nameRegex.test(motherName)) {
        motherNameValidation.textContent = "";
        motherNameInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        motherNameValidation.textContent = "Please enter a valid Name";
        motherNameInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    // File validation
    function validateFile(input) {
      var file = input.files[0];
      var allowedTypes = ["application/zip", "application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
      var fileValidationMessage = document.getElementById("fileValidationMessage");

      if (file) {
        if (!allowedTypes.includes(file.type)) {
          fileValidationMessage.textContent = "Please upload a ZIP, PDF, or DOCX file";
          input.value = "";
        } else if (file.size > 2 * 1024 * 1024) {
          fileValidationMessage.textContent = "Please upload a file smaller than 2MB";
          input.value = "";
        } else {
          fileValidationMessage.textContent = "";
        }
      } else {
        fileValidationMessage.textContent = "**You file extension must be .pdf or .docx and Size <= 2MB";
      }
    }
    //Email Validation
    function validateEmail() {
      var emailInput = document.getElementById("emailInput");
      var emailValidationMessage = document.getElementById("emailValidationMessage");
      var submitButton = document.getElementById("submit");
      var email = emailInput.value.trim().toLowerCase();

      if (email.endsWith("@gmail.com") || email.endsWith("@hotmail.com") || email.endsWith("@outlook.com")) {
        emailValidationMessage.textContent = "";
        emailInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        emailValidationMessage.textContent = "Please enter a valid email address";
        emailInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    //Phone validation
    function validatePhone() {
      var phoneInput = document.getElementById("phoneInput");
      var phoneValidationMessage = document.getElementById("phoneValidationMessage");
      var submitButton = document.getElementById("submit");
      var phone = phoneInput.value;
      var phoneRegex = /^[5-9]\d{9}$/;
      if (phoneRegex.test(phone)) {
        phoneValidationMessage.textContent = "";
        phoneInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        phoneValidationMessage.textContent = "Please enter a valid Phone number";
        phoneInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }

    function validatePanCard() {
      var pancardInput = document.getElementById("pancard");
      var pancardValidationMessage = document.getElementById("pancardValidationMessage");
      var submitButton = document.getElementById("submit");
      var pancard = pancardInput.value.trim().toUpperCase();

      var regex = /^([A-Z]{5}[0-9]{4}[A-Z]{1})$/;

      if (regex.test(pancard)) {
        pancardValidationMessage.textContent = "";
        pancardInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        pancardValidationMessage.textContent = "Please enter a valid PAN card number.";
        pancardInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    // Finding age
    function checkAge() {
      var ageInput = document.getElementById("dob");
      var ageValidationMessage = document.getElementById("ageValidationMessage");
      var submitButton = document.getElementById("submit");

      var day = ageInput.value;
      var ageInput = document.getElementById("dob");
      var ageValidationMessage = document.getElementById("ageValidationMessage");
      var submitButton = document.getElementById("submit");

      var day = ageInput.value;
      var DOB = new Date(day);
      var today = new Date();
      var Age = today.getTime() - DOB.getTime();
      Age = Math.floor(Age / (1000 * 60 * 60 * 24 * 365.25));
      document.getElementById("age").value = Age;
      if (Age >= 18) {
        ageValidationMessage.textContent = "";
        ageInput.classList.remove("invalid");
        submitButton.disabled = false;
      } else {
        ageValidationMessage.textContent = "You must be at least 18 years old to apply";
        ageInput.classList.add("invalid");
        submitButton.disabled = true;
      }
    }
    // Email validation

    // Cities
  </script>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/deb4d1b812.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</body>

</html>