<?php require_once("../app/views/inc/header.php"); ?>

<div class="container">
        <div class="navigation">
            <img src = "assets/InternEaseLogo.png" alt="">
            <ul>
                <li>
                    <a href="dashboard.html">
                        <span class="icon"><i class="fa-solid fa-gauge-high"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="advertisements.html">
                        <span class="icon"><i class="fa-solid fa-rectangle-ad"></i></span>
                        <span class="title">Advertisements</span>
                    </a>
                </li>
                <li>
                    <a href="complaints.html">
                        <span class="icon"><i class="fa-solid fa-circle-question"></i></span>
                        <span class="title">Complaints</span>
                    </a>
                </li>
                <li>
                    <a href="profile.html">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="schedule.html">
                        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="title">Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="selectionList.html">
                        <span class="icon"><i class="fa-solid fa-rectangle-list"></i></ion-icon></span>
                        <span class="title">Selection List</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    
        <div class="main">
            <header class="top-bar">
                <div class="title">View Advertisements</div>
                <div class="user-profile">
                    <div class="username">Shamah</div>
                    <a href="profile.html"><img class="avatar" src="/assets/shamah.png" alt="User Avatar"></a>
                </div>
            </header>

            <div class="ad-cards">
                <div class="ad-card" onclick="displayAdDetails(1)">
                    <img src="assets/company1.png" alt="Advertisement 1">
                    <h3>WSO2</h3>
                    <p>Description of the advertisement 1</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company2.png" alt="Advertisement 2">
                    <h3>Codegen</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company2.png" alt="Advertisement 2">
                    <h3>SyscoLabs</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company1.png" alt="Advertisement 2">
                    <h3>IFS</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company2.png" alt="Advertisement 2">
                    <h3>Virtusa</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company1.png" alt="Advertisement 2">
                    <h3>Synergen</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company2.png" alt="Advertisement 2">
                    <h3>SyscoLabs</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company1.png" alt="Advertisement 2">
                    <h3>IFS</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company2.png" alt="Advertisement 2">
                    <h3>Virtusa</h3>
                    <p>Description of the advertisement 2</p>
                </div>
                <div class="ad-card" onclick="displayAdDetails(2)">
                    <img src="assets/company1.png" alt="Advertisement 2">
                    <h3>Synergen</h3>
                    <p>Description of the advertisement 2</p>
                </div>
            </div>
            <div class="ad-details" id="adDetailsWindow">
                <div class="ad-content">
                    <span class="close" onclick="closeAdDetails()">&times;</span>
                    <h2>Company Name</h2>
                    <p><strong>Job Position:</strong> Job Position Title</p>
                    <p><strong>Mode of Work:</strong> Full-time/Part-time/Remote</p>
                    <p><strong>Internship Period:</strong> Start Date - End Date</p>
                    <p><strong>Requirements:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <button onclick="applyToJob()">Apply</button>
                </div>
            </div>            
        </div>
    </div>

    <script>
        // Function to display ad details window
        function displayAdDetails() {
            document.getElementById('adDetailsWindow').style.display = 'block';
        }

        // Function to close ad details window
        function closeAdDetails() {
            document.getElementById('adDetailsWindow').style.display = 'none';
        }

        // Function to handle applying to the job
        function applyToJob() {
            // Logic to handle job application goes here
            alert('You have applied to this job!');
        }

    </script>

<?php require_once("../app/views/inc/footer.php"); ?>