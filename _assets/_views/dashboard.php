<?php

require_once("../../_controllers/DashboardController.php");

use Dashboard\DashboardController;

$dash = new DashboardController();




?>

<input type="checkbox" id="cke">

		<div class="base">
			<nav>
				<?php $dash->typeNavbar();?>
			</nav>

			<div class="full">

				<header>
					<?php $dash->header();?>
				</header>

				<section>
                    <?php $dash->content("estrutura"); ?>
                </section>

				<footer><?php $dash->footer();?></footer>
			</div>
		</div>