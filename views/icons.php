<?php
require "../includes/dashboard_header.php";
require "../controllers/icons_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container">
        <h2 class="_title">Icons</h2>

        <div class="container align-items-center justify-content-evenly">
            <?php
            if (!empty($icon_dir)) {
                foreach ($icon_array as $icon) {
            ?>
                    <img src="<?= $icon['i_path']  ?>" class="icon">
            <?php
                }
            }

            ?>
        </div>
    </div>
</div>


<?php
include "../includes/footer.php";
?>