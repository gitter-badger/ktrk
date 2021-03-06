@extends('Admin::layouts.default')
@section('title', "Фотогалерея")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.photoParent.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>{{ trans('site.AdminPhotoParentNewGal') }}</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<h2>{{ trans('site.AdminPhotoParents') }}</h2>

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($photoParents as $photoParent)
					<a href="{{ route('admin.photoParent.show', $photoParent) }}" class="list-group-item col-md-1">
						{{ $photoParent->getName() }}
						<img src="{{ asset($photoParent->getFile()) }}" alt="" width="100" height="80">
					</a>
					
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@stop


