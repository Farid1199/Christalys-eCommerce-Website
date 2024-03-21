@extends('admin::index', ['header' => strip_tags('Chrystalis Jewelery Website')])

@section('content')

    @foreach ($css_files as $css_file)
        <link rel="stylesheet" href="{{ $css_file }}">
    @endforeach
    @isset($css)
        <style type="text/css">{{ $css }}</style>
    @endisset

    <section class="content-header clearfix" style="background: #f4f4f4; padding: 15px; margin-bottom: 20px; border: 1px solid #ddd;">
        <h1 style="font-weight: 300; font-size: 28px; color: #333;">
            {!! 'Chrystalis Jewelery Website' ?: trans('admin.title') !!}
            <small style="font-size: 15px; color: #666;">{!! $description ?: trans('admin.description') !!}</small>
        </h1>

        @include('admin::partials.breadcrumb')

        <a href="{{ route('UserExport') }}" class="btn btn-success" style="box-shadow: 0 2px 4px rgba(0,0,0,.2);">Export Users</a>
        <a href="{{ route('productExport') }}" class="btn btn-info" style="box-shadow: 0 2px 4px rgba(0,0,0,.2);">Export Products</a>

    </section>

    <section class="content" style="background: #fff; padding: 20px;">

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