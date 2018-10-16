const DOM_STORAGE_ITEM_NAME = 'basketItems';

var BasketSession = function()
{

	// Charger le contenue du panier et l'instencier à zéro


}

BasketSession.prototype.add = function(mealId, name, quantity, salePrice)
{

	 // var index;
   //
   //  // Conversion explicite des valeurs spécifiées en nombres.
   //
   //  Recherche de l'aliment spécifié.
   //
   //  for(index= ........ ){
   //
   //  	if(...........){
   //
   //      	L'aliment spécifié a été trouvé, mise à jour de la quantité commandée.
   //
   //
   //      }
    // }

	// L'aliment spécifié n'a pas été trouvé, ajout au panier.
  //
  //   .push({
  //
  //
  //
  //
  //
  //
  //   })
  //
	// save

}


BasketSession.prototype.clear = function()
{

// Destruction du panier dans le DOM storage.

}


BasketSession.prototype.isEmpty = function()
{
  return (empty(loadDataFromDomStorage(DOM_STORAGE_ITEM_NAME)));

}

BasketSession.prototype.load = function()
{

	// Chargement du panier depuis le DOM storage.
  loadDataFromDomStorage(DOM_STORAGE_ITEM_NAME);

}


BasketSession.prototype.remove = function(mealId)
{

	  //   var index;
    //
    // // Recherche de l'aliment spécifié.
    //
    // for(............){
		// if(...............){
    //
    //     L'aliment spécifié a été trouvé, suppression.
    //
    //     renvoyer vrai
    //
    //     }
    // renvoyer faux
    //
    // }

}

BasketSession.prototype.save = function()
{

    // Enregistrement du panier dans le DOM storage.
    saveDataToDomStorage(DOM_STORAGE_ITEM_NAME, data)
}
