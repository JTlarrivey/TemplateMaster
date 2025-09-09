<?php

require_once __DIR__ . '/../../orquestadorLiit/vendor/autoload.php';

use App\Controller\TemplateController;
use App\Model\UserContext;


if (
    empty($_SESSION['user_context']) ||
    !($_SESSION['user_context'] instanceof UserContext)
) {
    header('Location: /converseLarry/index.php?error=unauthorized');
    exit;
}

// ✅ Obtener layout desde el controller del Orquestador
try {
    $controller = new TemplateController();
    $layout = $controller->getLayout();
} catch (Exception $e) {
    die('Error al cargar layout desde Orquestador: ' . $e->getMessage());
}

// Validación de seguridad extra
if (!$layout || !isset($layout['body'])) {
    die('Layout mal formado.');
}

// Validación de seguridad extra
if (!$layout || !isset($layout['body'])) {
    die('Layout mal formado.');
}

// ✅ Recuperar contexto desde sesión
$context = $_SESSION['user_context'] ?? null;

// ✅ Obtener nombre si el contexto es válido
$username = $context instanceof UserContext ? $context->getName() : 'Invitado';


?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" class="set-nav-dark">

<head>
    <meta charset="utf-8">
    <title>Blank page</title>
    <meta name="description" content="Page Description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=5">
    <!-- Standard favicon for browsers -->
    <link rel="icon" href="/converseLarry/public/assets/img/favicon-32x32.png" type="image/png" sizes="32x32">
    <link rel="icon" href="/converseLarry/public/assets/img/favicon-16x16.png" type="image/png" sizes="16x16">
    <!-- Apple Touch Icon (iOS) -->
    <link rel="apple-touch-icon" href="/converseLarry/public/assets/img/apple-touch-icon.png" sizes="180x180">
    <!-- Android/Chrome (Progressive Web App) -->
    <link rel="icon" href="/converseLarry/public/assets/img/favicon-192x192.png" type="image/png" sizes="192x192">
    <!-- Call App Mode on ios devices -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Vendor css -->
    <link rel="stylesheet" media="screen, print" href="/converseLarry/public/assets/css/bootstrap.css">
    <link rel="stylesheet" media="screen, print" href="/converseLarry/public/assets/css/waves.css">
    <!-- Base css -->
    <link rel="stylesheet" media="screen, print" href="/converseLarry/public/assets/css/smartapp.css">
    <link rel="stylesheet" media="screen, print" href="/converseLarry/public/assets/css/sa-icons.css">
    <!-- Theme Style -->
    <link id="theme-style" rel="stylesheet" media="screen, print">
    <!-- Page specific CSS -->
    <link rel="stylesheet" media="screen, print" href="/converseLarry/public/assets/css/blank.css">
</head>

<body class="content-has-right">
    <script>
        //hint: place this right after 'body' tag for instantaneous loading
        'use strict';
        var htmlRoot = document.getElementsByTagName('HTML')[0],
            //save states
            savePanelStateEnabled = true,
            //mobile operator on
            mobileOperator = function() {
                // Check user agent
                const userAgent = navigator.userAgent.toLowerCase();
                const isMobileUserAgent = /iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(userAgent);
                // Check for touch support
                const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
                // Check screen size (optional)
                const isSmallScreen = window.innerWidth <= 992; // Adjust the breakpoint as needed
                // Return true if any of the conditions are met
                return isMobileUserAgent || isTouchDevice || isSmallScreen;
            },
            //filter
            filterClass = function(t, e) {
                return String(t).split(/[^\w-]+/).filter(function(t) {
                    return e.test(t)
                }).join(' ')
            },
            //load
            loadSettings = function() {
                var t = localStorage.getItem('layoutSettings') || '',
                    e = t ? JSON.parse(t) : {};
                // Load theme setting
                var savedTheme = e.theme || 'light';
                htmlRoot.setAttribute('data-bs-theme', savedTheme);
                // Load theme style CSS file only if one was saved
                var themeStyle = e.themeStyle || '';
                if (themeStyle) {
                    loadThemeStyle(themeStyle);
                }
                return Object.assign({
                    htmlRoot: '',
                    theme: savedTheme,
                    themeStyle: themeStyle
                }, e)
            },
            //save
            saveSettings = function() {
                layoutSettings.htmlRoot = filterClass(htmlRoot.className, /^(set)-/i);
                layoutSettings.theme = htmlRoot.getAttribute('data-bs-theme') || 'light';
                // Save theme style CSS path
                var themeStyleElement = document.getElementById('theme-style');
                if (themeStyleElement) {
                    layoutSettings.themeStyle = themeStyleElement.getAttribute('href');
                } else {
                    layoutSettings.themeStyle = '';
                }
                localStorage.setItem("layoutSettings", JSON.stringify(layoutSettings));
                savingIndicator();
            },
            //reset
            resetSettings = function() {
                localStorage.setItem("layoutSettings", "");
                // reset data-bs-theme
                htmlRoot.setAttribute('data-bs-theme', 'light');
                // reset theme style element if it exists
                document.getElementById('theme-style').setAttribute('href', '');
                // refresh page
                window.location.reload();
            },
            //load theme style
            loadThemeStyle = function(themeStyle) {
                // Get existing theme style if it exists
                var existingThemeStyle = document.getElementById('theme-style');
                if (existingThemeStyle) {
                    // Update existing theme style's href
                    existingThemeStyle.href = themeStyle || '';
                } else if (themeStyle) {
                    // Create new theme style element if none exists and themeStyle is provided
                    var linkElement = document.createElement('link');
                    linkElement.id = 'theme-style';
                    linkElement.rel = 'stylesheet';
                    linkElement.href = themeStyle;
                    document.head.appendChild(linkElement);
                }
            },
            //get page id
            getPageIdentifier = function() {
                return window.location.pathname.split('/').pop() || 'index.html';
            },
            //save panel state
            savePanelState = function() {
                if (!savePanelStateEnabled) return;
                var state = [];
                var columns = document.querySelectorAll('.main-content > .row > [class^="col-"]');
                columns.forEach(function(column, columnIndex) {
                    var panels = column.querySelectorAll('.panel');
                    panels.forEach(function(panel, position) {
                        var panelHeader = panel.querySelector('.panel-hdr');
                        // Save panel classes excluding 'panel' and 'panel-fullscreen'
                        var panelClasses = panel.className.split(' ').filter(function(cls) {
                            return cls !== 'panel' && cls !== 'panel-fullscreen';
                        }).join(' ');
                        // Save header classes excluding 'panel-hdr'
                        var headerClasses = panelHeader ? panelHeader.className.split(' ').filter(function(cls) {
                            return cls !== 'panel-hdr';
                        }).join(' ') : '';
                        state.push({
                            id: panel.id,
                            column: columnIndex,
                            position: position, // Save position within column
                            classes: panelClasses,
                            headerClasses: headerClasses
                        });
                    });
                });
                var pageId = getPageIdentifier();
                var allStates = JSON.parse(localStorage.getItem('allPanelStates') || '{}');
                allStates[pageId] = state;
                localStorage.setItem('allPanelStates', JSON.stringify(allStates));
                savingIndicator();
            },
            loadPanelState = function() {
                var pageId = getPageIdentifier();
                var allStates = JSON.parse(localStorage.getItem('allPanelStates') || '{}');
                var savedState = allStates[pageId];
                if (!savedState) return;
                // Use same selector as save function
                var columns = Array.from(document.querySelectorAll('.main-content > .row > [class^="col-"]'));
                // Store all existing panels in a map before removing them
                var panelMap = {};
                columns.forEach(function(column) {
                    var existingPanels = Array.from(column.querySelectorAll('.panel'));
                    existingPanels.forEach(function(panel) {
                        panelMap[panel.id] = panel;
                        panel.remove();
                    });
                });
                // Sort state by column and position
                savedState.sort(function(a, b) {
                    if (a.column === b.column) {
                        return a.position - b.position;
                    }
                    return a.column - b.column;
                });
                // Reinsert panels in correct order
                savedState.forEach(function(item) {
                    var panel = panelMap[item.id];
                    if (panel && columns[item.column]) {
                        // Update panel classes
                        panel.className = 'panel ' + (item.classes || '');
                        // Update header classes
                        var panelHeader = panel.querySelector('.panel-hdr');
                        if (panelHeader && item.headerClasses) {
                            panelHeader.className = 'panel-hdr ' + item.headerClasses;
                        }
                        // Append to correct column
                        columns[item.column].appendChild(panel);
                    }
                });
            },
            //reset panel state
            resetPanelState = function() {
                var pageId = getPageIdentifier();
                var allStates = JSON.parse(localStorage.getItem('allPanelStates') || '{}');
                delete allStates[pageId];
                localStorage.setItem('allPanelStates', JSON.stringify(allStates));
                //refresh page
                window.location.reload();
            },
            savingIndicator = function() {
                // Create or get the indicator element
                let indicator = document.getElementById('saving-indicator');
                if (!indicator) {
                    indicator = document.createElement('div');
                    indicator.id = 'saving-indicator';
                    document.body.appendChild(indicator);
                }
                // Show saving animation
                //indicator.textContent = '';
                indicator.className = 'saving-indicator spinner-border show';
                // After a brief delay, show success and hide
                setTimeout(() => {
                    //indicator.textContent = '';
                    indicator.className = 'saving-indicator spinner-border show success';
                    setTimeout(() => {
                        indicator.className = 'saving-indicator spinner-border success';
                    }, 500);
                }, 300);
            },
            //load page layout settings
            layoutSettings = loadSettings();
        layoutSettings.htmlRoot && (htmlRoot.className = layoutSettings.htmlRoot);
        //load panel settings is triggered just before <script> tag    
    </script>

    <div class="app-wrap">
        <?php include __DIR__ . '/partials/' . $layout['header']; ?>

        <div class="app-container">
            <?php include __DIR__ . '/partials/' . $layout['navbar']; ?>
        </div>
        <main class="app-body">
            <!-- 👇 Contenedor obligatorio para que el contenido principal se comporte bien -->
            <div class="app-content">
                <!-- 👇 Contenedor que aplica padding y grid -->
                <div class="content-wrapper">
                    <!-- 👉 Asegurate que este include NO tenga estos divs duplicados -->
                    <?php include __DIR__ . '/partials/' . $layout['body']; ?>
                </div>
                <div class="content-wrapper-right">
                    <?php include __DIR__ . '/partials/' . $layout['rightBar']; ?>
                </div>

            </div>

            <footer class="app-footer">
                <?php include __DIR__ . '/partials/' . $layout['footer']; ?>
            </footer>
        </main>

    </div>


    <!-- Core scripts -->
    <script src="/converseLarry/public/assets/scripts/smartApp.js"></script>
    <script src="/converseLarry/public/assets/scripts/smartNavigation.js"></script>
    <script src="/converseLarry/public/assets/scripts/smartFilter.js"></script>
    <script src="/converseLarry/public/assets/scripts/thirdparty/bootstrap/bootstrap.bundle.js"></script>

    <!-- Dependable scripts -->
    <script src="/converseLarry/public/assets/scripts/thirdparty/sortable/sortable.js"></script>

    <!-- Optional scripts -->
    <script src="/converseLarry/public/assets/scripts/smartSlimscroll.js"></script>
    <script src="/converseLarry/public/assets/scripts/thirdparty/wavejs/waves.js"></script>
    <script>
        function mobileOperator() {
            return /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
        }
    </script>

    <!-- Inicialización global -->
    <script>
        let nav;
        const navElement = document.querySelector('#js-primary-nav');
        if (navElement) {
            nav = new Navigation(navElement, {
                accordion: true,
                slideUpSpeed: 350,
                slideDownSpeed: 470,
                closedSign: '<i class="sa sa-chevron-down"></i>',
                openedSign: '<i class="sa sa-chevron-up"></i>',
                initClass: 'js-nav-built',
                debug: false,
                instanceId: `nav-${Date.now()}`,
                maxDepth: 5,
                sanitize: true,
                animationTiming: 'easeOutExpo',
                debounceTime: 0,
                onError: error => console.error('Navigation error:', error)
            });
        }

        if (window.Waves) {
            Waves.attach('.btn:not(.js-waves-off):not(.btn-switch):not(.btn-panel):not(.btn-system):not([data-action="playsound"]), .js-waves-on', ['waves-themed']);
            Waves.init();
        }

        document.addEventListener('DOMContentLoaded', function() {
            if (typeof appDOM !== 'undefined') {
                appDOM.checkActiveStyles().debug(false);
            }

            new ListFilter('#js-nav-menu', '#searchInput', {
                messageSelector: '.js-filter-message',
                debounceWait: 200,
                minLength: 2,
                caseSensitive: false
            });

            if (!mobileOperator()) {
                new smartSlimScroll('.custom-scroll', {
                    height: '100%',
                    size: '4px',
                    position: 'right',
                    color: '#000',
                    alwaysVisible: false,
                    railVisible: true,
                    railColor: '#222',
                    railOpacity: 0,
                    wheelStep: 10,
                    offsetX: '6px',
                    offsetY: '8px'
                });
            } else {
                document.body.classList.add('no-slimscroll');
            }
        });

        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));
        document.querySelectorAll('[data-bs-toggle="popover"]').forEach(el => new bootstrap.Popover(el));
        bootstrap.Dropdown.Default.autoClose = 'outside';

        var rol= <?php  echo "'".$_SESSION['user']['role']."'"; ?>;
        console.log(rol);
        if (rol == "user"){
            //js-nav-menu
            document.getElementById("js-nav-menu").style.display="block";
        }
    </script>
</body>

</html>