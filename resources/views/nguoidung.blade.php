<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Lịch phẫu thuật gây mê hồi sức chống đau</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nguoidung.css">

</head>

<body>

<section id="container" class="">
    <header class="header white-bg">
        <span style="float: left"><img src="img/logo.jpg" style="width: 350px; height: 100px;padding-left: 10px"></span>
        <div id="vnclock" style="margin-top: 0px"></div>
    </header>

    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel" style="margin-top: 65px">
                <header class="panel-heading" style="color: #0404B4;text-align: center;font-weight: bold">
                    <img src="img/lich.jpg" style="width: 100%; height: 50px; padding-top: 10px">
                </header>
                <div class="panel-body">
                    <!--  <div class="adv-table editable-table table-height" >
                         <table border="1" id="table_fixed" cellpadding="0">
                             <thead>
                               <tr>
                                 <th style="max-width: 3%; width: 3% !important">STT</th>
                                 <th class="ten">HỌ VÀ TÊN</th>
                                 <th style="max-width: 5%" class="tuoi">TUỔI</th>
                                 <th style="max-width: 5%; width: 5% !important" class="khoa">KHOA</th>
                                 <th style="max-width: 15%; width: 15% !important">CHẨN ĐOÁN BÁC SĨ</th>
                                 <th style="max-width: 15%; width: 15% !important" class="pppt">PP PHẪU THUẬT</th>
                                 <th>BS PHẪU THUẬT</th>
                                 <th>PP VÔ CẢM GIẢM ĐAU</th>
                                 <th style="max-width: 10%;width: 10% !important">BS GÂY MÊ </th>
                                 <th>GIỜ MỔ DỰ KIẾN</th>
                                 <th>TRẠNG THÁI BN</th>
                               </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                 </tr>
                             </tbody>
                         </table>
                         <div id="contain">
                           <table border="0" id="table_scroll" cellpadding="0">
                             <tbody>
                                 <tr>
                                     <td style="max-width: 3%; width: 3%">1</td>
                                     <td style="max-width: 9.4%;">Đỗ Ngọc Hoa</td>
                                     <td style="max-width: 3%; width: 2%">20</td>
                                     <td style="max-width: 2%; width: 2%">RHM</td>
                                     <td style="max-width: 15%; width: 15%">Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                     <td style="max-width: 15%; width: 17%">Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                     <td>PGS Lê Sơn</td>
                                     <td style="width: 255px">Gây mê</td>
                                     <td style="width: 255px">Ths Thảo</td>
                                     <td style="width: 200px"></td>
                                     <td>BN chưa mổ</td>
                                 </tr>

                             </tbody>
                           </table>
                         </div>
                     </div> -->
                    <div class="row" id="headerTable">
                        <div class="col-sm-2" >
                            <div class="row">
                                <div class="col-sm-3" style="">STT</div>
                                <div class="col-sm-9" style="">HỌ TÊN</div>
                            </div>
                        </div>
                        <div class="col-sm-3" >
                            <div class="row">
                                <div class="col-sm-3" style="">TUỔI</div>
                                <div class="col-sm-3" style="">KHOA</div>
                                <div class="col-sm-6" style="">CHẨN ĐOÁN BÁC SĨ</div>
                            </div>
                        </div>
                        <div class="col-sm-3" >
                            <div class="row">
                                <div class="col-sm-8" style="">PP PHẪU THUẬT</div>
                                <div class="col-sm-4" style="">BS PHẪU THUẬT</div>
                            </div>
                        </div>
                        <div class="col-sm-2" >
                            <div class="row">
                                <div class="col-sm-7" style="">PP VÔ CẢM GIẢM ĐAU</div>
                                <div class="col-sm-5" style="">BS GÂY MÊ</div>
                            </div>
                        </div>
                        <div class="col-sm-2" >
                            <div class="row">
                                <div class="col-sm-4" style="">GIỜ MỔ</div>
                                <div class="col-sm-8" style="">TRẠNG THÁI BỆNH NHÂN</div>
                            </div>
                        </div>
                    </div>
                    <div id='table_scroll' style="height: 300px; overflow: hidden;margin-top: 20px">
                        <div id="contain">
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">1</div>
                                        <div class="col-sm-9" style="">Đặng Hữu Đạt</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3" style="">30</div>
                                        <div class="col-sm-3" style="">UB</div>
                                        <div class="col-sm-6" style="">Không làm sao cả</div>
                                    </div>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-8" style="">Không phẫu thuật</div>
                                        <div class="col-sm-4" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-7" style="">Không gây me</div>
                                        <div class="col-sm-5" style="">Không ai</div>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="row">
                                        <div class="col-sm-4" style="">Không có</div>
                                        <div class="col-sm-8" style="">Tốt</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </section>
        </section>
    </section>
    <footer id="footer" class="site-footer py-4 bg-dark text-white-50" >
        <marquee width="100%" direction="right" height="30%" style="font-size: 15px">
            Hanoi Medical University Hospital
        </marquee>
    </footer>
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="js/respond.min.js" ></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page only-->
<script src="js/editable-table.js"></script>
<script src="js/nguoidung.js"></script>
<!-- END JAVASCRIPTS -->
</body>
</html>
