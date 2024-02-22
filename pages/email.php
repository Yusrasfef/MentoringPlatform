<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mentoring Platform</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/email.css" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

  <?php include('../components/header.html'); ?>

<aside>
  <!-- Sidebar content here -->
  <ul>
    <h2>Emails</h2>

    <div class="sidebar">
    <li><i class="bi bi-pencil-square"></i>  Compose</li>
    </div>

    <div class="sidebar">
    <li><i class="bi bi-inbox"></i>  Inbox</li>
    </div>

    <div class="sidebar">
    <li><i class="bi bi-star"></i>  Starred</li>
    </div>

    <div class="sidebar">
    <li><i class="bi bi-send"></i>  Sent</li>
    </div>

    <div class="sidebar">
    <li><i class="bi bi-trash"></i>  Trash</li>
    </div>

  </ul>
</aside>

<main>
  <!-- Email list content here -->
  <section>
    <article>
      <!-- List of emails -->
      <div><i class="bi bi-person-fill"></i>  Cathrin Luther - Checking up on your milestones </div>
      <div><i class="bi bi-person-fill"></i>  Cathrin Jackson - Another Problem!</div>
      <div><i class="bi bi-person-fill"></i>  Kristina Musterfrau - Ending of Mentorship</div>
      <div><i class="bi bi-person-fill"></i>  Sophia Musterfrau - Mentorship change request</div>
      <!-- Add more emails as needed -->
    </article>
  </section>
</main>

<footer>
  <!-- Footer content here -->
  
  <?php include('../components/footer.html'); ?>
</footer>

</body>
</html>
