<?php require_once('partials/_head.php'); ?>

<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">Smart Health Consultancy - Admin Module</h1>
                        <p class="">Provide Your Email To Reset Password.</p>
                        <form method="POST" class="text-left">
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">EMAIL</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="email" type="email" class="form-control">
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" name="reset_password" class="btn btn-primary" value="">Reset Password</button>
                                    </div>
                                </div>
                                <p class="signup-link">Remebered Password ? <a href="index.php">Sign In</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('partials/_scripts.php'); ?>
</body>

</html>