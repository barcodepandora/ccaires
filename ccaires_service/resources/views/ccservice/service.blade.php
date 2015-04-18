<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				
				{!! Form::open(array('route' => 'ccservice/save/', 'class' => 'form')) !!}
				
				<div class="form-group">
					{!! Form::hidden('id', $service->id) !!}
					{!! Form::hidden('servicestate', $service->servicestate) !!}

					{!! Form::label('Cliente: ' . $service->client) !!}<br/>
					{!! Form::label('Direccion: ' . $service->address) !!}<br/>
					{!! Form::label('Tipo de servicio: ' . $servicetype->name) !!}<br/>		  
					{!! Form::label('Descripcion: ' . $service->desc) !!}<br/>				  
					{!! Form::label('Fecha: ' . $service->date) !!}<br/>	
					{!! Form::label('Tecnico a cargo: ' . $service->contractor) !!}<br/>	
					{!! Form::label('Estado: ' . $state_current->name) !!}<br/>			  
					{!! Form::label('Pasar a estado: ') !!}		  
					<select name='state'>
						<?php
						
							foreach( $state_list_to as $state )
							{ ?>
								
								<option value="<?php echo $state->id; ?>"><?php echo $state->name; ?></option>
							<?php }
						?>
					</select>
					
				</div>
				
				<div class="form-group">
					{!! Form::submit('Actualizar', 
					  array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</body>
</html>
