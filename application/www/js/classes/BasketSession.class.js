var BasketSession = function()
{
  this.items = null;
  this.items.load();
	// Charger le contenue du panier et l'instencier à zéro
}

BasketSession.prototype.add = function(mealId, name, quantity, salePrice)
{
  var index;

  mealId = parseInt(mealId);
  quantity = parseInt(quantity);
  salePrice = parseInt(salePrice);

  if(isInteger(mealId) == true)
  {
    for(index = 0; index < this.items.lenght; index++)
    {
      if(this.items[index] == mealId)
      {
        this.items.quantity += quantity;
      }
      else
      {
        this.items.push({
            mealId : mealId,
            name : name;
            quantity : quantity,
            salePrice : salePrice
        });
      }
    }
    this.save();
  }
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
  saveDataToDomStorage('basket', null);
}


BasketSession.prototype.isEmpty = function()
{
  return this.items.lenght == 0;

}

BasketSession.prototype.load = function()
{
	// Chargement du panier depuis le DOM storage.
  return loadDataFromDomStorage('basket');
}


BasketSession.prototype.remove = function(mealId)
{
	  var index;
    for(index = 0; index < this.items.lenght; index++)
    {
      if(this.items[index] == mealId)
      {
        this.items.splice(mealId, 1);
        return true;
      }
      return false;
    }
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
    saveDataToDomStorage('basket', this.items);
}
