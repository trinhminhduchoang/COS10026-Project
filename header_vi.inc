<?php if (basename($_SERVER['SCRIPT_NAME']) === 'index_vi.php') : ?>
<header class="site-header glass-panel">
        <div class="header-inner">
            <a class="brand" href="index_vi.php">
                <img src="./images/Logoweb.png" width="55" alt="">
                <span class="brand-name">EduTechies</span>
            </a>
            
            <nav class="main-nav glass-panel" aria-label="Điều hướng chính">
                <ul>
                    <li><a aria-current="page" href="index_vi.php">Trang chủ</a></li>
                    <li><a href="jobs_vi.php">Tuyển dụng</a></li>
                    <li><a href="apply_vi.php">Ứng tuyển</a></li>
                    <li><a href="about_vi.php">Về chúng tôi</a></li>
                </ul>                                                                   
            </nav>
            
            <div class="header-controls">
                <div class="theme-switch-button">
                    <span class="theme-text">☀️SÁNG</span>
                    <input type="checkbox" id="theme-checkbox">
                    <label for="theme-checkbox" class="theme-switch" aria-label="Chuyển chế độ sáng hoặc tối"></label>
                    <span class="theme-text">TỐI🌕</span>
                </div>
                
                <div class="language-switch vi" role="group" aria-label="Chọn ngôn ngữ">
                    <span class="language-switch-thumb" aria-hidden="true"></span>
                    <a class="language-option" href="index_en.php" lang="en" aria-label="English">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg>
                    </a>
                    <a class="language-option" href="index_vi.php" lang="vi" aria-label="Tiếng Việt" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg>
                    </a>
                </div>

                <!-- HIỂN THỊ TÊN VÀ ĐĂNG XUẤT -->
                <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Xin chào, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Đăng xuất</a>
                </div>
            </div>
        </div>
    </header>
<?php elseif (basename($_SERVER['SCRIPT_NAME']) === 'about_vi.php') : ?>
<header class="site-header glass-panel">
    <div class="header-inner">
      <a class="brand" href="index_vi.php"><img src="./images/Logoweb.png" width="55" alt=""><span class="brand-name">EduTechies</span></a>
      <nav class="main-nav glass-panel" aria-label="Điều hướng chính">
        <ul>
          <li><a href="index_vi.php">Trang chủ</a></li>
          <li><a href="jobs_vi.php">Tuyển dụng</a></li>
          <li><a href="apply_vi.php">Ứng tuyển</a></li>
          <li><a aria-current="page" href="about_vi.php">Về chúng tôi</a></li>
        </ul>
      </nav>
      <div class="header-controls">
        <div class="theme-switch-button">
          <span class="theme-text">☀️SÁNG</span>
          <input type="checkbox" id="theme-checkbox">
          <label for="theme-checkbox" class="theme-switch" aria-label="Chuyển chế độ sáng hoặc tối"></label>
          <span class="theme-text">TỐI🌕</span>
        </div>
        <div class="language-switch vi" role="group" aria-label="Chọn ngôn ngữ">
          <span class="language-switch-thumb" aria-hidden="true"></span>
          <a class="language-option" href="about_en.php" lang="en" aria-label="English"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg></a>
          <a class="language-option" href="about_vi.php" lang="vi" aria-label="Tiếng Việt" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg></a>
        </div>
                        <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Xin chào, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Đăng xuất</a>
                </div>
      </div>
    </div>
  </header>
<?php elseif (basename($_SERVER['SCRIPT_NAME']) === 'jobs_vi.php') : ?>
<header class="site-header glass-panel">
    <div class="header-inner">
      <a class="brand" href="index_vi.php"><img src="./images/Logoweb.png" width="55" alt=""><span class="brand-name">EduTechies</span></a>
      <nav class="main-nav glass-panel" aria-label="Điều hướng chính">
        <ul>
          <li><a href="index_vi.php">Trang chủ</a></li>
          <li><a aria-current="page" href="jobs_vi.php">Tuyển dụng</a></li>
          <li><a href="apply_vi.php">Ứng tuyển</a></li>
          <li><a href="about_vi.php">Về chúng tôi</a></li>
        </ul>
      </nav>
      <div class="header-controls">
        <div class="theme-switch-button">
          <span class="theme-text">☀️SÁNG</span>
          <input type="checkbox" id="theme-checkbox">
          <label for="theme-checkbox" class="theme-switch" aria-label="Chuyển chế độ sáng hoặc tối"></label>
          <span class="theme-text">TỐI🌕</span>
        </div>
        <div class="language-switch vi" role="group" aria-label="Chọn ngôn ngữ">
          <span class="language-switch-thumb" aria-hidden="true"></span>
          <a class="language-option" href="jobs_en.php" lang="en" aria-label="English"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg></a>
          <a class="language-option" href="jobs_vi.php" lang="vi" aria-label="Tiếng Việt" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg></a>
        </div>
                        <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Xin chào, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Đăng xuất</a>
                </div>
      </div>
    </div>
  </header>
<?php elseif (basename($_SERVER['SCRIPT_NAME']) === 'apply_vi.php') : ?>
<header class="site-header glass-panel">
    <div class="header-inner">
      <a class="brand" href="index_vi.php"><img src="./images/Logoweb.png" width="55" alt="Logo EduTechies"><span class="brand-name">EduTechies</span></a>
      <nav class="main-nav glass-panel" aria-label="Điều hướng chính">
        <ul>
          <li><a href="index_vi.php">Trang chủ</a></li>
          <li><a href="jobs_vi.php">Tuyển dụng</a></li>
          <li><a aria-current="page" href="apply_vi.php">Ứng tuyển</a></li>
          <li><a href="about_vi.php">Về chúng tôi</a></li>
        </ul>
      </nav>
      <div class="header-controls">
        <div class="theme-switch-button">
          <span class="theme-text">☀️SÁNG</span>
          <input type="checkbox" id="theme-checkbox">
          <label for="theme-checkbox" class="theme-switch" aria-label="Chuyển chế độ sáng hoặc tối"></label>
          <span class="theme-text">TỐI🌕</span>
        </div>
        <div class="language-switch vi" role="group" aria-label="Chọn ngôn ngữ">
          <span class="language-switch-thumb" aria-hidden="true"></span>
          <a class="language-option" href="apply_en.php" lang="en" aria-label="English"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="14"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="8"/></svg></a>
          <a class="language-option" href="apply_vi.php" lang="vi" aria-label="Tiếng Việt" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" width="28" height="19" role="img" aria-hidden="true"><rect width="60" height="40" fill="#da251d"/><polygon points="30,9 32.9,18 42.3,18 35,23.4 37.6,32.5 30,27.2 22.4,32.5 25,23.4 17.7,18 27.1,18" fill="#ff0"/></svg></a>
        </div>
                        <div class="user-welcome" style="display: inline-flex; align-items: center; gap: 8px; margin-left: 12px; font-size: 14px;">
                    <span style="color: #1e3a8a; font-weight: 500;">Xin chào, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
                    <a href="logout.php" style="color: #dc3545; text-decoration: none; font-weight: bold; padding: 4px 10px; background: #fee2e2; border-radius: 4px;">Đăng xuất</a>
                </div>
      </div>
    </div>
  </header>
<?php endif; ?>
