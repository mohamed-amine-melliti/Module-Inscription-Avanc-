$(function () {
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate: '<div class="title">#title#</div>',
        labels: {
            next: '',
            previous: '<i class="fa fa-chevron-left"></i> ',
            finish: '<i class="fa fa-folder">',
            current: ''
        },
        onFinished: function (event, currentIndex) {
            $("#dossier").submit();
//
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            $('a[href$="next"]').parent().hide();
            $('a[href$="next"]').hide();

        },

        onStepChanging: function (event, currentIndex, newIndex) {

            $('a[href$="next"]').parent().hide();
            $('a[href$="next"]').hide();



            if (currentIndex === 1) {
                if (
                    $('#dossier_formeJuridique :selected').text() === 'SARL' ||
                    $('#dossier_formeJuridique :selected').text() === 'SELARL' ||
                    $('#dossier_formeJuridique :selected').text() === 'SCI'
                ) {


                } else {


                }


            }

            /****************************************************/
            var RegimeTva = $('#regime').val();
            var juridique = $('#myjuridique').val();

            if (
                $('#myjuridique').val() === 'SARL' ||
                $('#myjuridique').val() === 'SELARL' ||
                 $('#myjuridique').val() === 'SCI'
            ) {



                if ($('#firstYesNo :selected').text() === 'oui') {
                    var ClotureExcercice = $('#datecloture1ex').val();
                    var OuvertureExcercice = $('#dateCreationEntreprise').val();

                    $('#fullname-val').text(OuvertureExcercice);
                    $('#email-val').text(ClotureExcercice);
                    $('#phone-val').text(RegimeTva);

                }

                else {
                    var OuvertureExcercice = $('#nouvelExcerciceOuverture').val();
                    var ClotureExcercice = $('#nouvelExcerciceCloture').val();

                    $('#fullname-val').text(OuvertureExcercice);
                    $('#email-val').text(ClotureExcercice);
                    $('#phone-val').text(RegimeTva);

                }

            }

            else {
                var OuvertureExcercice = $('#nouvelExcerciceOuverturesiDifferentdeFormeJuridique').val();

                if ($('#ClotureChangeOuNon :selected').text() === 'oui') {
                    var ClotureExcercice = $('#dateClotureNvExcerciceSIdiffJuridiqueEtOui').val();


                    $('#fullname-val').text(OuvertureExcercice);
                    $('#email-val').text(ClotureExcercice);
                    $('#phone-val').text(RegimeTva);


                }
                else {
                    var ClotureExcercice = $('#dateClotureNvExcerciceSIdiffJuridiqueEtNon').val();

                    $('#fullname-val').text(OuvertureExcercice);
                    $('#email-val').text(ClotureExcercice);
                    $('#phone-val').text(RegimeTva);

                }
            }


            $('#fullname-val').text(OuvertureExcercice);
            $('#email-val').text(ClotureExcercice);
            $('#phone-val').text(RegimeTva);

            /****************************************************/


            return true;
        },


    });
    doVilleAutoComplete();
    doApiSireneAutoComplete();

});
