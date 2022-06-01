<!-- PWA -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset( 'images/logo.png' ) }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
@extends('layouts.app')

@section('content')

<div id="app">
    <login/>
</div>
<script src="{{ asset('/sw.js') }}" ></script>
<script>
    if(!navigator.serviceWorker.controller){
        navigator.serviceWorker.register("/sw.js").then( function(reg)
        {
            console.log("Service worker has been registered for scope: " + reg.scope );
        });
    }
</script>
@endsection
