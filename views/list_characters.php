<?php
require "../includes/dashboard_header.php";
require "../controllers/characters_ctrl.php";
?>

<div class="col-7 mt-4 current_text container">
    <div class="container">
        <h2 class="_title">Characters List</h2>
        <div class="container border border-dark p-5">
            <table class="table table-striped table-dark table-hover text-center">
                <thead>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </thead>

                <?php
                foreach ($list_all_characters as $character) {
                ?>
                    <tr>
                        <td>
                            <?= $character['char_fname'] ?>
                        </td>
                        <td>
                            <?= $character['char_lname'] ?>
                        </td>
                        <td>
                            <button class="btn" id="edit_btn"><a href="edit_character.php?char_id=<?= $character['char_id'] ?>"><i class="fas fa-edit"></i></a></button>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <button class="btn" type="submit" name="delete_character" id="trash_btn" value="<?= $character['char_id'] ?>"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include "../includes/footer.php";
?>