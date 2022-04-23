<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin
                    <small>
                        Dashboard
                    </small>
                </h1>

                <?php
                $query = "SELECT * FROM users WHERE user_id= 1";

                $output = $gallery_database->runQuery($query);

                $result = mysqli_fetch_array($output);

                print_r($result);
                ?>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page

                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

    </div>
</div>
<!-- /.container-fluid -->