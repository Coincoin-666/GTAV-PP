<?php
require "../includes/dashboard_header.php";
require "../controllers/admin_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-items-center">
        <h2 class="_title">Add a new picture</h2>
        <div class="container border border-dark p-5">
            <div class="d-flex justify-content-evenly text-center">

                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data" method="POST">
                    <p><label for="ig_screenshot" class="form-label">
                            Choose a picture to upload. <span class="text-muted">Please note that we only accept .png files under 8MiB.</span>
                            <span class="fst-italic current_text red"><?= isset($pics_error['format_err']) ?? $pics_error['format_err'] ?></span>
                        </label></p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="8000000">
                    <input type="file" name="ig_screenshot" id="ig_screenshot" class="form-control">
                    <span class="fst-italic current_text red"><?= isset($pics_error['size_err']) ?? $pics_error['size_err'] ?></span>

                    <button type="submit" class="btn btn-primary mt-3" name="send_nudes">Send</button>
                </form>

            </div>

        </div>
    </div>
</div>

<?php
require "../includes/footer.php";
?>