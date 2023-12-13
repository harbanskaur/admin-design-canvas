@extends('layouts.main')\
@section('main-section')
{{-- section starts --}}
<div class="maincontainer">
 	@include('layouts.left')
	<div class="right">			
		<h2>Category Manager</h2>						 
		<div class="add">
			<div class="addpage"> Add category</div> 
			<form method="post" action="{{url(isset($findrec) ? 'edit-cdata/'.$findrec[0]->id : '/add-category' )}}">
				{{csrf_field()}}
				{{-- table starts --}}
				<table class="table3" border="1px solid" >												
					<tr>						 
						<td> Category Name :</td>
						<td><input type="text" name="catname"  value="{{isset($findrec[0]->name)? $findrec[0]->name : '' }}" ></td>
					</tr>									 										
				</table>	
				{{-- table ends  --}}
				<input type="submit" value="save" class="save" name="save"/>
			</form>
		</div>	
	</div>
</div>
 {{-- section ends  --}}
 @endsection