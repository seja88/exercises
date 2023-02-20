<?php

// extract the success message from the session
$success_message = session()->get('success_message', null);

// extract error messages from the session
$error_messages = session()->get('errors', []);

?>

<?php if ($success_message) : ?>

    <div class="alert alert--success">
        <?= $success_message ?>
    </div>

<?php endif; ?>

<?php if ($error_messages) : ?>

    <?php foreach ($error_messages as $input_name => $errors) : ?>

        <?php foreach ($errors as $error) : ?>

            <div class="alert alert--error">
                <?= $error ?>
            </div>

        <?php endforeach; ?>

    <?php endforeach; ?>

<?php endif; ?>