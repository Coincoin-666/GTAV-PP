<?php
require "../includes/dashboard_header.php";
require "../controllers/pics_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-items-center">
        <h2 class="_title">Add a new picture</h2>
        <div class="container border border-dark p-5">
            <?php
            
            var_dump($_FILES);
            ?>
            <div class="d-flex justify-content-evenly text-center">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data" method="POST">
                    <p><label for="ig_screenshot" class="form-label">
                            Choose a picture to upload. <span class="text-muted">Please note that we only accept .png files under 8MiB.</span>
                            <span class="fst-italic current_text red"><?= isset($img_error['format_err']) ?? $img_error['format_err'] ?></span>
                        </label></p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="8000000">
                    <input type="file" name="send_nudes" id="send_nudes" class="form-control">
                    <span class="fst-italic current_text red"><?= isset($img_error['size_err']) ?? $img_error['size_err'] ?></span>

                    <button type="submit" class="btn btn-primary mt-3">Send</button>
                </form>

            </div>

        </div>
    </div>
</div>

<?php
require "../includes/footer.php";
?>