@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
<<<<<<< HEAD
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
<<<<<<< c64f2eb84f3484b8bb20b3acbf08110591d27f2a
=======
                                <input id="email" type="hidden" class="form-control" name="token" value="{{ $token }}">
>>>>>>> "Registrasi dua tahap, view seadanya"

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< c64f2eb84f3484b8bb20b3acbf08110591d27f2a
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

=======
>>>>>>> "Registrasi dua tahap, view seadanya"
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
=======
                   {!! Form::open(['url'=>'/register', 'class'=>'form-horizontal']) !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
<div class="col-md-6">
{!! Form::text('name', null, ['class'=>'form-control']) !!}
{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
{!! Form::label('email', 'Alamat Email', ['class'=>'col-md-4 control-label']) !!}
<div class="col-md-6">
{!! Form::email('email', null, ['class'=>'form-control']) !!}
{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
{!! Form::label('password', 'Password', ['class'=>'col-md-4 control-label']) !!}
<div class="col-md-6">
{!! Form::password('password', ['class'=>'form-control']) !!}
{!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
{!! Form::label('password_confirmation', 'Konfirmasi Password', ['class'=>'col-md-4 control-label']) !!}
<div class="col-md-6">
{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
{!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
<i class="fa fa-btn fa-user"></i> Daftar
</button>
</div>
</div>
{!! Form::close() !!}
>>>>>>> bd64c36f1600dca200cbffa95d664555d61f4ab7
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
