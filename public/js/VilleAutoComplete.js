function doVilleAutoComplete()
{
    /*******************************************************************************/
    $("#dossier_codePostale").autocomplete({

        source: function (request, response) {
            $.ajax({
                url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("#dossier_codePostale").val(),
                data: { q: request.term },
                dataType: "json",
                success: function (data) {
                    var postcodes = [];
                    response($.map(data.features, function (item) {
                        // Ici on est obligé d'ajouter les CP dans un array pour ne pas avoir plusieurs fois le même
                        if ($.inArray(item.properties.postcode, postcodes) == -1) {
                            postcodes.push(item.properties.postcode);
                            return { label: item.properties.postcode + " ----- " + item.properties.city,
                                city: item.properties.city,
                                value: item.properties.postcode
                            };
                        }
                    }));
                }
            });
        },

        // On remplit aussi la ville
        select: function(event, ui) {

            $('#dossier_ville').val(ui.item.city);
        }

    });
    $("#dossier_ville").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "https://api-adresse.data.gouv.fr/search/?city="+$("#dossier_ville").val(),
                data: { q: request.term },
                dataType: "json",
                success: function (data) {
                    var cities = [];
                    response($.map(data.features, function (item) {
                        // Ici on est obligé d'ajouter les villes dans un array pour ne pas avoir plusieurs fois la même
                        if ($.inArray(item.properties.postcode, cities) == -1) {
                            cities.push(item.properties.postcode);
                            return { label: item.properties.postcode + " - " + item.properties.city,
                                postcode: item.properties.postcode,
                                value: item.properties.city
                            };
                        }
                    }));
                }
            });
        },
        // On remplit aussi le CP
        select: function(event, ui) {


            $('#dossier_codePostale').val(ui.item.postcode);
        }

    });
    /*******************************************************************************/

}

