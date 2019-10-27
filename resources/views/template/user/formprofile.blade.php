@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateProfile') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="gender" class="col-sm-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                
                                <select id="gender" type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" >
                                    <option value="">Select</option>
                                    <option value="Male" @if($profile->gender == "Male") selected="" @endif>Male</option>
                                    <option value="Female" @if($profile->gender == "Female") selected="" @endif>Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthdate" class="col-sm-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>
                            <div class="col-md-6">
                                <input id="birthdate" type="text" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') ?? $profile->birthdate }}" autofocus placeholder="birthdate here...">

                                @if ($errors->has('birthdate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-sm-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>
                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') ?? $profile->contact }}" autofocus placeholder="contact number here...">

                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tin" class="col-sm-4 col-form-label text-md-right">{{ __('TIN') }}</label>
                            <div class="col-md-6">
                                <input id="tin" type="text" class="form-control{{ $errors->has('tin') ? ' is-invalid' : '' }}" name="tin" value="{{ old('tin') ?? $profile->tin }}" autofocus placeholder="tin number here...">

                                @if ($errors->has('tin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') ?? $profile->address }}" autofocus placeholder="address here...">

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
