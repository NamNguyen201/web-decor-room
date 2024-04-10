@extends('admin_layout')

@section('content')
    <!-- //market-->
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>Address</td>
<td>Email</td>
<td>Edit</td>
</tr>
@foreach ($contacts as $contacts)
<tr>
<td>{{ $contacts->id }}</td>
<td>{{ $contacts->name }}</td>
<td>{{ $contacts->address }}</td>
<td>{{ $contacts->email }}</td>
<td><a href="{!! route('contact-edit',['id'=>$contacts->id]) !!}">Sửa</a></td>

</tr>
@endforeach
</table>
@endsection

