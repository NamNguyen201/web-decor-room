@extends('admin_layout')

@section('content')
    <!-- //market-->
<table border = "1">
<tr>
<td>Id</td>
<td>Tensp</td>
<td>Giasp</td>
<td>Soluong</td>
<td>Edit</td>
</tr>
@foreach ($products as $products)
<tr>
<td>{{ $products->id }}</td>
<td>{{ $products->tensp }}</td>
<td>{{ $products->giasp }}</td>
<td>{{ $products->soluongsp }}</td>
<td><a href="#">Sửa</a></td>

</tr>
@endforeach
</table>
@endsection

