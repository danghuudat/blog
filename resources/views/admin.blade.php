
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:46:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Editable Table</title>

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


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">

    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo" >Quản lý hồ sơ</a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->

                <!-- settings end -->
                <!-- inbox dropdown start-->

                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->

                <!-- notification dropdown end -->
            </ul>
        </div>

    </header>
    <!--header end-->
    <!--sidebar start-->

    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel">
                <header class="panel-heading">
                    LỊCH PHẪU THUẬT KHOA GÂY MÊ HỒI SỨC
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group" style="margin-bottom: 20px">
                                <button type="button" class="btn green" data-toggle="modal" data-target="#myModal">
                                    Thêm ca mổ <i class="fa fa-plus"></i>
                                </button>

                            </div>
                            <div style="margin-bottom: 20px">
                                <form method="post" enctype="multipart/form-data" action="{{url('import')}}">
                                    <label for="import">Import file excel</label>
                                    <input type="file" id="import"  name="selectFile">
                                    <button type="submit" name="upload" value="upload" id="uploadBtn" class="btn btn-success" style="margin-top: 10px">Upload</button>
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            Báo lỗi<br><br>
                                             <ul>
                                                 @foreach($errors->all() as $error)
                                                     <li>{{$error}}</li>
                                                 @endforeach
                                             </ul>
                                        </div>
                                    @endif
                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>    {{$message}}</strong>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ngày</th>
                                <th>Họ và tên</th>
                                <th>Tuổi</th>
                                <th>Khoa</th>
                                <th>Chẩn đoán bác sĩ</th>
                                <th>PP phẫu thuật</th>
                                <th>BS phẫu thuật</th>
                                <th>PP vô cảm và giảm đau</th>
                                <th>BS gây mê </th>
                                <th>Giờ mổ dự kiến</th>
                                <th>Trạng thái hiện tại của bênh nhân</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                {{--<tr class="">
                                    <td>1</td>
                                    <td>2/2/2019</td>
                                    <td>Đỗ Ngọc Hoa</td>
                                    <td>20</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>2</td>
                                    <td>2/2/2019</td>
                                    <td>Nguyễn Nghĩa Lâm</td>
                                    <td>30</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>3</td>
                                    <td>2/2/2019</td>
                                    <td>Nguyễn Thị Thảo</td>
                                    <td>40</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>4</td>
                                    <td>2/2/2019</td>
                                    <td>Trần Thị Thục</td>
                                    <td>50</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>5</td>
                                    <td>2/2/2019</td>
                                    <td>Đoàn Thế Quang</td>
                                    <td>20</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>6</td>
                                    <td>2/2/2019</td>
                                    <td>Đặng Văn A</td>
                                    <td>25</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>7</td>
                                    <td>2/2/2019</td>
                                    <td>Đặng Văn A</td>
                                    <td>20</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>8</td>
                                    <td>2/2/2019</td>
                                    <td>Đặng Văn A</td>
                                    <td>20</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>9</td>
                                    <td>2/2/2019</td>
                                    <td>Đặng Văn A</td>
                                    <td>30</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>10</td>
                                    <td>2/2/2019</td>
                                    <td>Đặng Văn A</td>
                                    <td>20</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>11</td>
                                    <td>2/2/2019</td>
                                    <td>Đặng Văn A</td>
                                    <td>20</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                                <tr class="">
                                    <td>12</td>
                                    <td>2/2/2019</td>
                                    <td>Đặng Văn A</td>
                                    <td>20</td>
                                    <td class="center">RHM</td>
                                    <td>Răng thừa ngầm hàm dưới bên phải + 4r8 mọc lệch</td>
                                    <td>Pt lấy răng thừa ngầm + nhổ 4r8</td>
                                    <td>PGS Lê Sơn</td>
                                    <td>Gây mê</td>
                                    <td>Ths Thảo</td>
                                    <td></td>
                                    <td>BN chưa mổ</td>
                                    <td><a onclick="edit(1)" style="cursor: pointer">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>--}}
                                @foreach($lich as $record)
                                    <tr id="row_{{$record->id}}">
                                        <td>{{$record->stt}}</td>
                                        <td>{{$record->ngay}}</td>
                                        <td>{{$record->tenbenhnhan}}</td>
                                        <td>{{$record->tuoi}}</td>
                                        <td>{{$record->khoa}}</td>
                                        <td>{{$record->chandoan}}</td>
                                        <td>{{$record->ppphauthuat}}</td>
                                        <td>{{$record->bsphauthuat}}</td>
                                        <td>{{$record->ppvocamvagiamdau}}</td>
                                        <td>{{$record->bsgayme}}</td>
                                        <td>{{$record->giomodukien}}</td>
                                        <td>{{$record->trangthaicuabenhnhan}}</td>
                                        <td><a onclick="edit({{$record->id}})" style="cursor: pointer">Edit</a></td>
                                        <td><a onclick="deleteRecord({{$record->id}})" style="cursor: pointer">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    <!-- Right Slidebar start -->

    <!-- Right Slidebar end -->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2013 &copy; FlatLab by VectorLab.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm ca mổ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="stt">STT</label>
                <input type="number" class="form-control" id="stt">
                <label for="ngay">Ngày</label>
                <input type="text" class="form-control" id="ngay">
                <label for="name">Họ và tên</label>
                <input type="text" class="form-control" id="name">
                <label for="age">Tuổi</label>
                <input type="text" class="form-control" id="age">
                <label for="RHM">RHM:</label>
                <input type="text" class="form-control" id="RHM">
                <label for="chandoan">Chẩn đoán:</label>
                <input type="text" class="form-control" id="chandoan">
                <label for="ppphauthuat">PP phẫu thuật:</label>
                <input type="text" class="form-control" id="ppphauthuat">
                <label for="bsphauthuat">BS phẫu thuật:</label>
                <input type="text" class="form-control" id="bsphauthuat">
                <label for="giamdau">PP vô cảm và giảm đau:</label>
                <input type="text" class="form-control" id="giamdau">
                <label for="gayme">BS gây mê:</label>
                <input type="text" class="form-control" id="gayme">
                <label for="giomo">Giờ mổ dự kiến:</label>
                <input type="text" class="form-control" id="giomo">
                <label for="status">Trạng thái của bệnh nhân:</label>
                <input type="text" class="form-control" id="status">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="addRecord()">Thêm mới</button>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="stt1">STT</label>
                <input type="text" class="form-control" id="stt1">
                <label for="ngay1">Ngày</label>
                <input type="text" class="form-control" id="ngay1">
                <label for="editname">Họ và tên</label>
                <input type="text" class="form-control" id="editname">
                <label for="editage">Tuổi</label>
                <input type="text" class="form-control" id="editage">
                <label for="editRHM">RHM:</label>
                <input type="text" class="form-control" id="editRHM">
                <label for="editchandoan">Chẩn đoán:</label>
                <input type="text" class="form-control" id="editchandoan">
                <label for="editppphauthuat">PP phẫu thuật:</label>
                <input type="text" class="form-control" id="editppphauthuat">
                <label for="editbsphauthuat">BS phẫu thuật:</label>
                <input type="text" class="form-control" id="editbsphauthuat">
                <label for="editgiamdau">PP vô cảm và giảm đau:</label>
                <input type="text" class="form-control" id="editgiamdau">
                <label for="editgayme">BS gây mê:</label>
                <input type="text" class="form-control" id="editgayme">
                <label for="editgiomo">Giờ mổ dự kiến:</label>
                <input type="text" class="form-control" id="editgiomo">
                <label for="editstatus">Trạng thái của bệnh nhân:</label>
                <input type="text" class="form-control" id="editstatus">
                <input type="text" style="display: none" id="id">

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="editData()">Sửa</button>
            </div>

        </div>
    </div>
</div>
<style>
    .close{
        margin-top: -25px !important;
    }
</style>


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

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {

        EditableTable.init();
    });
    function addRecord(){
        var data={}
        data['stt']=$('#stt').val();
        data['ngay']=$('#ngay').val();
        data['tenbenhnhan']=$('#name').val();
        data['tuoi']=$('#age').val();
        data['khoa']=$('#RHM').val();
        data['chandoan']=$('#chandoan').val();
        data['ppphauthuat']=$('#ppphauthuat').val();
        data['bsphauthuat']=$('#bsphauthuat').val();
        data['ppvocamvagiamdau']=$('#giamdau').val();
        data['bsgayme']=$('#gayme').val();
        data['giomodukien']=$('#giomo').val();
        data['trangthaicuabenhnhan']=$('#status').val();
        console.log(data);
        $.ajax({
            method: "POST",
            url: "store",
            data: data,
        })
            .success(function( msg ) {
                alert( "Thêm thành công");
                location.reload();

            });
    }
    function deleteRecord(id){
        var result = confirm("bạn có muốn xóa?");
        data={};
        data['id']=id;
        if (result) {
            $.ajax({
                method: "POST",
                url: "delete",
                data: data,
            })
                .success(function( msg ) {
                    $('#row_'+id).hide();
                    alert( "xóa thành công" );
                });
        }
    }
    function edit(a){
        var data={'id':a};
        $.ajax({
            method: "POST",
            url: "show",
            data: data,
        })
            .success(function( data ) {
                console.log(data);
                $('#stt1').val(data[0].stt);
                $('#ngay1').val(data[0].ngay);
                $('#editname').val(data[0].tenbenhnhan);
                $('#editage').val(data[0].tuoi);
                $('#editRHM').val(data[0].khoa);
                $('#editchandoan').val(data[0].chandoan);
                $('#editppphauthuat').val(data[0].ppphauthuat);
                $('#editbsphauthuat').val(data[0].bsphauthuat);
                $('#editgiamdau').val(data[0].ppvocamvagiamdau);
                $('#editgayme').val(data[0].bsgayme);
                $('#editgiomo').val(data[0].giomodukien);
                $('#editstatus').val(data[0].trangthaicuabenhnhan);
                $('#id').val(data[0].id);

                $('#editModal').modal('show');

            });
    }
    function editData(){
        var data={};
        data['stt']=$('#stt1').val()
        data['ngay']=$('#ngay1').val()
        data['tenbenhnhan']=$('#editname').val()
        data['tuoi']=$('#editage').val()
        data['khoa']=$('#editRHM').val()
        data['chandoan']=$('#editchandoan').val()
        data['ppphauthuat']=$('#editppphauthuat').val()
        data['bsphauthuat']=$('#editbsphauthuat').val();
        data['ppvocamvagiamdau']=$('#editgiamdau').val()
        data['bsgayme']=$('#editgayme').val()
        data['giomodukien']=$('#editgiomo').val()
        data['trangthaicuabenhnhan']=$('#editstatus').val()
        data['id']=$('#id').val()
        $.ajax({
            method: "POST",
            url: "update",
            data: data,
        })
            .success(function( data ) {
                alert("Sửa thành công")
                location.reload();

            });
    }

</script>


</body>

<!-- Mirrored from thevectorlab.net/flatlab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:46:27 GMT -->
</html>
