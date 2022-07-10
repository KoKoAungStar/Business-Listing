@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $listing->name}} <span class="btn btn-secondary float-right"><a href="/">Go back</a></span></div>

                <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    Email: <a href="mailto:{{$listing->email}}">{{ $listing->email}}</a> 
                                </div>
                                <div class="list-group-item">
                                    Website: <a href="www.listing2.com">{{ $listing->website}}</a> 
                                </div>
                                <div class="list-group-item">
                                    Address: {{ $listing->address}}
                                </div>
                                <div class="list-group-item">
                                    Phone: {{ $listing->phone}}
                                </div>
                                <div class="list-group-item">
                                    Bio: {{ $listing->bio}}
                                </div>
                                
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
