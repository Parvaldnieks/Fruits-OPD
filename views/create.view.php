<?php require "views/components/head.php" ?>

<a href="/">To home</a>

<h1>Create a fruit</h1>

<form method="POST">

    <label>Name:
        <input name="name" value="<?= $_GET["name"] ?? "" ?>"/>
            <?php if(isset($errors["name"])) { ?>
                <p><?= $errors["name"] ?></p>
                    <?php } ?>
    </label>

    <label>calories:
        <input type="number" name="calories" value="<?= $_GET["calories"] ?? "" ?>"/>
            <?php if(isset($errors["calories"])) { ?>
                <p><?= $errors["calories"] ?></p>
                    <?php } ?>
    </label>

    <button>Poga</button>
</form>
                
<?php require "views/components/footer.php" ?>