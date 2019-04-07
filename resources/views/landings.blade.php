@extends('layouts.app')

@section('content')
<v-layout align-space-around row fill-height/>
    <drawers-section></drawers-section>
    <v-flex>
        <table-landings></table-landings>
    </v-flex>
</v-layout>
@endsection
