<?php
// our errors file that we will be using a foreach loop
// array_push - different messages for different errors
// if we have errors -- we need to display them
if (count($errors) > 0): ?>
    <style>
        .error {
            color: red;
            font-style: italic;
            font-size: 0.9em;
            margin-top: 15px;
            text-align: left;
        }
    </style>
    <div class="errors">
        <?php foreach ($errors as $error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endforeach; ?>
    </div>
    <!-- end div -->
<?php endif; ?>
