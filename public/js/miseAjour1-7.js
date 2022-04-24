$(document).on('change', '#ouinonSCISARL', function (event) {
    event.preventDefault();

    var option= $('#ouinonSCISARL :selected').text();




        if( option==='non' )
        {
            $('#miseAjourSCIakaho').hide("slow");
            awedRegimeIndependant();
            $("#dossier_regimeIndependants option[value='oui']").remove();

        }

        else {
            $('#miseAjourSCIakaho').show("slow");
            awedRegimeIndependant();
        }





    return false;

});
/************************************************************************/


$(document).on('change', '#ouinonSCIrenumeres', function (event) {
    event.preventDefault();


    var option= $('#ouinonSCIrenumeres :selected').text();

    if( option==='oui' &&  $('#dossier_formeJuridique :selected').text() === 'SCI' ){
        awedRegimeIndependant();
        $("#dossier_regimeIndependants option[value='non']").remove();
    }

    else
    {
        awedRegimeIndependant();

    }

    return false;

});
/************************************************************************/
function goToSectionCogerant()
{
    $theSteps = $('.steps ul').find('.current');
    $($theSteps).next('li').removeClass('disabled');


    $("#form-total-t-2").get(0).click();
}
/**************************************************************************/
function depassSectionCogerant()
{
    $theSteps = $('.steps ul').find('.current');
    $($theSteps).next('li').addClass('disabled');


    $("#form-total-t-3").get(0).click();

}