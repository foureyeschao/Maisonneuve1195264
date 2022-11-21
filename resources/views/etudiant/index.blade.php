@extends('layouts.app')
@section('content')

    <div class="container-fluid" style="margin-bottom: 50px;">
        <div class="row mt-3">
            <div class="col-12 col-sm-6 col-md-6">
                <a href="{{ route('student.index') }}"><img style="width: 250px" src="{{ asset('img/logo.png') }}" alt="" /></a>
            </div>
            <div class="col-12 col-sm-6 col-md-6 text-end mt-2" style="margin-bottom: 30px;"><a class="btn btn-primary" href="{{ route('create') }}" role="button"><i class="fa fa-plus"></i>&nbsp;@lang('lang.text_add')</a></div>
        </div>
        <div class="card mt-4" id="TableSorterCard" style="border-style: none;border-radius: 6.5px;">
            <div class="card-header py-3" style="border-width: 0px;background: rgb(23,25,33);">
                <div class="row table-topper align-items-center">
                    <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                        <p class="m-0 fw-bold" style="color: rgb(255,255,255);">Informations De l'Étudiants</p>
                    </div>
                    <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;"><button class="btn btn-dark btn-sm reset" type="button" style="margin: 2px;">Recherche</button><button class="btn btn-light btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-plus"></i></button><button class="btn btn-light btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-minus"></i></button></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive" style="border-top-style: none;background: #171921;">
                        <table class="table table-striped table tablesorter" id="ipi-table">
                            <thead class="thead-dark" style="background: rgb(33,37,48);border-width: 0px;border-color: rgb(0,0,0);border-bottom-color: #21252F;">
                            <tr style="border-style: none;border-color: rgba(255,255,255,0);background: #21252f;">
                                <th class="text-center">Nom</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Email</th>
                                <th class="text-center filter-false sorter-false">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-center" style="border-top-width: 0px;">
                            @forelse($etudiants as $etudiant)
                                <tr style="background: #262a38;">

                                        <td style="color: rgb(255,255,255);">{{ ucfirst($etudiant->nom) }}</td>
                                        <td style="color: rgb(255,255,255);">{{ ucfirst($etudiant->phone) }}</td>
                                        <td style="color: rgb(255,255,255);">{{ $etudiant->email }}</td>
                                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                                            <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="{{ route('show', $etudiant->id) }}" style="color: #00bdff;"><i class="far fa-eye"></i></a>
                                            <a class="btn btnMaterial btn-flat success semicircle" role="button" href="{{ route('edit', $etudiant->id) }}" style="color: rgb(0,197,179);"><i class="fas fa-pen"></i></a>
                                            <form id="delBtForm"  action="{{ route('delete', $etudiant->id) }}" method="POST" style="display:inline">
                                                @csrf
                                                @method('delete')
                                                <button  class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" type="submit"> <i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></button>
                                            </form>

                                        </td>
                                </tr>
                            @empty
                                <p class="text-warning">Aucun article de blog disponible </p>
                            @endforelse
                            </tbody>

                        </table>
                        <div class="" style="display:flex; justify-content:center">{{$etudiants}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
