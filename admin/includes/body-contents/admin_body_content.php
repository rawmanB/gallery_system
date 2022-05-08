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
                $user = new User();  //instansitating User class
                $userSet = $user->findUsers();

                while ($row = mysqli_fetch_array($userSet)) {
                    print_r($row);
                }

                // print_r(mysqli_fetch_array($output));
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