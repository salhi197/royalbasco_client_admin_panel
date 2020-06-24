@extends('layouts.admin')

@section('content')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard / users</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total users : {{Auth::guard('admin')->user()->getUsers()}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link"
                                        href="{{route('admin.user.index')}}"
                                        >View list</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total demandes : {{Auth::guard('admin')->user()->getDemandes()}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link"
                                            href="{{route('admin.demande.index')}}">
                                        View list</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Demandes DataTable 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>avaar</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)                                            
                                            <tr>
                                            <td>
                                                  <ul class="list-inline">
                                                      <li class="list-inline-item">
                                                          <img alt="Avatar" class="table-avatar" 
                                                            style="border-radius: 50%;width: 2.5rem" 
                                                          src="{{asset('img/avatar04.png')}}">
                                                      </li>
                                                  </ul>
                                              </td>
                                                <td>{{$user->nom}}</td>
                                                <td>{{$user->prenom}}</td>
                                                <td>{{$user->telephone}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->created_at}}</td>

                                                <td >
                                                    <div class="table-action">  
                                                    <a 
                                                    href="{{route('user.demande.destroy',['id_demande'=>1])}}" data="" class="btn btn-sm bg-danger-light ">
                                                            <i class="fas fa-eye"></i> Voir 
                                                    </a>
                                                    </div>
                                                </td>

                                            </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </main>

@endsection
