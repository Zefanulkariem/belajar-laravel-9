@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Brand</div>
                <div class="card-body">
                    <form action="{{route('brand.store')}}" method="POST"> {{--//postnya badag!--}}
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">brand Name</label>
                            <input type="text" class="form-control" name="name_brand">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('brand')}}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
