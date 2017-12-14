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
$(function () {
    if (isComputer()) {
        $(document).off('li.click.bs.dropdown.data-api');
        dropdownOpen('li');
    }else{
//        $('a.dropdown-toggle').bind('click.mobile',function(e){
//            e.preventDefault();
//            return false;
//        })
    }
    $.pjax({
        selector: 'a:not([href^="javascript"],[href^="#"],[class^="dropdown-toggle"])',
        //selector: 'a',
        container: '#main',
        cache: false,
        storage: false,
        titleSuffix: '',
        filter: function () {},
        callback: function () {
            resize();
        }
    });
    resize();
})

function resize() {
    var winH = $(window).height();
    var winW = $(window).width();
    var sideNavW = $('.sidenav').outerWidth(true);
    var mainNavH = $('.navigation').outerHeight(true);
    var pageHeadH = $('.page-header').outerHeight(true);
    var breadcrumbH = $('.breadcrumb').outerHeight(true);
    if (isComputer()) {
        $('body').attr('scroll','no');
        $('.sidenav').height(winH - mainNavH);
        $('.main-area').width(winW - sideNavW - 10);
        $('#page-header').width(winW - sideNavW - 10);
        $('.sidenav').perfectScrollbar();
        $('.main-show').height(winH - mainNavH - pageHeadH - breadcrumbH - 25);
        $('.main-show').perfectScrollbar({
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });
    } else {
        $('.sidenav').height('auto');
    }
}
window.onresize = resize;