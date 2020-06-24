@extends('layouts.user')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Mes demandes
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>2011/01/25</td>

                                                <td>
                                                    <span class="badge bg-danger">
                                                        ouvert
                                                    </span>
                                                </td>
                                                <td >
                                                    <div class="table-action">  
                                                    <a  
                                                    href="#" 
                                                    data=""
                                                    class="btn btn-sm bg-danger-light ">
                                                            <i class="fas fa-trash"></i> Annuler 
                                                        </a>
                                                        <a href="" class="btn btn-sm bg-info-light">
                                                            <i class="fas fa-eye"></i> Modifier 
                                                        </a>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>2011/01/25</td>
                                                <td>
                                                    <span class="badge bg-success">
                                                        ouvert
                                                    </span>
                                                </td>

                                                <td >
                                                    <div class="table-action">  
                                                    <a  
                                                    href="#" 
                                                    data=""
                                                    class="btn btn-sm bg-danger-light ">
                                                            <i class="fas fa-trash"></i> Annuler 
                                                        </a>
                                                        <a href="" class="btn btn-sm bg-info-light">
                                                            <i class="fas fa-eye"></i> Modifier 
                                                        </a>
                                                    </div>
                                                </td>


                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



@endsection