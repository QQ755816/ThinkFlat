<?php if (!defined('THINK_PATH')) exit(); if($pjax): ?><title><?php echo ($title); ?></title><?php endif; ?>
<div id="main">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>
    <div class="main-show">
        <div class="container-fluid">
            <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                </tbody>
            </table>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-table"></i>
                        Table with tools (excel export etc.)
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <table id="example2" class="table table-hover table-nomargin dataTable dataTable-tools table-bordered">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
    $('#example2').DataTable({
        //dom: '<"rows bg-primary clearfix"<"col-md-6 col-sm-12"B><"col-md-6 col-sm-12"f>>rt<"pull-left"i><"pull-left"l><"pull-right"p>', //fBrtip
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        //"scrollY": "500px",
        //"scrollCollapse": true,//不够高度自动关闭
        responsive: true,
        pagingType: 'full',
        //"lengthChange": false, //配置每页数量
        "processing": true,
        "serverSide": true,
        "deferRender": true, //当处理大数据时，延迟渲染数据，有效提高Datatables处理能力
        "columns": [
            {"data": "first_name"},
            {"data": "last_name"},
            {"data": "position"},
            {"data": "office"},
            {"data": "start_date"},
            {"data": "salary"}
        ],
        ajax: {
            url: "/data.php",
            //"dataType": "jsonp",
            "type": "POST"
        },
    });
    var table = $('#example1').DataTable({
        responsive: true,
        fixedHeader: true,
        pagingType: 'full',
        columnDefs: [
            {
                "render": function (data, type, row) {
                    return data + ' (' + row[3] + ')';
                },
                "targets": 0
            },
            {
                "visible": false,
                "targets": [3]
            }
        ],
        language: {
            "sProcessing": "处理中...",
            "sLengthMenu": "显示 _MENU_ 项结果",
            "sZeroRecords": "没有匹配结果",
            "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
            "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
            "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
            "sInfoPostFix": "",
            "sSearch": "搜索:",
            "sUrl": "",
            "sEmptyTable": "表中数据为空",
            "sLoadingRecords": "载入中...",
            "sInfoThousands": ",",
            "oPaginate": {
                "sFirst": "首页",
                "sPrevious": "上页",
                "sNext": "下页",
                "sLast": "末页"
            },
            "oAria": {
                "sSortAscending": ": 以升序排列此列",
                "sSortDescending": ": 以降序排列此列"
            }
        }
    });
    //$('#example1').dataTable().api();
    $('#example1 tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
        var d = table.row(this).data();
        //console.info(d);
        d.counter++;
        table.row(this).data(d).draw();
        //console.info(table.rows('.selected').data().length);
        for (var i = 0; i < table.rows('.selected').data().length; i++) {
            console.info(table.rows('.selected').data()[i]);
        }
    });
    $('#button').click(function () {
        alert(table.rows('.selected').data().length + ' row(s) selected');
    });
</script>
</div>