jQuery(document).ready(function($) { 
    $('.menu-item-has-children ul').hide();
    $(".menu-item-has-children a").click(function () {
    $(this).parent(".menu-item-has-children").children("ul").slideToggle("200");
    $(this).find("i.fa-angle-down").toggleClass("fa-angle-up fa-angle-down");
    });
    $('body').click(function() { document.getElementByClass('sub-menu').style.display='none';}); //при клике на любую область экрана прячем его-же.

})