$(document).ready(function(){
    $('form#contactInformation').on('submit', function(e){
        e.preventDefault();
        var submitButton = $('#contactInformationSubmit');
        var ajaxLoader = $($.parseHTML('<img id="ajaxLoader" src="/img/ajax-loader.gif" />'));
        submitButton.replaceWith(ajaxLoader);
        $.ajax({
            type: 'POST',
            url: '/contact/index.php',
            data: $('form#contactInformation').serialize(),
            success: function(response){
                ajaxLoader.replaceWith(submitButton);
            }
        });
    });
});
