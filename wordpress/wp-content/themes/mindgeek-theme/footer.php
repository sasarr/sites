			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<nav>
						<a href="<?php echo home_url(); ?>">Accueil</a>
						<a href="<?php echo home_url(); ?>/serveur-mutualise">Serveur Mutualisé</a>
						<a href="<?php echo home_url(); ?>/serveur-dedie">Serveur Dédié</a>
						<a href="<?php echo home_url(); ?>/solution-cloud">Solution "Cloud"</a>
						<a href="<?php echo home_url(); ?>/contact">Contact</a>
						<a href="<?php echo home_url(); ?>/wp_admin">Se connecter</a>
					</nav>
					
					<p>
						<a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">
							<img alt="Propriété de la 3W Academy" style="border-width:0" src="<?php echo get_template_directory_uri(); ?>/img/big.png" />
						</a>
					</p>
					
					<p>
						&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
					</p>
					
					<p>
						<small>
							<span>Cet exercice</span> de <a href="https://3wa.fr">3W Academy</a> est mis à disposition <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">pour l'usage personnel des étudiants, Pas de Rediffusion - Attribution - Pas d'Utilisation Commerciale - Pas de Modification - International</a>.<br />Les autorisations au-delà du champ de cette licence peuvent être obtenues auprès de <a href="mailto:contact@3wa.fr" rel="cc:morePermissions">contact@3wa.fr</a>. Les maquettes ont été réalisées par <a href="http://www.justine-muller.fr">Justine Muller</a>.
						</small>
					</p>
				</div>

				<!-- copyright -->
				<!--<p class="copyright">
					&copy; <?php //echo date('Y'); ?> Copyright <?php //bloginfo('name'); ?>. <?php //_e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>-->
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
