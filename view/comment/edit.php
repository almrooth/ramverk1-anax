<h1>Edit comment # <?= $comment["id"] ?></h1>

<form action="<?= $app->link("comment/edit") ?>" method="post" class="comment-form">
    <input type="hidden" name="id" value="<?= $comment["id"] ?>">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required value="<?= $comment["email"] ?>">
    </div>

    <div>
        <label for="text">Comment</label>
        <textarea name="text" cols="30" rows="10"><?= $comment["text"] ?></textarea>
    </div>

    <button type="submit" class="btn">Save comment</button>
</form>
