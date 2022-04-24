function doApiSireneAutoComplete() {
    /*******************************************************************************/
    $("#dossier_siret").autocomplete({

        source: function (request, response) {
            $.ajax({
                url: "https://entreprise.data.gouv.fr/api/sirene/v3/etablissements/"+$("#dossier_siret").val(),
                data: { q: request.term },
                dataType: "json",
                success: function (data) {
                    var postcodes = [];
                    response($.map(data, function (item) {

                        // Ici on est obligé d'ajouter les CP dans un array pour ne pas avoir plusieurs fois le même
                        if ($.inArray(item.unite_legale.siret, postcodes) === -1) {

                            postcodes.push(item.unite_legale.siret);
                            return {
                                label: "Dénomination : " + item.unite_legale.denomination + " ------- TVA intra : " + item.unite_legale.numero_tva_intra +  " ------- SIRET :" + item.siret,
                                city: item.unite_legale.denomination,
                                value: item.unite_legale.numero_tva_intra,
                                siret : item.siret,

                            };
                        }
                    }));
                }
            });
        },

        // On remplit aussi la ville
        select: function(event, ui) {
            $('#dossier_siret').val(ui.item.siret);

            $('#dossier_numeroTVAintracommunaitre').val(ui.item.value);
        }
    });

    /*******************************************************************************/
}
