@extends ('layouts.app')

@section ('content')

        @foreach ($sections as $section)

		<h2 ckass="blog-post-title">{{ $section->title }}</h2>          
          @include('pages.topics_table')

        @endforeach

@endsection