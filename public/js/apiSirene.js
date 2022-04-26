function doApiSireneAutoComplete() {
    /*******************************************************************************/
    $("#dossier_siret").autocomplete({

        source: function (request, response) {
            $.ajax({
                url: "https://entreprise.data.gouv.fr/api/sirene/v3/unites_legales/"+$("#dossier_siret").val(),
                data: { q: request.term },
                dataType: "json",
                success: function (data) {
                    var postcodes = [];
                    response($.map(data, function (item) {

                        // Ici on est obligé d'ajouter les CP dans un array pour ne pas avoir plusieurs fois le même
                        if ($.inArray(item.etablissement_siege.siren, postcodes) === -1) {

                            postcodes.push(item.etablissement_siege.siren);
                            return {
                                label: "Dénomination : " + item.denomination + " ------- TVA intra : " + item.numero_tva_intra +  " ------- SIRET :" + item.etablissement_siege.siret,
                                city: item.etablissement_siege.siret,
                                value: item.etablissement_siege.siret,
                                tva : item.numero_tva_intra,

                            };
                        }
                    }));
                }
            });
        },

        // On remplit aussi la ville
        select: function(event, ui) {

            $('#dossier_siret').val(ui.item.siret);
            $('#dossier_numeroTVAintracommunaitre').val(ui.item.tva);
        }
    });

    /*******************************************************************************/
}
