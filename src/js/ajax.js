$(function () {
    $('button').on('click', function () {
        var nome = $("#nome").val();
        $.ajax({
            url: 'http://localhost/ajax/teste',
            method: 'POST',
            data: {nome:nome},
            success:function (r) {
                $('#dados').html(r);
            }
        });
    });
});