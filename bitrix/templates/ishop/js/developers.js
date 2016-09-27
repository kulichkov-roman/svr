$(document).ready(function(){

    /* ==== Tabs ==== */
    var tabContainers = $('.tabs-wrapper .tab-item');

    tabContainers.hide().filter(':first').show();

    $('.tabs-links a').click(function () {
        tabContainers.hide();
        tabContainers.filter(this.hash).fadeIn("slow");
        $('.tabs-links a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();

});