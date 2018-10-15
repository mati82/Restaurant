var OrderForm = function()
{
  this.$form = $('#order-form');
  this.$meal = $('.meal');
  this.$mealDetails = $('#mealDetails');
  this.$orderSummary = $('#orderSummary');
}

OrderForm.prototype.onAjaxChangeMeal = function(meal)
{
  var imageUrl;
  imageUrl = getWwwUrl() + "/images/meals" + meal.Photo;

  //mise à jour de l'affichage
  this.$mealDetails.children('p').text(meal.Description);
  this.$mealDetails.children('.mealPrice').text(meal.SalePrice);
  this.$mealDetails.children('img').src = imageUrl;
  this.$mealDetails.children('input').val = meal.SalePrice;

};

OrderForm.prototype.onAjaxRefreshOrderSummary = function(basketViewHtml)
{

};

OrderForm.prototype.onChangeMeal = function()
{

};
