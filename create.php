<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <p><a href="create  .php">create</a></p>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
<?php
require_once("view/bottom.php");
?>
