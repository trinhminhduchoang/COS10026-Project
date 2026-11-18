<?php if (basename($_SERVER['SCRIPT_NAME']) === 'index_en.php') : ?>
<header class="site-header glass-panel">
        <div class="header-inner">
            <a class="brand" href="index_en.php">
                <img src="./images/Logoweb.png" width="55" alt="EduTechies logo">
                <span class="brand-name">EduTechies</span>
            </a>
            
            <nav class="main-nav glass-panel">
                <ul>
                    <li><a aria-current="page" href="index_en.php">Home</a></li>
                    <li><a href="jobs_en.php">Careers</a></li>
                    <li><a href="apply_en.php">Apply</a></li>
                    <li><a href="about_en.php">About our team</a></li>
                </ul>
            </nav>
            
            <div class="header-controls">
                <!-- Dark/Light mode switch button -->
                <div class="theme-switch-button">
                    <span class="theme-text">☀️LIGHT</span>
                    <input type="checkbox" id="theme-checkbox">
                    <label for="theme-checkbox" class="theme-switch" aria-label="Toggle light or dark mode"></label>
                    <span class="theme-text">DARK🌕</span>
                </div>
                
                <div class="language-switch" role="group" aria-label="Choose language">
                    <span class="language-switch-thumb" aria-hidden="true"></span>
                    <a class="language-option" href="index_en.php" lang="en" aria-label="English" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg></a>
                    <a class="language-option" href="index_vi.php" lang="vi" aria-label="Tiếng Việt"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg></a>
                </div>

                <!-- USER WELCOME & LOGOUT -->
                <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Hello, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Logout</a>
                </div>
            </div>
        </div>
    </header>
<?php elseif (basename($_SERVER['SCRIPT_NAME']) === 'about_en.php') : ?>
<header class="site-header glass-panel">
    <div class="header-inner">
      <a class="brand" href="index_en.php">
        <img src="images/Logoweb.png" width="55" alt="EduTechies logo">
        <span class="brand-name">EduTechies</span>
      </a>
      <nav class="main-nav glass-panel" aria-label="Main navigation">
        <ul>
          <li><a href="index_en.php">Home</a></li>
          <li><a href="jobs_en.php">Careers</a></li>
          <li><a href="apply_en.php">Apply</a></li>
          <li><a aria-current="page" href="about_en.php">About our team</a></li>
        </ul>
      </nav>
      <div class="header-controls">
        <!-- Dark/Light mode switch button -->
        <div class="theme-switch-button">
          <span class="theme-text">☀️LIGHT</span>
          <input type="checkbox" id="theme-checkbox">
          <label for="theme-checkbox" class="theme-switch"></label>
          <span class="theme-text">DARK🌕</span>
        </div>
        <div class="language-switch" role="group" aria-label="Choose language">
          <span class="language-switch-thumb" aria-hidden="true"></span>
          <a class="language-option" href="about_en.php" lang="en" aria-label="English" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg></a>
          <a class="language-option" href="about_vi.php" lang="vi" aria-label="Tiếng Việt"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg></a>
        </div>
                        <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Hello, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Logout</a>
                </div>
      </div>
    </div>
  </header>
<?php elseif (basename($_SERVER['SCRIPT_NAME']) === 'jobs_en.php') : ?>
<header class="site-header glass-panel">
    <div class="header-inner">
      <a class="brand" href="index_en.php">
        <img src="images/Logoweb.png" width="55" alt="EduTechies logo">
        <span class="brand-name">EduTechies</span>
      </a>
      <nav class="main-nav glass-panel" aria-label="Main navigation">
        <ul>
          <li><a href="index_en.php">Home</a></li>
          <li><a aria-current="page" href="jobs_en.php">Careers</a></li>
          <li><a href="apply_en.php">Apply</a></li>
          <li><a href="about_en.php">About our team</a></li>
        </ul>
      </nav>
      <div class="header-controls">
        <!-- Dark/Light mode switch button -->
        <div class="theme-switch-button">
          <span class="theme-text">☀️LIGHT</span>
          <input type="checkbox" id="theme-checkbox">
          <label for="theme-checkbox" class="theme-switch"></label>
          <span class="theme-text">DARK🌕</span>
        </div>
        <div class="language-switch" role="group" aria-label="Choose language">
          <span class="language-switch-thumb" aria-hidden="true"></span>
          <a class="language-option" href="jobs_en.php" lang="en" aria-label="English" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg></a>
          <a class="language-option" href="jobs_vi.php" lang="vi" aria-label="Tiếng Việt"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg></a>
        </div>
                        <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Hello, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Logout</a>
                </div>
      </div>
    </div>
  </header>
<?php elseif (basename($_SERVER['SCRIPT_NAME']) === 'apply_en.php') : ?>
<header class="site-header glass-panel">
    <div class="header-inner">
      <a class="brand" href="index_en.php">
        <img src="images/Logoweb.png" width="55" alt="EduTechies logo">
        <span class="brand-name">EduTechies</span>
      </a>
      <nav class="main-nav glass-panel" aria-label="Main navigation">
        <ul>
          <li><a href="index_en.php">Home</a></li>
          <li><a href="jobs_en.php">Careers</a></li>
          <li><a aria-current="page" href="apply_en.php">Apply</a></li>
          <li><a href="about_en.php">About our team</a></li>
        </ul>
      </nav>
      <div class="header-controls">
        <!-- Dark/Light mode switch button -->
        <div class="theme-switch-button">
          <span class="theme-text">☀️LIGHT</span>
          <input type="checkbox" id="theme-checkbox">
          <label for="theme-checkbox" class="theme-switch"></label>
          <span class="theme-text">DARK🌕</span>
        </div>
        <div class="language-switch" role="group" aria-label="Choose language">
          <span class="language-switch-thumb" aria-hidden="true"></span>
          <a class="language-option" href="apply_en.php" lang="en" aria-label="English" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg></a>
          <a class="language-option" href="apply_vi.php" lang="vi" aria-label="Tiếng Việt"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg></a>
        </div>
                        <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Hello, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Logout</a>
                </div>
      </div>

    </div>
  </header>
<?php endif; ?>
