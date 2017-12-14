<?php if (!defined('THINK_PATH')) exit(); if($pjax): ?><title>Index</title><?php endif; ?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Editable elements <?php echo ($tpl); ?></h1>
            </div>
            <div class="pull-right">
                <ul class="stats">
                    <li class="satgreen"> <i class="icon-money"></i>
                        <div class="details"> <span class="big">$322,12</span> <span>Balance</span> </div>
                    </li>
                    <li class="lightred"> <i class="icon-calendar"></i>
                        <div class="details"> <span class="big">March 6, 2017</span> <span>Monday, 15:59</span> </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li> <a href="/index/index">Home</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="/index/plugins">Plugins</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="plugins-elements.html">Editable elements</a> </li>
            </ul>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3> <i class="icon-edit"></i> Dynamic editing </h3>
                    </div>
                    <div class="box-content">
                        <div class="alert alert-info">
                            <h4>Information!</h4>
                            <p>Simply click on the dash underlined elements to edit them! This can also work with custom input type (see address). Even validation is included (see firstname)</p>
                        </div>
                        <table class="table table-bordered table-striped table-force-topborder" style="clear: both">
                            <tbody>
                                <tr>
                                    <td width="15%">Username</td>
                                    <td width="50%"><a href="javascript:;" data-type="text" data-original-title="Enter username" class="editable editable-click">superuser</a></td>
                                    <td width="35%" class="hidden-480"><span class="muted">Simple text field</span></td>
                                </tr>
                                <tr>
                                    <td>First name</td>
                                    <td><a href="javascript:;" data-type="text" data-placeholder="Required" data-original-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                                    <td class="hidden-480"><span class="muted">Required text field, originally empty</span></td>
                                </tr>
                                <tr>
                                    <td>Sex</td>
                                    <td><a href="javascript:;" data-type="select" data-value="" data-original-title="Select sex" class="editable editable-click" style="color: gray;">not selected</a></td>
                                    <td class="hidden-480"><span class="muted">Select, loaded from js array. Custom display</span></td>
                                </tr>
                                <tr>
                                    <td>Group</td>
                                    <td><a href="javascript:;" data-type="select" data-value="5" data-original-title="Select group" class="editable editable-click">Admin</a></td>
                                    <td class="hidden-480"><span class="muted">Select, loaded from server. <strong>No buttons</strong> mode</span></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><a href="javascript:;" data-type="select" data-value="0" data-original-title="Select status" class="editable editable-click">Active</a></td>
                                    <td class="hidden-480"><span class="muted">Error when loading list items</span></td>
                                </tr>
                                <tr>
                                    <td>Plan vacation?</td>
                                    <td><a href="javascript:;" data-type="date" data-viewformat="YYYY-MM-DD" data-original-title="When you want vacation to start?" class="editable editable-click">2013-02-25</a></td>
                                    <td class="hidden-480"><span class="muted">Datepicker</span></td>
                                </tr>
                                <tr>
                                    <td>Date of birth</td>
                                    <td><a href="javascript:;" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="YYYY-MM-DD" data-template="YYYY-MM-DD" data-original-title="Select Date of birth" class="editable editable-click">1984-05-15</a></td>
                                    <td class="hidden-480"><span class="muted">Date field (combodate)</span></td>
                                </tr>
                                <tr>
                                    <td>Setup event</td>
                                    <td><a href="javascript:;" data-type="combodate" data-template="YYYY-MM-DD HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="YYYY-MM-DD HH:mm" data-original-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a></td>
                                    <td class="hidden-480"><span class="muted">Datetime field (combodate)</span></td>
                                </tr>
                                <tr>
                                    <td>Comments</td>
                                    <td><a href="javascript:;" data-type="textarea" data-placeholder="Your comments here..." data-original-title="Enter comments" class="editable editable-click">awesome<br>
                                            user!</a></td>
                                    <td class="hidden-480"><span class="muted">Textarea. Submit by ctrl+enter</span></td>
                                </tr>
                                <tr>
                                    <td>Fresh fruits</td>
                                    <td><a href="javascript:;" data-type="checklist" data-value="2,3" data-original-title="Select fruits" class="editable editable-click">peach<br>
                                            apple</a></td>
                                    <td class="hidden-480"><span class="muted">Checklist</span></td>
                                </tr>
                                <tr>
                                    <td>Custom input, several fields</td>
                                    <td><a href="javascript:;" data-type="address" dataa-original-title="Please fill address" class="editable editable-click"></a></td>
                                    <td class="hidden-480"><span class="muted">Address</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $.fn.editable.defaults.mode = 'popup';

            $('#address').editable({
                //url: '/post',
                value: {
                    city: "Moscow",
                    street: "Lenina",
                    building: "12"
                },
                validate: function (value) {
                    //if(value.city == '') return 'city is required!'; 
                    //if(value.street == '') return 'street is required!'; 
                    //if(value.building == '') return 'building is required!'; 
                },
                display: function (value) {
                    if (!value) {
                        $(this).empty();
                        return;
                    }
                    var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street).html() + ' , ' + $('<div>').text(value.building).html();
                    $(this).html(html);
                }
            });
            var items = $('.editable');
            $.each(items, function (index, obj) {
                var type = $(obj).attr('data-type');
                switch (type) {
                    case 'select':
                    case 'checklist':
                        $(obj).editable({
                            ajaxOptions: {
                                type: 'post',
                                dataType: 'json'
                            },
                            prepend: "not selected",
                            source: '/index/options',
                            sourceOptions: {
                                type: 'post',
                                data: {pk: 1}
                            },
                            url: '/index/post',
                            pk: 1,
                            success: function (response, newValue) {
                                console.info(response);
                                if (!response.success) {
                                    return response.msg;
                                }
                            },
                            error: function (response, newValue) {
                                return response.responseText;
                            }
                        });
                        break;
                    default:
                        $(obj).editable({
                            ajaxOptions: {
                                type: 'post',
                                dataType: 'json'
                            },
                            url: '/index/post',
                            pk: 1,
                            success: function (response, newValue) {
                                console.info(response);
                                if (!response.success) {
                                    return response.msg;
                                }
                            },
                            error: function (response, newValue) {
                                return response.responseText;
                            }
                        });
                        break;
                }
            });
        });
    </script> 
</div>