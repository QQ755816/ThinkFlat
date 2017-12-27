function certtype(val, index, row) {
    switch (parseInt(val)) {
        case 1:
            return '<label class="label label-info">直接吨位涵盖证明</label>';
            break;
        case 2:
            return '<label class="label label-primary">三方吨位涵盖证明</label>';
            break;
        case 3:
            return '<label class="label label-success">间接吨位涵盖证明</label>';
            break;
    }
}
function certsubstances(val, index, row) {
    console.info(val)
    var $certsubstances = $('<table class="table table-bordered table-condensed"><tr><th>CAS</th><th>EC</th><th>EC Name</th><th>Tonnage</th><th>Use</th></tr></table>');
    $.each(val, function (i, sub) {
        $certsubstances.append('<tr><td>' + sub.cas + '</td><td>' + sub.ec + '</td><td>' + sub.ecname + '</td><td>' + sub.tonnage + '</td><td>' + sub.use + '</td></tr>');
    })
    return $certsubstances;
}
function downstreams(val, index, row) {
    var $downstreams = $('<table class="table table-bordered table-condensed"><tr><th>Type</th><th>Company</th></tr></table>');
    $downstreams.append('<tr><td>Downstream User</td><td>Shandong Yanggu Huatai Chemical Co., Ltd.</td></tr>');
    $downstreams.append('<tr><td>EU Importer</td><td>Tianjin Surfychem T&D Co., Ltd.</td></tr>');
    return $downstreams;
}
function certstatus(val, index, row) {
    switch (parseInt(val)) {
        case 1:
            return '<label class="label label-info">CIRS Verification</label>';
            break;
        case 2:
            return '<label class="label label-primary">Downstream confirmation</label>';
            break;
        case 3:
            return '<label class="label label-success">Valid</label>';
            break;
        case 4:
            return '<label class="label label-danger">Invalid</label>';
            break;
        default:
            return '<label class="label label-default">Unfinished</label>';
            break;
    }
}
Date.prototype.format = function (format) {
    var o = {
        "M+": this.getMonth() + 1,
        "d+": this.getDate(),
        "h+": this.getHours(),
        "m+": this.getMinutes(),
        "s+": this.getSeconds(),
        "q+": Math.floor((this.getMonth() + 3) / 3),
        "S": this.getMilliseconds()
    };
    if (/(y+)/.test(format) || /(Y+)/.test(format)) {
        format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    }
    for (var k in o) {
        if (new RegExp("(" + k + ")").test(format)) {
            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length));
        }
    }
    return format;
};
function timestampformat(timestamp) {
    return (new Date(timestamp * 1000)).format("yyyy-MM-dd");
}
function isComputer() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}
function dropdownOpen(tag) {
    var $dropdownLi = $(tag + '.dropdown');
    $dropdownLi.mouseover(function () {
        $(this).addClass('open');
    }).mouseout(function () {
        $(this).removeClass('open');
    });
}
function adjustment() {
    $('#title').html($(document).attr("title"));
    if ($('.toggle-nav:not([class*="toggle-sidenav"])').attr('aria-expanded') == 'true') {
        $('.toggle-nav:not([class*="toggle-sidenav"])').click();
    }
    var winH = $(window).height();
    var winW = $(window).width();
    var sideNavW = $('.sidenav').outerWidth(true);
    var mainNavH = $('.navigation').outerHeight(true);
    var pageHeadH = $('.page-header').outerHeight(true);
    var breadcrumbH = $('.breadcrumb').outerHeight(true);
    if (isComputer()) {
        $('body').attr('scroll', 'no');
        $('.sidenav').height(winH - mainNavH);
        $('.main-area').width(winW - sideNavW - 10);
        $('.page-header').width(winW - sideNavW - 10);
        $('.sidenav').perfectScrollbar();
        $('.main-show').height(winH - mainNavH - pageHeadH - breadcrumbH - 25).perfectScrollbar();
    } else {
        $('.sidenav').height('auto');
    }
}
$(function () {
    if (isComputer()) {
        $(document).off('li.click.bs.dropdown.data-api');
        dropdownOpen('li');
    }
    $.pjax({
        selector: 'a:not([href^="javascript:;"],[href^="#"],[class^="dropdown-toggle"])',
        container: '#main',
        cache: false,
        storage: false,
        titleSuffix: '',
        filter: function () {},
        callback: function () {
            adjustment();
        }
    });
    adjustment();
    window.onresize = adjustment;
})
