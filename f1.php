
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a. {
  background-color: #4CAF50;
  color: white;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("re.jpg");

  /* Full height */
  height: 50%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */

  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.header {
  background-image: url('to.jpg');
  <!--height: 15%;--> 
 
   padding: 40px;
  
  color: black;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<div class="bg"></div>

<div class="topnav">
  <a  href="home.php">Home</a>
  <a class="active" href="f1.php">FieldWork Instruction</a>
    <a href="#Evaluation" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Evaluation  </a>  <div class="navbar">
    <a  href="report.php">Report instruction</a>
	<a  href="organ.php">Organisation instruction</a>
  <div class="dropdown">
    <button class="dropbtn">Requirements
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#Common"  onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Common</a>
      <a href="#Community"  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Community Development specific requirements</a>
        <a href="#Student"  onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Student</a>

    </div>
  </div> 
      <a href="#outcome" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Outcome </a>  
</div>

	
  
   
    
  </div>
  </div> 
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <h2><center>Fieldwork Course Evaluation</center></h2>
<h3>Internal</h3><br>
<p>Students will be evaluated on the basis of
Her performance in the organisation
her consistent efforts in fulfilling the requirements
reports submission and
in the student’s initiatives, interests and contributions towards the Field work.</p>
<h3>External</h3><br>
<p>Students have to present their field work experiences in front of the external examiner and internal
examiner and to the whole MSW class by Powerpoint or any other presentation which is termed as
Fieldwork Conference, usually conducted within one month of the completion of the fieldwork.</p>
</div>

    

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Close</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

	  <h2><center>Community Development specific requirements</center></h2>
<p><br>
1. To understand needs of various groups in the community and the agencies response to meet these
needs.<br>
2. To study the impact of the need (need – fulfillment gap) / disease / problem / disability on the
individual family and society.<br>
3. To learn the process of project management and resource mobilization.<br>
4. To observe– participate and understand the possibilities of advocacy work.<br>
5. To identify an issue– plan and organize a relevant need based programme for the community.<br><br>

Here the students will be placed at the community based organisations during the month of May, at the end
of second semester, outside Madurai (even at the National level, as it is a summer vocation) for 24 working
days intensively.
List of organisation for the Community Development is enclosed in the annexure VIII.</p>
</div>

    

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Close</button>
    </div>
  </form>
</div>
<div id="id05" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
     
	  <h2><center>Learning Outcome</center></h2><hr>
<p>24 Working days
On successful completion of the course, the students will be able to<br>
1.   Understand both the agency and the clients as systems in the field of HRM<br>
2.   Develop knowledge of administrative procedures– programme management and utilize these skills
in practice.<br>
3.   Demonstrate skills of problem solving process and practice based research.<br>
4.   Develop as a Human Resource social work professional.<br><br>
This course aims at enabling students to apply theory to practice and thereby understand the various
components of social work practice. The students will be enabled to develop the skills and competencies
required for effective social work interventions. The students will be placed in appropriate agencies.   The
student will be required to choose an agency for placement based on her interest and focus area.</p>
</div>

    

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Close</button>
    </div>
  </form>
</div>

<div id="id04" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
      
	  <h2><center>Common Requirements</center></h2>
<p><br>
1.      Understanding the working of an agency in relation to the agency&#39;s goals– policies and philosophy.
2. Experiencing direct practice with the client systems and the management operations of the work of
the setting.
3.      Plan and organize a programme
4.      Preparation of a Concept paper (A concept paper is general paper that is written about a given
concept with information– statistics and persuasive arguments)</p>
</div>

    

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Close</button>
    </div>
  </form>
</div>
<div id="id03" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
     
	  <h2><center> Student Requirements</center></h2>
<p>Each student needs to submit daily report by text message to the faculty supervisor as soon as the work
ends at the placed Organisation. (refer annexure IV)
Each student needs to submit Weekly Report, after the completion of 6 working days in the format as
prescribed in the course. On submitting the report, they need to make weekly call to the Faculty Supervisor
for guidance and for more fieldwork learnings. (refer annexure IX)

Students are required to complete one Case work, one Group work and to organise one community
Programme within the Organisation with the guidance and help of the Organisation where they are placed.
After the fieldwork completion, they have to submit the consolidated report draft in the format as prescribed
in the course within 15 working days. After getting the comments of report from the faculty supervisor, the
student has to submit the fair draft of the Consolidated report for the total fieldwork period.
</p>
</div>

    

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Close</button>
    </div>
  </form>
</div>

 
<div style="padding-left:16px">
<h1><center> About</h1><hr>
<p><center>A course equipping young women to be
socially conscious professional individuals
committed to contribute their skills and
energies to civil society towards the building
of a just and equitable society.</center></p>
<h2>Papers Offered in MSW</h2>
<p>Fundamentals in Sociology & Social Work<br>
• Social Research<br>
• Fundamental Principles of Psychology<br>
• NGO Management & Capacity Building <br>
• Introduction to Social work Methods<br>
• Community Work & Social Development<br>
• Social Welfare Administration and Social Legislation<br>
• Indian Polity and Governance <br>
</p>
<h1><center>FIELDWORK INSTRUCTION</h1><hr>
<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>WORKSHOPS ON CORE LIFE SKILLS</h2><p><ul>
   Self awareness
Interpersonal relationship
- Effective communication
- Problem solving
- Critical thinking
- Decision-making
- Creative thinking
- Empathy
- Coping with stress and emotions</p></ul>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>OBSERVATION VISITS</h2>
      <p>- Governmental bodies

- Non – governmental bodies
- Local governmental bodies</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>RURAL CAMP</h2>
      <p>- Village exposure and Participatory Rural Appraisal (PRA)
- Street Theatre Workshop (3-5 days)</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>Social Work Interventions</h2>
      <p>- Intervention with individuals
- Intervention with a group
- Intervention with a community</p>
    </div>
  </div>
  

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</div>

</body>
</html>
