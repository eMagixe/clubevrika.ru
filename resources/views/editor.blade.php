@extends('layouts.app')

@section('content')
<v-layout align-space-around row fill-height/>
    <drawers-section></drawers-section>
    <drag-panel :landing_id="{{ $id }}"></drag-panel>
</v-layout>
@endsection
