@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{ route('registrasi.kirim') }}" method="post">
					{{ csrf_field() }}
					<input type="email" name="email">
					<button type="submit">Kirim</button>
				</form>
			</div>
		</div>
	</div>
@stop