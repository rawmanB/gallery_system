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
                // $user = new User();  //instansitating User class or we can use static method as following
                $userSet = User::findUsers();

                while ($row = mysqli_fetch_array($userSet)) {
                    // print_r($row);
                }

                $user = User::findUserById('1');
                echo '<br>';
                // print_r($user);
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