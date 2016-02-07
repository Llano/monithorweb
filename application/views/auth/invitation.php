<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Request a invite</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
        <script src="/assets/js/jquery-2.1.1.min.js"></script>

        <script src="/assets/js/bootstrap.min.js"></script>

    </head>
    <body id="auth-body">
        <div id="container">
            <div id="auth-container">
                <h1>Request a invite</h1>
                <?php echo form_open(); ?>
                <div class="form-group">
                    <?php echo form_input(array('name' => 'email', 'placeholder' => 'Email', 'class' => 'form-control', 'autocomplete' => 'off')); ?>
                    <p>Feel free to describe what kind of servers you want to monitor and administrate, and maybe link to your clan/server website, BIStudio forum account etc..</p>
                    <?php
                    echo form_textarea(array('name' => 'desc', 'class' => 'form-control'));

                    ?>
                </div>
                    <?php
                    echo form_submit('submit', 'Submit');
                    echo form_close(); ?>

            </div>
        </div>
    </body>
</html>
