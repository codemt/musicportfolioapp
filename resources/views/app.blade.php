<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      

        <title>MoonSky Records</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        
    </head>
    <body class="is-preload">
       <!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#" class="icon fa-home"><span>Home</span></a>
						<a href="#work" class="icon fa-folder"><span>Work</span></a>
						<a href="#videos" class="fas fa-video"><span>Videos</span></a>
						<a href="#contact" class="icon fa-envelope"><span>Contact</span></a>
						<a href="#aboutme" class="fas fa-address-card"><span>About Me</span></a>
						
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel intro">
								<header>
									<h1>Welcome to MoonSkyMusic </h1>
									<p> by the MoonKid</p>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
									<img src="{{ asset('images/moonskylogo.jpg') }}" alt="" />
								</a>
							</article>

						<!-- Work -->
							<article id="work" class="panel">
								<header>
									<h2>My Work Samples</h2>
								</header>
								<p>
									<!--Check out some of my Tracks here. <br>  i compose a lot of Trance & Dance and Rock & Pop Music. -->
								</p>
								<section>
									<div class="row">
										<div class="col-12 col-12-medium col-12-small">
											<a href="#" class="image fit">
												<div class="embed-responsive embed-responsive-16by9">
														<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/433042575&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
											 	 </div>
											</a>
										</div>
										<div class="col-12 col-12-medium col-12-small">
												<a href="#" class="image fit">
													<div class="embed-responsive embed-responsive-16by9">
														<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/275275964&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
													</div>
												</a>
											</div>
											<div class="col-12 col-12-medium col-12-small">
													<a href="#" class="image fit">
														<div class="embed-responsive embed-responsive-16by9">
																<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/275101428&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
														</div>
													</a>
												</div>
												<div class="col-12 col-12-medium col-12-small">
														<a href="#" class="image fit">
															<div class="embed-responsive embed-responsive-16by9">
																	<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/429320940&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
															</div>
														</a>
													</div>
													<div class="col-12 col-12-medium col-12-small">
															<a href="#" class="image fit">
																<div class="embed-responsive embed-responsive-16by9">
																		<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/276047901&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
																</div>
															</a>
														</div>

									</div>
								</section>
							</article>
								<!-- Work -->
								<article id="videos" class="panel">
										<header>
											<h2>Video Library</h2>
										</header>
										<p>
											
										</p>
										<section>
											<div class="row">
												<div class="col-12 col-12-medium col-12-small">
													<a href="#" class="image fit">
														<div class="embed-responsive embed-responsive-16by9">
																<iframe width="560" height="315" src="https://www.youtube.com/embed/CdiKtvDITac" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
														  </div>
													</a>
												</div>
												<div class="col-12 col-12-medium col-12-small">
														<a href="#" class="image fit">
															<div class="embed-responsive embed-responsive-16by9">
																	<iframe width="560" height="315" src="https://www.youtube.com/embed/0_0dRNZXOY4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															  </div>
														</a>
													</div>
												
											
											</div>
										</section>
									</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Contact Me</h2>
								</header>
								<form action="#" method="post">
									<div>
										<div class="row">
											<div class="col-6 col-12-medium">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="col-6 col-12-medium">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="col-12">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message" rows="6"></textarea>
											</div>
											<div class="col-12">
												<input type="submit" value="Send Message" />
											</div>
										</div>
									</div>
								</form>
							</article>
							<!-- About Me -->
							<article id="aboutme" class="panel">
									<header>
										<h2>About  Me</h2>
									</header>
									<p>
										Hello there.
										i am musician and Music producer from mumbai india.
										Feel free to collaborate and if you want you can get a track ghost produced by me. Here are a few sample tracks of mine. Cheers!
									</p>
								</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; MoonSky Records.</li><li>Design: <a href="mithilesh.herokuapp.com">CodeMT</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
