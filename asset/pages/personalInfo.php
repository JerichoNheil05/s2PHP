<?php
// Main Resume Page including all sections
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Resume</title>
  <style>
    body { font-family: Arial, sans-serif; 
      margin: 20px; 
      background-color:rgb(0, 0, 0);
      background: url('https://wallpaperaccess.com/full/686924.jpg') no-repeat center fixed;}
    h2 { color: #2c3e50; }
    form { margin-bottom: 30px; }
    textarea, input[type="text"], input[type="email"] {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }
    .hero {
      width: 60%;
      height: 70vh;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      padding: 20px;
      background-color:rgb(233, 234, 234);
      margin-bottom: 30px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 6rem;
      gap: 3rem;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .hero-img {
      border-radius: 5px;
      width: 50%;
      height: 70vh;
      object-fit: cover;
      box-shadow: 5px 10px 8px rgba(0,0,0,0.1);
      margin-left: 20px;
      border: 1px solid #ccc;
      text-align: center;
    }
    .hero-nav {
      display: flex;
      flex-direction: column;
      font-size: 14px;
      gap: 2.5rem;
      border-bottom: 1px solid #ccc;
    }

   .hero-img p {
      text-align: left;
      padding-right: 3rem;
      padding-left: 3rem;
      padding-top: 0rem;
      padding-bottom: 0rem;
      margin-top: 0;
      margin-bottom: 2px;
      font-size: 12px;
    }

  .hero-img h1{
      font-size: 1.5rem;
      font-weight: bold;
      text-align: left;
      padding-right: 3rem;
      padding-left: 3rem;
  }

    .perInfo, .educ, .skills, .aff, .workExp, .car {
      border-bottom: 1px solid #ccc;
    }
    .hero-nav a {
      text-decoration: none;
      color:rgb(0, 0, 0);
      font-weight: bold;
      transition: color 0.3s ease;
    }
    .hero-nav a:hover {
      color:rgb(253, 253, 253);
    }
    .personal-photo {
      display: block;
      margin: 3rem auto 20px auto;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 7px 8px rgba(0,0,0,0.2);
      border: 2px solid white;
    }
    .info-list {
      list-style-type: none;
      padding: 0;
      margin: 0 3rem 2rem 3rem;
      font-size: 12px;
      color: #333;
      text-align: left;
    }
    .info-list li {
      margin-bottom: 8px;
    }
    .label {
      font-weight: bold;
      width: 140px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <div class="hero">
    <div class= "hero-img">
         <img src="../img/DBML5128.JPG" alt="Personal Photo" class="personal-photo" />
         <h1><strong>Personal Information</strong></h1>
         <p>
            Hello! My name is Jericho Nheil, and I am a passionate individual with a keen interest in technology, software development, and continuous learning. I am always eager to grow both personally and professionally, and I strive to bring enthusiasm, creativity, and diligence to everything I do. Below is some basic information about me to help you get to know me better.
         </p>
         <ul class="info-list">
            <li><span class="label">Full Name:</span> Jericho Nheil</li>
            <li><span class="label">Date of Birth:</span> May 30, 2005</li>
            <li><span class="label">Email:</span> 202312115@fit.edu.ph</li>
            <li><span class="label">Phone:</span> +63 (955) 300-0063</li>
            <li><span class="label">Address:</span> Antipolo City, Rizal, Philippines</li>
            <li><span class="label">Nationality:</span> Filipino</li>
            <li><span class="label">Languages:</span> English, Tagalog</li>
            <li><span class="label">Github:</span> <a href="https://github.com/JerichoNheil05" target="_blank">github.com/JerichoNheil05</a></li>
         </ul>
  </div>
    <div class="hero-nav">
      <div class="car">
        <a href="/asset/pages/careerObjective.php">Career Objective</a>
      </div>
      <div class="perInfo">
        <a href="/asset/pages/personalInfo.php">Personal Information</a>
      </div>
      <div class="educ">
        <a href="/asset/pages/educationalAttainment.php">Educational Attainment</a>
      </div>
      <div class="skills">
        <a href="/asset/pages/skills.php">Skills</a>
      </div>
      <div class="aff">
        <a href="/asset/pages/affiliation.php">Affiliation</a>
      </div>
      <div class="workExp">
        <a href="/asset/pages/workspace.php">Work Experience</a>
      </div>
    </div>
  </div>
</body>
</html>
