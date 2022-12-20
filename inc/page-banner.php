<div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(<?= !empty($banner_img_url) ? $banner_img_url : 'images/bg/page_title_bg.jpg'; ?>);">
	<ul>
		<li><a href="<?= $baseurl; ?>">Home</a></li>
		<?php
			if (!empty($page_parent)) {
				echo '<li><a href="'.$page_parent_url.'">'.$page_parent.'</a></li>
					<li>'.$page_name.'</li>';
			}else{
				echo '<li>'.$page_name.'</li>';
			}

		?>
	</ul>
</div>