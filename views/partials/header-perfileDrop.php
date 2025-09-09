<div class="dropdown-menu dropdown-menu-animated">
            <div class="notification-header rounded-top mb-2">
                <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                    <span class="status status-success d-inline-block me-2">
                        <img src="/converseLarry/public/assets/img/avatar-admin.png" class="profile-image rounded-circle" alt="Sunny A.">
                    </span>
                    <div class="info-card-text">
                        <div class="fs-lg text-truncate text-truncate-lg">Sunny A.</div>
                        <span class="text-truncate text-truncate-md opacity-80 fs-sm">sunnya@sadim.com</span>
                    </div>
                </div>
            </div>
            <div class="dropdown-divider m-0"></div>
            <a href="#" class="dropdown-item" data-action="app-reset">
                <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
            </a>
            <a href="#" class="dropdown-item" data-action="toggle-swap" data-toggleclass="open" data-target="aside.js-drawer-settings">
                <span data-i18n="drpdwn.settings">Settings</span>
            </a>
            <a href="#" class="dropdown-item d-block d-sm-block d-md-block d-lg-none" data-action="toggle-swap" data-toggleclass="open" data-target="aside.js-app-drawer">
                <span data-i18n="drpdwn.settings">Virtual Assistant</span>
            </a>
            <div class="dropdown-divider m-0"></div>
            <a href="#" class="dropdown-item d-flex justify-content-between align-items-center" data-action="app-fullscreen" aria-pressed="false">
                <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                <b class="text-muted fs-nano px-2 rounded font-monospace align-self-center border">F11</b>
            </a>
            <a href="#" class="dropdown-item d-flex justify-content-between align-items-center" data-action="app-print">
                <span data-i18n="drpdwn.print">Print</span>
                <span class="text-muted fs-nano px-2 rounded font-monospace align-self-center border">
                    <svg width="15" height="15">
                        <path d="M4.505 4.496h2M5.505 5.496v5M8.216 4.496l.055 5.993M10 7.5c.333.333.5.667.5 1v2M12.326 4.5v5.996M8.384 4.496c1.674 0 2.116 0 2.116 1.5s-.442 1.5-2.116 1.5M3.205 9.303c-.09.448-.277 1.21-1.241 1.203C1 10.5.5 9.513.5 8V7c0-1.57.5-2.5 1.464-2.494.964.006 1.134.598 1.24 1.342M12.553 10.5h1.953" stroke-width="1.2" stroke="currentColor" fill="none" stroke-linecap="square"></path>
                    </svg> + P </span>
            </a>
            <div class="dropdown-multilevel dropdown-multilevel-left">
                <div class="dropdown-item d-flex justify-content-between align-items-center">
                    <span data-i18n="drpdwn.language">Language</span>
                    <i class="sa sa-chevron-right"></i>
                </div>
                <div class="dropdown-menu">
                    <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
                    <a href="#?lang=en" class="dropdown-item selected" data-action="lang" data-lang="en">English (US)</a>
                    <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
                    <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
                    <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
                    <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
                </div>
            </div>
            <div class="dropdown-divider m-0"></div>
            <a class="dropdown-item py-3 fw-500 d-flex justify-content-between" href="/converseLarry/logout.php">
                <span class="text-danger" data-i18n="drpdwn.page-logout">Logout</span>
                <span class="d-block text-truncate text-truncate-sm">@<?= htmlspecialchars($username) ?></span>
            </a>
        </div>