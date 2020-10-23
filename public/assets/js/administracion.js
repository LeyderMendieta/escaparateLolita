$(window).on("load",function(){
    $('.nav-custom-leyder').on("click",function(){
        var $dropdown = $(this).siblings('.dropdown-menu');

        if($dropdown.hasClass("show"))
        {
            $dropdown.removeClass('show');
            $(this).parents('.dropdown').removeClass('show');
            $(this).attr('aria-expanded','false');
        }
        else
        {
            $dropdown.addClass('show');
            $(this).parents('.dropdown').addClass('show');
            $(this).attr('aria-expanded','true');
        }
    });

    $('.dropify-infos-message').text("Arrastra y suelta o haz clic para reemplazar");
    $('.dropify-message').each(function(){
        $(this).find('p').first().text("Arrastra y suelta o haz clic para reemplazar");
        $(this).find('p.dropify-error').text("Ooops, algo ha salido mal.");
    });
    $('button.dropify-clear').each(function(){
        $(this).text("Remover");
    })
});