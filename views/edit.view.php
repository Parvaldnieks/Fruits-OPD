<?php require "views/components/head.php" ?>

<a href="/show?id=<?= $post["id"]?>">To show</a>

<h1>Edit a fruit</h1>

<form method="POST">

<input name="id" value="<?= $post["id"] ?>" type="hidden" />

    <label>Name:
        <input name="name" value="<?= $_POST["name"] ?? $post["name"] ?>"/>
            <?php if(isset($errors["name"])) { ?>
                <p> <?= $errors["name"] ?> </p>
            <?php } ?>
    </label>

    <label>Calories:
        <input type="number" name="calories" value="<?= $_POST["calories"] ?? $post["calories"] ?>"/>
            <?php if(isset($errors["calories"])) { ?>
                <p> <?= $errors["calories"] ?> </p>
            <?php } ?>
    </label>

    <button>Save</button>
</form>

<?php require "views/components/footer.php" ?>