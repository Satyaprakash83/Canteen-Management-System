const selectedFood = document.getElementById("selected_food");
const fooditems = document.querySelectorAll(".food-item");
const allFoods = document.getElementById("all_food");

fooditems.forEach((food) => {
  food.lastElementChild.addEventListener("click", (event) => {
    event.stopPropagation();
    allFoods.insertBefore(food, allFoods.firstElementChild);
  });

  food.addEventListener("click", () => {
    selectedFood.appendChild(food);
  });
});

//adding meal item by JSON
const addMealBtn = document.getElementById("submit_btn");
addMealBtn.addEventListener("click", () => {
  const mealList = [...selectedFood.childNodes].map((food) => Number(food.id));
  const mealCatagory = document.getElementById("meal_catagory").value;
  const mealType = document.getElementById("meal_type").value;
  const ratingArray = new Array(12).fill(0);
  $.post(
    "./new_meal_item.php",
    { mealList, mealCatagory, mealType, ratingArray },
    (response) => {
      alert(response);
      if (response === "Item Added Successfully") {
        allFoods.append(...document.getElementById("selected_food").childNodes);
      }
    }
  );
});
