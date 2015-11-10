@extends('admin_template')

@section('title')
    Create a playlist
@endsection

@section('content')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Create playlist</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {!! Former::horizontal_open(route('admin.playlist.store'))->method('post') !!}
            <div class="box-body">
                {!! Former::text('youtube_id') !!}
                {!! Former::text('title') !!}
                {!! Former::text('release_date') !!}
                {!! Former::text('by') !!}
                {!! Former::select('category')->options($category) !!}
                {!! Former::text('age') !!}
                {!! Former::textarea('description') !!}
            </div><!-- /.box-body -->
          <div class="box-footer">
                {!! Former::submit('Submit')->class('btn btn-info pull-right') !!}
          </div><!-- /.box-footer -->
        {!! Former::close() !!}
      </div>





@endsection
