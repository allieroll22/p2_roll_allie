<style type="text/css">
@font-face {
  font-family: "opensans";
  src: url("../fonts/opensans.ttf");
}

nav {
  position: fixed;
  padding: 0;
  background-color: #F6DFD4;
  top: 0;
  left: 0;
  right:0;
}

nav a {
  text-decoration: none;
  font-family: opensans;
  color: white;
  font-weight: bold;
  font-size: 20px;
  margin:0 10px;
}

/* visited link */
nav a:visited {
  color: black;
}

/* mouse over link */
nav a:hover {
  background: #BDBDBD;
  color: black;
}

/* remove list bullets */
nav ul {
  list-style-type:none;
}

/* nav display horizontal */
nav ul li {
  display:inline;
}

body {
  background-color: #BDBDBD;
  background-attachment: fixed;
  background-position: center;
  text-align: center;
}

h1 {
  font-size: 30px;
  color: white;
}

p {
  font-size: 25px;
  color: white;
}
</style>


<header>

<!--Navigation Bar-->
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="resume.html">Resume</a><li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
  
</header>

<body>
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</body>
