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
                <div class="title">Profile</div>
                <div class="user-profile">
                    <div class="username">Shamah</div>
                    <a href="profile.html"><img class="avatar" src="/assets/shamah.png" alt="User Avatar"></a>
                </div>
            </header>
            <div class="content">
                <div class="profile-box">
                    <div class="profile-header">
                        <div class="profile">
                            <img class="profile-picture" src="/assets/shamah.png" alt="Profile Picture">
                            <div class="profile-name">Shamah</div>
                        </div>
                        <button class="edit-button">Edit</button>
                        <i class="settings-icon fas fa-cog"></i>
                    </div>
                    <div class="profile-content">
                        <div class="input1">
                            <textarea class="text-area" placeholder="Course"></textarea>
                        <textarea class="text-area" placeholder="Contact"></textarea>
                        <textarea class="text-area" placeholder="School"></textarea>
                        </div>
                        <div class="text1-area">
                            <label for="cv-upload" class="cv-label">Upload CV:</label>
                            <input type="file" id="cv-upload" class="cv-input">
                            <label for="cv-upload" class="cv-button" >Choose File</label>
                        </div>
                        <textarea class="text-area" placeholder="Interested Areas"></textarea>
                        <textarea class="text-area" placeholder="Experience"></textarea>
                        <textarea class="text-area" placeholder="Extra Curricular"></textarea>
                        <textarea class="text-area" placeholder="Qualifications"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../app/views/inc/footer.php"); ?>