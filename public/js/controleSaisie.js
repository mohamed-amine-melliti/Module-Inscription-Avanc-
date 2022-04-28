function isEmail(email) {
    var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return EmailRegex.test(email);
}

/****************/
function awed3abiTypeImposition()
{
    $('#dossier_typeImposition').empty();
    $("#dossier_typeImposition").append(new Option("", ""));
    $("#dossier_typeImposition").append(new Option("IR", "IR"));
    $("#dossier_typeImposition").append(new Option("IS", "IS"));
}
/****************/
function awed3abiRegimeMicro()
{
    $('#dossier_regimeMicro').empty();
    $("#dossier_regimeMicro").append(new Option("", ""));
    $("#dossier_regimeMicro").append(new Option("oui", "oui"));
    $("#dossier_regimeMicro").append(new Option("non", "non"));
}
/****************/
function awed3abiFranchise()
{
    $('#dossier_franchiseEnBaseTva').empty();
    $("#dossier_franchiseEnBaseTva").append(new Option("", ""));
    $("#dossier_franchiseEnBaseTva").append(new Option("oui", "oui"));
    $("#dossier_franchiseEnBaseTva").append(new Option("non", "non"));
}
/****************/
function awed3abiCategorieImposition()
{

    $('#dossier_categorieImposition').empty();
    $("#dossier_categorieImposition").append(new Option("", ""));
    $("#dossier_categorieImposition").append(new Option("Sans", "Sans"));
    $("#dossier_categorieImposition").append(new Option("BIC", "BIC"));
    $("#dossier_categorieImposition").append(new Option("BNC", "BNC"));
    $("#dossier_categorieImposition").append(new Option("BA", "BA"));
    $("#dossier_categorieImposition").append(new Option("Revenus Fonciers", "Revenus Fonciers"));
    $("#dossier_categorieImposition").append(new Option("Micro-BIC", "Micro-BIC"));
    $("#dossier_categorieImposition").append(new Option("Micro-BNC", "Micro-BNC"));
    $("#dossier_categorieImposition").append(new Option("Micro-BA", "Micro-BA"));
    $("#dossier_categorieImposition").append(new Option("Micro-Foncier", "Micro-Foncier"));
}

/****************/

function awedSecteurActivite(){
    $('#dossier_secteurActivite').empty();
    $("#dossier_secteurActivite").append(new Option("", ""));
    $("#dossier_secteurActivite").append(new Option("Café Restauration", "Café Restauration"));
    $("#dossier_secteurActivite").append(new Option("Assurance", "Assurance"));
    $("#dossier_secteurActivite").append(new Option("BTP", "BTP"));
    $("#dossier_secteurActivite").append(new Option("Transport de marchandises", "Transport de marchandises"));
    $("#dossier_secteurActivite").append(new Option("Transport de personnes", "Transport de personnes"));
    $("#dossier_secteurActivite").append(new Option("Commerçant classique", "Commerçant classique"));
    $("#dossier_secteurActivite").append(new Option("Pharmacie", "Pharmacie"));
    $("#dossier_secteurActivite").append(new Option("Garage", "Garage"));
    $("#dossier_secteurActivite").append(new Option("Services", "Services"));
    $("#dossier_secteurActivite").append(new Option("Profession Libérale", "Profession Libérale"));
    $("#dossier_secteurActivite").append(new Option("Négoce", "Négoce"));
    $("#dossier_secteurActivite").append(new Option("E-commerce", "E-commerce"));
    $("#dossier_secteurActivite").append(new Option("Vente de produits autofabriqués", "Vente de produits autofabriqués"));
    $("#dossier_secteurActivite").append(new Option("Agriculture Elevage", "Agriculture Elevage"));
    $("#dossier_secteurActivite").append(new Option("Sport et Solidarité", "Sport et Solidarité"));
    $("#dossier_secteurActivite").append(new Option("Immobilier", "Immobilier"));

}
/******************************/
function awedFormeJuridique(){

    $('#dossier_formeJuridique').empty();
    $("#dossier_formeJuridique").append(new Option("", ""));
    $("#dossier_formeJuridique").append(new Option("Association Loi 1901 non lucrative", "Association Loi 1901 non lucrative"));
    $("#dossier_formeJuridique").append(new Option("Association lucrative", "Association lucrative"));
    $("#dossier_formeJuridique").append(new Option("SARL", "SARL"));
    $("#dossier_formeJuridique").append(new Option("EURL", "EURL"));
    $("#dossier_formeJuridique").append(new Option("SAS", "SAS"));
    $("#dossier_formeJuridique").append(new Option("SASU", "SASU"));
    $("#dossier_formeJuridique").append(new Option("SCI", "SCI"));
    $("#dossier_formeJuridique").append(new Option("SELARL", "SELARL"));
    $("#dossier_formeJuridique").append(new Option("SELEURL", "SELEURL"));
    $("#dossier_formeJuridique").append(new Option("SELAS", "SELAS"));
    $("#dossier_formeJuridique").append(new Option("SELASU", "SELASU"));
    $("#dossier_formeJuridique").append(new Option("Entreprise individuelle", "Entreprise individuelle"));
    $("#dossier_formeJuridique").append(new Option("EIRL", "EIRL"));
    $("#dossier_formeJuridique").append(new Option("Autoentrepreneur", "Autoentrepreneur"));


    $('label[for="dossier_capitalSocial"]').hide("slow");
    $('#dossier_capitalSocial').hide("slow");

}
/******************************/

function  awedRegimeIndependant()
{
    $('#dossier_regimeIndependants').empty();
    $("#dossier_regimeIndependants").append(new Option("", ""));
    $("#dossier_regimeIndependants").append(new Option("oui", "oui"));
    $("#dossier_regimeIndependants").append(new Option("non", "non"));

}
/******************************/
$(document).ready(function () {


    /*********************************************/
    $('#co_gerant_participation').keypress(function (e) {

        var charCode = (e.which) ? e.which : event.keyCode

        const reg = new RegExp('[+-]?([0-9]*[.])?[0-9]+');

        if (String.fromCharCode(charCode).match(/[^0-9]/g))

            return false;

    });
    /******************************/

    $('#dossier_capital').keypress(function (e) {


        var charCode = (e.which) ? e.which : event.keyCode;
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;

    });
    /******************************/

    $('#dossier_capitalSocial').keypress(function (e) {

        var charCode = (e.which) ? e.which : event.keyCode

        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;

    });
    /******************************/
    $('#dossier_codePostale').keypress(function (e) {

        var charCode = (e.which) ? e.which : event.keyCode

        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;

    });
    /******************************/
    $('#dossier_numeroTel').keypress(function (e) {

        var charCode = (e.which) ? e.which : event.keyCode

        if (String.fromCharCode(charCode).match(/[^0-9]/g))

            return false;

    });
    /******************************/
    $('#dossier_siret').keypress(function (e) {

        var charCode = (e.which) ? e.which : event.keyCode

        if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;
    });

});

/***************************************************************/
$(document).on('click', '.remove-field', function(e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
});
/***************************************************************/
function Validate(id, numType){
    var thisId = document.getElementById("dossier_numeroTel");
    console.log("inside validate "+thisId);

    // console.log("inside int: "+numType);
    var remChars =  thisId.value.charAt(0);

    if(remChars=='0'){
        var temp = thisId.value.substring(0);
        //thisId.value.replace(/[^0-9\.]/g,'');
        thisId.value =  remChars.replace(0,'');// this is to remove "DOT"

    }
}
/***************************************************************/
$(document).ready(function() {
    ValiderCapitale();

    $(window).keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

    $('#dossier_numeroTel').blur(function () {
        var index = $(this).prevAll().length + 1;
        var validateThisVal = $(this).val();
        var validateThisType = $(this).attr('type');



        // Condition to see if  exists
        if (validateThisVal.length < 9) {
            $(this).addClass('not-valid');
            $('span#messageTel').show("slow");
            $(this).removeClass('is-valid');

        } else {
            $(this).addClass('is-valid');
            $(this).removeClass('not-valid');
            $('span#messageTel').hide("slow");
        }

    });
});
/***************************************************************/
function ValiderCapitale() {
    const regexp1 = new RegExp('^[1-9][0-9]?$|^100$');
    const regexp2 = new RegExp('^(?!0?0.00$)\d{1,2}\.\d{2}$');
    const regexp3 = new RegExp('^(?!0?0.00$)\d{1,2}\.\d{1}$');

    $("#dossier_capital").blur(function () {

        var index = $(this).prevAll().length + 1;
        var validateThisVal = $(this).val();
        var validateThisType = $(this).attr('type');

        if (!validateThisVal.match(regexp1) ) {
            $(this).addClass('not-valid');
            $('span#messageCapital').show();
            $(this).removeClass('is-valid');
        }

       else {
            $(this).addClass('is-valid');
            $(this).removeClass('not-valid');
            $('span#messageCapital').hide();
        }

    });


}