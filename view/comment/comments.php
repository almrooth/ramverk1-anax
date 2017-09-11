<h1>Comments</h1> 

<?php foreach ($comments as $comment) : ?>

    <article class="comment">
        <header>
            <a href="<?= $app->link("comment/" . $comment["id"]) ?>"># <?= $comment["id"] ?></a>
            <div>
                <a class="btn" href="<?= $app->link("comment/edit/" . $comment["id"]) ?>">Edit</a>
                <a class="btn" href="<?= $app->link("comment/delete/" . $comment["id"]) ?>">Delete</a>
            </div>
        </header>

            <p> <?= $comment["text"] ?></p>

        <footer>
            <img src="<?= $comment["gravatarLink"] ?>" alt="">
            <p>by <?= $comment["email"] ?></p>
        </footer>
    </article>

<?php endforeach; ?>



<form action="<?= $app->link("comment") ?>" method="post" class="comment-form">
    <h2>Post new comment</h2>
    
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label for="text">Comment</label>
        <textarea name="text" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn">Post comment</button>
</form>
