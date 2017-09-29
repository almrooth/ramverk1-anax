<nav class="site-navbar">
    <ul>
        <li><a href="<?= $app->link("report") ?>">Redovisningar</a></li>
        <li class="navbar-dropdown">
            Blandat
            <ul>
                <li><a href="<?= $app->link("comments") ?>">Kommentarsystem</a></li>
                <li><a href="<?= $app->link("book") ?>">Bokhyllan</a></li>
                <li><a href="<?= $app->link("remserver") ?>">REM-server</a></li>
            </ul>
        </li>
        <li><a href="<?= $app->link("about") ?>">Om sidan</a></li>
    </ul>
</nav>
