
<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WebSite</title>
<!-- scripts -->


<script
	src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
	integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
	crossorigin="anonymous"></script>

<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
	integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
	crossorigin="anonymous"></script>

<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
	crossorigin="anonymous"></script>

<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
	crossorigin="anonymous">

<style>
#backToTop {
	display: none; /* Hidden by default */
	position: fixed; /* Fixed/sticky position */
	bottom: 20px; /* Place the button at the bottom of the page */
	right: 30px; /* Place the button 30px from the right */
	z-index: 99; /* Make sure it does not overlap */
	outline: none; /* Remove outline */
	padding: 15px; /* Some padding */
	border-radius: 10px; /* Rounded corners */
	font-size: 18px; /* Increase font size */
}

#backToTop:hover {
	background-color: #555; /* Add a dark-grey background on hover */
}
</style>


<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {
		scroll_Function_Custom()
	};

	function scroll_Function_Custom() {

		//Get the button
		var mybutton = document.getElementById("backToTop");

		if (document.body.scrollTop > 20
				|| document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function top_scroll_frame_custom() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
</head>
<body>

	<!-- Header -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand"><img src="images/logo.png" alt="logo"
				width=140 height="80"> </a>

			<div
				class="collapse navbar-collapse justify-content-evenly container-fluid">
				<h3>
					Arvind Choudhary, <small class="text-muted">Automation
						Tester</small>
				</h3>
			</div>
			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
					<!-- <li class="nav-item"><a class="nav-link active"
						aria-current="page">links&gt;</a></li> -->
					<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#skill">Skill</a></li>
					<li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- body -->


	<!-- about -->
	<div class="card" id="about">
		<div class="card-header">
			<h4>About</h4>
		</div>
		<div class="card-body">

			<div class="container">
				<div class="row justify-content-evenly">
					<div class="col-4">
						<h5 class="card-title">Based in Mumbai</h5>
						<br>
						<p class="card-text">
							<img src="images/logo.png" class="img-fluid" alt="Myself">
						</p>
					</div>
					<div class="col-4">
						<h5 class="card-title">I Code, therefore I am.</h5>
						<p class="card-text">
							I am a young enthusiast who is keen on IT and anything about it
							since my first steps to High School. During the past few years, I
							gained lots of experience in this field due to the strong desire
							of becoming an expert. Today I am a senior front-end developer at
							one of the leading companies in the world. <br> <br> <strong>�For
								me, web development is more than coding. It's a canvas with a
								blank page and I am the artist to paint it with colors of
								coding�.</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Skill -->

	<div class="card" id="skill">
		<div class="card-header">
			<h4>Skill</h4>
		</div>
		<div class="card-body">

			<div class="container">
				<div class="row justify-content-evenly">
					<div class="col-4">
						<table class="table table-hover justify-content-evenly">
							<thead>
								<tr>
									<th>No.</th>
									<th>Name</th>
									<th>Category</th>
									<th>Years Of Exp.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Java</td>
									<td>Programming</td>
									<td>3.2</td>
								</tr>

								<tr>
									<td>2.</td>
									<td>Selenium</td>
									<td>Browser automation</td>
									<td>3.2</td>
								</tr>
								
								<tr>
									<td>3.</td>
									<td>TestNG</td>
									<td>Testing framework</td>
									<td>3.2</td>
								</tr>
							</tbody>
						</table>

					</div>
					<div class="col-4">
						<h5 class="card-title">I Code, therefore I am.</h5>
						<p class="card-text">
							I am a young enthusiast who is keen on IT and anything about it
							since my first steps to High School. During the past few years, I
							gained lots of experience in this field due to the strong desire
							of becoming an expert. Today I am a senior front-end developer at
							one of the leading companies in the world. <br> <br> <strong>�For
								me, web development is more than coding. It's a canvas with a
								blank page and I am the artist to paint it with colors of
								coding�.</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Experience -->
	<div class="card" id="experience">
		<div class="card-header">
			<h4>Experience</h4>
		</div>
		<div class="card-body">

			<div class="container">
				<div class="row justify-content-evenly">
					<div class="col-4">
						<h5 class="card-title">Based in Mumbai</h5>
						<br>
						<p class="card-text">
							<img src="images/logo.png" class="img-fluid" alt="Myself">
						</p>
					</div>
					<div class="col-4">
						<h5 class="card-title">I Code, therefore I am.</h5>
						<p class="card-text">
							I am a young enthusiast who is keen on IT and anything about it
							since my first steps to High School. During the past few years, I
							gained lots of experience in this field due to the strong desire
							of becoming an expert. Today I am a senior front-end developer at
							one of the leading companies in the world. <br> <br> <strong>�For
								me, web development is more than coding. It's a canvas with a
								blank page and I am the artist to paint it with colors of
								coding�.</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Contact -->

	<div class="card" id="contact">
		<div class="card-header">
			<h4>Contact</h4>
		</div>
		<div class="card-body">

			<div class="container">
				<div class="row justify-content-evenly">
					<div class="col-4">
						<h5 class="card-title">Based in Mumbai</h5>
						<br>
						<p class="card-text">
							<img src="images/logo.png" class="img-fluid" alt="Myself">
						</p>
					</div>
					<div class="col-4">
						<h5 class="card-title">I Code, therefore I am.</h5>
						<p class="card-text">
							I am a young enthusiast who is keen on IT and anything about it
							since my first steps to High School. During the past few years, I
							gained lots of experience in this field due to the strong desire
							of becoming an expert. Today I am a senior front-end developer at
							one of the leading companies in the world. <br> <br> <strong>�For
								me, web development is more than coding. It's a canvas with a
								blank page and I am the artist to paint it with colors of
								coding�.</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- go to TOP button -->
	<button onclick="top_scroll_frame_custom()"
		class="btn btn-outline-secondary" style="width: 100px;" id="backToTop"
		title="Go to top">Top</button>



</body>
</html>
