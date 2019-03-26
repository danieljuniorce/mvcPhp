$(function () {
    $('button').on('click', function () {
        var nome = $("#nome").val();
        $.ajax({
            url: 'http://localhost/mvcPhp/ajax/teste',
            method: 'POST',
            data: {nome:nome},
            success:function (r) {
                $('#dados').html(r);
            }
        });
    });
});
