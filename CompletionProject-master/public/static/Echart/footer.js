$(function () {
    $('.sub-menu').hide();
    $('.fa-angle-up').hide();
    $('.title-menu').each(function (e) {
        $(this).click(function (e) {
            var show = $(this).siblings().css('display');
            if (show == 'none') {
                $(this).siblings('.sub-menu').show(500);
                $(this).children('.fa-angle-up').show(0);
                $(this).children('.fa-angle-down').hide(0);
                $(this).parent('.menu-item').siblings('.menu-item').children('.sub-menu').hide(500);
                $(this).parent('.menu-item').siblings('.menu-item').children('.title-menu').children('.fa-angle-up').hide(0);
                $(this).parent('.menu-item').siblings('.menu-item').children('.title-menu').children('.fa-angle-down').show(0);
            } else {
                $(this).siblings('.sub-menu').hide(500);
                $(this).children('.fa-angle-up').hide(0);
                $(this).children('.fa-angle-down').show(0);
            }
        });
    });
    // 退出登陆

});