@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section" style="width: 100%; max-width: 600px; margin: 50px auto; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 style="text-align: center;">Anak IT - Register</h1>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger" style="padding: 10px; margin-bottom: 20px; border-radius: 5px;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="confirmation">Password Confirmation:</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-md btn-primary" style="padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; background-color: #007bff; color: #fff; margin-right: 10px;">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger" style="padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; background-color: #dc3545; color: #fff;">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
