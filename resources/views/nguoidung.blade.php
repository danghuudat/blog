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
        <span style="float: left"><img src="img/logo.jpg" style="width: 600px; height: 200px;padding-left: 10px"></span>
        <div id="vnclock" style="margin-top: 0px"></div>
    </header>

    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel" style="margin-top: 180px">
                <header class="panel-heading" style="color: #0404B4;text-align: center;font-weight: bold">
                    <img src="img/lich.jpg" style="width: 100%; height: 50px; padding-top: 10px">
                </header>
                <div class="panel-body">

                    <div class="row" id="headerTable" style="font-size: 7rem;font-weight: bold">
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
                    <div id='table_scroll' style="height: 1200px; overflow: hidden;margin-top: 20px">
                        <div id="contain">
                            <?php $row=1 ?>

                        @foreach($lich as $record)
                            <?php if($row==1){
                                        $row=2;
                                    }
                                    else{
                                        $row=1;
                                    }

                                    ?>
                                <div class="row row_{{$row}}">
                                    <div class="col-sm-2" >
                                        <div class="row">
                                            <div class="col-sm-3" style="">{{$record->stt}}</div>
                                            <div class="col-sm-9" style="">{{$record->tenbenhnhan}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3" >
                                        <div class="row">
                                            <div class="col-sm-3" style="">{{$record->tuoi}}</div>
                                            <div class="col-sm-3" style="">{{$record->khoa}}</div>
                                            <div class="col-sm-6" style="">{{$record->chandoan}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3" >
                                        <div class="row">
                                            <div class="col-sm-8" style="">{{$record->ppphauthuat}}</div>
                                            <div class="col-sm-4" style="">{{$record->bsphauthuat}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2" >
                                        <div class="row">
                                            <div class="col-sm-7" style="">{{$record->ppvocamvagiamdau}}</div>
                                            <div class="col-sm-5" style="">{{$record->bsgayme}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2" >
                                        <div class="row">
                                            <div class="col-sm-4" style="">{{$record->giomodukien}}</div>
                                            <div class="col-sm-8" style="">{{$record->trangthaicuabenhnhan}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>



                </div>
            </section>
        </section>
    </section>
    <footer id="footer" class="site-footer py-4 bg-dark text-white-50" >
        <marquee width="100%" direction="right" height="30%" style="font-size: 5rem">
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
