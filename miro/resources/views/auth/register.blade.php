@extends('frontend.backend')


@section('body')
<style>
    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 0px solid #ddd;
}
input[type=text], input[type=password], input[type=email], input[type=number], [type=text].form-control, [type=password].form-control, [type=email].form-control, [type=tel].form-control, [contenteditable].form-control {
    padding: 10px;
    border: none;
    border-radius: 0;
    -webkit-appearance: none;
    -webkit-box-shadow: inset 0 -1px 0 #ddd;
    box-shadow: inset 0 -1px 0 #ddd;
    font-size: 16px;
}

</style>


<!-- resources/views/auth/register.blade.php -->
<div class="jumbotron text-center" style="padding-top:160px;" >



<h3>Register</h3>
<form method="POST" action="/auth/register" class="form-group">
    {!! csrf_field() !!}

    <div class="form-group">
    <label for="inputEmail" class="control-label">Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label">Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label">Password</label>
        <input type="password" name="password">
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label">Confirm Password</label>
        <input type="password" name="password_confirmation">
    </div>

    <div class="form-group">
        <button type="submit" class='btn btn-primary'>Register</button>
    </div>
</form>

 </div>
@stop