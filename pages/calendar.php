<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mentoring Platform</title>
  <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/frontPage.css" rel="stylesheet">
  <link href="../css/calendar.css" rel="stylesheet">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
  <?php include('../components/header.html'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>MAIN</h1>
                <div class="col-md-2">
            <div class="d-flex flex-column align-items-start">
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <div class="sideNavItems">
                    <i class="bi bi-box item"></i>
                    <a href="#" class="nav-link item">Home</a>
                    </div>
                </li>
                <h1 id="tools">TOOLS</h1>
                <div class="sideNavItems">
                    <i class="bi bi-envelope"></i>
                    <a href="#" class="nav-link item">Email</a>
                </div>
                <div class="sideNavItems">
                    <i class="bi bi-calendar4"></i>
                    <a href="#" class="nav-link item">Calendar</a>
                </div>
                <div class="sideNavItems">
                    <i class="bi bi-bar-chart"></i>
                    <a href="#" class="nav-link item">Reports</a>
                </div>
                <div class="sideNavItems">
                    <i class="bi bi-people"></i>
                    <a href="#" class="nav-link item">Users</a>
                </div>
                </ul>
            </div>
                </div>
            </div>

            <div class="col-10">
                <h1>Calendar</h1>
                <div class="calendar-container">
                    <div class="calendar-header">
                        <h2>December 2023</h2>
                    <div>
                    <button class="btn btn-light">&lt;</button>
                    <button class="btn btn-light">&gt;</button>
                </div>
                <table class="calendar-table">
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Calendar rows -->
                    <!-- Add the rest of the rows and days according to your needs -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  <footer>
    <!-- Footer content here -->

    <?php include('../components/footer.html'); ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>