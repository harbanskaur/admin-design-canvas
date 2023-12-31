@extends('layouts.main')

@section('main-section')
 {{-- section starts  --}}
<div class="maincontainer">
	@include('layouts/left')
	<div class="right">			
		<h2>Category Manager</h2>				  
		<p> This section displays the list of pages</p>		           
		<p class="link"><a href="">Click here</a> to create <a href="">New category</a></p>
		<form method="post" action="{{Route('findcat')}}">
			{{csrf_field()}}
			{{-- table starts --}}
			<table class="table">
				<tr>
					<td id="search">Search</td>
				</tr>					 				 
				<tr>
					<td>Search By category Name:
					<input type="text" style="height:20px;width:150px;"  name="search"/>
					<input type="submit" value="Search"/>
					</td>
				</tr>
			</table>
			{{-- table ends  --}}
		</form>
		<p>Page 1 of 2, showing 4 records out of 8 total, starting on record 1 , ending on 4</p>
		{{-- table 2 starts --}}
		<table class="table2">	
			<tr>
				<th>Id</th>
				<th>Category Name</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
			@isset ($data)
			@foreach($data as $row)
			<tr>
				<td>{{$row->id}}</td>
				<td>{{$row->name}}</td>
				<td><a href="{{'del-cat/'.$row->id}}">delete</a></td>
				<td><a href="{{'edit-cat/'.$row->id}}">edit</a></td>						
			</tr>
			@endforeach
			<tr>
				<td colspan="4">{{$data->links('pagi')}}</td>
			</tr>
			@endisset
		</table>
		{{-- table 2 ends --}}				  	
	</div>
</div>
{{-- section ends  --}}
@endsection