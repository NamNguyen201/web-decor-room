@extends('admin_layout')

@section('content')
    <!-- //market-->
<form action = "{!! route('contact-update',['id'=>$contact->id]) !!}" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Name</td>
<td>
<input type = 'text' name = 'name'
value="{{ $contact->name }}"/> </td>
</tr>
<tr>
<td>Address</td>
<td>
<input type = 'text' name = 'address'
value="{{ $contact->address }}"/>
</td>
</tr>
<tr>
<td>Email</td>
<td>
<input type = 'text' name = 'email'
value="{{ $contact->email }}"/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Sửa" />
</td>
</tr>
</table>
</form>
@endsection