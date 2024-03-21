@extends('admin::index', ['header' => strip_tags('Chrystalis Jewelery Website')])

@section('content')

    @foreach ($css_files as $css_file)
        <link rel="stylesheet" href="{{ $css_file }}">
    @endforeach
    @isset($css)
        <style type="text/css">{{ $css }}</style>
    @endisset

    <section class="content-header clearfix">
        <h1>
            {!! 'Chrystalis Jewelery Website' ?: trans('admin.title') !!}
            <small>{!! $description ?: trans('admin.description') !!}</small>
        </h1>

        @include('admin::partials.breadcrumb')

        <a href="{{ route('UserExport') }}" class="btn btn-success">Export Users</a>
        <a href="{{ route('productExport') }}" class="btn btn-info">Export Products</a>

    </section>

    <section class="content">

        @include('admin::partials.alerts')
        @include('admin::partials.exception')
        @include('admin::partials.toastr')

        @if($_view_)
            @include($_view_['view'], $_view_['data'])
        @else
            {!! $_content_ !!}
        @endif

    </section>
@endsection