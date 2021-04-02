<?php 

require_once 'includes/components.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        <?php require_once 'style/styles.css'; ?>
    </style>
</head>
<body>
    
    <main class="reg-main">

        <!-- HEADER section -->
            <section class="reg-heading">
                <h1>Create an Account</h1>
            </section>
        <!-- end of HEADER section -->

        <!-- IMAGE section -->
            <section class="img-section">
                <!-- <h2>food-4-oL</h2>
                <h3>(Zero-Hunger Movement)</h3> -->
            </section>
        <!-- end of IMAGE section -->

        <!-- FORM section -->
            <section class="form-section">
                <form action="">
                    <?php field('username', 'Username', 'text'); ?>
                    <?php field('email', 'Email', 'text'); ?>
                    <?php field('contact', 'Contact Number', 'text'); ?>
                    <?php field('pass', 'Password', 'password'); ?>
                    <?php field('cpass', 'Confirm Password', 'password'); ?>
                    <?php button('login-form', 'register', 'SIGN UP') ?>
                </form>
            </section>
        <!-- end of FORM section -->

    </main>

</body>
</html>