<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    header("Location: login.php"); 
    exit(); 
} 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Meet the Quadro Techies team behind EduTechies.">
  <title>About our team | EduTechies</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/styles_animation.css">
    <link rel="stylesheet" href="./styles/styles_darkmode.css">
  <style>
    .member-entry dt { color: #173544; }
  </style>
</head>
<body>
  <a class="skip-link" href="#main">Skip to main content</a>
  <?php include __DIR__ . '/header_en.inc'; ?>

  <main id="main" class="page-main">
    <header class="page-intro glass-panel">
      <p class="eyebrow">The people behind the project</p>
      <h1>Meet the Quadro Techies.</h1>
      <p>We are a student team building an educational technology company concept focused on accessible, inclusive, and future-ready online learning for Vietnamese learners and communities.</p>
    </header>

    <section class="about-section glass-panel team-overview">
      <div>
        <p class="eyebrow">Our group</p>
        <h2>Curious minds, working together.</h2>
        <ul class="nested-details">
          <li><strong>Group:</strong> Quadro Techies
            <ul>
              <li><strong>Class day and time:</strong> COS10026 - Thursday morning.</li>
              <li><strong>Project scenario:</strong> G04 — Educational Technology (EdTech) Company</li>
            </ul>
          </li>
        </ul>
        <p>Our scenario imagines a technology company creating digital learning tools and platforms tailored to the realities of modern Vietnamese education. The team is building a clear, accessible web presence to introduce the company and its opportunities.</p>
      </div>
      <figure class="team-figure glass-panel">
        <img src="images/Team.jpg" width="720" height="460" alt="The four members of the Quadro Techies team">
        <figcaption>The Quadro Techies team.</figcaption>
      </figure>
    </section>

    <section class="about-section glass-panel">
      <div class="section-heading">
        <p class="eyebrow">People and contributions</p>
        <h2>Everyone brings a different strength.</h2><br>
      </div>
      <dl class="member-list">
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="images/Hoang.jpg" alt="Portrait of Trịnh Minh Đức Hoàng">Member 1 — Trịnh Minh Đức Hoàng (Leader)</dt>
          <dd class="student-id">Student ID: SWS02219</dd>
          <dd><strong>Contribution:</strong> Plain layout builder and style designer.</dd>
          <dd><strong>First-language quote:</strong> <q lang="es">Một bậc thầy chân chính là một học đồ vĩnh cửu.</q></dd>
          <dd><strong>English translation:</strong> A true master is an eternal student.</dd>
        </div>
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="images/Nhat.png" alt="Portrait of Lê Minh Nhật">Member 2 — Lê Minh Nhật</dt>
          <dd class="student-id">Student ID: SWS02419</dd>
          <dd><strong>Contribution:</strong> Visual effects and Main Page designer.</dd>
          <dd><strong>First-language quote:</strong> <q lang="vi">Có làm thì mới có ăn.</q></dd>
          <dd><strong>English translation:</strong> No sweet without some sweat.</dd>
        </div>
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="images/Kha.jpg" alt="Portrait of Huỳnh Lê Minh Kha">Member 3 — Huỳnh Lê Minh Kha</dt>
          <dd class="student-id">Student ID: SWS02179</dd>
          <dd><strong>Contribution:</strong> Apply page designer.</dd>
          <dd><strong>First-language quote:</strong> <q lang="vi">Suy nghĩ trước khi hành động. Nhưng đừng suy nghĩ quá lâu rồi không hành động.</q></dd>
          <dd><strong>English translation:</strong> Think before you act. But don't think so long that you never act.</dd>
        </div>
        <div class="member-entry glass-panel">
          <dt><img class="member-photo" src="images/Triet.jpg" alt="Portrait of Huỳnh Phan Minh Triết">Member 4 — Huỳnh Phan Minh Triết</dt>
          <dd class="student-id">Student ID: SWS02372</dd>
          <dd><strong>Contribution:</strong> Additional functions worker and About page designer.</dd>
          <dd><strong>First-language quote:</strong> <q lang="it">Áp lực tạo nên kim cương.</q></dd>
          <dd><strong>English translation:</strong> Pressure makes diamonds.</dd>
        </div>
      </dl>
    </section>

    <section class="about-section glass-panel">
      <div class="section-heading">
        <p class="eyebrow">A few favourites</p>
        <h2>Fun facts about our team.</h2>
      </div>
      <div class="table-wrap glass-panel">
        <table class="facts-table" style="border-color: #176d56;">
          <caption>Quadro Techies — team fun facts</caption>
          <thead>
            <tr><th scope="col">Team member</th><th scope="col">Dream job</th><th scope="col">Coding snack</th><th scope="col">Hometown</th></tr>
          </thead>
          <tbody>
            <tr><th scope="row">Member 1 — Trịnh Minh Đức Hoàng</th><td>Lawyer</td><td>Cheeseballs</td><td>Ho Chi Minh City</td></tr>
            <tr><th scope="row">Member 2 — Lê Minh Nhật</th><td>Software Developer</td><td>Potato Chips</td><td>Ho Chi Minh City</td></tr>
            <tr><th scope="row">Member 3 — Huỳnh Lê Minh Kha</th><td>Software Developer</td><td>Tiramisu</td><td>Ho Chi Minh City</td></tr>
            <tr><th scope="row">Member 4 — Huỳnh Phan Minh Triết</th><td>Cyber Security</td><td>Cookies</td><td>Ho Chi Minh City</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <section class="country-note glass-panel" aria-labelledby="country-heading">
      <div class="country-note-inner">
        <p class="eyebrow">Acknowledgement of Country</p>
        <h2 id="country-heading">We acknowledge the Traditional Custodians of Country.</h2>
        <p>EduTechies acknowledges the Aboriginal and Torres Strait Islander peoples as the Traditional Custodians of the lands, waters and skies on which we live and work. We pay our respects to Elders past, present and emerging, and recognise their continuing connection to land, culture and community.</p>
        <p>As a team building educational technology, we recognise that knowledge, storytelling and learning have always been central to Aboriginal and Torres Strait Islander cultures. We are committed to developing inclusive platforms that respect and reflect those traditions, and we actively encourage Aboriginal and Torres Strait Islander peoples to contribute to, and participate in, our work.</p>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/footer_en.inc'; ?>
  <details class="support-chat">
    <summary aria-label="Toggle support chat" title="Toggle support chat">
      <span class="support-chat-icon" aria-hidden="true">•••</span>
    </summary>
    <section class="support-chat-window glass-panel" aria-labelledby="support-chat-heading">
      <div class="support-chat-header glass-panel">
        <h2 id="support-chat-heading">EduTechies Support</h2>
        <p>How can we help?</p>
      </div>
      <div class="support-chat-message">
        <p>Thanks for reaching out. Send our team an email and we’ll be happy to help.</p>
        <a href="mailto:info@edutechies.com">Email Support</a>
      </div>
    </section>
  </details>
</body>
</html>
