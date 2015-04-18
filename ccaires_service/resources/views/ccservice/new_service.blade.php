@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Este es un servicio nuevo</h1>

				{!! Form::open(array('route' => 'ccservice/save/', 'class' => 'form')) !!}
				
				<div class="form-group">
					{!! Form::hidden('id', 0) !!}
					{!! Form::label('Cliente') !!}
					{!! Form::text('client', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el nombre de cliente')) !!}
					{!! Form::label('Direccion') !!}
					{!! Form::text('address', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba la direccion donde se prestara el servicio')) !!}
					<select name='servicetype'>
						<?php
						
							foreach( $servicetype_list as $servicetype )
							{ ?>
								
								<option value="<?php echo $servicetype->id; ?>"><?php echo $servicetype->name; ?></option>
							<?php }
						?>
					</select>
					{!! Form::label('Descripcion') !!}
					{!! Form::text('desc', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Describa el servicio')) !!}
					{!! Form::label('Fecha') !!}
					{!! Form::text('date', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba la fecha en que se prestara el servicio')) !!}
					{!! Form::label('Tecnico') !!}
					{!! Form::text('contractor', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el nombre del tecnico a cargo')) !!}
					
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