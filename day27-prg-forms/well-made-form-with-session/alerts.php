<?php

require_once 'helpers.php';
require_once 'Session.php';

// extract the success message from the session
$success_message = session()->get('success_message', null);

// extract error messages from the session
$error_messages = session()->get('error_messages', []);

?>

<?php if ($success_message) : ?>

    <style>
        .success-message {
            background-color: lightgreen;
            padding: 1em;
            border: 1px solid green;
        }
    </style>
    <div class="success-message">
        <?= $success_message ?>
    </div>

<?php endif; ?>

<?php if ($error_messages) : ?>

    <style>
        .error-message {
            background-color: pink;
            padding: 1em;
            border: 1px solid red;
        }
    </style>

    <?php foreach ($error_messages as $input_name => $errors) : ?>

        <?php foreach ($errors as $error) : ?>

            <div class="error-message">
                <?= $error ?>
            </div>

        <?php endforeach; ?>

    <?php endforeach; ?>

<?php endif; ?>