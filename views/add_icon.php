<?php
require "../includes/dashboard_header.php";
require "../controllers/icons_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-items-center">
        <h2 class="_title">Add a new icon</h2>
        <div class="container border border-dark p-5">

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data" method="POST">
                <div class="row g-3 align-items-end">

                    <div class="col-6">
                        <label for="new_icon" class="form-label">
                                Choose an icon. <span class="text-muted">*</span>
                                <span class="fst-italic current_text red"><?= isset($img_error['format_err']) ?? $img_error['format_err'] ?></span>
                            </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="8000000">
                        <input type="file" name="new_icon" id="new_icon" class="form-control">
                        <span class="fst-italic current_text red"><?= isset($img_error['size_err']) ?? $img_error['size_err'] ?></span>
                    </div>
                    <div class="col-6">
                        <label for="icon_name" class="form_label mb-2">Label</label>
                        <input type="text" name="icon_name" id="icon_name" class="form-control">
                    </div>
                    <div class="container">
                        <span class="text-muted">* .svg only.</span>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="container d-flex justify-content-end me-4">
                        <button type="submit" class="btn btn-primary mt-3">Send</button>
                    </div>
                </div>

            </form>
            
        </div>
    </div>
</div>

<?php
require "../includes/footer.php";
?>