  <nav class="navbar navbar-light navbar-expand  bg-white shadow mb-4 topbar static-top" style="background: linear-gradient(rgb(55,147,186), rgb(238,244,247));">
        <div class="container"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-list-ul" style="color: rgb(255,255,255);"></i></button><img src="../../assets/img/traain.svg">
            <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group"></div>
            </form>
            <ul class="nav navbar-nav flex-nowrap ml-auto">
                <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search" style="color: rgb(255,255,255);"></i></a>
                    <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto navbar-search w-100">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter"></span><i class="far fa-newspaper fa-fw" style="color: rgb(255,255,255);"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right animated--grow-in">
                            <h6 class="dropdown-header" style="background: rgb(93,167,198);">Traain-krant<br></h6>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-primary icon-circle" style="background: linear-gradient(rgb(79,160,194), white);"><i class="far fa-newspaper text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">Traain-nieuws-pagina van Traain<br></span>
                                    <p><?php include 'media/traain.php'; ?></p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-success icon-circle" style="background: linear-gradient(rgb(0,56,255), white);"><i class="fab fa-facebook-f text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">Facebook-pagina van Traain</span>
                                    <p><?php include '../../media/f.php'; ?></p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-warning icon-circle" style="background: linear-gradient(rgb(0,163,255), white);"><i class="fab fa-twitter text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">Twitter-pagina van Traain</span>
                                    <p><?php include 'media/t.php'; ?></p>
													
                                </div>
                            </a><a class="text-center dropdown-item small text-gray-500" href="#">Copyright Traain.nl alle rechten voorbehouden</a></div>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-clock fa-fw" style="color: rgb(255,255,255);"></i><span class="badge badge-danger badge-counter"></span></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right animated--grow-in">
                            <h6 class="dropdown-header" style="background: rgb(122,183,208);">treinen Tijden<br>CENTRUM</h6>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span>(tijd.ini)</span></div>
                                    <p class="small text-gray-500 mb-0">van tijd.traain.nl</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span><strong>(tijd.ini)</strong></span></div>
                                    <p class="small text-gray-500 mb-0">van tijd.traain.nl</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span><strong>(tijd.ini)</strong></span></div>
                                    <p class="small text-gray-500 mb-0">van tijd.traain.nl</p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><span><strong>(tijd.ini)</strong></span></div>
                                    <p class="small text-gray-500 mb-0">van tijd.traain.nl</p>
                                </div>
                            </a><a class="text-center dropdown-item small text-gray-500" href="#">Copyright Traain.nl alle rechten voorbehouden<br></a></div>
                    </div>
                    <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                </li>
                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Je bent niet ingelogd</span><img class="border rounded-circle img-profile" src="../../assets/img/64572.svg"></a>
                        <div
                            class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="../../login">Log in</a><a class="dropdown-item" href="../../register">Registreren</a>
                            <div class="dropdown-divider"></div>
                    </div>
        </div>
        </li>
        </ul>
        </div>
    </nav>