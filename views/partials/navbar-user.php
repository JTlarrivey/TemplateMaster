  <aside class="app-sidebar d-flex flex-column">
        <!--form class="app-menu-filter-container px-4">
                    <input type="text" class="form-control" id="searchInput" placeholder="Filter" autocomplete="off">
                    <div class="js-filter-message nav-filter-msg badge bg-secondary btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Clear filter"></div>
        </form-->
        <?php include __DIR__ . '/navbar-filtro.php' ?> 
            <nav id="js-primary-nav" class="primary-nav flex-grow-1 custom-scroll">
                <!--?php include __DIR__ . '/navbar-seccion-menu.php' ?--> 
                <ul id="js-nav-menu" class="nav-menu">
                 <?php include __DIR__ . '/navbar-menu-insights.php' ?> 
                <!--ul id="js-nav-menu" class="nav-menu">
                     <li class="nav-title"><span>Nombre de la seccion</span></li>
                        <li class="nav-item ">
                            <a href="#" title="Dashboards" data-filter-tags="">
                                <svg class="sa-icon">
                                    <use href="/converseLarry/public/assets/img/sprite.svg#trello"></use>
                                </svg>
                                <span class="nav-link-text" data-i18n="">Menu</span>
                                <span class="badge bg-danger-700 badge-end">New</span>
                            </a>
                            <ul>
                                <li class="">
                                    <a href="controlcenterdashboard.html">
                                        <span class="nav-link-text" data-i18n="">SubMenu1</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="subscriptiondashboard.html">
                                        <span class="nav-link-text" data-i18n="">SubMenu2</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="marketingdashboard.html">
                                        <span class="nav-link-text" data-i18n="">SubMenu3</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="projectmanagementdashboard.html">
                                        <span class="nav-link-text" data-i18n="">SubMenu4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <div class="no-results-msg pt-3 info-container">
                        <h6 class="mb-1"> No menu items found.</h6>
                        <p class="fs-sm">Try searching with different keywords.</p>
                        <div class="d-flex align-items-center gap-1 fs-xs fw-500 font-style-italic">
                            <kbd class="kbd-key">
                                <svg width="15" height="15" aria-label="Escape key" role="img">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
                                        <path d="M13.6167 8.936c-.1065.3583-.6883.962-1.4875.962-.7993 0-1.653-.9165-1.653-2.1258v-.5678c0-1.2548.7896-2.1016 1.653-2.1016.8634 0 1.3601.4778 1.4875 1.0724M9 6c-.1352-.4735-.7506-.9219-1.46-.8972-.7092.0246-1.344.57-1.344 1.2166s.4198.8812 1.3445.9805C8.465 7.3992 8.968 7.9337 9 8.5c.032.5663-.454 1.398-1.4595 1.398C6.6593 9.898 6 9 5.963 8.4851m-1.4748.5368c-.2635.5941-.8099.876-1.5443.876s-1.7073-.6248-1.7073-2.204v-.4603c0-1.0416.721-2.131 1.7073-2.131.9864 0 1.6425 1.031 1.5443 2.2492h-2.956"></path>
                                    </g>
                                </svg>
                            </kbd> to reset
                        </div>
                    </div-->
                </ul>
                <!--/nav-->
                     <!--div class="no-results-msg pt-3 info-container">
                        <h6 class="mb-1"> No menu items found.</h6>
                        <p class="fs-sm">Try searching with different keywords.</p>
                        <div class="d-flex align-items-center gap-1 fs-xs fw-500 font-style-italic">
                            <kbd class="kbd-key">
                                <svg width="15" height="15" aria-label="Escape key" role="img">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
                                        <path d="M13.6167 8.936c-.1065.3583-.6883.962-1.4875.962-.7993 0-1.653-.9165-1.653-2.1258v-.5678c0-1.2548.7896-2.1016 1.653-2.1016.8634 0 1.3601.4778 1.4875 1.0724M9 6c-.1352-.4735-.7506-.9219-1.46-.8972-.7092.0246-1.344.57-1.344 1.2166s.4198.8812 1.3445.9805C8.465 7.3992 8.968 7.9337 9 8.5c.032.5663-.454 1.398-1.4595 1.398C6.6593 9.898 6 9 5.963 8.4851m-1.4748.5368c-.2635.5941-.8099.876-1.5443.876s-1.7073-.6248-1.7073-2.204v-.4603c0-1.0416.721-2.131 1.7073-2.131.9864 0 1.6425 1.031 1.5443 2.2492h-2.956"></path>
                                    </g>
                                </svg>
                            </kbd> to reset
                        </div>
                    </div-->
            </nav>
                <div class="nav-footer">
                    <svg class="sa-icon sa-thin sa-icon-success">
                        <use href="/converseLarry/public/assets/img/sprite.svg#wifi"></use>
                    </svg>
                </div>
  </aside>
  <!-- <nav>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Mi perfil</a></li>
        <li><a href="#">Soporte</a></li>
    </ul>
</nav> -->