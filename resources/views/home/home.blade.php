@extends('layout/master')
@section('body')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
            <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                </div>
                </div>
            </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
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
                                <select name="val-status" style="width:100%;"class=" btn btn-primary" maxlength="30">
                                    <option value="1">active</option>
                                    <option value="0">unactive</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-danger m-b-10 m-l-5" name="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="">
                                    <button type="button"  class="btn btn-info m-b-10 m-l-5" name="update">
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
                                <select name="val-status" style="width:100%;"class=" btn btn-primary" maxlength="30">
                                    <option value="1">active</option>
                                    <option value="0">unactive</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-danger m-b-10 m-l-5" name="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="">
                                    <button type="button"  class="btn btn-info m-b-10 m-l-5" name="update">
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
                                <select name="val-status" style="width:100%;"class=" btn btn-primary" maxlength="30">
                                    <option value="1">active</option>
                                    <option value="0">unactive</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-danger m-b-10 m-l-5" name="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="">
                                    <button type="button"  class="btn btn-info m-b-10 m-l-5" name="update">
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
                                <select name="val-status" style="width:100%;"class=" btn btn-primary" maxlength="30">
                                    <option value="1">active</option>
                                    <option value="0">unactive</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit"  class="btn btn-danger m-b-10 m-l-5" name="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="">
                                    <button type="button"  class="btn btn-info m-b-10 m-l-5" name="update">
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
