<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>checkLY - Classes</title>
  <link rel="stylesheet" href="../style/nav-bar.css">
  <link rel="stylesheet" href="../style/classes.css ">
</head>

<body>
  <nav class="nav-bar">
    <div class="checkLY">
      check<span>LY</span>
      <div>

        <div class="profile">
          <div>
            <h3>Danny Dinglasa</h3>
            <h4>Teacher</h4>
          </div>
          <img src="../images/Profilepic.png" alt="" height="35">
        </div>
  </nav>
  <aside class="sidebar-menu">
    <ul class="main-btns">
      <li>
        <a href="dashboard.php"><img src="../images/dashboardIcon.png" alt="" height="20"> Dashboard</a>
      </li>
    </ul>
    <div class="work-btns">
      <h3>
        Work
      </h3>
      <ul>
        <li>
          <a href="classes.php"><img src="../images/classesIcon.png" alt="" height="25">
            <div>Classes</div>
          </a>
        </li>
        <li>
          <a href="schedule.php"><img src="../images/scheduleIcon.png" alt="" height="25">
            <div>Schedule</div>
          </a>
        </li>
      </ul>
    </div>
    <ul class="util-btns">
      <li>
        <a href="#"><img src="../images/settings.png" alt="" height="18">
          Settings
        </a>
      </li>
      <li>
        <a href="index.html"><img src="../images/Logout.png" alt="" height="18">
          Log Out
        </a>
      </li>
    </ul>
  </aside>


  <div class="classes-content">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
      <h2>CLASSES</h2>
      <button class="add-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        Add
      </button>
    </div>
    <table class="classes-table">
      <thead>
        <tr>
          <th>Section</th>
          <th>Subject Name</th>
          <th>Subject Code</th>
          <th>Time</th>
          <th>Date</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>BSIT-2C</td>
          <td>Application Development...</td>
          <td>IT 221</td>
          <td>11:30 AM - 1:00 PM</td>
          <td>W</td>
          <td>35</td>
        </tr>
        <tr>
          <td>BSIT-2C</td>
          <td>Introduction to Computing</td>
          <td>CC 100</td>
          <td>11:30 AM - 1:00 PM</td>
          <td>W</td>
          <td>35</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
</body>

</html>