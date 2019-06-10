@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aliquam, laborum tempore, enim, ipsum amet vitae error iure non ratione animi inventore iste quas natus dolores debitis molestiae cum labore?</p>
@endsection

@section('sidebar')
    @parent
    <h1>This is appended to side bar</h1>
@endsection