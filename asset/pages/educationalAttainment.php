<?php
// Educational Attainment Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Educational Attainment</title>
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
      height: 66vh;
      object-fit: cover;
      box-shadow: 5px 10px 8px rgba(0,0,0,0.1);
      margin-left: 20px;
      border: 1px solid #ccc;
      text-align: center;
      padding: 20px;
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
      padding-top: 1rem;
      padding-bottom: 1rem;
      margin-top: 0;
      margin-bottom: 0;
      font-size: 12px;
      overflow-wrap: break-word;
    }

    .hero-img h1 {
      padding-right: 3rem;
      padding-left: 3rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      margin-top: 2rem;
      margin-bottom: 0;
      font-size: 2rem;
      font-weight: bold;
      text-align: left;
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
  </style>
</head>
<body>
  <div class="hero">
    <div class= "hero-img">
         <h1><strong>EDUCATIONAL ATTAINMENT</strong></h1>
         <p><strong>Bachelor of Science in Computer Science, Feu Institude of Technology, 2023 - present.</strong> focusing on software development, data structures, and algorithms.</p>
         <p> <strong> Senior High School, Our Lady of Fatima University, 2020 - 2022</strong> Specialized in Science, Technology, Engineering, and Mathematics (STEM) strand with a strong emphasis on mathematics and physics.</p>
         <p><strong>Junior High School, English Christian Academy, 2016-2019 </strong> Completed general education with active participation in science fairs and academic competitions.</p>
         <p><strong>Elementary School, English Christian Academy, 2012-2015 </strong> Developed foundational skills in reading, writing, and arithmetic, laying the groundwork for academic success.</p>
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
