<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){ ?>
      <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>
    <h2>
      <?php
        print_title();
      ?>
    </h2>
    <p>
      <?php
        print_description();
      ?>
    </p>
    <form action="update_process.php" method="post">
      <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
      <p>
        <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
      </p>
      <p>
        <textarea name="description"><?php print_description(); ?></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
<?php
require_once("view/bottom.php");
?>
