<style type="text/css">
	@media (max-width: 767.98px) {
		._wrapper-header-profil{
			margin-bottom: 0px;
			display: none !important;
		}
	}
	@media (min-width: 768px) {
		._wrapper-header-profil{
			margin-bottom: -90px;
		}
	}
</style>
<section class="p-0 ">
	<div class="container ">
		<?php IncludePage(["header-profil"])?>
		<div class="row">
			<div class="col-md-4 col-12 ">

				<?php

					$pages = [
						"sidebar-profil",		
					];
					IncludePage($pages)
				?>
			</div>
			<div class="col-md-8 col-12">
				<?php

					$pages = [
						"tab-profil",
						"exam-result",
						"articles"
					];
					IncludePage($pages)
				?>
			</div>
		</div>
</section>