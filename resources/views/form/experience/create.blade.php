@extends('form.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 ">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Add new experience</h1>
                <form action="/dashboard/add/experience/create" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="company"
                            class="form-control @error('company')
                            is-invalid
                            @enderror"
                            id="company" placeholder="example inc" value="{{ old('company') }}" required autofocus>
                        <label for="company">company</label>
                        @error('company')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="durations"
                            class="form-control @error('durations')
                            is-invalid
                            @enderror"
                            id="durations" placeholder="30-05-1992 - 12-09-1982" value="{{ old('durations') }}" required>
                        <label for="durations">durations</label>
                        @error('durations')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="field"
                            class="form-control @error('field')
                            is-invalid
                            @enderror"
                            id="field" placeholder="programmer" value="{{ old('field') }}" required>
                        <label for="field">field</label>
                        @error('field')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="order"
                            class="form-control @error('order')
                            is-invalid
                            @enderror"
                            id="order" placeholder="1" value="{{ old('order') }}" required>
                        <label for="order">order</label>
                        @error('order')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered? <a href="/dashboard">Back to dashboard</a></small>
            </main>
        </div>
    </div>
@endsection
