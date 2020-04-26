@extends('layouts.app')

@section('content')
    <sales-module></sales-module>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
    
    });
  </script>
@endsection