@extends('Admin::layouts.default')
@section('title', $peopleReporter->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.peopleReporter.destroy', $peopleReporter], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
    <a href="{{ route('admin.peopleReporter.edit', $peopleReporter) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>
    <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>
    
    {!! Form::close() !!}
</div>


<div>
    <h3>{{ $peopleReporter->getName() }}</h3>
    
    <hr>
    <p>{!! $peopleReporter->getContent() !!}</p>
</div>
<hr />
<div>
    <p>Миниатюра:</p>
    @if($peopleReporter->thumbnail)
    <img src="{{ asset($peopleReporter->thumbnail) }}" width="200" height="100">
    @endif
</div>
@stop

