@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <table class="table table-info table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th>
                            {{ $product->id }}
                        </th>
                        <td>
                            <strong>
                                {{ $product->name }}
                            </strong>
                        </td>
                        <td>
                                {{ $product->description }}
                        </td>
                       

                        <td>
                            <a href="" class=" btn btn-sm btn-primary">
                                View
                            </a>
                            <a href="" class=" btn btn-sm btn-success">
                                Edit
                            </a>
                            <a href="" class=" btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection