$(document).ready(function () {

    $('a[href$="next"]').parent().hide();


    $('div#siOui ').hide("fast");
    $('div#siNon ').hide("fast");
    $('div#tbenfijami3el7alet ').show("fast");

    $('div#DivdateClotureNvExcerciceSIdiffJuridiqueEtNon ').hide("fast");
    $('div#DivdateClotureNvExcerciceSIdiffJuridiqueEtOui ').hide("fast");


    $('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide("fast");
    $('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide("fast");

    $('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide("fast");
    $('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide("fast");


});
/**********************1er partie [si Oui/Non]********************************/
$(document).on('change', '#firstYesNo', function (event) {

    var form = getFormeJuridique();

    if ($('#firstYesNo :selected').text() === 'oui') {
        // $('div#siOui').show("slow");
        $('div#siNon').hide("slow");

        if (form === "Entreprise individuelle" ||
            form === "EIRL" ||
            form === "Autoentrepreneur" ||
            form === "SCI"
        ) {
            $('#siOui').show("slow");
            $('div#siNon').hide("slow");

            $('#siJuridiqueOui').show("slow");
            $('#siJuridiqueNon').hide("slow");
        } else {

            $('#siOui').show("slow");
            $('div#siNon').hide("slow");

            $('#siJuridiqueOui').hide("slow");
            $('#siJuridiqueNon').show("slow");

        }


    } else if ($('#firstYesNo :selected').text() === 'non') {

        if (form === "Entreprise individuelle" ||
            form === "EIRL" ||
            form === "Autoentrepreneur" ||
            form === "SCI"
        ) {
            $('#siNon').show("slow");
            $('div#siOui ').hide("slow");


            $('#siEgaldeFormeJuridique').show("slow");
            $('#siDifferentdeFormeJuridique').hide("slow");
        } else {

            $('#siNon').show("slow");
            $('div#siOui ').hide("slow");


            $('#siEgaldeFormeJuridique').hide("slow");
            $('#siDifferentdeFormeJuridique').show("slow");

        }
    }


});
/**********************2eme partie [date cloture]********************************/
$(document).on('change', '#date', function (event) {

    var date = new Date($('#date').val());
    var year = date.getFullYear();
    document.getElementById("date_cloture_1_ex").value = "31/12" + '/' + year;
    //$("#date_cloture_1_ex ").attr("disabled","disabled");


});
/************************************************************/
$(document).on('change', '#dateFinDernierBilanComptable', function (event) {


    var form = getFormeJuridique();

    if (form === "Entreprise individuelle" ||
        form === "EIRL" ||
        form === "Autoentrepreneur" ||
        form === "SCI"
    ) {
        var date = new Date($('#dateFinDernierBilanComptable').val());
        var year = date.getFullYear();
        year = year + 1;

        document.getElementById("nouvelExcerciceOuverture").value = "01/01" + '/' + year;
        document.getElementById("nouvelExcerciceCloture").value = "31/12" + '/' + year;

        //  $("#nouvelExcerciceOuverture ").attr("disabled", "disabled");
        //  $("#nouvelExcerciceCloture ").attr("disabled", "disabled");

    } else {

        $("#divFordateSignature").hide("fast");

        var date = new Date($('#dateFinDernierBilanComptable').val());
        var day = date.getDate();
        var year = date.getFullYear();
        var month = date.getMonth() + 1;

        var day2 = date.getDate();
        var year2 = date.getFullYear();
        var month2 = date.getMonth();

        day = day + 1;
        document.getElementById("nouvelExcerciceOuverturesiDifferentdeFormeJuridique").value = '1' + '/' + (month + 1) + '/' + (year + 1);

        document.getElementById("nouvelExcerciceOuverture").value = "01" + '/' + (month + 1) + '/' + year;
        document.getElementById("dateClotureNvExcerciceSIdiffJuridiqueEtNon").value = day2 + '/' + (month2 + 1) + '/' + (year2 + 1);

    }
});
/*********************************ERT***********************/
$(document).on('change', '#dateCreationEntreprise', function (event) {

    var date = new Date($('#dateCreationEntreprise').val());
    var year = date.getFullYear();

    document.getElementById("datecloture1ex").value = "31" + '/' + 12 + '/' + year;

});

/********** PARTIE 3 [date cloture chanegra-t-elle sur ce nouvel excercice] ***********************/

$(document).on('change', '#ClotureChangeOuNon', function (event) {

    if ($('#ClotureChangeOuNon :selected').text() === 'oui') {

        $('#DivdateClotureNvExcerciceSIdiffJuridiqueEtOui').show("slow");
        $('#DivdateClotureNvExcerciceSIdiffJuridiqueEtNon').hide("slow");

    }


    else {

        $('#DivdateClotureNvExcerciceSIdiffJuridiqueEtNon').show("slow");
        $('#DivdateClotureNvExcerciceSIdiffJuridiqueEtOui').hide("slow");


        var date = new Date($('#dateFinDernierBilanComptable').val());
        var day = date.getDate();
        var year = date.getFullYear();
        var month = date.getMonth();

        document.getElementById("dateClotureNvExcerciceSIdiffJuridiqueEtNon").value = day + '/' + (month ) + '/' + (year + 1);
    }


});

/********************************************************/
function getFormeJuridique() {
    let searchParams = new URLSearchParams(window.location.search);

    let param = searchParams.get('formjuridique')
    return param;


}

