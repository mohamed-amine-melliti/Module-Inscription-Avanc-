$('body').on('keyup', '#dossier_siret', function (event) {
    var $input = $(this),
        value = $input.val(),
        length = value.length,
        inputCharacter = parseInt(value.slice(-1));

    if (!((length > 1 && inputCharacter >= 0 && inputCharacter <= 9) || (length === 1 && inputCharacter >= 7 && inputCharacter <= 9))) {
        $input.val(value.substring(0, length - 1));
    }
});