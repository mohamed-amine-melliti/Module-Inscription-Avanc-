// program to convert first letter of a string to uppercase
function capitalizeFirstLetter(str) {

    str = deleteAwel7arfKenouEspace(str);
    // converting first letter to uppercase
    const capitalized = str.charAt(0).toUpperCase() + str.slice(1);
    return capitalized;
}

    /*****************************************/

function deleteAwel7arfKenouEspace(str){

    str1=str.toLowerCase();


    if (str.charAt(0)===' ') {
        const jdid =  str.slice(1);
        return jdid ;
    }

    else
        return str1;
}

/**************************************************************/
$(document).ready(function () {

    //$('#dossier_nomDossier').val('{{ nomDossier }}')

    $("#dossier_prenomGerant").blur(function () {
        var str = $("#dossier_prenomGerant").val();
        var masSTR = capitalizeFirstLetter(str);
        $('#dossier_prenomGerant').val(masSTR);
    });

      /***************************************/

});
/**************************************************************/

function OpenPaymentTab()
{
    window.open('https://www.paypal.com/', 'Payment Aldini');

}
/**************************************************************/
function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
    var iconMap = {
        info: "fa fa-info-circle",
        success: "fa fa-thumbs-up",
        warning: "fa fa-exclamation-triangle",
        danger: "fa ffa fa-exclamation-circle"
    };

    autoDismiss = true;
    var iconAdded = false;

    var alertClasses = ["alert", "animated", "flipInX"];
    alertClasses.push("alert-" + severity.toLowerCase());

    if (dismissible) {
        alertClasses.push("alert-dismissible");
    }

    var msgIcon = $("<i />", {
        "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
    });

    var msg = $("<div />", {
        "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
    });

    if (title) {
        var msgTitle = $("<h4 />", {
            html: title
        }).appendTo(msg);

        if (!iconAdded) {
            msgTitle.prepend(msgIcon);
            iconAdded = true;
        }
    }

    if (summary) {
        var msgSummary = $("<strong />", {
            html: summary
        }).appendTo(msg);

        if (!iconAdded) {
            msgSummary.prepend(msgIcon);
            iconAdded = true;
        }
    }

    if (details) {
        var msgDetails = $("<p />", {
            html: details
        }).appendTo(msg);

        if (!iconAdded) {
            msgDetails.prepend(msgIcon);
            iconAdded = true;
        }
    }


    if (dismissible) {
        var msgClose = $("<span />", {
            "class": "close", // you need to quote "class" since it's a reserved keyword
            "data-dismiss": "alert",
            html: "<i class='fa fa-times-circle'></i>"
        }).appendTo(msg);
    }

    $('#' + appendToId).prepend(msg);

    if (autoDismiss) {
        setTimeout(function () {
            msg.addClass("flipOutX");
            setTimeout(function () {
                msg.remove();
            }, 5000);
        }, 5000);
    }


}
/*********************************************************************/
// Simple Validation - By Chad Humphrey - hmphry.com
// Released under the MIT license

// Get all forms
var simpleValidation = function () {

    var najemN3adi = 0;

    var validateForm = $('form[name="dossier"]');

    // Gets all forms to Validate
    validateForm.each(function () {
        // Defining basic variables, bro
        var validateForm = $(this);
        var validate = {};
        var validateThis = $(this).find('.validate');
        var validatingLength = $(this).find('.validate').length;
        var submitBtn = $(this).find('.submit');

        // For Loop Getting Elements to Validate
        for (var i = 1; i <= validatingLength; i++) {
            // Adding Inputs to object, false for default
            validate['input' + i] = false;
        }

        $('#dossier_adressMail').blur(function () {
            var index = $(this).prevAll().length + 1;
            var validateThisVal = $(this).val();
            var validateThisType = $(this).attr('type');

            var reg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


            // Condition to see if  exists
            if (!validateThisVal.match(reg)) {
                $(this).addClass('not-valid');
                $('span#messageMail').show("slow");
                $(this).removeClass('is-valid');

            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('not-valid');
                $('span#messageMail').hide("slow");
                return validate['input' + index] = true;
            }


        });

        $('#dossier_numeroTVAintracommunaitre').blur(function () {
            var index = $(this).prevAll().length + 1;
            var validateThisVal = $(this).val();
            var validateThisType = $(this).attr('type');

            const reg = new RegExp('[FR]{2}[0-9]{11}');


            // Condition to see if  exists
            if (!validateThisVal.match(reg)) {
                $(this).addClass('not-valid');
                $('span#messagenumeroTVAintracommunaitre').show("slow");
                $(this).removeClass('is-valid');
                return validate['input' + index] = false;
            } else if (validateThisVal.length < 13) {
                $(this).addClass('not-valid');
                $('span#messagenumeroTVAintracommunaitre').show("slow");
                $(this).removeClass('is-valid');
                return validate['input' + index] = false;
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('not-valid');
                $('span#messagenumeroTVAintracommunaitre').hide("slow");
                return validate['input' + index] = true;
            }

        });

        $('#dossier_siret').blur(function () {
            var index = $(this).prevAll().length + 1;
            var validateThisVal = $(this).val();
            var validateThisType = $(this).attr('type');

            const reg = new RegExp('^[0-9]+$');


            // Condition to see if  exists
            if (!validateThisVal.match(reg)) {
                $(this).addClass('not-valid');
                $('span#messagesiret').show("slow");
                $(this).removeClass('is-valid');
                return validate['input' + index] = false;
            } else if (validateThisVal.length < 14) {
                $(this).addClass('not-valid');
                $('span#messagesiret').show("slow");
                $(this).removeClass('is-valid');
                return validate['input' + index] = false;
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('not-valid');
                $('span#messagesiret').hide("slow");
                return validate['input' + index] = true;
            }


        });


        $('#dossier_codePostale').on('blur  change ', function () {
            var index = $(this).prevAll().length + 1;
            var validateThisVal = $(this).val();
            var validateThisType = $(this).attr('type');

            const re = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
            const reg = new RegExp('^[0-9]+$');


            // Condition to see if  exists
            if (!validateThisVal.match(reg)) {
                $(this).addClass('not-valid');
                $('span#messageCodePostale').show("slow");
                $(this).removeClass('is-valid');
                return validate['input' + index] = false;
            } else if (validateThisVal.length < 5) {
                $(this).addClass('not-valid');
                $('span#messageCodePostale').show("slow");
                $(this).removeClass('is-valid');
                return validate['input' + index] = false;
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('not-valid');
                $('span#messageCodePostale').hide("slow");
                return validate['input' + index] = true;
            }

        });

        /**********Zedetha taw controle saisie capitale + participation ***********/


        /******ho************************************************************************/

        validateForm.submit(function (event) {
            // Prevents Default
            event.preventDefault();

            // Logging form errors
            var falseCtn = 0;
            for (var i = 1; i <= validatingLength; i++) {
                if (validate['input' + i] == false) {
                    falseCtn++;
                }
            }

            // Checking if any falses exist
            if (falseCtn > 0) {
                $(this).unbind('submit').submit();
                $(this).click();
            } else {
            }
        });
    });


};

/*****************************************/
function TestCoGerantFieldsM3abinWallaLe(i){
        if  (!$('#dossier_coGerant_'+i+'_nomCogerant').val() &&
             !$('#dossier_coGerant_'+i+'_prenomCogerant').val() &&
             !$('#dossier_coGerant_'+i+'_participation').val()){

            $('#ajouterCogerant').hide("slow");

            return false ;

        }
        else {
            $('#ajouterCogerant').show("slow");
            return true;
        }
}
/*****************************************/
