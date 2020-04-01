<?php

    require 'classes/Database.php';

    $database = new Database;

    $database->query('SELECT * FROM posts');

    $rows = $database->resultset();
?>

<h1>Posts</h1>
<div>
    <?php foreach($rows as $row) : ?>
        <div>
            <!-- Title of the post -->
            <h3><?php echo$row['title']; ?></h3>

            <!-- Body of the post -->
            <p><?php echo$row['body']; ?></p>
        </div>
    <?php endforeach; ?>
</div>


