	<footer class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-3">
					<p><strong>Navigate</strong></p>
					<ul>
						<!-- site navigation tabs -->
						
						<li>
							<a href="/index.php">Home</a>
						</li>
						
						<li>
							<a href="/about.php">About</a>
						</li>
						
						<li>
							<a href="/get_involved.php">Get Involved</a>
						</li>
						
						<li>
							<a href="/installfest.php">Installfest</a>
						</li>
						
						<li>
							<a href="/events.php">Events</a>
						</li>

					</ul>
				</div>
				<div class="col-12 col-md-4 col-lg-3">
					<p><strong>UMBC</strong></p>
					<ul>
						<!-- RIT footer links -->
						
						<li>
							<a href="https://www.umbc.edu/">University Website</a>
						</li>
						
						<li>
							<a href="https://www.csee.umbc.edu/">CSEE Website</a>
						</li>
						
					</ul>
				</div>
				<div class="col-12 col-md-4 col-lg-3">
					<p><strong>Linux Resources</strong></p>
					<ul>
						<!-- linux resources -->
						
						<li>
							<a href="https://wiki.archlinux.org/">ArchWiki</a>
						</li>
						
						<li>
							<a href="https://kernelnewbies.org/">Kernel Newbies</a>
						</li>
						
						<li>
							<a href="https://reddit.com/r/linux">Linux Subreddit</a>
						</li>
						
						<li>
							<a href="https://distrowatch.org/">DistroWatch</a>
						</li>
						
					</ul>
				</div>
				<div class="col-12 col-md-4 col-lg-3">
					<p><strong>Feeds</strong></p>
					<ul>
						<!-- feeds -->
						
						<li>
							<a href="https://ritlug.com/feeds/latest.xml">Announcements</a>
						</li>
						
						<li>
							<a href="https://ritlug.com/feeds/talks.xml">Talks</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
			$(document).ready(function() {
				$('li.active').removeClass('active').removeAttr('aria-current');
				$('a[href="' + location.pathname + '"]').closest('li').addClass('active').attr('aria-current', 'page'); 
			});
	</script>
</html>