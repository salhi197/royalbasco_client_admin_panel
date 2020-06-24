@extends('layouts.user')

@section('content')
<div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a class="btn btn-info" href="{{route('user.demande.show.create')}}">
                                    <i class="fas fa-plus"></i>
                                    Add new demande
                                </a>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>pays</th>
                                                <th>sum</th>
                                                <th>created_at</th>
                                                <th>Start date</th>
                                                <th>actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($demandes as $demande)                                            
                                            <tr>
                                                <td>{{$demande->nom}}</td>
                                                <td>{{$demande->prenom}}</td>
                                                <td>{{$demande->pays}}</td>
                                                <td>{{$demande->somme}}</td>
                                                <td>{{$demande->created_at}}</td>

                                                <td>
                                                <span class="badge badge-info right">opend</span>
                                                </td>
                                                <td >
                                                    <div class="table-action">  
                                                    <a  
                                                    onclick="return confirm('Are you sure ?')"
                                                    href="{{route('user.demande.destroy',['id_demande'=>$demande->id])}}" 
                                                    class="btn btn-danger">
                                                            <i class="fas fa-trash"></i> Annuler 
                                                    </a>
                                                    <a 
                                                    href="{{route('user.demande.edit',['id_demande'=>$demande->id])}}"
                                                     class="btn btn-info">
                                                            <i class="fas fa-edit"></i> Modifer 
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



@endsection