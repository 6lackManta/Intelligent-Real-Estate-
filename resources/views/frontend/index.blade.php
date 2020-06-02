@extends("frontend.app")
@section('title') {{ "Home" }} @endsection
@section('content')

<!---->
@include("frontend.partials.slider")
<!--Special-->
@include("frontend.partials.special")
<!--Design for u-->
{{-- @include("frontend.partials.design") --}}
<!--Topseller-->
@include("frontend.partials.topseller")
<!--Recommendation-->
@include("frontend.partials.recommendation")
@endsection
