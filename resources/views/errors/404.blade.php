@extends('layouts.app')

@section('title')
    Page Not Found
@endsection

@section('header')
    <h1>404 Error Page</h1>
@endsection

@section('content')
<script>
    Swal.fire({
        title: 'Oops! Page not found',
        html:  'We could not find the page you were looking for. Meanwhile, you may '+'<a href="/home">return to dashboard</a>'+' or try contact the admin.',
        icon: 'error',
        showCloseButton: true,
        showCancelButton: true,
        cancelButtonText: 'Close',
        confirmButtonText: 'Return', 
        }).then((result) => {
            if (result.isConfirmed) {
            window.location.replace('/home')}
    });
</script>

<div class="container-fluid">
    <div class="error-page">
        <h2 class="headline text-red"> 404</h2>
        <div class="error-content">
            <br>
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
            <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="/home">return to dashboard</a> or try contact the admin.
            </p>
        </div>
    </div>
</div>
@endsection