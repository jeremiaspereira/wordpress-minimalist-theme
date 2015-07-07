	</div>
	<footer class="footer">
		<div class="container">
			<div class="row">
   			<div class="col-md-8">
			 		<ul>
			        <li>&copy; Minimalist | <?php echo date("Y") ?> | Volte sempre!</li>
			   		</ul>
				</div>
				<div class="col-md-4">
				<ul class="social-footer">
					<li>
						<a href="" target="_brank" title="Google +"> <i class="fa fa-google-plus"></i></a>
						<a href="" target="_brank" title="Twitter"><i class="fa fa-twitter"></i></a>
						<a href="" target="_brank" title="Flickr"><i class="fa fa-flickr"></i></a>
						<a href="" target="_brank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="" target="_brank" title="Instagram"><i class="fa fa-instagram"></i></i></a>
					</li>
				</ul>
				</div>
			</div>

			<div class="sidebar">
				<div class="row">
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<div id="secondary" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			$(function(){
				$( "#menuHeader" ).hide();
				var vira = 0;
				$( "#btnBars" ).click(function() {
					$( "#menuHeader" ).toggle(600);
				});
			});
		</script>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>