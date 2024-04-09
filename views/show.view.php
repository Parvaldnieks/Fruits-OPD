<?php require "views/components/head.php" ?>

<a href="/">To home</a>

<h1> <?= htmlspecialchars($post["name"]) ?> </h1>

<a href="/edit?id=<?= $post["id"]?>">Edit</a>

<?php require "views/components/footer.php" ?>