$(document).ready(function() {
    $('.loader-link').on('click', function(event) {
        event.preventDefault();
        $('#loader-wrapper').show();
        window.location.href = $(event.currentTarget).attr('href');
    });
});
$(document).ready(function() {
    $('.modal-link').on('click', function(event) {
        $('#modal-aprobados').modal('show');
    });
});
$(document).ready(function() {
    $('.modal-transv').on('click', function(event) {
        $('#modal-transversales').modal('show');
    });
});



