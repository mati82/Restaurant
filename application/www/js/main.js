'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////

function runFormValidation(){
    var $form;
    var formValidator;

    $form = $('form:no([data-no-validation=true])');
    //
    // // Si il y a un formulaire à valider sur la page actuelle ?
    if($form.length == 1)
    {
    // 	Execution de la validation du form
    formValidator = new FormValidator($form);
    formValidator.run();
    }
}



function runOrderForm( ){
    var orderForm;
    var orderStep;

    orderForm = new OrderForm();
    //
    //  // A quelle étape de la commande sommes-nous ?
    //
    //  switch(.....){
    //
    //  commande en cours
    //
    //  Succés du paiement
    //
    //
     // }

}

/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////

$(function(){

	// Effet spécial sur la boite de notifications (le flash bag).

	// Exécution de la validation de formulaire si besoin.

   // Exécution de la gestion du processus de commande si besoin.



});
