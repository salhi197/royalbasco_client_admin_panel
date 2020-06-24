@extends('layouts.user')

@section('content')
<div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mt-2">
                                    <div class="card-header"><h3 class="font-weight-light my-4">Create new demande: </h3></div>
                                    <div class="card-body">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Somme : </label>
                                                        <input readonly="true" class="form-control py-4" id="somme" name="somme" type="text" placeholder="Enter the sum here E.G : 1800,00 euro" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Pays</label>
                                                        <input readonly="true" class="form-control py-4" id="country" name="country" type="text" placeholder="Enter country : " />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Téléphone : </label>
                                                <input readonly="true" class="form-control py-4" id="telephpone" name="telephpone" type="text" placeholder="Enter phone number e.g : (+213) 659-43-96-77" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">nom : </label>
                                                        <input readonly="true" class="form-control py-4" id="nom" name="nom" type="text" placeholder="Enter name e.g : Jhon" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">¨prenom</label>
                                                        <input readonly="true" class="form-control py-4" name="prenom" id="prenom" type="text" placeholder="enter surname : " />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="login.html">enoyer</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection