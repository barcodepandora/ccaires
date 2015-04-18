@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Sign up</h1>

				{!! Form::open(array('route' => 'idol/save/', 'class' => 'form')) !!}
				
				<div class="form-group">
					{!! Form::label('Your Name') !!}
					{!! Form::text('name', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Your name')) !!}
				</div>
				
				<div class="form-group">
					{!! Form::submit('Ingresar', 
					  array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

		</div>
    </div>
</div>

@endsection