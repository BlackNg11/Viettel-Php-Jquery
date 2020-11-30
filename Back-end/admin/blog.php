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
                            <h1>Nhập Blog</h1>
                          <form>
                              <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="descripsion">Descripsion</label>
                                <input type="text" class="form-control" id="descripsion">
                            </div>
                            <div class="form-group">
                                <label for="editor">Content</label>
                                <input type="text" class="form-control" id="editor">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php
        include "view/footer.php";
        ?>

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
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
    
</script>
</body>

</html>