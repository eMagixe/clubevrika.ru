@extends('layouts.app')

@section('content')
    <login-form token="{{ csrf_token() }}"></login-form>
@endsection
