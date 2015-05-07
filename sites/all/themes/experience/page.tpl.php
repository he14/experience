<div id="container">

	<div id="head">

		<header>
			<div class="width">
				<h1><a href="/">eXperi<span>ence</span></a></h1>
				<h2>online</h2>
			</div>
		</header>

		<nav>
			<div class="width" id="mainnav">
				<?php if ($primary_nav): print $primary_nav; endif; ?>
			</div>
		</nav>

	</div>


	<div id="body" class="width">

		<section id="content">
			<?php print render($page['content']); ?>
		</section>

		<div class="clear"></div>
	</div>

	<footer>
		<div class="footer-bottom">
			<?php print render($page['footer']); ?>
			<p>&copy; experience-online.ch 2015 by <a target="_blank" href="http://www.hf-ict.ch">hf-ict</a></p>
		</div>
	</footer>

</div>