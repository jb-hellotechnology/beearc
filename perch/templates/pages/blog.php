<?php 
include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php'); 

perch_layout("global.header");
?>
<main>
	<section>
		<div>
			<?php

			if (perch_get('s')) {
				perch_blog_post(perch_get('s'));
			} else {
				echo "<h1>Blog</h1>";
				perch_blog_custom(array(
					'count'      => 10,
					'template'   => 'post_in_list_card.html',
					'sort'       => 'postDateTime',
					'sort-order' => 'DESC',
					'data' => [
						'section' => 'post'
					]
				));
			}
			?>
		</div>
	</section>
</main>

<?php
perch_layout("global.footer");
?>