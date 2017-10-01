<h1>Alla användare</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Användarnamn</th>
            <th>Epost</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td><a class="btn" href="<?= $app->link('admin/user/update/' . $user->id) ?>">Edit</a><a class="btn" href="<?= $app->link('admin/user/delete/' . $user->id) ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
