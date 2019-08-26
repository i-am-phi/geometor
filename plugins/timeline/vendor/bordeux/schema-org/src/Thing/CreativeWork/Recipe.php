<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Recipe
 *
 *
 * -------------------------------- CookingMethod ---------------------------------------------
 *
 * @property string|string[] cookingMethod
 *
 * @method string|string[] getCookingMethod() The method of cooking, such as Frying, Steaming, ...
 *
 * @method Recipe setCookingMethod(string $cookingMethod ) setCookingMethod(string[] $cookingMethod )The method of cooking, such as Frying, Steaming, ...
 *
 *
 * -------------------------------- CookTime ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] cookTime
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] getCookTime() The time it takes to actually cook the dish, in ISO 8601 duration format.
 *
 * @method Recipe setCookTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $cookTime ) setCookTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] $cookTime )The time it takes to actually cook the dish, in ISO 8601 duration format.
 *
 *
 * -------------------------------- Ingredients ---------------------------------------------
 *
 * @property string|string[] ingredients
 *
 * @method string|string[] getIngredients() An ingredient used in the recipe.
 *
 * @method Recipe setIngredients(string $ingredients ) setIngredients(string[] $ingredients )An ingredient used in the recipe.
 *
 *
 * -------------------------------- Nutrition ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation[] nutrition
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation[] getNutrition() Nutrition information about the recipe.
 *
 * @method Recipe setNutrition(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation $nutrition ) setNutrition(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation[] $nutrition )Nutrition information about the recipe.
 *
 *
 * -------------------------------- PrepTime ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] prepTime
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] getPrepTime() The length of time it takes to prepare the recipe, in ISO 8601 duration format.
 *
 * @method Recipe setPrepTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $prepTime ) setPrepTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] $prepTime )The length of time it takes to prepare the recipe, in ISO 8601 duration format.
 *
 *
 * -------------------------------- RecipeCategory ---------------------------------------------
 *
 * @property string|string[] recipeCategory
 *
 * @method string|string[] getRecipeCategory() The category of the recipe—for example, appetizer, entree, etc.
 *
 * @method Recipe setRecipeCategory(string $recipeCategory ) setRecipeCategory(string[] $recipeCategory )The category of the recipe—for example, appetizer, entree, etc.
 *
 *
 * -------------------------------- RecipeCuisine ---------------------------------------------
 *
 * @property string|string[] recipeCuisine
 *
 * @method string|string[] getRecipeCuisine() The cuisine of the recipe (for example, French or Ethopian).
 *
 * @method Recipe setRecipeCuisine(string $recipeCuisine ) setRecipeCuisine(string[] $recipeCuisine )The cuisine of the recipe (for example, French or Ethopian).
 *
 *
 * -------------------------------- RecipeInstructions ---------------------------------------------
 *
 * @property string|string[] recipeInstructions
 *
 * @method string|string[] getRecipeInstructions() The steps to make the dish.
 *
 * @method Recipe setRecipeInstructions(string $recipeInstructions ) setRecipeInstructions(string[] $recipeInstructions )The steps to make the dish.
 *
 *
 * -------------------------------- RecipeYield ---------------------------------------------
 *
 * @property string|string[] recipeYield
 *
 * @method string|string[] getRecipeYield() The quantity produced by the recipe (for example, number of people served, number of servings, etc).
 *
 * @method Recipe setRecipeYield(string $recipeYield ) setRecipeYield(string[] $recipeYield )The quantity produced by the recipe (for example, number of people served, number of servings, etc).
 *
 *
 * -------------------------------- TotalTime ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] totalTime
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] getTotalTime() The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
 *
 * @method Recipe setTotalTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $totalTime ) setTotalTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] $totalTime )The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
 *
 *
 */
 class Recipe extends \Bordeux\SchemaOrg\Thing\CreativeWork {

 }