@if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('status') }}
    </div>
@endif

@if ($errors->all())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	{{ session('error') }}
    	<ul>
		@foreach ($errors->all() as $error)
			<li><strong>{{ $error }}</strong></li>
		@endforeach
		</ul>
    </div>
@endif