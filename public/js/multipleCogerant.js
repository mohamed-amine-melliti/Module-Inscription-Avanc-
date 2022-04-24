$(document).ready(function () {



    //group add limit
    $("#addCogerant").attr("disabled", true);
    var maxGroup = 20;
    var i = $("#p_scents").length + 1;

    var empty = $(this).parent().find("input");

    $("[id*=Cogerant]").blur(function () {


        var strl = $(this).val();
        if (strl.length == 0) {

            $("#addCogerant").attr("disabled", true);
        } else {
            $("#addCogerant").removeAttr("disabled");
        }

    });

    /*********************************************/

    //add more fields group
    $(".addMore").click(function () {
        //alert($('form').find('.ui.form').length);
        if ($('form').find('.fieldGroup').length < maxGroup) {
            var fieldHTML = ' <div class="form-row" > <div class="form-holder"> <label for="nomCogerant">Nom Cogérant</label> <input style="text-transform: uppercase" type="text" class="form-control input-step-2" id="nomCogerant(' +
                i +
                ')" name="nomCogerant('+i+')"> </div> <div class="form-holder"> <label for="prenomCogerant">Prénom Cogérant </label> <input type="text"  class="form-control input-step-2" id="prenomCogerant(' +
                i +
                ')" name="prenomCogerant('+i+')" > </div> <div class="form-holder"> <label for="capitalCogerant">%Capital </label> <input type="text" class="form-control input-step-2" id="capitalCogerant(' +
                i +
                ')"  name="capitalCogerant('+i+')"><button type="button" class="ui remove button" href="javascript:void(0)"><i class="minus icon"></i>-</button> </div> </div>';

            $('form').find('.fieldGroup:last').after(fieldHTML);
            i++;
            $("[name=nb_elements]").val(i);

        } else {
            alert('Maximum ' + maxGroup + ' groups are allowed.');
        }
    });


    //remove fields group
    $('form').on("click", ".remove", function () {
        $(this).parents(".form-row").remove();
        i--;
    });

    /*********************************************/
    $("[id^=prenomCogerant]").on('blur', function () {

        var strl = $(this).val();
        var masSTR = capitalizeFirstLetter(strl);
        $(this).val(masSTR);

    });

    /*********************************************/

    $(document).on("blur", "[id^=prenomCogerant]", function () {

        var strl = $(this).val();
        var masSTR = capitalizeFirstLetter(strl);
        $(this).val(masSTR);
    });

    /*********************************************/
    $(document).on("blur", "[id^=capitalCogerant]", function () {

        var allValues = $("[id^=capitalCogerant]").map(function(){
            return this.value;
        }).get();

        let sum = 0;

        var result = allValues.map(function (x) {
            return parseInt(x, 10);
        });

        for (let i = 0; i < result.length; i++) {
            if (isNaN(result[i]) ) {
                sum+=0;
            }
            else
            sum += result[i];
        }

        if ($('#dossier_capital').val().length){
            var hedi = $('#dossier_capital').val();
            var iNum = parseInt(hedi);
            sum+=iNum;
        }

        if (sum<=50 )
        {
            console.log(sum);
            if ($('#dossier_formeJuridique :selected').text() === 'SARL' || $('#dossier_formeJuridique :selected').text() === 'SELARL'){

                //awedRegimeIndependant();
                $("#dossier_regimeIndependants option[value='non']").remove();
                $('#estfamilleSarl').show("slow");

                    }

        }

        else {
            console.log(sum);
            //  awedRegimeIndependant();
            $('#estfamilleSarl').hide("slow");
        }


    });

    /*********************************************/


    $(document).on("blur", "#dossier_capital", function () {

        var allValues = $("[id^=capitalCogerant]").map(function(){
            return this.value;
        }).get();

        let sum = 0;

        var result = allValues.map(function (x) {
            return parseInt(x, 10);
        });

        for (let i = 0; i < result.length; i++) {
            if (isNaN(result[i]) ) {
                sum+=0;
            }
            else
                sum += result[i];
        }

        if ($('#dossier_capital').val().length){
            var hedi = $('#dossier_capital').val();
            var iNum = parseInt(hedi);
            sum+=iNum;
        }

        if (sum<=50 )
        {
            console.log(sum);
            if ($('#dossier_formeJuridique :selected').text() === 'SARL' || $('#dossier_formeJuridique :selected').text() === 'SELARL'){

                //awedRegimeIndependant();
                $("#dossier_regimeIndependants option[value='non']").remove();
                $('#estfamilleSarl').show("slow");

            }

        }

        else {
            console.log(sum);
            $("#dossier_regimeIndependants").append(new Option("non", "non"));

            //  awedRegimeIndependant();
            $('#estfamilleSarl').hide("slow");
        }


    });


});

/*********************************************/
$(document).on('change' ,'#ouinonestfamilleSarl', function(event) {
    var chnawe5tar= $('#ouinonestfamilleSarl :selected').text();

    if(chnawe5tar==='oui')
    {


        $("#ouinonquestionPourSavoirCogerant option[value='non']").remove();
        $("#dossier_typeImposition option[value='IS']").remove();


    }
    else {
        $("#dossier_typeImposition").append(new Option("IS", "IS"));
        $("#ouinonquestionPourSavoirCogerant").append(new Option("non", "non"));
    }

});
/*********************************************/
var checkIfFamilleSarl = function ()
{

    var allValues = $("[id^=capitalCogerant]").map(function(){
        return this.value;
    }).get();

    let sum = 0;

    var result = allValues.map(function (x) {
        return parseInt(x, 10);
    });


    for (let i = 0; i < result.length; i++) {
        if (isNaN(result[i]) ) {
            sum+=0;
        }
        else
            sum += result[i];
    }


    if ($('#dossier_capital').val().length){
        var hedi = $('#dossier_capital').val();
        var iNum = parseInt(hedi);
        sum+=iNum;
    }

    if (sum<=50 )
    {
        console.log(sum);
        if ($('#dossier_formeJuridique :selected').text() === 'SARL' || $('#dossier_formeJuridique :selected').text() === 'SELARL'){

            //awedRegimeIndependant();
            $("#dossier_regimeIndependants option[value='non']").remove();
            $('#estfamilleSarl').show("slow");

        }

    }

    else {
        console.log(sum);
        //  awedRegimeIndependant();
        $('#estfamilleSarl').hide("slow");
    }


};
/*********************************************/
$(document).on('change', '#conjoint', function (event) {

    var chnawe5tar= $('#conjoint :selected').text();

    if(chnawe5tar==='oui')
    {
        $("#dossier_regimeIndependants option[value='non']").remove();


    }

    else
    {
        awedRegimeIndependant();
    }



});