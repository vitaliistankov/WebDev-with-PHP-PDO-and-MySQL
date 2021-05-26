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
                                    <div class="page-header-icon"><i data-feather="mail"></i></div>
                                    <span>Orders</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">All Orders</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>Device</th>
                                                <th>Details</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Confirm</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM orders";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute();
                                                while($ord = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    $ord_id = $ms['ord_id'];
                                                    $ord_title = $ms['ord_title'];
                                                    $ord_username = $ms['ord_username'];
                                                    $ord_useremail = $ms['ord_useremail'];
                                                    $ord_device = $ms['ord_device'];
                                                    $ord_details = substr($ord['ord_detail'], 0, 20);
                                                    $ord_status = $ord['ord_status']; 
                                                    $ord_state = $ms['ord_state']; ?>
                                                        <tr>
                                                            <td><?php echo $ord_id; ?></td>
                                                            <td>
                                                                <?php echo $ord_title; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $ord_username; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $ord_useremail; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $ord_device; ?>
                                                            </td>
                                                            <td><?php echo $ord_details; ?></td>
                                                            <td>10 May 2021</td>
                                                            <td>
                                                                <div class="badge badge-<?php echo $ord_status=="Диагностика"?"warning":"success"; ?>">
                                                                    <?php echo $ord_status; ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    if($ord_state == 0) { ?>
                                                                        <form action="reply.php" method="POST">
                                                                            <input type="hidden" name="id" value="<?php echo $ord_id; ?>" >
                                                                            <button name="response" type="submit" class="btn btn-success btn-icon"><i data-feather="mail"></i></button>
                                                                        </form>
                                                                   <?php } else { ?>
                                                                        <button title="Already responded!" class="btn btn-success btn-icon"><i data-feather="check"></i></button>
                                                                   <?php }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    if(isset($_POST['delete'])) {
                                                                        $id = $_POST['id'];
                                                                        $sql = "DELETE FROM orders WHERE ord_id = :id";
                                                                        $stmt = $pdo->prepare($sql);
                                                                        $stmt->execute([
                                                                            ':id' => $id
                                                                        ]);
                                                                        header("Location: orders.php");
                                                                    }
                                                                ?>
                                                                <form action="orders.php" method="POST">
                                                                    <input type="hidden" name="id" value="<?php echo $ord_id; ?>" >
                                                                    <button name="delete" type="submit" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr> 
                                                <?php }
                                            ?> 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->
                </main>

<?php require_once('./includes/footer.php'); ?>