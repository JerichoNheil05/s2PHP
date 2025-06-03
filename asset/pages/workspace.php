<?php
// Workspace Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Work Experience</title>
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
         <h1><strong>WORK EXPERIENCE</strong></h1>
         <p>Software Developer at Tech Solutions Inc. (2022-Present): Developed and maintained web applications using PHP, JavaScript, and MySQL, improving user experience and performance.</p>
         <p>Intern at Innovative Startups (Summer 2021): Assisted in front-end development and testing, gaining hands-on experience in Agile methodologies and team collaboration.</p>
         <p>Freelance Web Developer (2019-2021): Delivered custom websites and e-commerce solutions for small businesses, focusing on responsive design and SEO optimization.</p>
         <p>Volunteer IT Support at Community Center (2018-2019): Provided technical support and training to staff and visitors, enhancing digital literacy and troubleshooting skills.</p>
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
