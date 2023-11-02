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
                <div class="title">Complaints</div>
                <div class="user-profile">
                    <div class="username">Shamah</div>
                    <a href="profile.html"><img class="avatar" src="/assets/shamah.png" alt="User Avatar"></a>
                </div>
            </header>
            <div class="complaint-container">
                <div class="complaint-form">
                    <h2>Enter Your Complaint</h2>
                    <form id="complaintForm">
                        <textarea id="complaintText" placeholder="Type your complaint"></textarea>
                        <button type="button" onclick="submitComplaint()">Submit</button>
                    </form>
                </div>
            
                <div class="previous-complaints">
                    <h2>Previous Complaints</h2>
                    <div class="complaint-list" id="complaintList">
                        <!-- Complaints will be dynamically populated here -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        // Function to submit a complaint
        function submitComplaint() {
            var complaintText = document.getElementById('complaintText').value;
            if (complaintText.trim() !== '') {
                // Create a new complaint item
                var complaintList = document.getElementById('complaintList');
                var complaintItem = document.createElement('div');
                complaintItem.className = 'complaint-item';
                complaintItem.innerText = complaintText;
                complaintList.appendChild(complaintItem);

                // Clear the textarea after submitting
                document.getElementById('complaintText').value = '';
            } else {
                alert('Please enter a complaint before submitting.');
            }
        }

    </script>
    
<?php require_once("../app/views/inc/footer.php"); ?>