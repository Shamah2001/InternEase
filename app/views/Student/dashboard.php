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

        <!-- main -->

        <div class="main">
            <header class="top-bar">
                <div class="title">Dashboard</div>
                <div class="user-profile">
                    <div class="username">Shamah</div>
                    <a href="profile.html"><img class="avatar" src="/assets/shamah.png" alt="User Avatar"></a>
                </div>
            </header>
            <div class="content">
                <div class="heading" style="padding-top: 40px;">My Profile</div>
                <div class="profile-container">
                    <div class="display-info">
                        <ul class="info-list">
                            <li><span>Name:</span> <span class="editable" contenteditable="true">Shamah</span></li>
                            <li><span>Registration No:</span> <span class="editable" contenteditable="true">2021/IS/###</span></li>
                            <li><span>E-mail:</span> <span class="editable" contenteditable="true">shamah@email.com</span></li>
                            <li><span>Status:</span> <span class="status-info">Pending</span></li>
                        </ul>
                    </div>
                    <button class="edit-button" onclick="editInfo()">Edit</button>
                </div>
                
            
            <div class="info-box comp">
                <div class="textbottom" style="flex-grow: 3;">Companies Applied</div>
                <div class="number" style="flex-grow: 1;">05</div>     
                <button class="button button-info" style="flex-grow: 1;" onclick="redirectPage('/companies.html')">View All</button>
            </div>
            <div class="info-box intv">
                <div class="textbottom" style="flex-grow: 3;">Interviews Scheduled</div>
                <div class="number" style="flex-grow: 1;">03</div> 
                <button class="button button-info" style="flex-grow: 1;" onclick="redirectPage('interview.html')">View All</button>
            </div>
            </div>

            <!-- charts -->
            <div class="metrics">
                <canvas id="engagementChart" class="customChart"></canvas>
                <canvas id="adsRespondedChart" class="customChart"></canvas>
                <canvas id="adTypesChart" class="customChart"></canvas>
            </div>
            <!-- end of charts -->
        </div>

        <!-- main -->
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data for engagement over time
        const engagementData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Engagement',
                data: [50, 75, 60, 80, 55, 90],
                fill: false,
                borderColor: '#007bff',
                tension: 0.4
            }]
        };

        // Data for ads responded to
        const adsRespondedData = {
            labels: ['Ads 1', 'Ads 2', 'Ads 3', 'Ads 4', 'Ads 5'],
            datasets: [{
                label: 'Ads Responded To',
                data: [20, 35, 25, 40, 30],
                backgroundColor: '#007bff'
            }]
        };

// Creating line chart for engagement
const engagementChart = new Chart(document.getElementById('engagementChart').getContext('2d'), {
    type: 'line',
    data: engagementData,
    options: {
        responsive: false,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            title: {
                display: true,
                text: 'Engagement Over Time',
                padding: 20
            }
        }
    }
});

// Creating bar chart for ads responded to
const adsRespondedChart = new Chart(document.getElementById('adsRespondedChart').getContext('2d'), {
    type: 'bar',
    data: adsRespondedData,
    options: {
        responsive: false,
        maintainAspectRatio: false,
        indexAxis: 'y',
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            title: {
                display: true,
                text: 'Ads Responded To',
                padding: 20
            }
        }
    }
});
// Data for ad types distribution
const adTypesData = {
    labels: ['Type A', 'Type B', 'Type C', 'Type D'],
    datasets: [{
        data: [25, 30, 15, 10], // Sample data
        backgroundColor: ['#007bff', '#28a745', '#ff5722', '#ffc107'],
    }]
};

// Creating a doughnut chart for ad types distribution
const adTypesChart = new Chart(document.getElementById('adTypesChart').getContext('2d'), {
    type: 'doughnut',
    data: adTypesData,
    options: {
        responsive: false,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
            },
            title: {
                display: true,
                text: 'Ad Types Distribution',
                padding: 20,
            },
        },
    },
});

    </script>

<?php require_once("../app/views/inc/footer.php"); ?>