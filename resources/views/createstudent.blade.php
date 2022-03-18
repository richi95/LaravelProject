@extends('layouts.main')
@section('style')
    <style>
        main {
            display: flex !important;
        }

        .btn-orange {
            background-color: #fd7e14;
        }

        span, #sc-mes {
            font-weight: 600;
        }

        @media (min-width: 768px) {

            label,
            .form-select,
            .form-control {
                width: 50%;
            }
        }

        @media(max-width: 768px) {
            label {
                font-size: 24px !important;
            }

            #sc-mes,
            select,
            button,
            span,
            input {
                font-size: 24px !important;
            }
        }

    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <form class="mx-auto" method="POST">
            <div class="d-md-flex no-wrap row">
                <div class="">
                    @if (Session::has('message'))
                        <div class="text-center">
                            <div class="alert alert-{{ Session::get('message.type') }}" id="sc-mes">
                                {{ Session::get('message.content') }}</div>
                        </div>
                    @endif

                    @csrf

                    <div class="d-md-flex no-warp justify-content-between m-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror" id="name"
                            name="name">
                    </div>
                    @error('name')
                        <div class="d-md-flex justify-content-end m-3">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <div class="d-md-flex no-warp justify-content-between m-3">
                        <label for="sex" class="form-label">Sex</label>
                        <select name="sex" class="form-select @error('sex') {{ 'is-invalid' }} @enderror" id="sex">
                            <option selected>Choose</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    @error('sex')
                        <div class="d-md-flex justify-content-end m-3">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <div class="d-md-flex justify-content-between m-3">
                        <label for="place_of_birth" class="form-label">Birth Place</label>
                        <input type="text" class="form-control @error('place_of_birth') {{ 'is-invalid' }} @enderror"
                            id="place_of_birth" name="place_of_birth">
                    </div>
                    @error('place_of_birth')
                        <div class="d-md-flex justify-content-end m-3">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <div class="d-md-flex no-warp justify-content-between m-3">
                        <label for="date_of_birth" class="form-label ">Birth Date</label>
                        <input type="date" max="2999-12-31"
                            class="form-control @error('date_of_birth') {{ 'is-invalid' }} @enderror" id="date_of_birth"
                            name="date_of_birth">
                    </div>
                    @error('date_of_birth')
                        <div class="d-md-flex justify-content-end m-3">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <div class="d-md-flex no-warp justify-content-between m-3">
                        <label for="email_address" class="form-label">Email address</label>
                        <input type="text" class="form-control  @error('email_address') {{ 'is-invalid' }} @enderror"
                            id="email_address" name="email_address">
                    </div>
                    @error('email_address')
                        <div class="d-md-flex justify-content-end m-3">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                </div>

                <div class="d-md-flex my-5">

                    @foreach ($subjects as $subject)
                        <input type="checkbox"
                            class="form-check-input mx-md-2 @error('subject[]') {{ 'is-invalid' }} @enderror"
                            id="subject" value="{{ $subject->id }}" name="subject[]">
                        <span>{{ $subject->subject }}</span><br><br>
                    @endforeach

                </div>

                @error('subject[]')
                    <div class="d-flex justify-content-center m-3">
                        <span class="text-danger">{{ 'Please choose subject!' }}</span>
                    </div>
                @enderror

            </div>
            <div class="text-center m-3">
                <button type="submit" class="btn btn-orange text-light">Create Student</button>
            </div>
        </form>
    </div>
@endsection
