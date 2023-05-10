const selectAll = document.getElementById("checkAll");
const allBreakfast = document.querySelector(".all-breakfast");
const allLunch = document.querySelector(".all-lunch");
const allDinner = document.querySelector(".all-dinner");

selectAll.addEventListener("click", () => {
  const checkBoxes = document.querySelectorAll('form input[type="checkbox"]');
  checkBoxes.forEach((element) => {
    element.checked = selectAll.checked;
  });
});
allBreakfast.addEventListener("click", () => {
  const checkBoxes = document.querySelectorAll(".breakfast");
  checkBoxes.forEach((element) => {
    element.checked = allBreakfast.checked;
  });
});
allLunch.addEventListener("click", () => {
  const checkBoxes = document.querySelectorAll(".lunch");
  checkBoxes.forEach((element) => {
    element.checked = allLunch.checked;
  });
});
allDinner.addEventListener("click", () => {
  const checkBoxes = document.querySelectorAll(".dinner");
  checkBoxes.forEach((element) => {
    element.checked = allDinner.checked;
  });
});

//generating day-list from to and from date
const dayListBtn = document.getElementById("generate_day_list");
dayListBtn.addEventListener("click", () => {
  [fromDate, toDate] = [...document.querySelectorAll(".date-inputs input")].map(
    (element) => element.value
  );
  const diff = Math.floor(
    (Date.parse(toDate) - Date.parse(fromDate)) / 86400000
  );

  const listContainer = document.querySelector(".leave-list");
  for (let i = 1; i <= diff; i++) {
    const element = `<label for="row-${i}">Lorem, ipsum.</label>
        <div class="leave-day-preference" id="row-${i}">
        <input type="checkbox" class="breakfast" id="" />
        <input type="checkbox" class="lunch" id="" />
        <input type="checkbox" class="dinner" id="" />
      </div>`;
    listContainer.innerHTML += element;
    document.querySelector(".date-list").style.display = "block";
  }
});

//generating leave preference json
const submitBtn = document.querySelector("form button");
submitBtn.addEventListener("click", () => {
  const formdata = [
    ...document.querySelectorAll(".leave-day-preference > input"),
  ].map((element) => {
    if (element.checked) return 1;
    return 0;
  });

  const leaveList = [];
  for (let index = 3; index <= formdata.length; index += 3) {
    leaveList.push(formdata.slice(index - 3, index));
  }
});
