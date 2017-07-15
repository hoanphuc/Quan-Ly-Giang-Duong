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
                                <li>
                                    <a href="<?php echo MY_URL; ?>/BLL/baocao/thongkeBN.php">Số Bệnh Nhân Đến Khám</a>
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
                        <h1 class="page-header"><small>Sửa thông tin </small> Bệnh Nhân
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px;">
                    
                    <?php if (!isset($lmh) && isset($result)) { ?>

                    <?php if (isset($result)) echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Cảnh báo!</strong> '.$result.'</div>'; ?>
                    
                    <div class="form-group">
                        <a href="<?php echo MY_URL; ?>" class="btn btn-default">Trở về</a>
                    </div>

                    <?php } elseif (isset($lmh)) { ?>

                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã Bệnh Nhân</label>
                               <input type="text" maxlength="5" Class="form-control" name="MaBN" style="width: 40%" value="<?php echo ((isset($_POST['MaBN'])) ? $_POST['MaBN'] : $lmh['MABN']); ?>" readonly tabindex="1" required/>
                            </div>
                            <div class="form-group">
                                <label>Tên bệnh nhân</label>
                                <input type="text" Class="form-control" name="HoTen" style="width: 70%" value="<?php echo ((isset($_POST['HoTen'])) ? $_POST['HoTen'] : $lmh['HOTEN']); ?>" tabindex="2" required/>
                            </div>
                            <div class="form-group">
                                <label>Ngày Sinh</label>
                                <input type="date" name="NgaySinh" Class="form-control" style="width: 50%" value="<?php echo ((isset($_POST['NgaySinh'])) ? $_POST['NgaySinh'] : $lmh['NGAYSINH']); ?>" tabindex="3" required />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <textarea name="DiaChi" Class="form-control" placeholder="Địa chỉ thường trú" rows="5" style="width: 80%" tabindex="4" required><?php echo ((isset($_POST['DiaChi'])) ? $_POST['DiaChi'] : $lmh['DIACHI']); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input name="SDT" maxlength="15" Class="form-control" id="sdt" style="width: 70%" type="text" value="<?php echo ((isset($_POST['SDT'])) ? $_POST['SDT'] : $lmh['SDT']); ?>" tabindex="5" required/>
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label><br>
                                <input type="radio" name="GioiTinh" id="gioitinh" tabindex="6" required value="nam" <?php if($lmh['GIOITINH']==nam) echo 'checked=checked'; ?> /> <label for="nam">Nam</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="GioiTinh" id="gioitinh" tabindex="6" required value="nữ" <?php if($lmh['GIOITINH']==nữ) echo 'checked=checked'; ?> /> <label for="nu">Nữ</label> 
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" name="btnEditBN" value="Xác nhận" tabindex="7" required/>
                                <input type="reset" class="btn btn-primary" value="Làm mới" />
                            </div>
                        <form>
                    <?php } ?>
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
               sdt.setCustomValidity("số điện thoại không hợp lệ");
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