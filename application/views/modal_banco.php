<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.html" class="navbar-brand"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">Túpac Amaru</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                  <li><a href="#"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>UI Modals</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
              <li class="dropdown"><a href="#" role="button" aria-expanded="false" class="be-toggle-right-sidebar"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">UI Modals</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li><a href="index.html"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                    <ul class="sub-menu">
                      <li><a href="ui-alerts.html">Alerts</a>
                      </li>
                      <li><a href="ui-buttons.html">Buttons</a>
                      </li>
                      <li><a href="ui-panels.html">Panels</a>
                      </li>
                      <li><a href="ui-general.html">General</a>
                      </li>
                      <li class="active"><a href="ui-modals.html">Modals</a>
                      </li>
                      <li><a href="ui-notifications.html">Notifications</a>
                      </li>
                      <li><a href="ui-icons.html">Icons</a>
                      </li>
                      <li><a href="ui-grid.html">Grid</a>
                      </li>
                      <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                      </li>
                      <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                      </li>
                      <li><a href="ui-typography.html"><span class="label label-primary pull-right">New</span>Typography</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                    <ul class="sub-menu">
                      <li><a href="charts-flot.html">Flot</a>
                      </li>
                      <li><a href="charts-sparkline.html">Sparklines</a>
                      </li>
                      <li><a href="charts-chartjs.html">Chart.js</a>
                      </li>
                      <li><a href="charts-morris.html">Morris.js</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                    <ul class="sub-menu">
                      <li><a href="form-elements.html">Elements</a>
                      </li>
                      <li><a href="form-validation.html">Validation</a>
                      </li>
                      <li><a href="form-multiselect.html"><span class="label label-primary pull-right">New</span>Multiselect</a>
                      </li>
                      <li><a href="form-wizard.html">Wizard</a>
                      </li>
                      <li><a href="form-masks.html">Input Masks</a>
                      </li>
                      <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                      </li>
                      <li><a href="form-upload.html">Multi Upload</a>
                      </li>
                      <li><a href="form-editable.html"><span class="label label-primary pull-right">New</span>X-editable</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                    <ul class="sub-menu">
                      <li><a href="tables-general.html">General</a>
                      </li>
                      <li><a href="tables-datatables.html">Data Tables</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                    <ul class="sub-menu">
                      <li><a href="pages-blank.html">Blank Page</a>
                      </li>
                      <li><a href="pages-blank-header.html">Blank Page Header</a>
                      </li>
                      <li><a href="pages-login.html">Login</a>
                      </li>
                      <li><a href="pages-login2.html">Login v2</a>
                      </li>
                      <li><a href="pages-404.html">404 Page</a>
                      </li>
                      <li><a href="pages-sign-up.html">Sign Up</a>
                      </li>
                      <li><a href="pages-forgot-password.html">Forgot Password</a>
                      </li>
                      <li><a href="pages-profile.html">Profile</a>
                      </li>
                      <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                      </li>
                      <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                      </li>
                      <li><a href="pages-timeline.html"><span class="label label-primary pull-right">New</span>Timeline</a>
                      </li>
                      <li><a href="pages-timeline2.html"><span class="label label-primary pull-right">New</span>Timeline v2</a>
                      </li>
                      <li><a href="pages-invoice.html"><span class="label label-primary pull-right">New</span>Invoice</a>
                      </li>
                      <li><a href="pages-calendar.html">Calendar</a>
                      </li>
                      <li><a href="pages-gallery.html">Gallery</a>
                      </li>
                    </ul>
                  </li>
                  <li class="divider">Features</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                    <ul class="sub-menu">
                      <li><a href="email-inbox.html">Inbox</a>
                      </li>
                      <li><a href="email-read.html">Email Detail</a>
                      </li>
                      <li><a href="email-compose.html">Email Compose</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                    <ul class="sub-menu">
                      <li><a href="layouts-primary-header.html">Primary Header</a>
                      </li>
                      <li><a href="layouts-success-header.html">Success Header</a>
                      </li>
                      <li><a href="layouts-warning-header.html">Warning Header</a>
                      </li>
                      <li><a href="layouts-danger-header.html">Danger Header</a>
                      </li>
                      <li><a href="layouts-search-input.html"><span class="label label-primary pull-right">New</span>Search Input</a>
                      </li>
                      <li><a href="layouts-offcanvas-menu.html"><span class="label label-primary pull-right">New</span>Off Canvas Menu</a>
                      </li>
                      <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                      </li>
                      <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                      </li>
                      <li><a href="pages-blank-aside.html">Page Aside</a>
                      </li>
                      <li><a href="layouts-collapsible-sidebar.html"><span class="label label-primary pull-right">New</span>Collapsible Sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                    <ul class="sub-menu">
                      <li><a href="maps-google.html">Google Maps</a>
                      </li>
                      <li><a href="maps-vector.html">Vector Maps</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-folder"></i><span>Menu Levels</span></a>
                    <ul class="sub-menu">
                      <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                        <ul class="sub-menu">
                          <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                          </li>
                          <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                            <ul class="sub-menu">
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                        <ul class="sub-menu">
                          <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                          </li>
                          <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                            <ul class="sub-menu">
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Modals</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">UI Elements</a></li>
            <li class="active">Modals</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <!--Modal Alerts-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Modal Alerts<span class="panel-subtitle">Default bootstrap modal component</span></div>
                <div class="panel-body">
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-toggle="modal" data-target="#mod-success" type="button" class="btn btn-space btn-success">Success</button>
                    <button data-toggle="modal" data-target="#mod-primary" type="button" class="btn btn-space btn-primary">Primary</button>
                    <button data-toggle="modal" data-target="#mod-warning" type="button" class="btn btn-space btn-warning">Warning</button>
                    <button data-toggle="modal" data-target="#mod-danger" type="button" class="btn btn-space btn-danger">Danger</button>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal Footer-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Modal Footer<span class="panel-subtitle">Default bootstrap modal with a footer content</span></div>
                <div class="panel-body">
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-toggle="modal" data-target="#md-footer-success" type="button" class="btn btn-space btn-success">Success</button>
                    <button data-toggle="modal" data-target="#md-footer-primary" type="button" class="btn btn-space btn-primary">Primary</button>
                    <button data-toggle="modal" data-target="#md-footer-warning" type="button" class="btn btn-space btn-warning">Warning</button>
                    <button data-toggle="modal" data-target="#md-footer-danger" type="button" class="btn btn-space btn-danger">Danger</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Full Color Alerts-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Full Color Alerts<span class="panel-subtitle">Nifty modals with full color background style</span></div>
                <div class="panel-body">
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="full-success" class="btn btn-space btn-success md-trigger">Success</button>
                    <button data-modal="full-primary" class="btn btn-space btn-primary md-trigger">Primary</button>
                    <button data-modal="full-warning" class="btn btn-space btn-warning md-trigger">Warning</button>
                    <button data-modal="full-danger" class="btn btn-space btn-danger md-trigger">Danger</button>
                    <button data-modal="full-dark" class="btn btn-space btn-default md-trigger">Dark</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-success" class="modal-container modal-full-color modal-full-color-success modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-check"></span>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-primary" class="modal-container modal-full-color modal-full-color-primary modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-info-outline"></span>
                          <h3>Information!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-warning" class="modal-container modal-full-color modal-full-color-warning modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-alert-triangle"></span>
                          <h3>Warning!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-danger" class="modal-container modal-full-color modal-full-color-danger modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-close-circle-o"></span>
                          <h3>Danger!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-dark" class="modal-container modal-full-color modal-full-color-dark modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-close-circle-o"></span>
                          <h3>Danger!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <div class="modal-overlay"></div>
                </div>
              </div>
            </div>
            <!--Colored Header Modals-->
            <div class="col-sm-6">  
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Colored Header Modal<span class="panel-subtitle">Nifty modals with colored header style</span></div>
                <div class="panel-body">
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="colored-success" class="btn btn-space btn-success md-trigger">Success</button>
                    <button data-modal="colored-primary" class="btn btn-space btn-primary md-trigger">Primary</button>
                    <button data-modal="colored-warning" class="btn btn-space btn-warning md-trigger">Warning</button>
                    <button data-modal="colored-danger" class="btn btn-space btn-danger md-trigger">Danger</button>
                    <button data-modal="colored-dark" class="btn btn-space btn-default md-trigger">Dark</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-success" class="modal-container colored-header colored-header-success modal-effect-10">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices euismod lobortis. Donec fermentum mattis velit id pretium. Suspendisse sed tortor sed diam lobortis tempus at sed lacus. Phasellus semper ex auctor libero scelerisque ultricies.</p>
                        <p>Fusce sit amet lacus arcu. Pellentesque iaculis massa vitae ullamcorper venenatis. Cras metus dolor, maximus sit amet est nec, pharetra blandit elit sagittis vehicula.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-success modal-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-primary" class="modal-container colored-header colored-header-primary modal-effect-10">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices euismod lobortis. Donec fermentum mattis velit id pretium. Suspendisse sed tortor sed diam lobortis tempus at sed lacus. Phasellus semper ex auctor libero scelerisque ultricies.</p>
                        <p>Fusce sit amet lacus arcu. Pellentesque iaculis massa vitae ullamcorper venenatis. Cras metus dolor, maximus sit amet est nec, pharetra blandit elit sagittis vehicula.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary modal-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-warning" class="modal-container colored-header colored-header-warning modal-effect-10">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices euismod lobortis. Donec fermentum mattis velit id pretium. Suspendisse sed tortor sed diam lobortis tempus at sed lacus. Phasellus semper ex auctor libero scelerisque ultricies.</p>
                        <p>Fusce sit amet lacus arcu. Pellentesque iaculis massa vitae ullamcorper venenatis. Cras metus dolor, maximus sit amet est nec, pharetra blandit elit sagittis vehicula.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-warning modal-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-danger" class="modal-container colored-header colored-header-danger modal-effect-10">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices euismod lobortis. Donec fermentum mattis velit id pretium. Suspendisse sed tortor sed diam lobortis tempus at sed lacus. Phasellus semper ex auctor libero scelerisque ultricies.</p>
                        <p>Fusce sit amet lacus arcu. Pellentesque iaculis massa vitae ullamcorper venenatis. Cras metus dolor, maximus sit amet est nec, pharetra blandit elit sagittis vehicula.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger modal-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-dark" class="modal-container colored-header colored-header-dark modal-effect-10">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices euismod lobortis. Donec fermentum mattis velit id pretium. Suspendisse sed tortor sed diam lobortis tempus at sed lacus. Phasellus semper ex auctor libero scelerisque ultricies.</p>
                        <p>Fusce sit amet lacus arcu. Pellentesque iaculis massa vitae ullamcorper venenatis. Cras metus dolor, maximus sit amet est nec, pharetra blandit elit sagittis vehicula.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="modal-overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Bootstrap Modals-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Bootstrap Modals<span class="panel-subtitle">These are the different modal styles using bootstrap modals</span></div>
                <div class="panel-body">
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-toggle="modal" data-target="#md-default" type="button" class="btn btn-space btn-primary"> Default</button>
                    <button data-toggle="modal" data-target="#md-fullWidth" type="button" class="btn btn-space btn-primary"> Full Width</button>
                    <button data-toggle="modal" data-target="#md-custom" type="button" class="btn btn-space btn-primary"> Custom width</button>
                    <button data-toggle="modal" data-target="#md-colored" type="button" class="btn btn-space btn-primary"> Colored Header</button>
                    <button data-toggle="modal" data-target="#md-fullColor" type="button" class="btn btn-space btn-primary"> Full Color</button>
                  </div>
                </div>
              </div>
            </div>
            <!--Nifty Modals  -->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Nifty Modals<span class="panel-subtitle">These are the different modal styles using nifty modals</span></div>
                <div class="panel-body">
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="nft-default" class="btn btn-space btn-success md-trigger"> Default</button>
                    <button data-modal="nft-fullWidth" class="btn btn-space btn-success md-trigger"> Full Width</button>
                    <button data-modal="nft-custom" class="btn btn-space btn-success md-trigger"> Custom width</button>
                    <button data-modal="nft-colored" class="btn btn-space btn-success md-trigger"> Colored Header</button>
                    <button data-modal="nft-fullColor" class="btn btn-space btn-success md-trigger"> Full Color</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-default" class="modal-container modal-effect-1">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-fullWidth" class="modal-container full-width modal-effect-1">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-custom" class="modal-container modal-effect-1">
                    <div style="width: 700px;" class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-colored" class="modal-container colored-header colored-header-success modal-effect-1">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices euismod lobortis. Donec fermentum mattis velit id pretium. Suspendisse sed tortor sed diam lobortis tempus at sed lacus. Phasellus semper ex auctor libero scelerisque ultricies.</p>
                        <p>Fusce sit amet lacus arcu. Pellentesque iaculis massa vitae ullamcorper venenatis. Cras metus dolor, maximus sit amet est nec, pharetra blandit elit sagittis vehicula. </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-success modal-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-fullColor" class="modal-container modal-full-color modal-full-color-success modal-effect-1">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-check"></span>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <div class="modal-overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Nifty Modals Effects-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Nifty Modals Effects<span class="panel-subtitle">These are examples of niftymodals effects</span></div>
                <div class="panel-body">
                  <p>jQuery NiftyModal plugin has 18 different amazing effects to give your modals life.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="md-scale" class="btn btn-space btn-primary md-trigger"> Fade in & Scale</button>
                    <button data-modal="md-slideLeft" class="btn btn-space btn-primary md-trigger"> Slide in Left</button>
                    <button data-modal="md-slideUp" class="btn btn-space btn-primary md-trigger"> Slide in Up</button>
                    <button data-modal="md-fall" class="btn btn-space btn-primary md-trigger"> Fall</button>
                    <button data-modal="md-sideFall" class="btn btn-space btn-primary md-trigger"> Side Fall</button>
                    <button data-modal="md-stickyUp" class="btn btn-space btn-primary md-trigger"> Sticky Up</button>
                    <button data-modal="md-flipH" class="btn btn-space btn-primary md-trigger"> 3D Flip Horizontal</button>
                    <button data-modal="md-flipV" class="btn btn-space btn-primary md-trigger"> 3D Flip Vertical</button>
                    <button data-modal="md-3dSign" class="btn btn-space btn-primary md-trigger"> 3D Sign</button>
                    <button data-modal="md-superScaled" class="btn btn-space btn-primary md-trigger"> Super Scaled</button>
                    <button data-modal="md-justModal" class="btn btn-space btn-primary md-trigger"> Just Modal</button>
                    <button data-modal="md-3dRotateUp" class="btn btn-space btn-primary md-trigger"> 3D Rotate Up</button>
                    <button data-modal="md-3dRotateRight" class="btn btn-space btn-primary md-trigger"> 3D Rotate Right</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-scale" class="modal-container modal-effect-1">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-slideLeft" class="modal-container modal-effect-2">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-slideUp" class="modal-container modal-effect-3">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-fall" class="modal-container modal-effect-5">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-sideFall" class="modal-container modal-effect-6">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-stickyUp" class="modal-container modal-effect-7">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-flipH" class="modal-container modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-flipV" class="modal-container modal-effect-9">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-3dSign" class="modal-container modal-effect-10">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-superScaled" class="modal-container modal-effect-11">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-justModal" class="modal-container modal-effect-12">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-3dRotateUp" class="modal-container modal-effect-14">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-3dRotateRight" class="modal-container modal-effect-15">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                          <h3>Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary btn-space modal-close">Proceed</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                  <div class="modal-overlay"></div>
                </div>
              </div>
            </div>
            <!--Form Modals-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Form Modals<span class="panel-subtitle">These are examples of forms inside modals</span></div>
                <div class="panel-body">
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                  <div class="xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="form-success" class="btn btn-space btn-success md-trigger">Nifty Modal</button>
                    <button data-toggle="modal" data-target="#form-bp1" type="button" class="btn btn-space btn-primary">Bootstrap Modal</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="form-success" class="modal-container colored-header colored-header-success custom-width modal-effect-9">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                        <h3 class="modal-title">Nifty Form Modal</h3>
                      </div>
                      <div class="modal-body form">
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" placeholder="username@example.com" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Your name</label>
                          <input type="text" placeholder="John Doe" class="form-control">
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <label>Your birth date</label>
                          </div>
                        </div>
                        <div class="row no-margin-y">
                          <div class="form-group col-xs-3">
                            <input type="text" placeholder="DD" class="form-control">
                          </div>
                          <div class="form-group col-xs-3">
                            <input type="text" placeholder="MM" class="form-control">
                          </div>
                          <div class="form-group col-xs-3">
                            <input type="text" placeholder="YYYY" class="form-control">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <div class="be-checkbox">
                              <input id="check1" type="checkbox">
                              <label for="check1">Send me notifications about new products and services.</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default modal-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-success modal-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="modal-overlay"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="be-right-sidebar">
        <div class="sb-content">
          <div class="tab-navigation">
            <ul role="tablist" class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
              <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
              <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div id="tab1" role="tabpanel" class="tab-pane tab-chat active">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="be-scroller">
                      <div class="content">
                        <h2>Recent</h2>
                        <div class="contact-list contact-list-recent">
                          <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact-list">
                          <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return mdi mdi-chevron-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="be-scroller">
                      <div class="content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab2" role="tabpanel" class="tab-pane tab-todo">
                <div class="todo-container">
                  <div class="todo-wrapper">
                    <div class="be-scroller">
                      <div class="todo-content"><span class="category-title">Today</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo1" type="checkbox" checked="">
                              <label for="todo1">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo2" type="checkbox">
                              <label for="todo2">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo3" type="checkbox">
                              <label for="todo3">Updates changes to GitHub</label>
                            </div>
                          </li>
                        </ul><span class="category-title">Tomorrow</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo4" type="checkbox">
                              <label for="todo4">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo5" type="checkbox">
                              <label for="todo5">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo6" type="checkbox">
                              <label for="todo6">Updates changes to GitHub</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo7" type="checkbox">
                              <label for="todo7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                  </div>
                </div>
              </div>
              <div id="tab3" role="tabpanel" class="tab-pane tab-settings">
                <div class="settings-wrapper">
                  <div class="be-scroller"><span class="category-title">General</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                        </div><span class="name">Available</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                        </div><span class="name">Enable notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                        </div><span class="name">Login with Facebook</span>
                      </li>
                    </ul><span class="category-title">Notifications</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                        </div><span class="name">Email notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                        </div><span class="name">Project updates</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                        </div><span class="name">New comments</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                        </div><span class="name">Chat messages</span>
                      </li>
                    </ul><span class="category-title">Workflow</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                        </div><span class="name">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js" type="text/javascript"></script>
    <script type="text/javascript">
      $.fn.niftyModal('setDefaults',{
      	overlaySelector: '.modal-overlay',
      	closeSelector: '.modal-close',
      	classAddAfterOpen: 'modal-show',
      });
      
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
    </script>
    <!--Modal Alerts-->
    <div id="mod-success" tabindex="-1" role="dialog" style="" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
              <h3>Awesome!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50">
                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-space btn-success">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <div id="mod-primary" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-primary"><span class="modal-main-icon mdi mdi-info-outline"></span></div>
              <h3>Information!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50"> 
                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-space btn-primary">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <div id="mod-warning" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-warning"><span class="modal-main-icon mdi mdi-alert-triangle"></span></div>
              <h3>Warning!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50">
                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-space btn-warning">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <div id="mod-danger" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
              <h3>Danger!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50">
                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-space btn-danger">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <!--Modal Footer-->
    <div id="md-footer-success" tabindex="-1" role="dialog" style="" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
              <h3>Awesome!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-success">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-footer-primary" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-primary"><span class="modal-main-icon mdi mdi-info-outline"></span></div>
              <h3>Information!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-footer-warning" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-warning"><span class="modal-main-icon mdi mdi-alert-triangle"></span></div>
              <h3>Warning!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-warning">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-footer-danger" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
              <h3>Danger!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <!--Bootstrao Modals-->
    <div id="md-default" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
              <h3>Awesome!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50"> 
                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-space btn-primary">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <div id="md-fullWidth" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog full-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
              <h3>Awesome!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50"> 
                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-space btn-primary">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <div id="md-custom" tabindex="-1" role="dialog" class="modal fade">
      <div style="width: 700px;" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
              <h3>Awesome!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50"> 
                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-space btn-primary">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <div id="md-colored" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title">Custom Colored Header</h3>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices euismod lobortis. Donec fermentum mattis velit id pretium. Suspendisse sed tortor sed diam lobortis tempus at sed lacus. Phasellus semper ex auctor libero scelerisque ultricies.</p>
            <p>Fusce sit amet lacus arcu. Pellentesque iaculis massa vitae ullamcorper venenatis. Cras metus dolor, maximus sit amet est nec, pharetra blandit elit sagittis vehicula. </p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-fullColor" tabindex="-1" role="dialog" class="modal modal-full-color modal-full-color-primary fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center"><span class="modal-main-icon mdi mdi-info-outline"></span>
              <h3>Information!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
              <div class="xs-mt-50">
                <button type="button" data-dismiss="modal" class="btn btn-default btn-space">Cancel</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary btn-space">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <!--Form Modals-->
    <div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title">Form Modal</h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" placeholder="username@example.com" class="form-control">
            </div>
            <div class="form-group">
              <label>Your name</label>
              <input type="text" placeholder="John Doe" class="form-control">
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label>Your birth date</label>
              </div>
            </div>
            <div class="row no-margin-y">
              <div class="form-group col-xs-3">
                <input type="text" placeholder="DD" class="form-control">
              </div>
              <div class="form-group col-xs-3">
                <input type="text" placeholder="MM" class="form-control">
              </div>
              <div class="form-group col-xs-3">
                <input type="text" placeholder="YYYY" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <div class="be-checkbox">
                  <input id="check2" type="checkbox">
                  <label for="check2">Send me notifications about new products and services.</label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>