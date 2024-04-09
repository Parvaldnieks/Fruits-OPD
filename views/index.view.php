<?php require "views/components/head.php" ?>

  <form>
  <a>Calories less than...</a>
    <input type="number" name='calories' value='<?= ($_GET["calories"] ?? "") ?>' />
    <button>Filter by calories</button>
  </form>

  <h1>Fruits</h1>

  <ul>
    <?php foreach($posts as $post) { ?>

    <li>
    <a>One</a>
        <a href="/show?id=<?= $post["id"]?>"> <?= htmlspecialchars($post["name"]) ?></a>
    <a>has <?= htmlspecialchars($post["calories"]) ?> calories</a>
        <form method="POST" action="/delete">
        <button name="id" value="<?= $post["id"] ?>">Delete</button> </form>
    </li>

    <?php } ?>
  </ul>
  <a href="/create">Create a fruit</a>
<?php require "views/components/footer.php" ?>