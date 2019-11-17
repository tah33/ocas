@extends('layouts.base')
@section('backend.title', 'OCASUS')
@section('backend.base.content')
<div class="wrapper">

    @include('layouts.backend.partial.header')

    <div class="content-wrapper">

        @include('layouts.backend.partial.navigation')

        <section class="content">
            @yield('master.content')
        </section>

    </div>

    @include('layouts.backend.partial.footer')

</div>
@stop