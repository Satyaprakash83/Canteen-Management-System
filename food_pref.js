//submiting user preference data
const submitBtn = document.querySelector(".submit-food-pref .submit-data");
submitBtn.addEventListener("click", () => {
  const preferenceList = {
    Monday: [],
    Tuesday: [],
    Wednesday: [],
    Thursday: [],
    Friday: [],
    Saturday: [],
    Sunday: [],
  };
  [...document.querySelectorAll(" .select-food")]
    .map((element) => {
      if (element.value === "Veg") return 0;
      return 1;
    })
    .forEach((element, index) => {
      switch (index % 7) {
        case 0:
          preferenceList["Monday"].push(element);
          break;

        case 1:
          preferenceList["Tuesday"].push(element);
          break;

        case 2:
          preferenceList["Wednesday"].push(element);
          break;

        case 3:
          preferenceList["Thursday"].push(element);
          break;

        case 4:
          preferenceList["Friday"].push(element);
          break;

        case 5:
          preferenceList["Saturday"].push(element);
          break;

        case 6:
          preferenceList["Sunday"].push(element);
          break;
      }
    });

  $.post("./update_food_preference.php", { preferenceList }, (response) => {
    alert(response);
  });
});
