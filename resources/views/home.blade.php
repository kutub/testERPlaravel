@extends('layouts.app')

@section('content')
    <div class="container is-fullhd m-t-30">
        <div class="columns">
            <div class="column has-text-centered">
                <h2 class="">Welcome to Unitechsolution, Choose a common task below to get started</h2>
            </div>
        </div>

        <div class="columns is-multiline">
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column  has-text-centered is-2">
                                <span class="icon">
                                    <i class="fa fa-cart-arrow-down"></i>
                                  </span>
                            </div>
                            <div class="column is-10">
                                <div class="content">
                                   <h2><a href="#">Start a New Sale</a></h2>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column  has-text-centered is-2">
                                <span class="icon">
                                    <i class="fa fa-cart-arrow-down"></i>
                                  </span>
                            </div>
                            <div class="column is-10">
                                <div class="content">
                                   <h2><a href="#">Start New Products Receiving</a></h2>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column  has-text-centered is-2">
                                <span class="icon">
                                    <i class="fa fa-cart-arrow-down"></i>
                                  </span>
                            </div>
                            <div class="column is-10">
                                <div class="content">
                                   <h2><a href="#">Start Receiving Payments</a></h2>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column  has-text-centered is-2">
                                <span class="icon">
                                    <i class="fa fa-cart-arrow-down"></i>
                                  </span>
                            </div>
                            <div class="column is-10">
                                <div class="content">
                                   <h2><a href="#">Today's Detailed Sales Report</a></h2>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column  has-text-centered is-2">
                                <span class="icon">
                                    <i class="fa fa-cart-arrow-down"></i>
                                  </span>
                            </div>
                            <div class="column is-10">
                                <div class="content">
                                   <h2><a href="#">Manage Supliars</a></h2>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-4">
                                <span class="icon">
                                    <i class="fa fa-fw fa-bell m-r-5"></i>
                                  </span>
                            </div>
                            <div class="column is-8">
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                                    <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                                    <br>
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-4">
                                <span class="icon">
                                    <i class="fa fa-fw fa-bell m-r-5"></i>
                                  </span>
                            </div>
                            <div class="column is-8">
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                                    <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                                    <br>
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="column is-6">
                <div class="card">         
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-4">
                                <span class="icon">
                                    <i class="fa fa-fw fa-bell m-r-5"></i>
                                  </span>
                            </div>
                            <div class="column is-8">
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                                    <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                                    <br>
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
        </div>
        
    </div>
@endsection
@section('scripts')
<script>
   var vm = new Vue({
    el: '#app',
    // components: { 'side-nav': sideNav }
}); 
</script>

@endsection