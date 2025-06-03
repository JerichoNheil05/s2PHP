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
         <h1><strong>CAREER OBJECTIVE</strong></h1>
         <p> As a highly motivated and goal-oriented professional, I am seeking to leverage my academic background, hands-on experience, and strong interpersonal skills to contribute meaningfully to an innovative and forward-thinking organization. My career objective is to grow in a challenging and dynamic environment where I can continuously learn, adapt, and evolve while making tangible contributions that drive team success, organizational growth, and customer satisfaction. I am passionate about lifelong learning, proactive problem-solving, and developing sustainable solutions that improve efficiency, productivity, and collaboration across departments.</p>
         <break> </break><p>Ultimately, I seek to evolve into a role where I can lead and inspire others, contribute to strategic decision-making, and drive positive impact—both within the organization and in the broader community. Whether working independently or collaboratively, I strive to bring energy, accountability, and a results-oriented mindset to every task, continually pushing the boundaries of what can be achieved through dedication, creativity, and purpose-driven work.</p>
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
