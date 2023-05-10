<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <!-- My CSS -->
  <link rel="stylesheet" href="./apply_leave.css" />
  <!-- My JS -->
  <script src="./apply_leave.js" defer></script>
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

  <title>Apply Leave</title>
</head>

<body>
  <header>
    <h1>Apply Leave</h1>
  </header>
  <main>
    <section class="container">
      <div class="box-head">
        <h2>Leave Application</h2>
      </div>

      <div class="date-inputs">
        <div>
          <label for="fromDate" class="bold-text">From</label>
          <input type="date" name="fromDate" id="fromDate" />
        </div>
        <div>
          <label for="toDate" class="bold-text">To</label>
          <input type="date" name="toDate" id="toDate" />
        </div>
        <div class="btn-container">
          <button type="button" id="generate_day_list">Apply</button>
        </div>
      </div>
    </section>
    <section class="container date-list">
      <div class="select-all-food">
        <input type="checkbox" class="check-all" id="checkAll" />
      </div>
      <form action="./apply_leave.php" method="post">
        <div class="leave-list">
          <label class="bold-text">Dates</label>
          <div class="food-catagory">
            <div class="bold-text">
              Breakfast
              <input type="checkbox" class="check-all all-breakfast" />
            </div>
            <div class="bold-text ">
              Lunch
              <input type="checkbox" class="check-all all-lunch" />
            </div>
            <div class="bold-text ">
              Dinner
              <input type="checkbox" class="check-all all-dinner" />
            </div>
          </div>
          <!-- <label for="row-1">Lorem, ipsum.</label>
          <div class="leave-day-preference" id="row-1">
            <input type="checkbox" class="breakfast" id="" />
            <input type="checkbox" class="lunch" id="" />
            <input type="checkbox" class="dinner" id="" />
          </div>
          <label for="row-2">Lorem, ipsum.</label>
          <div class="leave-day-preference" id="row-2">
            <input type="checkbox" class="breakfast" id="" />
            <input type="checkbox" class="lunch" id="" />
            <input type="checkbox" class="dinner" id="" />
          </div>
          <label for="row-3">Lorem, ipsum.</label>
          <div class="leave-day-preference" id="row-3">
            <input type="checkbox" class="breakfast" id="" />
            <input type="checkbox" class="lunch" id="" />
            <input type="checkbox" class="dinner" id="" />
          </div>
          <label for="row-4">Lorem, ipsum.</label>
          <div class="leave-day-preference" id="row-4">
            <input type="checkbox" class="breakfast" id="" />
            <input type="checkbox" class="lunch" id="" />
            <input type="checkbox" class="dinner" id="" />
          </div>
          <label for="row-5">Lorem, ipsum.</label>
          <div class="leave-day-preference" id="row-5">
            <input type="checkbox" class="breakfast" id="" />
            <input type="checkbox" class="lunch" id="" />
            <input type="checkbox" class="dinner" id="" />
          </div> -->
        </div>
        <button type="button" class="submit" name="submit">Apply Leave</button>
      </form>
    </section>
  </main>


</body>

</html>