<?php
//validation de la query + récuperation des info + serialisation et redirctTo

//validation query = if Id exist
// on récupere
// function pour seria ou deseria
// redirect et return

class MealController
{

  public function returnAllMeal()
   {
     $model = new MealModel();
     $mealObjects = $model->getAllMeal();
     return ["mealObjects" => $mealObjects];

   }

   public function returnOneMeal($idMeal)
   {
     $model = new MealModel();
     $returnQuery = $model->getOneMeal($idMeal);
   }
}
