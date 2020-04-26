<template>
    <section class="container is-fullhd">
        <div class="columns is-multiline">
            <div class="column is-3" v-for="(item, index) in products" :key="index"> 
                <div class="card product" @click="$emit('add', item)">
                    <div class="card-image">
                        <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                           {{item.name}}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
</template>

<script>

    export default {
       name:'productsList',
       props:['products'],
        data() {
            return {
                
            }
        }
    }

</script>


<style scoped>
    .product:hover{
        cursor: pointer;
        background-color: darkgrey;
    }
</style>