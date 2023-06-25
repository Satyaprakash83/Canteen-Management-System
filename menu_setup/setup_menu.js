$.post("./../_partials/_get_meals.php", (data) => {
  const mealList = JSON.parse(data);

  let vegMealList = mealList.filter(
    (meal) => meal["meal_type"] === "0" && meal["meal_category"] !== "1"
  );
  let nonVegMealList = mealList.filter((meal) => meal["meal_type"] === "1");
  let breakfastList = mealList.filter((meal) => meal["meal_category"] === "1");

  $.post("./../_partials/_get_food_names.php", (data) => {
    const foodNameList = JSON.parse(data);

    breakfastList = setMealList(
      JSON.parse(JSON.stringify(breakfastList)),
      foodNameList
    );
    vegMealList = setMealList(vegMealList, foodNameList);
    nonVegMealList = setMealList(nonVegMealList, foodNameList);

    [...document.querySelectorAll(".breakfastOptions")].forEach((element) => {
      element.append(...createOptionNodes(breakfastList));
    });

    [...document.querySelectorAll(".veg")].forEach((element) => {
      element.append(...createOptionNodes(vegMealList));
    });

    [...document.querySelectorAll(".nonVeg")].forEach((element) => {
      element.append(...createOptionNodes(nonVegMealList));
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

function createOptionNodes(mealList) {
  const optionList = mealList.map((meal) => {
    const option = document.createElement("option");
    option.textContent = meal["meal_item_list"];
    option.setAttribute("value", meal["meal_id"]);
    return option;
  });
  return optionList;
}

//submiting menu
$(".submitBtn").click(() => {
  const selected = [...document.querySelectorAll("select")].map(
    (select) => select.value
  );
  $.post("./submit_menu.php", { selected }, (data) => {
    alert(data);
  });
});
