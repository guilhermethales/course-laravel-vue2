@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h3>Ver turma</h3>
			@php
				$linkEdit = route('admin.class_students.edit',['class_students' => $class_student->id]);
                $linkDelete = route('admin.class_students.destroy',['class_students' => $class_student->id]);
			@endphp
			{!! Button::primary(Icon::pencil().' Editar')->asLinkTo($linkEdit) !!}
			{!!
            Button::danger(Icon::remove().' Excluir')->asLinkTo($linkDelete)
                ->addAttributes([
                    'onclick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
                ])
            !!}
			@php
				$formDelete = FormBuilder::plain([
                    'id' => 'form-delete',
                    'url' => $linkDelete,
                    'method' => 'DELETE',
                    'style' => 'display:none'
                ])
			@endphp
			{!! form($formDelete) !!}
			<br/><br/>
			<table class="table table-bordered">
				<tbody>
				<tr>
					<th scope="row">ID</th>
					<td>{{$class_student->id}}</td>
				</tr>
				<tr>
					<th scope="row">Data Início</th>
					<td>{{$class_student->date_start->format('d/m/Y')}}</td>
				</tr>
				<tr>
					<th scope="row">Data Fim</th>
					<td>{{$class_student->date_start->format('d/m/Y')}}</td>
				</tr>
				<tr>
					<th scope="row">Ciclo</th>
					<td>{{$class_student->cycle}}</td>
				</tr>
				<tr>
					<th scope="row">Subdivisão</th>
					<td>{{$class_student->subdivision}}</td>
				</tr>
				<tr>
					<th scope="row">Semester</th>
					<td>{{$class_student->year}}</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection