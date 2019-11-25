$('#add-image').click(function() {
    // je récupère le numéro des futurs champs que je vais créer
    const index = +$('#widgets-counter').val();

    // je récupère le prototype des entrées
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index);

    // j'injecte ce code au sein de la div
    $('#ad_images').append(tmpl);

    $('#widgets-counter').val(index + 1);

    // je gere le bouton supprimer
    handleDeleteButtons();
});

function handleDeleteButtons() {
    $('button[data-action="delete"]').click(function() {
        const target = this.dataset.target;
        $(target).remove();
    });
}

function updateCounter(){
    const count = +$('#ad_images div.form-group').length;

    $('#widgets-counter').val(count);
}

updateCounter();
handleDeleteButtons();