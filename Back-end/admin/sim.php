<?php 
    session_start();
    include "classes/news.php";
    include "classes/addblog.php";
?>
<?php
    $news = new news();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "view/header.php";

?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        include "view/sidebar.php";
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php 
                include "view/topbar.php";
                ?>
                <!-- Begin Page Content -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <form action="blog.php" method="post" enctype="multipart/form-data" class="post-form">
                            <h1 class="text-center">SIM</h1>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label" >Số Thuê Bao :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="SĐT">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label" >Giá Nhập :</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descripsion" class="col-sm-2 col-form-label">Giá Bán :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="descripsion" name="descripsion">
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="loaisim" class="col-sm-2 col-form-label">Loại Sim :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="loaisim" name="loaisim">
                                        <option value = "0">Sim Thường</option>
                                        <option value = "1">Sim Năm Sinh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="khosim" class="col-sm-2 col-form-label">Kho Sim :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="khosim" name="khosim">
                                        <option value = "0">Kho 1</option>
                                        <option value = "1">Kho 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row-2 text-md-center">
                                <button type="submit" name="add-sim" class="btn btn-primary col-sm-2">Thêm Sim</button>
                                <button type="submit" name="update-sim" class="btn btn-primary col-sm-2">Cập Nhật Sim</button>
                            </div>
                        </form>

                        <!-- Pop-up Modal to display image URL -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh Sách Sim</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-md-center">Số Thuê Bao</th>
                        <th class="text-md-center">Giá Nhập</th>
                        <th class="text-md-center">Giá Bán</th>
                        <th class="text-md-center">Loại Sim</th>
                        <th class="text-md-center">Kho Sim</th>
                        <th class="text-md-center">Ngày Nhập</th>
                        <th class="text-md-center">Thao Tác</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-md-center">Số Thuê Bao</th>
                        <th class="text-md-center">Giá Nhập</th>
                        <th class="text-md-center">Giá Bán</th>
                        <th class="text-md-center">Loại Sim</th>
                        <th class="text-md-center">Kho Sim</th>
                        <th class="text-md-center">Ngày Nhập</th>
                        <th class="text-md-center">Thao Tác</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-md-center">
                            <a href="update-blog.php?id=">
                                <button type="submit" class="btn btn-primary" name= "update" value="">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                            </a>
                            <a href="quanly-blog.php?delete=">    
                                <button type="submit" class="btn btn-primary" name="delete" value="">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-x-circle-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                        </svg>
                                </button>
                            </a>    

                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    </div>
        <!-- End of Main Content -->

    <?php
            include "view/footer.php";
    ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>