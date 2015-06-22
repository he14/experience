<div id="container">

	<div id="head">

		<header>		
			<div class="width">			
				<div style="float:right;margin-bottom:1em">
					<form action="/plattformen/experience-online/teama/de/fallstudien" method="get">				
						<input title="Geben Sie die Begriffe ein, nach denen Sie suchen." type="text" id="edit-keys" name="keys" value="" size="15" maxlength="128" class="form-text">
						<input type="submit" value="Suchen">
					</form>
				</div>				
				<h1><a href="/plattformen/experience-online/teama/">eXperi<span>ence</span></a></h1>
				<h2>online</h2>
			</div>		
			<?php if ($page['header']): ?>
			  <?php print render($page['header']); ?>
			<?php endif; ?>
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
				&copy; experience-online.ch 2015 by <a target="_blank" href="http://www.hf-ict.ch">hf-ict</a><span>|</span><a style="margin-left:0.5em" href="/plattformen/experience-online/teama/login">Login</a><span>|</span><?php print render($page['footer']); ?>
		</div>
	</footer>

</div>