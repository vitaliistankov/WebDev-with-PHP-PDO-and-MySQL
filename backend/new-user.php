<?php require_once('./includes/header.php'); ?>

    <body class="nav-fixed">
        <?php require_once('./includes/top-navbar.php'); ?>
        
        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php 
                    $curr_page = basename(__FILE__);
                    require_once("./includes/left-sidebar.php");
                ?>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                    <span>Create New User</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <?php
                        if(isset($_POST['create'])) {
                            echo "You have cliked on create now button!";
                        }
                    ?>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Create New User</div>
                            <div class="card-body">
                                <form action="new-user.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="user-name">User Name:</label>
                                        <input name="user-name" class="form-control" id="user-name" type="text" placeholder="User Name..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="nickname">Nick Name:</label>
                                        <input name="nick-name" class="form-control" id="nickname" type="text" placeholder="Nick Name..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-email">User Email:</label>
                                        <input name="user-email" class="form-control" id="user-email" type="email" placeholder="User Email..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="password">User Password:</label>
                                        <input name="user-password" class="form-control" id="password" type="password" placeholder="Enter password..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-role">User Role:</label>
                                        <select name="user-role" class="form-control" id="user-role">
                                            <option value="admin">Admin</option>
                                            <option value="subscriber">Subscriber</option>
                                        </select>
                                        <div class="form-group">
                                        <label for="post-title">Choose photo:</label>
                                        <input name="user-photo" class="form-control" id="post-title" type="file" />
                                    </div>
                                    </div>
                                    <button name="create" class="btn btn-primary mr-2 my-1" type="submit">Create now!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->
                </main>

<?php require_once('./includes/footer.php'); ?>