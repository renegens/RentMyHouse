$('.thumbnail').click(function(){
    $('.modal-body').empty();
    var title = $(this).parent('a').attr("title");
    $('.modal-title').html(title);
    $($(this).parents('div').html()).appendTo('.modal-body');
    $('#myModal').modal({show:true});
});

/* blur on modal open, unblur on close */
$('#myModal').on('show.bs.modal', function () {
    $('.col-6,.row .thumbnail').addClass('blur');
})

$('#myModal').on('hide.bs.modal', function () {
    $('.col-6,.row .thumbnail').removeClass('blur');
})