$.post("./../_partials/_get_meals.php", (data) => {
  let mealList = JSON.parse(data);

  $.post("./../_partials/_get_food_names.php", (data) => {
    const foodNameList = JSON.parse(data);

    menuList = setMealList(mealList, foodNameList);
    $.post("./get_menu.php", (data) => {
      const menu = JSON.parse(JSON.parse(data)[0]["menu_list"]);
      [
        ...document.querySelectorAll(".breakfastOptions, .veg, .nonVeg"),
      ].forEach((element) => {
        element.textContent = getMealName(menuList, menu.shift());
      });
    });
  });
});

function setMealList(mealList, foodNameList) {
  mealList.forEach((element) => {
    const meal_item_list = JSON.parse(element["meal_item_list"]);
    element["meal_item_list"] = meal_item_list
      .map(
        (meal_id) =>
          foodNameList.filter((food) => food["food_id"] == meal_id)[0][
            "food_name"
          ]
      )
      .join(", ");
  });
  return mealList;
}

function getMealName(menuList, meal_id) {
  const meal = menuList.filter((meal) => {
    return meal["meal_id"] == meal_id;
  });
  return meal[0]["meal_item_list"];
}
