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
                            <div class="page-header-content d-flex align-items-center justify-content-between text-white">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="chevrons-up"></i></div>
                                    <span>Categories</span>
                                </h1>
                                <a href="new-category.html" title="Add new category" class="btn btn-white">
                                    <div class="page-header-icon"><i data-feather="plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Table-->
                    <div class="container-fluid mt-n10">

                        <div class="card mb-4">
                            <div class="card-header">All Categories</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Total Posts</th>
                                                <th>Post Views</th>
                                                <th>Created By</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">
                                                        Lifestyle
                                                    </a>
                                                </td>
                                                <td>20</td>
                                                <td>61</td>
                                                <td>Md. A. Barik</td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>     
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="#">
                                                        Loved
                                                    </a>
                                                </td>
                                                <td>20</td>
                                                <td>61</td>
                                                <td>Md. A. Barik</td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="#">
                                                        Programming
                                                    </a>
                                                </td>
                                                <td>20</td>
                                                <td>61</td>
                                                <td>Md. A. Barik</td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </main>

<?php require_once('./includes/footer.php'); ?>