@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create">Create listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    @if(count($listings))
                    <h3>Your listings</h3>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Company</th>
                                <th></th>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td>
                                        <form action="/listings/{{$listing->id}}" class="float-right ml-2" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="button" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="/listings/{{$listing->id}}/edit" class="btn btn-info float-right">Edit</a> </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You don't have any listings yet.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
