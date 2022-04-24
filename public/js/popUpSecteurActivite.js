$(document).on('change' ,'#dossier_secteurActivite', function(event) {
    event.preventDefault();
   var option= $('#dossier_secteurActivite :selected').text();
    awed3abiCategorieImposition();
     /*******************************************************/
    if(option==='Café Restauration'){

        fasa5KolChay();

        awed3abiCategorieImposition();
    //    $('#msgSecteurActivite').text("Avec débit de tabac ?");
        $("[id^=lazemTet5aba]:not(#lazemTet5abaCafeResto)").hide();
        $('#lazemTet5abaCafeResto').show("slow");

    }
            /*************************/
    else if(option==='Transport de marchandises'){
        fasa5KolChay();

        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        createAlert('Opps!','Attention ! ','VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL','danger',true,false,'pageMessages');
    }
          /****************************/
    else   if(option==='Transport de personnes'){
        fasa5KolChay();

        awed3abiCategorieImposition();
        $("[id^=lazemTet5aba]:not(#lazemTet5abaTransportPerso)").hide();
        $('#lazemTet5abaTransportPerso').show("slow");
    }
    /****************************/
    else   if(option==='Pharmacie'){
        fasa5KolChay();


        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        createAlert('Opps!','Attention ! ','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE ','danger',true,false,'pageMessages');
        redirect();
    }
    /****************************/
    else   if(option==='Immobilier'){
        fasa5KolChay();

        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        $("[id^=lazemTet5aba]:not(#lazemTet5abaImmobilier)").hide();
        $('#lazemTet5abaImmobilier').show("slow");

    }
    /****************************/
    else   if(option==='Agriculture Elevage'){
        fasa5KolChay();


        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='BIC']").remove();
        $("#dossier_categorieImposition option[value='BNC']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();
        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();
        $("#dossier_categorieImposition option[value='Micro-BNC']").remove();


    }
    /****************************/
    else   if(option==='Profession Libérale'){
        fasa5KolChay();


        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();
        $("#dossier_categorieImposition option[value='BIC']").remove();
        $("#dossier_categorieImposition option[value='BA']").remove();
        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();
        $("#dossier_categorieImposition option[value='Sans']").remove();
        $("#dossier_categorieImposition option[value='Micro-BIC']").remove();
        $("#dossier_categorieImposition option[value='Micro-BA']").remove();


    }
    /****************************/
    else   if(option==='Autoentrepreneur'){
        fasa5KolChay();


        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        $("#dossier_categorieImposition option[value='Revenus Fonciers']").remove();

        $("#dossier_categorieImposition option[value='BIC']").remove();
        $("#dossier_categorieImposition option[value='BNC']").remove();
        $("#dossier_categorieImposition option[value='BA']").remove();

        $("#dossier_categorieImposition option[value='Micro-Foncier']").remove();
        $("#dossier_categorieImposition option[value='Sans']").remove();



    }
    /****************************/
    else   if(option==='Pharmacie'){
        fasa5KolChay();


        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        createAlert('Opps!','Something went wrong','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE  ','danger',true,false,'pageMessages');
        setTimeout(function(){ window.location = "/dossier"; }, 1000);

    }
    /****************************/
    else   if(option=='Assurance'){
        fasa5KolChay();


        $("[id^=lazemTet5aba]").hide();
        awed3abiCategorieImposition();
        $("#dossier_franchiseEnBaseTva option[value='non']").remove();


    }
    /****************************/
    else {
        fasa5KolChay();

        awed3abiCategorieImposition();
        awed3abiFranchise();
        $("[id^=lazemTet5aba]").hide("slow");
    }
    /****************************/
    return false;
});


/***********************************************************************************************/
$(document).on('click' ,'#jsrSecteurActiviteFehaOuiWallaNon', function(event) {

    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');

});
/***********************************************************************************************/
/***********************************************************************************************/
$(document).on('click' ,'#jnsrSecteurActiviteFehaOuiWallaNon', function(event) {
    var target = $(this).data('target');
    $('#' + target).toggleClass('hide');
});
/***********************************************************************************************/

$(document).on('change' ,'#ouinonSecteurActivite', function(event) {
    var chnawe5tar= $('#ouinonSecteurActivite :selected').text();

    if(chnawe5tar==='oui')
    {

        createAlert('Opps!','Attention','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE ','danger',true,false,'pageMessages');
    }
});
/***********************************************************************************************/
$(document).on('change' ,'#ouinonTransportPerso', function(event) {
    var chnawe5tar= $('#ouinonTransportPerso :selected').text();

    if(chnawe5tar==='non')
    {
        $('#lazemTet5abaTransportPersoThenya').show("slow");
    }
    else
    {
        $("[id^=lazemTet5aba]:not(#lazemTet5abaTransportPerso)").hide("slow");
        $('#ouinonTransportPersoThenya').val("");

    }
});
/***********************************************************************************************/
function redirect()
{
    setTimeout(function(){ window.location = "/dossier"; }, 4000);
}
/***********************************************************************************************/
function fasa5KolChay()
{
    $("[id^=lazemTet5aba]").hide("slow");

    $('#ouinonSecteurActivite').val("");
    $('#ouinonTransportPerso').val("");
    $('#ouinonTransportPersoThenya').val("");
    $('#ouinonImmobilier').val("");
    $('#ouinonImmobilierThenya').val("");

}
/***********************************************************************************************/
function fasa5KolChaywM3ahaSecteurActivite()
{
    $("[id^=lazemTet5aba]").hide("slow");

    $('#dossier_secteurActivite').val(" ");
    $('#ouinonSecteurActivite').val("");
    $('#ouinonTransportPerso').val("");
    $('#ouinonTransportPersoThenya').val("");
    $('#ouinonImmobilier').val("");
    $('#ouinonImmobilierThenya').val("");

}
/***********************************************************************************************/
$(document).on('change' ,'#ouinonImmobilier', function(event) {
    var chnawe5tar= $('#ouinonImmobilier :selected').text();
    var option= $('#dossier_secteurActivite :selected').text();

    if(chnawe5tar=='oui')
    {
        $('#lazemTet5abaImmobilierThenya').show("slow");

        $('#dossier_formeJuridique').empty();
        $("#dossier_formeJuridique").append(new Option("", ""));
        $("#dossier_formeJuridique").append(new Option("SCI", "SCI"));
    }
    /******************************/

    else {
        $("[id^=lazemTet5aba]:not(#lazemTet5abaImmobilier)").hide("slow");
        $('#ouinonImmobilierThenya').val("");
        awedFormeJuridique();
    }

});
/***********************************************************************************************/
