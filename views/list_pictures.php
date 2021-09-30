<?php
require "../includes/dashboard_header.php";
require "../controllers/pics_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container">
        <h2 class="_title">Uploaded Pictures <span class="text-muted">(scaled)</span></h2>

        <div class="container align-items-center justify-content-evenly">
            <?php
            if (!empty($img_dir)) {
                foreach ($img_path_array as $path) {
            ?>
                    <figure class="figure img_gallery">
                        <img src="<?= $path[0] ?>" alt="" class="img-fluid" name="img_uniqid">
                    </figure>
                <?php
                }
                ?>
                <figcaption class="figure-caption">

                </figcaption>

        </div>
    <?php
            }
    ?>

    <!-- Carousel Bootstrap -->

    <!-- <div id="ig_screenshot_carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#ig_screenshot_carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#ig_screenshot_carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div> -->

    <!-- /end Carousel Bootstrap -->

    </div>
</div>


<?php
include "../includes/footer.php";
?>