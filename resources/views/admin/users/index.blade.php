@section('title')
Users
@stop
@extends('layout.index')
@section('containerAdmin')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-4">
            <div class="row">
                <div class="col-lg-12 col-xl-12 px-4">
                    <div class="card card-custom gutter-b bg-transparent shadow-none border-0" >
                        <div class="card-header align-items-center  border-bottom-dark px-0">
                            <div class="card-title mb-0">
                                <h3 class="card-label mb-0 font-weight-bold text-body">User
                                </h3>
                            </div>
                            <div class="icons d-flex">
                                <button  class="btn ms-2 p-0"
                                id="kt_notes_panel_toggle" title="" data-bs-placement="right"
                                                    data-original-title="Check out more demos" data-bs-toggle="modal" data-bs-target="#add-user">
                                    <span class="bg-secondary h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center  rounded-circle shadow-sm ">

                                          <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                          </svg>
                                    </span>

                                </button>
                                <a href="#" onclick="printDiv()" class="ms-2">
                                    <span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                        <svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"/>
                                            <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                            <path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                          </svg>
                                    </span>

                                </a>
                                <a href="#" class="ms-2" >
                                    <span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                        <svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                          </svg>
                                    </span>

                                </a>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="row">

                <div class="col-12  px-4">
                    <div class="card card-custom gutter-b bg-white border-0" >
                        <div class="card-body" >
                            <div >
                                <div class=" table-responsive" id="printableTable">
                                    <table id="productUnitTable" class="display ">

                                        <thead class="text-body">
                                            <tr>
                                                <th>User Name</th>
                                                <th class="">Email</th>
                                                <th class="">Company Name</th>
                                                <th class="">Phone Number</th>
                                                <th class="">Role</th>
                                                <th class="">Status</th>
                                                <th class="no-sort text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="kt-table-tbody text-dark">
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">coder</td>
                                                <td class="">0123456</td>
                                                <td class="">Admin</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit2"  data-bs-toggle="modal" data-bs-target="#edit-user" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">code</td>
                                                <td class="">012346</td>
                                                <td class="">Staff</td>
                                                <td>
                                                    <span class="mr-0 text-danger">In Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton1"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit3" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">coder</td>
                                                <td class="">0123456</td>
                                                <td class="">Admin</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton2"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit4" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">code</td>
                                                <td class="">012346</td>
                                                <td class="">Staff</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton3"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit5" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">coder</td>
                                                <td class="">0123456</td>
                                                <td class="">Admin</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton4"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit6" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">code</td>
                                                <td class="">012346</td>
                                                <td class="">Staff</td>
                                                <td>
                                                    <span class="mr-0 text-danger">In Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton5"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit7" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">coder</td>
                                                <td class="">0123456</td>
                                                <td class="">Admin</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton6"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit77" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">code</td>
                                                <td class="">012346</td>
                                                <td class="">Staff</td>
                                                <td>
                                                    <span class="mr-0 text-danger">In Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton7"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit8" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">coder</td>
                                                <td class="">0123456</td>
                                                <td class="">Admin</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton8"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit88" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">code</td>
                                                <td class="">012346</td>
                                                <td class="">Staff</td>
                                                <td><span class="mr-0 text-danger">In Active</span></td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton9" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton9"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit9" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">coder</td>
                                                <td class="">0123456</td>
                                                <td class="">Admin</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton11" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton11"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit00" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">code</td>
                                                <td class="">012346</td>
                                                <td class="">Staff</td>
                                                <td>	<span class="mr-0 text-success">Active</span></td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton12" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton12"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit90" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">coder</td>
                                                <td class="">0123456</td>
                                                <td class="">Admin</td>
                                                <td>
                                                    <span class="mr-0 text-danger">In Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton122" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton122"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit98" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr class="kt-table-row kt-table-row-level-0">
                                                <td  >Admin</td>
                                                <td class="">
                                                Admin@gmail.com
                                                </td>
                                                <td class="">code</td>
                                                <td class="">012346</td>
                                                <td class="">Staff</td>
                                                <td>
                                                    <span class="mr-0 text-success">Active</span>
                                                </td>

                                                <td>
                                                    <div class="card-toolbar text-end">
                                                        <button class="btn p-0 shadow-none" type="button" id="dropdowneditButton13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon">
                                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton13"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit1" data-bs-toggle="tooltip" title="" data-bs-placement="right"
                                                            data-original-title="Check out more demos">Edit</a>
                                                            <a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade text-left" id="add-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Tambah User</h4>
          <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-primary m-0" data-bs-dismiss="modal" aria-label="Close">
            <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
            </svg>
            </button>
        </div>
        <div class="modal-body">
                <form id="myform">
                    <div class="row">

                    <div class="col-12 px-4">
                        <div class="form-group">
                            <label class="text-dark" >Nama Pengguna</label>
                            <input type="text" name="name" class="form-control"  >
                            <small  class="form-text text-muted">masukan nama pengguna</small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark" >Nama Perusahaan</label>
                            <input type="text" name="company" class="form-control"  >
                            <small  class="form-text text-muted">masukan nama perusahaan</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Alamat</label>
                            <input type="text" name="address" class="form-control"  >
                            <small  class="form-text text-muted">masukan alamat</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Email</label>
                            <input type="email" name="email" class="form-control"  >
                            <small  class="form-text text-muted">please enter Email</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Password</label>
                            <input type="password" name="password" class="form-control"  >
                            <small  class="form-text text-muted">please enter Email</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Nomor Telp</label>
                            <input type="text" name="telp" class="form-control"  >
                            <small  class="form-text text-muted">please enter Phone Number</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >NPWP</label>
                            <input type="text" name="npwp" class="form-control"  >
                            <small  class="form-text text-muted">please enter Phone Number</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Role</label>
                                <select class="arabic-select w-100 mb-3 h-30px">
                                    <option value="admin">Admin</option>
                                    <option value="client">Client</option>
                                    <option value="owner">Owner</option>
                                </select>
                        </div>
                    </div>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">

                <span class="">Tutup</span>
            </button>
            <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">

                <span class="">Tambah Pengguna</span>
            </button>
            </div>
      </div>
    </form>
    </div>
</div>

<div class="modal fade text-left" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Ubah User</h4>
          <button type="button" class="close rounded-pill btn btn-sm btn-icon btn-primary m-0" data-bs-dismiss="modal" aria-label="Close">
            <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
            </svg>
            </button>
        </div>
        <div class="modal-body">
                <form id="myform">
                    <div class="row">

                    <div class="col-12 px-4">
                        <div class="form-group">
                            <label class="text-dark" >Nama Pengguna</label>
                            <input type="text" name="name" class="form-control"  >
                            <small  class="form-text text-muted">masukan nama pengguna</small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark" >Nama Perusahaan</label>
                            <input type="text" name="company" class="form-control"  >
                            <small  class="form-text text-muted">masukan nama perusahaan</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Alamat</label>
                            <input type="text" name="address" class="form-control"  >
                            <small  class="form-text text-muted">masukan alamat</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Email</label>
                            <input type="email" name="email" class="form-control"  >
                            <small  class="form-text text-muted">please enter Email</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Password</label>
                            <input type="password" name="password" class="form-control"  >
                            <small  class="form-text text-muted">please enter Email</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Nomor Telp</label>
                            <input type="text" name="telp" class="form-control"  >
                            <small  class="form-text text-muted">please enter Phone Number</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >NPWP</label>
                            <input type="text" name="npwp" class="form-control"  >
                            <small  class="form-text text-muted">please enter Phone Number</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" >Role</label>
                                <select class="arabic-select w-100 mb-3 h-30px">
                                    <option value="admin">Admin</option>
                                    <option value="client">Client</option>
                                    <option value="owner">Owner</option>
                                </select>
                        </div>
                    </div>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">

                <span class="">Tutup</span>
            </button>
            <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">

                <span class="">Ubah Pengguna</span>
            </button>
            </div>
      </div>
    </form>
    </div>
</div>
@endsection
