<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <div>
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="tc_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="tc_brand">
                    <!--begin::Logo-->

                    <a href="index-2.html" class="brand-logo">
                        <img class="brand-image" style="height: 25px;" alt="Logo" src="{{ asset('assets/images/misc/kF.png') }}" />
                        <span class="brand-text"><img style="height: 25px;" alt="Logo"
                                src="{{ asset('assets/images/misc/logo.png') }}" /></span>

                    </a>
                    <!--end::Logo-->


                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->




<div class="aside-menu-wrapper flex-column-fluid overflow-auto h-100" id="tc_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="tc_aside_menu" class="aside-menu  mb-5" data-menu-vertical="1" data-menu-scroll="1"
        data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
      <div id="accordion">
        <ul class="nav flex-column">
            <li class="nav-item active">
                <a href="index-2.html" class="nav-link">
                    <span class="svg-icon nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </span>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>


            </li>
            {{-- start catalog --}}
            <li class="nav-item">
                <a  class="nav-link" data-bs-toggle="collapse"  href="javascript:void(0)" data-bs-target="#catalog" role="button"
                aria-expanded="false" aria-controls="catalog">
                    <span class="svg-icon nav-icon">
                        <i class="fas fa-boxes font-size-h4"></i>
                    </span>
                    <span class="nav-text">Catalog</span>
                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                </a>
                <div class="collapse nav-collapse" id="catalog" data-bs-parent="#accordion">
                    <div id="accordion1">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a href="/admin/kategori" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Product Categories</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link sub-nav-link" data-bs-toggle="collapse" href="#catalogProduct" role="button"
                                aria-expanded="false" aria-controls="catalogProduct">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                    <span class="nav-text">Products</span>
                                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                                </a>
                                <div class="collapse nav-collapse" id="catalogProduct" data-bs-parent="#accordion1">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="/admin/produk" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">List</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="/admin/tambah-produk" class="nav-link mini-sub-nav-link" >

                                                <span class="nav-text">Add Product</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a  class="nav-link sub-nav-link" data-bs-toggle="collapse" href="#catalogStock" role="button"
                                aria-expanded="false" aria-controls="catalogStock">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                    <span class="nav-text">Product Stock</span>
                                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                                </a>
                                <div class="collapse nav-collapse" id="catalogStock" data-bs-parent="#accordion1">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="stock-add.html" class="nav-link mini-sub-nav-link">
                                                <span class="nav-text">Add Stock</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="stock-transfer.html" class="nav-link mini-sub-nav-link">
                                                 <span class="nav-text">Stock Transfer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </li>
            {{-- end catalog --}}

            {{-- start people --}}
            <li class="nav-item">
                <a  class="nav-link" data-bs-toggle="collapse" href="#People" role="button"
                aria-expanded="false" aria-controls="People">
                    <span class="svg-icon nav-icon">
                        <i class="fas fa-user-friends font-size-h4"></i>
                    </span>
                    <span class="nav-text">People</span>
                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                </a>
                <div class="collapse nav-collapse" id="People" data-bs-parent="#accordion">
                    <div id="accordion2">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link sub-nav-link" data-bs-toggle="collapse" href="#admins" role="button" aria-expanded="false" aria-controls="catalogProduct">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                      </svg>
                                </span>
                                    <span class="nav-text">Admins</span>
                                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                                </a>
                                <div class="collapse nav-collapse" id="admins" data-bs-parent="#accordion1">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="/admin/pengguna" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">List</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="roles-permission.html" class="nav-link mini-sub-nav-link">
                                                <span class="nav-text">Roles/Permisssions</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="billers-list.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Billers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="supplier-list.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Supplier</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="customer-list.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Customer</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="customer-edit.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Customer Edit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            {{-- end people --}}

            {{-- start account --}}
            <li class="nav-item">
                <a  class="nav-link" data-bs-toggle="collapse" href="#account" role="button"
                aria-expanded="false" aria-controls="account">
                    <span class="svg-icon nav-icon">
                        <i class="fas fa-file-invoice-dollar font-size-h4"></i>
                    </span>
                    <span class="nav-text">Accounts</span>
                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                </a>
                <div class="collapse nav-collapse" id="account" data-bs-parent="#accordion">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="accounts-list.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="accounts-balance-sheet.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Balance Sheet</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="accounts-trial-balance.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Trial Balance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="accounts-cashFlow.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Cash Flow</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="accounts-payment-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Payment Account Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- end account --}}

            {{-- start reports --}}
            <li class="nav-item">
                <a  class="nav-link" data-bs-toggle="collapse" href="#reports" role="button"
                aria-expanded="false" aria-controls="reports">
                    <span class="svg-icon nav-icon">
                        <i class="fas fa-chart-line font-size-h4"></i>
                    </span>
                    <span class="nav-text">Reports</span>
                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                </a>
                <div class="collapse nav-collapse" id="reports" data-bs-parent="#accordion">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="profit-loss-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Profit / Loss</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="purchase-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Purchase Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sale-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Sale Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="supplier-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Supplier Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="customer-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Customer Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="stock-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Stock Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="stock-adjustment-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Stock Adjustment Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="outofstock-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Out of Stock Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="stock-alert-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Stock Alert Report</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="expense-report.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Expense Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- end reports --}}

            {{-- start setting --}}
            <li class="nav-item">
                <a  class="nav-link" data-bs-toggle="collapse" href="#setting" role="button"
                aria-expanded="false" aria-controls="setting">
                    <span class="svg-icon nav-icon">
                        <i class="fas fa-cogs font-size-h4"></i>
                    </span>
                    <span class="nav-text">Settings</span>
                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                </a>
                <div class="collapse nav-collapse" id="setting" data-bs-parent="#accordion">
                    <div id="accordion3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a  class="nav-link sub-nav-link" data-bs-toggle="collapse" href="#settingB" role="button"
                                aria-expanded="false" aria-controls="settingB">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                    <span class="nav-text">Bussiness Setting</span>
                                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                                </a>
                                <div class="collapse nav-collapse" id="settingB" data-bs-parent="#accordion3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#general"  class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">General</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#pos" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">POS</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#email" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Email SMTP Settings</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#sms" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">SMS Setting</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#emailtemp" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Email Templates</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#notification" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Notifications Setting</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#invoice" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Inovice Setting</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bussiness-setting.html#barcodes" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Bar Code Setting</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link sub-nav-link" data-bs-toggle="collapse" href="#settingW" role="button"
                                aria-expanded="false" aria-controls="settingW">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                    <span class="nav-text">Website Settings</span>
                                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                                </a>
                                <div class="collapse nav-collapse" id="settingW" data-bs-parent="#accordion3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="website-setting.html#general" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">General</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="website-setting.html#themeColor" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Theming / Colors</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="website-setting.html#SEO" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">SEO</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="website-setting.html#log-sign" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Login / SignUp</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="website-setting.html#slider" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Slider</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="menu-bulider.html" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Menu Builder</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link sub-nav-link"  data-bs-toggle="collapse" href="#settingA" role="button"
                                aria-expanded="false" aria-controls="settingA">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                    <span class="nav-text">App Settings</span>
                                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                                </a>
                                <div class="collapse nav-collapse" id="settingA" data-bs-parent="#accordion3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="app-setting.html#general" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">General</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="app-setting.html#display" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Display In Menu/Sidebar</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="app-setting.html#notificationS" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Local Notification</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="app-setting.html#log-sign" class="nav-link mini-sub-nav-link">

                                                <span class="nav-text">Login/Signup</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="warehouse.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Warehouse</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="language.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Language</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="currency.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Currency</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="payment.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Payement Methods</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="shippingmethods.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Shipping Methods</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="tax.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Tax Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="coupons.html" class="nav-link sub-nav-link">
                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          </svg>
                                    </span>
                                    <span class="nav-text">Coupon Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            {{-- end setting --}}


            <li class="nav-header mt-3">
                <span class="nav-text font-size-bold">UI Elements</span>
                <span class="svg-icon nav-icon text-primary">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                </span>
            </li>

            <li class="nav-item">
                <a  class="nav-link" data-bs-toggle="collapse" href="#components" role="button"
                aria-expanded="false" aria-controls="components">
                    <span class="svg-icon nav-icon">
                        <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                          </svg>
                    </span>
                    <span class="nav-text">Components</span>
                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                </a>
                <div class="collapse nav-collapse" id="components" data-bs-parent="#accordion">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="buttons.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="modals.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="alerts.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Alerts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tabs.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Tabs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="carousel.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Carousel</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="switcher.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Switcher</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mb-5">
                <a  class="nav-link" data-bs-toggle="collapse" href="#basic-input" role="button"
                aria-expanded="false" aria-controls="basic-input">
                    <span class="svg-icon nav-icon">
                        <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                          </svg>
                    </span>
                    <span class="nav-text">Forms</span>
                    <i class="fas fa-chevron-right fa-rotate-90"></i>
                </a>
                <div class="collapse nav-collapse" id="basic-input" data-bs-parent="#accordion">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a href="form-input.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Basic Input</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="form-select.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Select Input</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="form-radio.html" class="nav-link sub-nav-link" >
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Radio Input</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="form-checkbox.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">checkbox Input</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="form-textarea.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Textarea Input</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="form-editor.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Text Editor</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="datepicker.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Date & Time Picker </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="form-validation.html" class="nav-link sub-nav-link">
                                <span class="svg-icon nav-icon d-flex justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      </svg>
                                </span>
                                <span class="nav-text">Form Validation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
      </div>

        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>

                <!--end::Aside Menu-->
            </div>
        </div>
        <!--begin::Aside-->

        <div class="aside-overlay"></div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="tc_wrapper">
            <!--begin::Header-->
            <div id="tc_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="tc_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="tc_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Header Nav-->
                            <ul class="menu-nav">

                                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active p-0"
                                    data-menu-toggle="click" aria-haspopup="true">
                                    <!--begin::Toggle-->
                                    <div class="btn  btn-clean btn-dropdown mr-0 p-0" id="tc_aside_toggle">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">

                                            <svg width="24px" height="24px" viewBox="0 0 16 16" class="bi bi-list"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <!--end::Toolbar-->
                                </li>

                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <div class="posicon d-lg-block d-none">
                            <a href="/pos" class="btn btn-primary white me-2">POS</a>
                        </div>

                        <!--begin::Languages-->
                        <div class="dropdown">

                            <div class="topbar-item" data-bs-toggle="dropdown" data-display="static">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg me-1">
                                    <img class="h-20px w-20px rounded-sm"
                                        src="{{ asset('assets/images/svg/flags/226-united-states.svg') }}" alt="" />
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">
                                    <span class="symbol symbol-20 me-3">
                                        <img class="h-20px w-20px rounded-sm"
                                            src="{{ asset('assets/images/svg/flags/226-united-states.svg') }}" alt="" />
                                    </span>
                                    English
                                </a>

                            </div>

                        </div>
                        <!--end::Languages-->


                        <!--begin::Quick Actions-->
                        <div class="dropdown">

                            <div class="topbar-item" data-bs-toggle="dropdown" data-offset="10px,0px">
                                <div id="kt_open_fullscreen" class="btn btn-icon btn-clean btn-dropdown me-1" title="fullscreen"
                                    onclick="openFullscreen();">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">

                                        <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-fullscreen"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z" />
                                        </svg>



                                    </span>

                                </div>

                                <div id="kt_close_fullscreen" class="btn btn-icon btn-clean btn-dropdown me-1"
                                    onclick="closeFullscreen();" style="display: none;">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                        <svg width="20px" height="20px" viewBox="0 0 16 16"
                                            class="bi bi-fullscreen-exit" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>



                        </div>
                        <!--end::Quick Actions-->



                        <!--begin::user-->
                        <div class="dropdown">

                            <div class="topbar-item" data-bs-toggle="dropdown" data-display="static">
                                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center pr-1 ps-3">
                                    <span class="text-dark-50 font-size-base d-none d-xl-inline me-3">Angilina
                                        Deo</span>
                                    <span class="symbol symbol-35 symbol-light-success">
                                        <span class="symbol-label font-size-h5 ">
                                            <svg width="20px" height="20px" viewBox="0 0 16 16"
                                                class="bi bi-person-fill" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right" style="min-width: 150px;">

                                <a href="#" class="dropdown-item">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </span>
                                    Edit Profile
                                </a>

                                <a href="#" class="dropdown-item">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-power">
                                            <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                            <line x1="12" y1="2" x2="12" y2="12"></line>
                                        </svg>
                                    </span>
                                    Logout
                                </a>
                            </div>

                        </div>
                        <!--end::user-->


                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="tc_content">
                <!--begin::Subheader-->
                <div class="subheader py-2 py-lg-6 subheader-solid">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->



