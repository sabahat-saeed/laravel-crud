@extends('layout/master')
@section('body')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Users</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Users <small>List</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                    There are Users list below.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>
                            Status
                        </th>
                        <th>
                            Actions
                        </th>
                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Active</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">unactive</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-danger btn-sm" name="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="{{url('edit-users')}}">
                                    <button type="button"  class="btn btn-info btn-sm" name="update">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Active</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">unactive</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-danger btn-sm" name="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="{{url('edit-users')}}">
                                    <button type="button"  class="btn btn-info btn-sm" name="update">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Active</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">unactive</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-danger btn-sm" name="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="{{url('edit-users')}}">
                                    <button type="button"  class="btn btn-info btn-sm" name="update">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
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
    <!-- /page content -->
@endsection
