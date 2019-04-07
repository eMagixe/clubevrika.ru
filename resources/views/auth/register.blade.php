@extends('layouts.app')

@section('content')
    <register-form token="{{ csrf_token() }}"></register-form>
@endsection
