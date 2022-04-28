/********PART 1***********/
$(document).ready(function () {


    $('a[href$="next"]').parent().hide();

    /*************JDOD********************/
    $("[id^=lazemTet5aba]").hide();
    $('#questionPourSavoirCogerant').hide("fast");

    $('#estfamilleSarl').hide("fast");

    $theSteps = $('.steps ul').find('.current');
//    $($theSteps).next('li').next('li').addClass('disabled');
    /********************
     $('#dossier_nbAssocies').hide("slow");
     $('label[for="dossier_nbAssocies"]').hide("slow");

     $('label[for="dossier_capitalSocial"]').hide("slow");
     $('#dossier_capitalSocial').hide("fast");
     ********************
     var DivCapitalSocial= $('#DivCapitalSocial');
     DivCapitalSocial.detach();

     var DivnbAssocie= $('#DivNbAssocie');
     DivnbAssocie.detach();
     **************************/

    $('#DivCapitalSocial').hide("slow");
    $('#DivNbAssocie').hide("slow");
    /**********************************/

    simpleValidation();
    //  checkIfFamilleSarl();

    $('div#rubrique ').hide("fast");
    $('label[for="dossier_regimeIndependants"]').empty().append("Le gérant et co-gérant(sdossier_capitalSocial) sont-ils soumis au régime des indépendants ?");
    $('label[for="dossier_typeImposition"]').empty().append("Type d'imposition*");
    $('label[for="dossier_franchiseEnBaseTva"]').empty().append("Êtes-vous en franchise en base de TVA (pas de TVA)*");
    $('label[for="dossier_regimeMicro"]').empty().append("Êtes-vous en régime micro ?*");
    $('label[for="dossier_categorieImposition"]').empty().append("Catégorie d'imposition*");
    $('label[for="dossier_capital"]').empty().append("% Capital");

    $('#dossier_regimeIndependants ').hide("slow");
    $('#foo3').hide("slow");

    //$(".input-holder").hide();


    $('#foo1').text("Nom Gérant");
    $('#foo2').text("Prénom Gérant");

    $('#ajouterCogerant').hide("slow");


    $('label[for="dossier_capital"]').hide("slow");
    $('#dossier_capital').hide("slow");


    $("[id^=lazemTet5aba]").hide("slow");
    $("[id^=miseAjourSCIakaho]").hide();
    $("[id^=miseAjourSCISARL]").hide();


    $('#dossier_numeroTVAintracommunaitre').hide("slow");


    $('label[for="dossier_numeroTVAintracommunaitre"]').hide("slow");

    /**************/
    var input = document.querySelector("#dossier_numeroTel");
    var iti = window.intlTelInput(input, {
        // separateDialCode:true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js",
    });
    // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
    window.iti = iti;
    /**************/
});
/*********PART 2 [Forme Juridique]***********/

$(document).on('change', '.toggle', function (event) {


    event.preventDefault();


    $('#msg').text($('#dossier_formeJuridique :selected').text());


    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');


    return false;
});

$(document).on('click', '#jsr', function (event) {

    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');

    var tawCategImpo = $('#dossier_categorieImposition :selected').text();
    awed3abiCategorieImposition();
    $('#dossier_categorieImposition').val(tawCategImpo);


    var tawSecteur = $('#dossier_secteurActivite :selected').text();
    var option = $('#dossier_secteurActivite :selected').text();

    awedSecteurActivite();
    $('#dossier_secteurActivite').val(option);
    /***************************************************************************/
    if ($('#dossier_formeJuridique :selected').text() == 'SCI' ||
        $('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'EURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELEURL') {

        $("[id^=miseAjourSCISARL]").show("slow");


    } else {
        $("[id^=miseAjourSCISARL]").hide("slow");

    }
    /***************************************************************************/
    if ($('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
        $('#dossier_formeJuridique :selected').text() == 'Association lucrative') {

        awedSecteurActivite();
        $("#dossier_secteurActivite option[value='Café Restauration']").remove();

        $("#dossier_secteurActivite option[value='Assurance']").remove();
        $("#dossier_secteurActivite option[value='BTP']").remove();
        $("#dossier_secteurActivite option[value='Transport de marchandises']").remove();
        $("#dossier_secteurActivite option[value='Transport de personnes']").remove();
        $("#dossier_secteurActivite option[value='Commerçant classique']").remove();
        $("#dossier_secteurActivite option[value='Garage']").remove();
        $("#dossier_secteurActivite option[value='Pharmacie']").remove();

        $("#dossier_secteurActivite option[value='Services']").remove();
        $("#dossier_secteurActivite option[value='Profession Libérale']").remove();
        $("#dossier_secteurActivite option[value='Négoce']").remove();
        $("#dossier_secteurActivite option[value='E-commerce']").remove();
        $("#dossier_secteurActivite option[value='Vente de produits autofabriqués']").remove();
        $("#dossier_secteurActivite option[value='Immobilier']").remove();
        $("#dossier_secteurActivite option[value='Agriculture Elevage']").remove();
        $("[id^=miseAjourSCIakaho]").hide("slow");


    } else if ($('#dossier_formeJuridique :selected').text() == 'SCI') {

        awedSecteurActivite();

        $("#dossier_secteurActivite option[value='Café Restauration']").remove();
        $("#dossier_secteurActivite option[value='Assurance']").remove();
        $("#dossier_secteurActivite option[value='BTP']").remove();
        $("#dossier_secteurActivite option[value='Transport de marchandises']").remove();
        $("#dossier_secteurActivite option[value='Transport de personnes']").remove();
        $("#dossier_secteurActivite option[value='Commerçant classique']").remove();
        $("#dossier_secteurActivite option[value='Garage']").remove();
        $("#dossier_secteurActivite option[value='Services']").remove();
        $("#dossier_secteurActivite option[value='Profession Libérale']").remove();
        $("#dossier_secteurActivite option[value='Négoce']").remove();
        $("#dossier_secteurActivite option[value='E-commerce']").remove();
        $("#dossier_secteurActivite option[value='Vente de produits autofabriqués']").remove();
        $("#dossier_secteurActivite option[value='Sport et Solidarité']").remove();
        $("#dossier_secteurActivite option[value='Agriculture Elevage']").remove();


        /***************Mise Jour 1.7 *************************/

        /**********************END******************************/

    } else {
        awedSecteurActivite();

    }

    /***************************************************************************/

    if (
        $('#dossier_formeJuridique :selected').text() == 'EURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
        $('#dossier_formeJuridique :selected').text() == 'EIRL' ||
        $('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
        $('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur'


    ) {
        awedRegimeIndependant();
        $("#dossier_regimeIndependants option[value='non']").remove();

    } else {


        awedRegimeIndependant();


    }


    /***************************************************************************/
    if (
        $('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SCI') {

        $('#questionPourSavoirCogerant').show("slow");
        $theSteps = $('.steps ul').find('.current');
        $($theSteps).next('li').removeClass('disabled');

    } else {
        $('#questionPourSavoirCogerant').hide("slow");

        $theSteps = $('.steps ul').find('.current');
        $($theSteps).next('li').addClass('disabled');
    }

    if ($('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
        $('#dossier_formeJuridique :selected').text() == 'Association lucrative'
    ) {
        awed3abiTypeImposition();
        $('#dossier_typeImposition').val("IS");
        $("#dossier_typeImposition option[value='IR']").remove();

    } else if ($('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur' ||
        $('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle'
    ) {
        awed3abiTypeImposition();
        $('#dossier_typeImposition').val("IR");
        $("#dossier_typeImposition option[value='IS']").remove();


    } else {
        var tawtypeImpo = $('#dossier_typeImposition :selected').text();
        var tawCategImpo = $('#dossier_categorieImposition :selected').text();

        awed3abiTypeImposition();

        $('#dossier_typeImposition').val(tawtypeImpo);
        $('#dossier_categorieImposition').val(tawCategImpo);
    }

    /*******************************************************************************/
    if ($('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur') {

        $("#dossier_regimeMicro option[value='non']").remove();
    } else {
        awed3abiRegimeMicro();
    }
    /*******************************************************************************/

    if ($('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
        $('#dossier_formeJuridique :selected').text() == 'Association lucrative' ||
        $('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur'
    ) {
        $("#dossier_franchiseEnBaseTva option[value='non']").remove();
    } else {
        var taw = $('#dossier_franchiseEnBaseTva :selected').text();
        awed3abiFranchise();
        $('#dossier_franchiseEnBaseTva').val(taw);
    }
    /**************************************************/


    if ($('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL') {

        $('label[for="dossier_nbAssocies"]').empty();
        $('label[for="dossier_nbAssocies"]').append("Nombre d'associés");
    }

    if ($('#dossier_formeJuridique :selected').text() == 'SAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SELAS') {
        $('label[for="dossier_nbAssocies"]').empty();
        $('label[for="dossier_nbAssocies"]').append("Nombre d'actionnaires");

    }


    if (
        $('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SCI'
    ) {
        $('label[for="dossier_capital"]').show("slow");
        $('#dossier_capital').show("slow");

    } else {

        $('label[for="dossier_capital"]').hide("slow");
        $('#dossier_capital').hide("slow");
    }


    if (
        $('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'EURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SASU' ||
        $('#dossier_formeJuridique :selected').text() == 'SCI' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SELASU'
    ) {
        $('#DivCapitalSocial').show("slow");

        /* $('label[for="dossier_capital"]').show("slow");
         $('#dossier_capital').show("slow");*/

    } else {
        $('#DivCapitalSocial').hide("slow");

        /* $('label[for="dossier_capital"]').hide("slow");
         $('#dossier_capital').hide("slow");*/
    }

    /*******************************************************************************************************************************/
    if (
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SELASU'
    ) {
        $('#dossier_secteurActivite').val("Profession Libérale");
    } else {
        $('#dossier_secteurActivite').val(option);
    }

    /************************************************/

    if (
        $('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
        $('#dossier_formeJuridique :selected').text() == 'EIRL' ||
        $('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur' ||
        $('#dossier_formeJuridique :selected').text() == 'Association lucrative' ||
        $('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle'
    ) {
        $('#dossier_capitalSocial ').hide("slow");
        $('label[for="dossier_capitalSocial"]').hide("slow");
    }


    if ((
        $('#dossier_formeJuridique :selected').text() == 'SCI' ||
        $('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'EURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
        $('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
        $('#dossier_formeJuridique :selected').text() == 'EIRL' ||
        $('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur')) {

        if (
            $('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
            $('#dossier_formeJuridique :selected').text() == 'EIRL' ||
            $('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur') {
            $('label[for="dossier_regimeIndependants"]').empty().append("L'entrepreneur est-il soumis au régime des indépendants ?");

        } else {
            $('label[for="dossier_regimeIndependants"]').empty().append("Le gérant et co-gérant(s) sont-ils soumis au régime des indépendants ? ?");
        }

        $('#dossier_regimeIndependants ').show("fast");
        $('#foo3').show("fast");


    } else {
        $('#dossier_regimeIndependants ').hide("slow");
        $('#foo3').hide("slow");

    }
    /***********************************************************/

    if ($('#dossier_formeJuridique :selected').text() == 'SAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SASU' ||
        $('#dossier_formeJuridique :selected').text() == 'SELASU' ||
        $('#dossier_formeJuridique :selected').text() == 'SELAS' ||
        $('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
        $('#dossier_formeJuridique :selected').text() == 'Association lucrative'
    ) {
        $('#foo1').text("Nom Président");
        $('#foo2').text("Prenom Président");


        $('label[for="dossier_capital"]').hide("slow");
        $('#dossier_capital').hide("slow");

    }


    /***************************/
    else if ($('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
        $('#dossier_formeJuridique :selected').text() == 'EIRL' ||
        $('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur'
    ) {
        $('#foo1').text("Nom Entrepreneur");
        $('#foo2').text("Prenom Entrepreneur");

    }
    /***************************/

    else {

        $('#foo1').text("Nom Gérant");
        $('#foo2').text("Prenom Gérant");


        //$('div#rubrique ').show("slow");

    }
    /**********************************************************/

    if (
        $('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SCI'
    ) {

    } else {
    }


    /*****************************************************************/

    if ($('#dossier_formeJuridique :selected').text() == 'SAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELAS') {

        $('#DivNbAssocie').show("slow");


        //$('#dossier_categorieImposition').val("BNC");


    } else {
        $('#DivNbAssocie').hide("slow");

    }

    if ($('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative') {


        $('#dossier_categorieImposition').val("Sans");

        $("#dossier_categorieImposition option[value='BIC']").remove();
        $("#dossier_categorieImposition option[value='BNC']").remove();
        $("#dossier_categorieImposition option[value='BA']").remove();

        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();

    } else if ($('#dossier_formeJuridique :selected').text() == 'Association lucrative') {

        //   $('#dossier_categorieImposition').val("Sans");


        $("#dossier_categorieImposition option[value='BIC']").remove();
        $("#dossier_categorieImposition option[value='BNC']").remove();
        $("#dossier_categorieImposition option[value='BA']").remove();

        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();
    } else if ($('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle') {


        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();

    } else if ($('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur') {

        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='BIC']").remove();
        $("#dossier_categorieImposition option[value='BNC']").remove();
        $("#dossier_categorieImposition option[value='BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();

    } else if ($('#dossier_formeJuridique :selected').text() == 'EURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SARL'
    ) {

        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='BNC']").remove();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();

    } else if ($('#dossier_formeJuridique :selected').text() == 'SAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SASU'
    ) {
        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();
    } else if ($('#dossier_formeJuridique :selected').text() == 'SCI') {


        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();
    } else if ($('#dossier_formeJuridique :selected').text() == 'EIRL') {
        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();

    } else if ($('#dossier_formeJuridique :selected').text() == 'SELARL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
        $('#dossier_formeJuridique :selected').text() == 'SELAS' ||
        $('#dossier_formeJuridique :selected').text() == 'SELASU') {
        $("#dossier_categorieImposition option[value='BIC']").remove();
        $("#dossier_categorieImposition option[value='BA']").remove();

        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();

    }

});
/********************************/
$(document).on('click', '#jsrCategImposition', function (event) {
    // $('#msgCategImposition').text($('#dossier_categorieImposition :selected').text() );
    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');
    //awedSecteurActivite();


});

$(document).on('click', '#jnsrCategImposition', function (event) {
    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');
});

/********************************/

$(document).on('click', '#jnsr', function (event) {
    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');
});

$(document).on('click', '#jnsrfinale', function (event) {
    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');
});

$(document).on('click', '#finalbutton', function (event) {
    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');
});


/*********PART 3 (forme juridique + nb associes) ***********/

$(document).on('click', '#dossier_nbAssocies', function (event) {

    if ($('#dossier_nbAssocies :selected').text() == '1') {
        if ($('#dossier_formeJuridique :selected').text() == 'SARL') {

            $('#dossier_formeJuridique').val('EURL');
        } else if ($('#dossier_formeJuridique :selected').text() == 'SAS') {


            $('#dossier_formeJuridique').val('SASU');
        } else if ($('#dossier_formeJuridique :selected').text() == 'SELARL') {


            $('#dossier_formeJuridique').val('SELEURL');
        } else if ($('#dossier_formeJuridique :selected').text() == 'SELAS') {


            $('#dossier_formeJuridique').val('SELASU');
        }
    }


});
/*********PART 4 [Franchise TVA]***********/

$(document).on('change', '.toggleTVA', function (event) {
    event.preventDefault();
    $('#msg').text($('#dossier_franchiseEnBaseTva :selected').text());

    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');


    if ($('#dossier_franchiseEnBaseTva :selected').text() == "non") {

        $('#dossier_franchiseEnBaseTva').val("non");

        $('#dossier_numeroTVAintracommunaitre').show("slow");
        $('label[for="dossier_numeroTVAintracommunaitre"]').show("slow");

    } else if ($('#dossier_franchiseEnBaseTva :selected').text() == "oui") {
        $('#dossier_franchiseEnBaseTva').val("oui");

        $('#dossier_numeroTVAintracommunaitre').hide("fast");
        $('label[for="dossier_numeroTVAintracommunaitre"]').hide("fast");

    }

    return false;

});

/*********PART 5 [TYPE  D'IMPOSITION]***********/
$(document).on('change', '.toggleTypeImpo', function (event) {
    event.preventDefault();
    $('#msg').text($('#dossier_typeImposition :selected').text());

    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');


    return false;

});
/*********PART 6 [Régime Micro]***********/

$(document).on('change', '.toggleRegMicro', function (event) {
    event.preventDefault();
    $('#msg').text($('#dossier_regimeMicro :selected').text());


    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');


    if ($('#dossier_regimeMicro :selected').text() == "OUI" || $('#dossier_regimeMicro :selected').text() == "oui") {
        createAlert('Opps!', '.', 'Pour rappel , la tenue de comptablilité n"est pas obligatoire en régime micro.', 'danger', true, false, 'pageMessages');

        if ($('#dossier_categorieImposition :selected').text() == 'BIC') {
            $("#dossier_categorieImposition").append(new Option("Micro-BIC", "Micro-BIC"));
            $('#dossier_categorieImposition').val("Micro-BIC");

        } else if ($('#dossier_categorieImposition :selected').text() == 'BNC') {
            $("#dossier_categorieImposition").append(new Option("Micro-BNC", "Micro-BNC"));
            $('#dossier_categorieImposition').val("Micro-BNC");
        } else if ($('#dossier_categorieImposition :selected').text() == 'BA') {
            $("#dossier_categorieImposition").append(new Option("Micro-BA", "Micro-BA"));
            $('#dossier_categorieImposition').val("Micro-BA");
        } else if ($('#dossier_categorieImposition :selected').text() == 'Revenus Fonciers') {
            $("#dossier_categorieImposition").append(new Option("Micro-Foncier", "Micro-Foncier"));
            $('#dossier_categorieImposition').val("Micro-Foncier");
        }

    } else if ($('#dossier_regimeMicro :selected').text() == "non" || $('#dossier_regimeMicro :selected').text() == "NON") {

        if ($('#dossier_categorieImposition :selected').text() == 'Micro-BIC') {
            $("#dossier_categorieImposition").append(new Option("BIC", "BIC"));
            $('#dossier_categorieImposition').val("BIC");

        } else if ($('#dossier_categorieImposition :selected').text() == 'Micro-BNC') {
            $("#dossier_categorieImposition").append(new Option("BNC", "BNC"));
            $('#dossier_categorieImposition').val("BNC");
        } else if ($('#dossier_categorieImposition :selected').text() == 'Micro-BA') {
            $("#dossier_categorieImposition").append(new Option("BA", "BA"));
            $('#dossier_categorieImposition').val("BA");
        } else if ($('#dossier_categorieImposition :selected').text() == 'Micro-Foncier') {
            $("#dossier_categorieImposition").append(new Option("Revenus Fonciers", "Revenus Fonciers"));
            $('#dossier_categorieImposition').val("Revenus Fonciers");
        }

    }


    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');

    return false;

});


/*********PART 7 [Catégorie Imposition]***********/
$(document).on('change', '.toggleCategorieImpo', function (event) {
    event.preventDefault();

    $('#msgCategImposition').text($('#dossier_categorieImposition :selected').text());

    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');

    return false;

});

/*********PART 8 [Secteur d'activité ]***********/

$(document).on('change', '#dossier_categorieImposition', function (event) {
    event.preventDefault();


    if ($('#dossier_categorieImposition :selected').text() == 'BA' || $('#dossier_categorieImposition:selected').text() == 'Micro-Ba') {

        awedSecteurActivite();

        $("#dossier_secteurActivite option[value='Café Restauration']").remove();
        $("#dossier_secteurActivite option[value='Assurance']").remove();
        $("#dossier_secteurActivite option[value='BTP']").remove();
        $("#dossier_secteurActivite option[value='Transport de marchandises']").remove();
        $("#dossier_secteurActivite option[value='Transport de personnes']").remove();
        $("#dossier_secteurActivite option[value='Commerçant classique']").remove();
        $("#dossier_secteurActivite option[value='Garage']").remove();
        $("#dossier_secteurActivite option[value='Services']").remove();
        $("#dossier_secteurActivite option[value='Profession Libérale']").remove();
        $("#dossier_secteurActivite option[value='Négoce']").remove();
        $("#dossier_secteurActivite option[value='E-commerce']").remove();
        $("#dossier_secteurActivite option[value='Vente de produits autofabriqués']").remove();
        $("#dossier_secteurActivite option[value='Sport et Solidarité']").remove();
        $("#dossier_secteurActivite option[value='Immobilier']").remove();


    } else {
        awedSecteurActivite();
    }

    if ($('#dossier_categorieImposition :selected').text() == 'BA') {
        createAlert('Opps!', 'Attention ! ', 'VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL', 'danger', true, false, 'pageMessages');

    }


    return false;
});

/*********PART 9 [régime indépendants]***********/
$(document).on('blur', '#dossier_capital', function (event) {


});
/***************************/


/*********PART 10 [ajouter Cogerant ken les champs elkol m3abin]***********/

