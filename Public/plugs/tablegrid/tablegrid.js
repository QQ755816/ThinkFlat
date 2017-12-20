(function ($) {
    //private method
    /*
     * rows  数据源
     * key   排序字段
     * order 正序1 反序0
     * 字母排序异常 
     */
    function rowsort(rows, key, order) {
        if (order) {
            rows = rows.sort(function (a, b) {
                if ($.isNumeric(a[key]) && $.isNumeric(b[key])) {
                    return a[key] - b[key];
                }
                return a[key] > b[key];
            });
        } else {
            rows = rows.sort(function (a, b) {
                if ($.isNumeric(a[key]) && $.isNumeric(b[key])) {
                    return b[key] - a[key];
                }
                return b[key] > a[key];
            });
        }
        return rows;
    }
    function initialization(obj) {
        var options = obj.data('tablegrid').options;
        obj.addClass(options.Class);
        var wrapid = obj.attr('id') + '-wrap';
        $('#' + wrapid).addClass(options.wrapClass);
        $('#' + wrapid + '-header').addClass(options.headClass);
        $('#' + wrapid + '-toolbar').addClass(options.toolbarClass);
        $('#' + wrapid + '-grid').addClass(options.gridClass);
        $('#' + wrapid + '-footer').addClass(options.footerClass);
        $('#' + wrapid).append('<div id="' + wrapid + '-processing" class="tablegrid-wrap-processing" style="display: none;">Loading...</div>')
        if (options.responsive) {
            $('#' + wrapid + '-grid').addClass('table-responsive');
        }
        if (options.toolbar) {
            $(options.toolbar).appendTo($('#' + wrapid + '-toolbar'));
        } else {
            $('#' + wrapid + '-toolbar').remove();
        }
        $('#' + wrapid + '-header').append('<h1 class="' + options.titleClass + '">' + options.title + '</h1>');
        if (options.datainfo) {
            if ($('#' + wrapid + '-datainfo').length == 0) {
                var datainfo = $('<div id="' + wrapid + '-datainfo" class="tablegrid-wrap-datainfo ' + options.datainfoClass + '"></div>');
//                if (options.datainfoRender) {
//                    $('#' + wrapid + '-' + options.datainfoRender).append(datainfo);
//                    $('#' + wrapid + '-' + options.datainfoRender).addClass(options.datainfoRenderClass);
//                } else {
                $('#' + wrapid + '-footer').append(datainfo);
//                }
            }
        }
        if (options.buttons.length) {
            if ($('#' + wrapid + '-buttons').length == 0) {
//                if (options.btnRender) {
//                    $('#' + wrapid + '-' + options.btnRender).append('<div id="' + wrapid + '-buttons" class="tablegrid-wrap-buttons ' + options.btnBoxClass + '"></div>');
//                    $('#' + wrapid + '-' + options.btnRender).addClass(options.btnRenderClass);
//                } else {
                $('#' + wrapid + '-header').append('<div id="' + wrapid + '-buttons" class="tablegrid-wrap-buttons ' + options.btnBoxClass + '"></div>');
//                }
            }
            var btnBox = $('#' + wrapid + '-buttons');
            $.each(options.buttons, function (i, button) {
                button.btnClass ? button.btnClass : button.btnClass = 'bt-default';
                var btn = $('<button class="btn ' + button.btnClass + '">' + button.name + '</button>');
                btnBox.append(btn);
                btn.bind('click', button.action);
            })
        }
        if (!options.header) {
            $('#' + wrapid + '-header').remove();
        }
        if (!options.footer) {
            $('#' + wrapid + '-footer').remove();
        }
        obj.find('thead,tbody').remove();
        var $thead = $('<tr></tr>');
        $.each(options.columns, function (i, column) {
            var col = $('<th></th>');
            col.text(column.label.toUpperCase());
            column.center ? col.addClass('text-center') : '';
            if (column.sortable) {
                col.addClass('sorting')
                col.bind('click.tablegrid.sorting', function () {
                    if (obj.data('tablegrid').sort) {
                        $thead.children('th[class*="sorting"]').each(function () {
                            $(this).removeClass('sorting-desc').removeClass('sorting-asc').addClass('sorting');
                        })
                        if (obj.data('tablegrid').sort.field == column.field) {
                            col.removeClass('sorting-desc').removeClass('sorting-asc');
                            obj.data('tablegrid').sort.order == true ? obj.data('tablegrid').sort.order = false : obj.data('tablegrid').sort.order = true
                            obj.data('tablegrid').sort.order == true ? col.addClass('sorting-asc') : col.addClass('sorting-desc');
                        } else {
                            obj.data('tablegrid').sort = {field: column.field, order: true};
                            col.addClass('sorting-asc');
                        }
                    } else {
                        obj.data('tablegrid').sort = {field: column.field, order: true};
                        col.addClass('sorting-asc');
                    }
                    obj.tablegrid('sort');
                })
            }
            column.center ? col.addClass('text-center') : '';
            $thead.append(col);
        })
        var $theadbox = $('<thead></thead>');
        $theadbox.append($thead);
        obj.append($theadbox);
        var $tbody = $('<tbody></tbody>');
        obj.append($tbody);
        obj.data('tablegrid').options.databody = $tbody;
        loadData(obj);
    }
    function loadData(obj) {
        $('#' + obj.attr('id') + '-wrap-processing').show();
        var options = obj.data('tablegrid').options;
        if (options.href) {
            obj.data('tablegrid').options.queryParams._page = {};
            obj.data('tablegrid').options.queryParams._page['page'] = obj.data('tablegrid').page;
            obj.data('tablegrid').options.queryParams._page['rows'] = obj.data('tablegrid').pagesize;
            readData(obj);
        } else {
            obj.data('tablegrid').options.datajson = {total: options.data.length, rows: options.data, _type: 0}; //这里后期修改 目前传递的静态data格式必须是 [{},{}]
            drawData(obj);
        }
        $('#' + obj.attr('id') + '-wrap-processing').fadeOut(500);
    }
    function readData(obj) {
        var options = obj.data('tablegrid').options;
        if (obj.data('tablegrid').sort) {
            if (!options.queryParams._sort) {
                options.queryParams._sort = {};
            }
            options.queryParams._sort['field'] = obj.data('tablegrid').sort.field;
            options.queryParams._sort['order'] = obj.data('tablegrid').sort.order;
        }
        $.ajax({
            type: options.ajaxMethod,
            url: options.href,
            data: options.queryParams,
            async: false,
            success: function (data) { //data as {total: x, rows:[{},{}]};
                obj.data('tablegrid').options.datajson = data;
                obj.data('tablegrid').options.data = data.rows;
                drawData(obj);
            },
            dataType: 'json'
        });
        return obj;
    }
    function drawData(obj, cache) {
        var options = obj.data('tablegrid').options;
        var dispalyData = [];
        if (cache) {
            dispalyData = obj.data('tablegrid').options.dispalyData;
        } else {
            var tbody = options.databody;
            tbody.children().remove();
            var datas = $.extend({_type: 1}, options.datajson);
            var startRow = 1;
            var endRow = datas.total;
            if (obj.data('tablegrid').options.pagination) {
                var page = obj.data('tablegrid').page;
                var pagesize = obj.data('tablegrid').pagesize;
                var total = datas.total;
                var pages = Math.ceil(total / pagesize);
                while (page > pages) {
                    page--;
                }
                // 1*10?5  | 10>5  -> 0*10?5  | 0<5√  page=0
                // 2*10?5  | 20>5  -> 1*10?5  | 10>5 -> 0*10?5 | 0<5√  page=0
                // 1*10?10 | 10=10√  page=page
                // 3*10?25 | 30>25 -> 2*10?25 | 20<25√  page=page-1
                if (page == 0) {
                    page = 1;
                }
                obj.data('tablegrid').page = page;
                startRow = (page - 1) * pagesize;
                endRow = page * pagesize;
                endRow > total ? endRow = total : endRow = endRow;
                if (datas._type == 0) {
                    for (var i = startRow; i < endRow; i++) {
                        dispalyData.push(datas.rows[i])
                    }
                } else {
                    dispalyData = datas.rows;
                }
                initpagination(obj, page, pages);
            } else {
                dispalyData = datas.rows;
            }
            obj.data('tablegrid').options.dispalyData = dispalyData;
            if (options.datainfo) {
                var shows = startRow + 1;
                $('#' + obj.attr('id') + '-wrap-datainfo').html('Display ' + (startRow + 1) + ' to ' + endRow + ' of ' + total);
            }
        }
        $.each(dispalyData, function (i, row) {
            var rowTr = $('<tr></tr>');
            $.each(options.columns, function (k, column) {
                var col = $('<td></td>');
                var tdHtml = row[column.field];
                if (column.formatter) {
                    tdHtml = column.formatter(row[column.field], i, row);
                }
                column.center ? col.addClass('text-center') : '';
                col.html(tdHtml);
                rowTr.append(col);
            })
            tbody.append(rowTr);
        });
        if (options.merge.length) {
            var columns = options.columns;
            var datas = options.dispalyData;
            var merges = options.merge;
            $.unique(merges);
            var tbody = obj.find('tbody');
            if (datas.length) {
                var row = 0;
                var mergeCount = 1;
                $.each(datas, function (i, data) {
                    if (i > 0) {
                        var doMerge = true;
                        $.each(merges, function (m, merge) {
                            if (data[merge] != datas[row][merge]) {
                                doMerge = false;
                            }
                        })
                        if (doMerge) {
                            mergeCount++;
                            $.each(columns, function (c, col) {
                                if ($.inArray(col['field'],merges)!=-1) {
                                    tbody.children('tr').eq(row).children('td').eq(c).attr('rowspan', mergeCount);
                                    tbody.children('tr').eq(i).children('td').eq(c).addClass('pending-delete');
                                }
                            })
                        }else{
                            row = i;
                            mergeCount = 1;
                        }
                    }
                })
            }
            tbody.children('tr').children('td[class="pending-delete"]').remove();
        }
        var rows = obj.find('tbody').children('tr');
        $.each(rows, function (i, row) {
            if (options.sigleSelect) {
                $(row).bind('click.sigleselect', function () {
                    $(row).siblings('tr').removeClass('selected');
                })
            }
            $(row).bind('click.select', function () {
                var merges = 1;
                $.each($(row).children('td'), function (k, td) {
                    if ($(td).attr('rowspan')) {
                        merges = $(td).attr('rowspan');
                        return false;
                    }
                })
                $(row).addClass('selected');
                while (merges > 1) {
                    merges--;
                    $(rows[i + merges]).addClass('selected');
                }
            })
        })
        return obj;
    }
    function initpagination(obj, page, pages) {
        var wrapid = obj.attr('id') + '-wrap';
        var options = obj.data('tablegrid').options;
        //console.info(options.pagesize.length);
        var pagination = $('<ul id="' + wrapid + '-pagination" class="tablegrid-wrap-pagination ' + options.paginationClass + '"></ul>');
        if ($('#' + wrapid + '-pagination').length == 0) {
//            if (options.paginationRender) {
//                $('#' + wrapid + '-' + options.paginationRender).append(pagination);
//                $('#' + wrapid + '-' + options.paginationRender).addClass(options.paginationBoxClass);
//            } else {
            $('#' + wrapid + '-footer').append(pagination);
//            }
        } else {
            pagination = $('#' + wrapid + '-pagination');
            pagination.children().remove();
        }
        if (options.pagesize.length > 1) {
            var selet = $('<select class="form-control"></select>');
            for (var i = 1; i < options.pagesize.length; i++) {
                selet.append('<option value="' + options.pagesize[i] + '">' + options.pagesize[i] + '条</option>');
            }
            selet.val(obj.data('tablegrid').pagesize);
            selet.change(function () {
                obj.data('tablegrid').pagesize = parseInt($(this).val());
                loadData(obj);
            });
            pagination.append('<li>每页显示：</li>');
            pagination.append(selet);
            selet.wrap('<li class="pagesize"></li>')
        }
        if (pages > 1) {
            var fpbtn = $('<li><a href="javascript:;"><span class="glyphicon glyphicon-step-backward"></span></a></li>');
            var prebtn = $('<li><a href="javascript:;"><span class="glyphicon glyphicon-chevron-left"></span></a></li>');
            var nextbtn = $('<li><a href="javascript:;"><span class="glyphicon glyphicon-chevron-right"></span></a></li>');
            var epbtn = $('<li><a href="javascript:;"><span class="glyphicon glyphicon-step-forward"></span></a></li>');
            if (page == 1) {
                fpbtn.addClass('disabled');
                prebtn.addClass('disabled');
            } else {
                fpbtn.bind('click.tablegrid.loadpage', function () {
                    obj.data('tablegrid').page = 1;
                    loadData(obj);
                })
                prebtn.bind('click.tablegrid.loadpage', function () {
                    obj.data('tablegrid').page = page - 1;
                    loadData(obj);
                })
            }
            pagination.append(fpbtn).append(prebtn);

            var pageSet = {sPage: 1, ePage: pages};
            if (pages - 1 > options.paginationBtns * 2) {
                pageSet = pageCal(page, pages, options.paginationBtns)
            }

            for (var i = pageSet.sPage; i <= pageSet.ePage; i++) {
                var pagebtn = $('<li><a href="javascript:;">' + i + '</a></li>');
                if (obj.data('tablegrid').page == i) {
                    pagebtn.addClass('current');
                } else {
                    pagebtn.bind('click.tablegrid.loadpage', function () {
                        obj.data('tablegrid').page = parseInt($(this).text());
                        loadData(obj);
                    })
                }
                pagination.append(pagebtn);
            }

            if (page == pages) {
                nextbtn.addClass('disabled');
                epbtn.addClass('disabled');
            } else {
                nextbtn.bind('click.tablegrid.loadpage', function () {
                    obj.data('tablegrid').page = page + 1;
                    loadData(obj);
                })
                epbtn.bind('click.tablegrid.loadpage', function () {
                    obj.data('tablegrid').page = pages;
                    loadData(obj);
                })
            }
            pagination.append(nextbtn).append(epbtn);
        }
    }
    function pageCal(page, pages, len, alen) {
        var sPage = page - len;
        if (alen) {
            sPage = sPage - alen;
        }
        if (sPage <= 0) {
            sPage = 1;
        }
        var extE = len + sPage - page;
        var ePage = page + len + extE;
        if (ePage > pages) {
            ePage = pages;
        }
        var extS = len + page - ePage;
        if (extS && alen == undefined) {
            return pageCal(page, pages, len, extS);
        } else {
            return {sPage: sPage, ePage: ePage};
        }
    }
    function initwrap(obj, wrapid) {
        obj.wrap('<div id="' + wrapid + '" class="tablegrid-wrap"></div>');
        $('#' + wrapid).prepend('<div id="' + wrapid + '-header" class="tablegrid-wrap-header"></div><div id="' + wrapid + '-toolbar" class="tablegrid-wrap-toolbar"></div>');
        obj.wrap('<div id="' + wrapid + '-grid" class="tablegrid-wrap-grid"></div>');
        $('#' + wrapid).append('<div id="' + wrapid + '-footer" class="tablegrid-wrap-footer"></div>');
        return obj;
    }
    function initrepale(obj, wrapid) {
        obj.replaceWith('<div id="' + wrapid + '" class="tablegrid-wrap"></div>');
        var _this = $('#' + wrapid);
        _this.append('<div id="' + wrapid + '-header" class="tablegrid-wrap-header"></div><div id="' + wrapid + '-toolbar" class="tablegrid-wrap-toolbar"></div>');
        _this.append('<div id="' + wrapid + '-grid" class="tablegrid-wrap-grid"><table id="' + obj.attr('id') + '"></table></div>');
        _this.append('<div id="' + wrapid + '-footer" class="tablegrid-wrap-footer"></div>');
        return $('#' + obj.attr('id'));
    }
    function initColumns(trs) {
        var columns = [];
        if (trs.length > 0) {
            var cols = $(trs[0]).children('td,th');
            $.each(cols, function (i, col) {
                var temp = {};
                $(col).data('field') ? temp.field = $(col).data('field').toLowerCase() : temp.field = $(col).text().toLowerCase();
                if (temp.field) {
                    $(col).data('label') ? temp.label = $(col).data('label') : temp.label = temp.field;
                    $(col).data('width') ? temp.width = $(col).data('width') : temp.width = 50;
                    $(col).data('center') == true ? temp.center = true : temp.center = false;
                    $(col).data('sortable') == true ? temp.sortable = true : temp.sortable = false;
                    $(col).data('formatter') ? temp.formatter = eval($(col).data('formatter')) : temp.formatter = '';
                } else {
                    delete temp.field;
                }
                columns.push(temp);
            });
        }
        return columns;
    }
    function initDatas(columns, trs) {
        var datas = [];
        if (trs.length > 1) {
            for (var i = 1; i < trs.length; i++) {
                var cols = $(trs[i]).children('td,th');
                datas[i - 1] = {};
                $.each(columns, function (k, column) {
                    if (column['field']) {
                        datas[i - 1][column['field']] = $(cols[k]).text();
                    }
                })
            }
        }
        return datas;
    }
    //Public method
    var methods = {
        init: function (options) {
            var data = this.data('tablegrid');
            var settings = {
                idField: 'id',
                title: '',
                titleClass: 'col-xs-6 col-md-8',
                header: true, //显示头部
                footer: true, //显示表尾
                Class: '', //table的样式
                wrapClass: 'row', //最外部样式
                headClass: 'row', //头部样式
                toolbarClass: 'row', //工具栏样式
                gridClass: 'row', //表格部分外部样式
                footerClass: 'row', //表尾样式
                sigleSelect: true, //单选行
                pagination: false, //是否分页
                pagesize: [10, 10, 25, 50, 100], //每页数量 第一个参数为默认
                paginationClass: 'col-md-6 col-sm-12 text-right', //分页ul的样式
                paginationBtns: 3, //左右最多显示多少个按钮
                //paginationRender: '', //附加到目标 header / footer / toolbar
                //paginationRenderClass: '', //附加目标添加样式
                datainfo: true, //显示数据信息
                datainfoClass: 'col-md-6 col-sm-12', //数据信息div的样式
                //datainfoRender: '', //附加到目标 header / footer / toolbar
                //datainfoRenderClass: '', //附加目标添加样式
                columns: [], //栏目
                response: false, //是否动态变化 未处理
                buttons: [], //自定义按钮
                btnBoxClass: 'col-xs-6 col-md-4 pull-right', //按钮div样式
                //btnRender: '', //附加到目标 header / footer / toolbar
                //btnRenderClass: '', //附加目标添加样式
                toolbar: '', //工具栏 
                href: '', //数据源地址
                ajaxMethod: 'post', //读取方式 post get
                queryParams: {}, //传递参数
                data: [], //静态数据 [{},{},{}]
                merge: []//合并单元格 ['first_name', 'last_name'] 如果设置多个字段 全部相等才会合并
            };
            var wrapid = this.attr('id') + '-wrap';
            if (this.is('table')) {
                var tbody = this.children('thead,tbody');
                var trs = tbody.children('tr');
                if (options.columns == undefined) {
                    var columns = initColumns(trs);
                    settings.columns = columns;
                    settings.data = initDatas(settings.columns, trs);
                }
                settings.columns = $.grep(settings.columns, function (n) {
                    return !$.isEmptyObject(n);
                });
            }
            settings = $.extend(settings, options);
            var _this = this;
            if (settings['columns'].length) {
                this.is('table') ? _this = initwrap(this, wrapid) : _this = initrepale(this, wrapid);
                if (!data) {
                    _this.data('tablegrid', {
                        target: _this,
                        tablegrid: true,
                        options: settings,
                        page: 1,
                        pagesize: settings['pagesize'][0],
                    });
                }
                initialization(_this, settings);
            } else {
                console.info("$('#" + _this.attr('id') + "') init: failed");
            }
            return _this;
        },
        destroy: function () {
            var data = this.data('tablegrid');
            if (data) {
                var wrapid = this.attr('id') + '-wrap';
                $('#' + wrapid).remove();
            }
        },
        sort: function () {
            var options = this.data('tablegrid').options;
            this.data('tablegrid').page = 1;
            if (options.href) {
                loadData(this);
            } else {
                var sortSet = this.data('tablegrid').sort;
                var datas = options.datajson.rows;
                this.data('tablegrid').options.datajson.rows = rowsort(datas, sortSet.field, sortSet.order);
                loadData(this);
            }
        },
        reload: function () {
            loadData(this);
        },
        update: function () {

        },
        getRowData: function (index) {
            //不指定行或无选中行 返回第一行数据
            return this.data('tablegrid').options.dispalyData[index];
        },
        getSelectedRow: function (idFieldVal) {
            var dataIndex = null;
            var trs = this.children('tbody').children('tr');
            $.each(trs, function (i, tr) {
                if ($(tr).hasClass('selected')) {
                    dataIndex = i;
                    return false;
                }
            })
            return dataIndex;
        },
        getRowIndex: function (idFieldVal) {
            var options = this.data('tablegrid').options
            var datas = options.dispalyData;
            var index = 0;
            $.each(datas, function (i, data) {
                if (data[options.idField] == idFieldVal) {
                    index = i;
                    return false;
                }
            })
            return index;
        },
        removeRow: function (index) {
            if (index != undefined) {
                this.data('tablegrid').options.dispalyData.splice(index, 1);
                this.children('tbody').children('tr').eq(index).remove();
                drawData(this);
            }
            return this;
        },
        toggle: function () {
            var wrapid = this.attr('id') + '-wrap';
            $('#' + wrapid).children('div:not([class^="tablegrid-wrap-header"],[class^="tablegrid-wrap-processing"])').toggle();
        }
    };
    $.fn.tablegrid = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.tablegrid');
        }
    };
})(jQuery);