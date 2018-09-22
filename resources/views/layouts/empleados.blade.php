@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="col-sm-offset-col-sm-6">
        		<div class="panel-title">
        			<h1>Empleados</h1>
        		</div>
        		<div class="panel-body">
        			@include('common.errors')

        			<form action="{{route('empleados')}}" method="POST">
        				<div class="form-group">
        					<label for="nombre" class="control-label"> Nombre</label>
        					<input type="text" name="nombre" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="apellido class="control-label"> Apellido</label>
        					<input type="text" name="apellido" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="edad" class="control-label"> Edad</label>
        					<input type="text" name="edad" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="caargo" class="control-label"> Cargo</label>
        					<input type="text" name="caargo" class="form-group">
        				</div>


        				
        				<div class="form-group">
        					<label for="direccion" class="control-label"> Direccion</label>
        					<input type="text" name="direccion" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="email" class="control-label">direccion</label>
        					<input type="text" name="email" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="telefono" class="control-label"> Telefono</label>
        					<input type="text" name="telefono" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="oficina" class="control-label"> Ofecha_inicio</label>
        					<input type="text" name="oficina" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="fecha_inicio" class="control-label"> Fecha de salario</label>
        					<input type="text" name="fecha_inicio" class="form-group">
        				</div>

        				
        				<div class="form-group">
        					<label for="salario" class="control-label"> Salario</label>
        					<input type="text" name="salario" class="form-group">
        				oficina

        				<div class="form-group">
        					<button type="submit" class="btn btn-default">
        						<i class="fa fa-plus"></i> Registar empleado
        					</button>
        				</div>
        			</form>        		
        		</div>
        	</div>

        	





        </div>
    </div>
</div>
@endsection         