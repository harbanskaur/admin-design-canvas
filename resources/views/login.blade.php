@extends('layouts.main')
@section('main-section')
{{-- section starts --}}
<div class="inner2">
@if (session('success'))
    <div class="danger-alert">
        {{ session('success') }}
    </div>
@endif
    <form method="post" action="{{Route('login.post')}}">
    @csrf
    {{-- table starts --}}
        <table class="logintable">
            <tr>
                <th colspan="2" class="login" >Login</th>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" /></td>
            </tr> 
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login" class="button" name="save"/></td>
            </tr>
        </table>
        {{-- table ends  --}}
    </form>
</div>
{{-- section ends  --}}
@endsection