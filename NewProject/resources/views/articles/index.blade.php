@extends ('layout')

@section ('content')
<div id="wrapper">

    <div id="page" class="container">

    	@foreach ($articles as $article)
	        <div id="content">

	            <div class="title">
	                <h3>
	                		<a href="/articles/{{ $article->id }}">
	                			{{ $article->title }}
	               			</a>
	            	</h3>
	               
	            </div>

	            <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>

	            {!! $article->excerpt !!}
	        </div>

       	@endforeach

    </div>
</div>

@endsection

