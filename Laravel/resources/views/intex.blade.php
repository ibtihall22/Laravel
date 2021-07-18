<!DOCTYPE html>


<head>

<title> Ebtihal </title>
<link rel="stylesheet" href="{{ asset('/css/mywebpage.css') }}">
<script src="{{ asset('/js/web.js') }}"></script>
</head>

<body>
<header>

<div class="warapper">
 
      <div class="Logo" >
        <img src="{{ asset('/img/stock-exchange-app.png') }}" alt="Logo"> 	
      </div>

      <ul class="menu" >
         <li><a href="#intex.blade.php">Home</a></li>
         <li><a href="#About">About</a></li>
         <li><a href="#Contact">Contact</a></li>
         <li><a href="#Projects">Portfolio</a></li>
       </ul> 
   </div>
    </header>

<div class ="section_one">
<img src="{{ asset('/img/software-development_06.png') }}" alt="#" style="width:90%;" >
<div class="text">
<h1>Ebtihal Alfaifi</h1>
<p>Information management</p>
</div>
</div>


<div class="content">
    <img src= "{{ asset('/img/124-1247454_web.png') }}" alt="" />
    <div class="details">
	<a name="About"></a>
	<h1>About me</h1>
        <p>I am a student of Information Management, and I'm seeking develop my skills and increase my knowledge.<br></p>
		<h3>Education</h3>
		   <p>2018-Now: Information Management,
           College of Computer and Information
           Science, Al-Imam Mohammed ibn Saud
           Islamic University, Riyadh.</p>
		   <h3>Skills</h3>
		   <ul>
		   <li>Microsoft Office Program</li>
		    <li>Java Programming</li>
			 <li>Java Script</li>
			  <li>SQL</li>
		   </ul>

    </div>
</div>
<div class="Projects">
<a name="Projects"></a>
 <h1> My Projects</h1>

<div class="gallery">
    
  
    <img src="{{ asset('/img/internet-of-things.jpg') }}" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">The discovery of a gas leak using Iot  </div>
</div>

<div class="gallery">
  
    <img src="{{ asset('/img/database.png') }}" alt="database" width="600" height="400">
  </a>
  <div class="desc">Database design for a delivery company</div>
</div>

<div class="gallery">
  
    <img src="{{ asset('/img/212-2125625_.png') }}" alt="web" width="600" height="400">
  </a>
  <div class="desc">Online store design</div>
</div>

<div class="gallery">
 
    <img src="{{ asset('/img/Links.jpeg') }}" alt="network" width="600" height="400">
  </a>
  <div class="desc"> This project aims to show how to
implement extra features for the protocol in the application layer.</div>
</div>




    <div class="column">
	<a name="Contact"></a>
	<h1>Contact Us</h1>
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.."required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
   
        <label for="message">Message</label>
        <textarea id="text" name="message" placeholder="Write something.." style="height:170px" maxlength="6000" required></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>



<div class="footer">
   <p>Author: Ebtihal Alfaifi<br>
  <a href="mailto:ebt.jaber@gmail.com">ebt.jaber@gmail.com</a></p>
</div>

  
</body>

</html>