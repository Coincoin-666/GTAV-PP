<?php
require "../includes/dashboard_header.php";
require "../controllers/characters_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container justify-content-center align-item-center">
        <form action="" method="POST">
            <h2 class="_title">Edit Character</h2>
            <div class="container border border-dark p-5">
                <div class="row g-3">
                    <div class="col-6">
                        <label for="char_fname" class="form-label">First Name</label>
                        <input type="text" name="char_fname" id="char_fname" value="<?= $infos_character['char_fname'] ?>" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="char_lname" class="form-label">Last Name</label>
                        <input type="text" name="char_lname" id="char_lname" value="<?= $infos_character['char_lname'] ?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="offset-1">
                    <button type="submit" name="edit_char_btn" class="btn btn-dark ms-2">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<?php
include "../includes/footer.php";
?>