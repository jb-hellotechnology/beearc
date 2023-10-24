
		<aside class="background_dark">
			<div>
				<div class="flow">
					<p>"Whoever looks at a beehive should actually say with an exalted mind; making this detour by way of the beehive the entire cosmos can find its way into human beings and help to make them sound in mind and body."</p>
					<p><strong>Rudolf Steiner<br />
						Nine Lectures on Bees, 1923</strong></p>
				<?php
					perch_blog_custom(array(
						'count'      => 1,
						'template'   => 'post_in_list_card_home.html',
						'sort'       => 'postDateTime',
						'sort-order' => 'DESC',
						'data' => [
							'section' => 'post'
						]
					));
				?>
				</div>
				<div class="flow">
					
				</div>
				<div class="flow">
					<p><strong>Follow Us</strong></p>
					<ul class="social">
						<li><a href="https://www.facebook.com/thebeearc/"><i class="fab fa-facebook fa-2xl"></i></a></li>
						<li><a href="https://www.instagram.com/thebeearc"><i class="fab fa-instagram fa-2xl"></i></a></li>
						<li><a href="https://www.linkedin.com/company/90760797/"><i class="fab fa-linkedin fa-2xl"></i></a></li>
					</ul>
				</div>
				<div class="flow">
					
				</div>
				<div class="form">
					
				</div>
			</div>
		</aside>

	</main>
	
	<footer>
		<div>
			<p class="size_400">
				<strong>The BeeArc &mdash; <span>Inspired by the Honeybee</span></strong><br />
				&copy; Apiceutical Research Centre Ltd <?php echo date('Y'); ?><br />
				Company Reg. 07773688 | <a href="/privacy/">Privacy</a> | <span><a href="mailto:info@beearc.com">info@beearc.com</a></span>
			</p>
			<ul>
				<li><img src="/perch/resources/beearcblue.svg" alt="HerbMark Accredited" /></li>
			</ul>
		</div>
	</footer>
	</body>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script src="/assets/js/fitvid.js"></script>
	<script>
		$('header nav button').click(function(){
			$('header nav').toggleClass('show');
		})
		$(document).ready(function(){
			// Target your .container, .wrapper, .post, etc.
			$("section").fitVids();
		});
	</script>
	</html>