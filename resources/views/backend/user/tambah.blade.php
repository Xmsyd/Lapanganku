@extends('template/backend/admin')
@section('content')
<form action=" {{ route('users.create') }} " method="POST">
    @csrf
    <!-- Nama -->
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <input id="name" name="name" type="text" class="form-control" required="required">
            </div>
        </div>
    </div>

    <!-- email -->
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <input id="email" name="email" type="email" class="form-control" required="required">
            </div>
        </div>
    </div>
    
    <!-- Password -->
    <div class="form-group row">
        <label for="password" class="col-4 col-form-label">Password</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <input id="password" name="password" type="password" class="form-control" required="required">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection