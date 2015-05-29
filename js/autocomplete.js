var MIN_LENGTH = 3;
$( document ).ready(function() {
    $("#keyword").keyup(function() {
        var keyword = $("#keyword").val();
        if (keyword.length >= MIN_LENGTH) {
            $.get( "con_auto-complete.php", { keyword: keyword } )
                .done(function( data ) {
                    console.log(data);
                    var results = jQuery.parseJSON(data);
                    $(results).each(function(key, value) {
                        $('#results').append('<option>' + value + '</option>');
                    })
                });
        }
    });

});