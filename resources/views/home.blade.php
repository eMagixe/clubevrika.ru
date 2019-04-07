@extends('layouts.app')

@section('content')
<v-layout align-space-around row fill-height/>
    <drawers-section></drawers-section>
    <v-flex>
        <table-users></table-users>
    </v-flex>
</v-layout>
@endsection

