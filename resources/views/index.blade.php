@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="btn btn-secondary float-right"><a href="/listings/create">Create listing</a></span></div>

                <div class="card-body">
                    
                    
                    
                    @if(count($listings))
                        @foreach ($listings as $listing)
                            <div class="list-group">
                                <div class="list-group-item">
                                    <a href="/listings/{{$listing->id}}">{{ $listing->name}}</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>You don't have any listings yet.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
