@extends('layouts.app')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <!-- Main container -->
            <nav class="level">
                <!-- Left side -->
                <div class="level-left">
                <div class="level-item">
                    <p class="subtitle is-5">
                    <strong>{{count($products)}}</strong> Products
                    </p>
                </div>
                <div class="level-item">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input is-primary" type="text" placeholder="Find a Product">
                        </p>
                        <div class="control">
                            <div class="select is-primary">
                              <select>
                                <option>Select Category</option>
                                <option>With options</option>
                              </select>
                            </div>
                        </div>
                        <p class="control">
                            <button class="button is-primary">
                            Search
                            </button>
                        </p>
                    </div>
                </div>
                
                </div>
            
                <!-- Right side -->
                <div class="level-right">
              
                    <a href="{{route('product.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Product</a>
                </div>
            </nav>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>ID#</th>
                <th>Item Name</th>
                <th>Category Name</th>
                <th>Cost Price</th>
                <th>Selling Price</th>
                <th>Created Date</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($products as $product)
                <tr>
                  <th>{{$product->id}}</th>
                  <td>{{$product->name}}</td>
                  <td>{{$product->category->name}}</td>
                  @if ($product->pricing)
                    <td>{{$product->pricing->cost_price}}</td>
                    <td>{{$product->pricing->selling_price}}</td>
                  @else
                    <td></td>
                    <td></td>
                  @endif
                  <td>{{$product->created_at->toFormattedDateString()}}</td>                  
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('product.show', $product->id)}}">View</a><a class="button is-light" href="{{route('product.edit', $product->id)}}">Edit</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$products->links()}}
      
    </div>
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