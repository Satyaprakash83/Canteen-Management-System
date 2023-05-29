const selectAll = document.getElementById("checkAll");
const allBreakfast = document.querySelector(".all-breakfast");
const allLunch = document.querySelector(".all-lunch");
const allDinner = document.querySelector(".all-dinner");

document.querySelectorAll(".date-inputs input").forEach((element) => {
  const date = new Date();
  const currentDate =
    `${date.getFullYear()}-` +
    `${date.getMonth() + 1}`.padStart(2, "0") +
    `-${date.getDate()}`;
  element.setAttribute("min", currentDate);
});

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
    (element) => Date.parse(element.value)
  );

  const diff = Math.floor((toDate - fromDate) / 86400000);

  const listContainer = document.querySelector(".leave-list");
  for (let i = 0; i <= diff; i++) {
    const date = new Date(fromDate + i * 86400000);
    const element = `<label for="row-${i}">${date.getDate()}-${
      date.getMonth() + 1
    }-${date.getFullYear()}</label>
        <div class="leave-day-preference" id="row-${i}">
        <input type="checkbox" class="breakfast" id="" />
        <input type="checkbox" class="lunch" id="" />
        <input type="checkbox" class="dinner" id="" />
      </div>`;
    listContainer.append(
      ...new DOMParser().parseFromString(element, "text/html").body.childNodes
    );
    console.log();
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

  //Fetching from and to date form the leave application
  [fromDate, toDate] = [...document.querySelectorAll(".date-inputs input")].map(
    (element) => Date.parse(element.value)
  );

  const leaveList = {};
  for (let index = 3, i = 0; index <= formdata.length; index += 3, i++) {
    const date = new Date(fromDate + i * 86400000);
    leaveList[
      `${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear()}`
    ] = formdata.slice(index - 3, index);
  }

  console.log(JSON.stringify(leaveList));
});
