<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QUản Lý Phòng Khám Trí Hùng</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo MY_URL; ?>/GUI/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo MY_URL; ?>/GUI/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo MY_URL; ?>/GUI/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo MY_URL; ?>/GUI/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo MY_URL; ?>/GUI/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo MY_URL; ?>/GUI/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo MY_URL; ?>">Quản Lý Phòng Khám Trí Hùng</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Thông Tin Tài Khoản</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo MY_URL; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#">&nbsp; Bệnh Nhân<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/benhnhan/ListBN.php">Danh Sách Bệnh Nhân</a>
                                </li>
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/benhnhan/AddBN.php">Thêm Bệnh Nhân</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">&nbsp; Phiếu Khám<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/phieukham/ListPK.php">Danh Sách Phiếu Khám</a>
                                </li>
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/phieukham/AddPK.php">Thêm Phiếu Khám</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">&nbsp; Thuốc<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/thuoc/ListThuoc.php">Danh Sách Thuốc</a>
                                </li>
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/thuoc/AddThuoc.php">Thêm Thuốc</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">&nbsp; Toa Thuốc<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/toathuoc/ListToaThuoc.php">Danh Sách Toa Thuốc</a>
                                </li>
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/toathuoc/AddToaThuoc.php">Lập Toa Thuốc</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">&nbsp; Chi Tiết Toa Thuốc<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/chitiettoathuoc/ListCTTT.php">Danh Sách Chi Tiết Toa Thuốc</a>
                                </li>
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/chitiettoathuoc/AddCTTT.php">Lập Chi Tiết Toa Thuốc</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">&nbsp; Hóa Đơn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/hoadon/ListHoaDon.php">Danh Sách Hóa Đơn</a>
                                </li>
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/hoadon/AddHoaDon.php">Lập Hóa Đơn</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">&nbsp; Báo Cáo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/baocao/DoanhThu.php">Doanh Thu</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><small>Lập </small> Chi Tiết Toa Thuốc
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px;">
                    
                    <?php if (isset($result)) echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Cảnh báo!</strong> '.$result.'</div>'; ?>
                    
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã Toa Thuốc</label>
                                <select name="MaToa" class="form-control" style="width: 50%;" tabindex="1" required>
                                    <?php foreach ($ListToaThuoc as $tt){ ?>
                                    <option value="<?php echo $tt['MATOA']; ?>">
                                        <?php echo $tt['MATOA']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Thuốc</label>
                                <select name="MaThuoc" class="form-control" style="width: 50%;" tabindex="2" required>
                                    <?php foreach ($ListThuoc as $thuoc){ ?>
                                    <option value="<?php echo $thuoc['MATHUOC']; ?>">
                                        <?php echo $thuoc['MATHUOC']; ?> - <?php echo $thuoc['TENTHUOC']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Số Lượng</label>
                                <input type="number" name="SoLuong" Class="form-control" style="width: 50%" tabindex="3" required />
                            </div>
                            <div class="form-group">
                                <label>Cách Dùng</label>
                                <textarea name="CachDung" Class="form-control" rows="5" style="width: 80%" tabindex="4" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" name="btnAddCTTT" value="Xác nhận" tabindex="5" required/>
                                <input type="reset" class="btn btn-primary" value="Làm mới" />
                            </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo MY_URL; ?>/GUI/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo MY_URL; ?>/GUI/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo MY_URL; ?>/GUI/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo MY_URL; ?>/GUI/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo MY_URL; ?>/GUI/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo MY_URL; ?>/GUI/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#sdt').blur(function(e) {
            if (validatePhone('sdt')) {
               sdt.setCustomValidity('');
            }
            else {
               sdt.setCustomValidity("Số thứ tự không hợp lệ");
            }
        });
    });

    function validatePhone(sdt) {
        var sdt = document.getElementById(sdt).value;
        var filter = /^[0-9-+]+$/;
        if (filter.test(sdt)) {
            return true;
        }
        else {
            return false;
        }
    }
    </script>
</body>

</html>