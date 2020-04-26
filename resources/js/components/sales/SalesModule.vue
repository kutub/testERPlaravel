<template>
    <div>
        <div class="columns">
            <!-- Main container -->
            <div class="column m-t-15">
                 <nav class="level">
                    <!-- Left side -->
                    <div class="level-left">
                        
                        <router-link :to="{name: 'index'}">Home</router-link> 
                        <router-link :to="{name: 'create-order'}">Create New Order</router-link>
                        <!-- <router-link :to="{name: 'add-item'}">Add Item</router-link> -->
                        
                    </div>

                    <!-- Right side -->
                    <div class="level-right">
                        <p class="level-item"><strong>All</strong></p>
                        <p class="level-item"><a>Published</a></p>
                        <p class="level-item"><a>Drafts</a></p>
                        <p class="level-item"><a>Deleted</a></p>
                        <p class="level-item"><a class="button is-success">New</a></p>
                    </div>
                </nav>
            </div>
           
        </div>
        <div class="columns">
            <div class="column">
                <router-view></router-view>
            </div>
        </div>          
        
    </div>
</template>

<script>
    import VueRouter from 'vue-router';    
    import index from './Index.vue';
    import CreateOrder from './CreateOrder.vue';

    export default {
        router: new VueRouter({
            mode: 'history',
            base: 'home/sales',
            routes: [
                {
                    path: '/view',
                    name: 'index',
                    component: index
                },
                {
                    path: '/create',
                    name: 'create-order',
                    component: CreateOrder
                },
                {
                    path: '/',
                    redirect: {name: 'index'}
                },
                {
                    path: '*', 
                    redirect: '/'
                }
            ]
        })
    }
</script>

<style scoped>
    a {
        border: solid 1px black;
        padding: 10px;
    }
    .router-link-active {
        font-weight: bold;
        border-bottom: none;
    }
</style>