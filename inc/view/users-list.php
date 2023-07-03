<main class="msz-container">
    <h1>Users list</h1>

    <?php if (!empty($success)): ?>
        <?php foreach ($success as $item): ?>
            <div class='message message--success'>
                <?php echo $item; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <?php foreach ($errors as $item): ?>
            <div class='message message--error'>
                <?php echo $item; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <div class="users-list">
        <a href="/?action=add" class="users-list__add-button button button--green">Dodaj użytkownika</a>

        <?php if (!empty($users)): ?>
            <table>
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>

                        <th>
                            Username
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Address
                        </th>

                        <th>
                            Phone
                        </th>

                        <th>
                            Website
                        </th>

                        <th>
                            Company
                        </th>

                        <th>
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                        <?php if (!empty($user['id'])): ?>
                            <tr>
                                <td>
                                    <?php echo getDataUser($user['name']); ?>
                                </td>

                                <td>
                                    <?php echo getDataUser($user['username']); ?>
                                </td>

                                <td>
                                    <?php if (getDataUser($user['email']) !== '-'): ?>
                                        <a href='mailto:<?php echo getDataUser($user['email']); ?>'>
                                            <?php echo $user['email']; ?>
                                        </a>
                                    <?php else: ?>
                                        <?php echo getDataUser($user['email']); ?>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php echo getDataAddressUser($user['address']); ?>
                                </td>

                                <td>
                                    <?php echo getDataUser($user['phone']); ?>
                                </td>

                                <td>
                                    <?php echo getDataUser($user['website']); ?>
                                </td>

                                <td>
                                    <?php echo getDataCompanyUser($user['company']); ?>
                                </td>

                                <td>
                                    <form method="POST" action="">
                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                        <input type="submit" name="delete_user" class="button button--red" value="Delete user"
                                            onclick="return confirm('Do you really want to delete this user?')">
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        <?php endif; ?>
    </div>
</main>