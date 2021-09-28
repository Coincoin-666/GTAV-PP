<?php
require "../includes/dashboard_header.php";
require "../controllers/pics_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container">
        <h2 class="_title">In Game Screenshots</h2>
        <div class="container border border-dark p-5">


<?php
var_dump($_FILES);
var_dump($img_path_array);
var_dump($img_uniqid_array);


if (!empty($img_dir)) {
    echo '<img src="' . $img_path_array['uploaded_img_path'] . $img_uniqid_array['img_uniqid'] . '">';
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
</div>

<?php
include "../includes/footer.php";
?>