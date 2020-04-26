@extends('layouts.app')

@section('content')
    <create-item-form></create-item-form>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
    //   data: {
    //     auto_password: true,
    //     rolesSelected: {!! old('roles') ? old('roles') : '[]' !!}
    //   }
    });
  </script>
@endsection
