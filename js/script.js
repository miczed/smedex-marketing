$(function() {
    /*$(document).on('mouseenter.collapse', '[data-toggle=collapse]', function(e) {
        var $this = $(this),
            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
            ,
            option = $(target).hasClass('in') ? 'hide' : "show"
            $('.panel-collapse').not(target).collapse("hide")
            $(target).collapse(option);
    });
    $(document).on('mouseleave.collapse', '[data-toggle=collapse]', function(e) {
        var $this = $(this),
            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
            ,
            option = $(target).hasClass('in') ? 'hide' : "show"
            $('.panel-collapse').not(target).collapse("hide")
            $(target).collapse(option);
    })*/


    $(document).on('mouseenter.collapse', 'footer', function(e) {
        $(this).find('.collapseFooterNav').collapse('show');
        /*var $this = $(this),
            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
            ,
            option = $(target).hasClass('in') ? 'hide' : "show"
            $('.panel-collapse').not(target).collapse("hide")
            $(target).collapse(option);
        */
    });
    $(document).on('mouseleave.collapse', 'footer', function(e) {
        $(this).find('.collapseFooterNav').collapse('hide');
        /*var $this = $(this),
            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
            ,
            option = $(target).hasClass('in') ? 'hide' : "show"
            $('.panel-collapse').not(target).collapse("hide")
            $(target).collapse(option);
    */
    })


});