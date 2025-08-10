@extends('layouts.app')


@section('content')
    @if (!have_posts())
      <div class="container my-2">
        <div class="row  justify-content-center">
          <div class="col-sm-6 align-self-center">
            <div class="alert alert-warning">
              <h4 class="text-center">{{ __('The page you were trying to view was not found.', 'sage') }}</h4>
              <img src="{{get_template_directory_uri(). '/images/404-error-illustration.svg'}}"
                   class="img-fluid" alt="Download software images">
              <div class="d-grid gap-2">
                <a href="/" class="btn btn-primary" type="button">Return Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
@endsection
