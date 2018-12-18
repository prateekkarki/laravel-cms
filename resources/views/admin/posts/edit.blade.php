@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p>
                    @lang('posts.show') : 
                    <a href="{{ route('posts.show', $post) }}" target="_blank">
                        {{ route('posts.show', $post) }}  <i class="fas fa-igloo"></i>
                    </a>
                </p>    
            </div>
            <div class="col-md-3">
                {!! Form::model($post, ['method' => 'DELETE', 'route' => ['admin.posts.destroy', $post], 'class' => 'form-inline float-right', 'data-confirm' => __('forms.posts.delete')]) !!}
                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('posts.delete'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']) !!}
                {!! Form::close() !!}                
            </div>
        </div>
    </div>

    @include('admin/posts/_thumbnail')

    {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'method' =>'PUT']) !!}
        @include('admin/posts/_form')

        <div class="pull-left">
            {{ link_to_route('admin.posts.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary']) }}
            {!! Form::submit(__('forms.actions.update'), ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


@endsection
