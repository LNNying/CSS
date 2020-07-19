$(function () {
    $('#eidtScreen').hide();
    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');
    $('.pagination li span').addClass('page-link');
    $('.sub-menu').hide();
    $('.fa-angle-up').hide();
    $('.title-menu').each(function (e) {
        this.x = 0;
        $(this).click(function (e) {
            var show = $(this).siblings().css('display');
            console.log(show);
            if (show == 'block' && this.x == 0) {
                $(this).siblings('.sub-menu').show(500);
                $(this).children('.fa-angle-up').show(0);
                $(this).children('.fa-angle-down').hide(0);
                $(this).parent('.menu-item').siblings('.menu-item').children('.sub-menu').hide(500);
                $(this).parent('.menu-item').siblings('.menu-item').children('.title-menu').children('.fa-angle-up').hide(0);
                $(this).parent('.menu-item').siblings('.menu-item').children('.title-menu').children('.fa-angle-down').show(0);
                this.x = 1;
            } else {
                $(this).siblings('.sub-menu').hide(500);
                $(this).children('.fa-angle-up').hide(0);
                $(this).children('.fa-angle-down').show(0);
                this.x = 0;
            }
        });
    });
});
