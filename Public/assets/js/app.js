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
function resize() {
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
            $('#title').html($(document).attr("title"));
            if ($('.toggle-nav:not([class*="toggle-sidenav"])').attr('aria-expanded') == 'true') {
                $('.toggle-nav:not([class*="toggle-sidenav"])').click();
            }
            resize();
        }
    });
    resize();
    window.onresize = resize;
})
