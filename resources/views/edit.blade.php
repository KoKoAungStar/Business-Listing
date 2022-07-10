@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create listing<span class="float-right"><a href="/home" class="btn btn-secondary">Go back</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="/listings/{{$listing->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="{{ $listing->name }}">
                            </div>
                            <div class="form-group">
                                <label for="address">address</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" value="{{ $listing->address }}">
                            </div>
                            <div class="form-group">
                                <label for="website">website</label>
                                <input type="text" name="website" id="website" class="form-control" placeholder="Enter website" value="{{ $listing->website }}">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" value="{{ $listing->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone" value="{{ $listing->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="bio">bio</label>
                                <input type="text" name="bio" id="bio" class="form-control" placeholder="Enter bio" value="{{ $listing->bio }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection