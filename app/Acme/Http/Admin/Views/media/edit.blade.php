@extends('Admin::layouts.default')
@section('title', $media->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ trans('site.AdminMediaChanged') }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($media, ['route' => ['admin.media.update', $media], 'method' => 'PUT']) !!}
				@include('Admin::partials.forms.media', $media)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/select/select2.min.css') }}"/>
@stop

@section('scripts')
 <script src="{{ asset('js/admin/select/select2.full.js') }}"></script>
 <script type="text/javascript">
    $('#tag_list').select2({
        ajax: {
            url: "/api/tags",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    tag: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: 'Тег тандаңыз',
        tags: true,
        tokenSeparators: [',', ' '],
        minimumInputLength: 1,
    });
</script>
@stop
