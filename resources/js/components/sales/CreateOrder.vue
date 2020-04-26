<template>
    <section class="container is-fullhd">
        <div class="columns">
            <div class="column">
                <products-list :products="products" @add="addItem"></products-list>
            </div>
            <div class="column">
                <b-steps
                    v-model="activeStep"
                    :animated="isAnimated"
                    :has-navigation="hasNavigation"
                    :icon-prev="prevIcon"
                    :icon-next="nextIcon">
                    <b-step-item label="Cart Item" :clickable="isStepsClickable">
                        {{cartTotal}}T | {{cartQty}}
                        <cart-item :cart-items="saleItems" @updatePrice="updatePrice" @updateQty="updateQuantity" @remove="removeItem"></cart-item>
                    </b-step-item>

                    <b-step-item label="Select User" :clickable="isStepsClickable" :type="{'is-success': isProfileSuccess}">
                        <h1 class="title has-text-centered">Select User</h1>
                        Lorem ipsum dolor sit amet.
                    </b-step-item>

                    <b-step-item  label="Social" :clickable="isStepsClickable">
                        <h1 class="title has-text-centered">Social</h1>
                        Lorem ipsum dolor sit amet.
                    </b-step-item>

                    <template
                        v-if="customNavigation"
                        slot="navigation"
                        slot-scope="{previous, next}">
                        <b-button
                            outlined
                            type="is-danger"
                            icon-pack="fas"
                            icon-left="backward"
                            :disabled="previous.disabled"
                            @click.prevent="previous.action">
                            Previous
                        </b-button>
                        <b-button
                            outlined
                            type="is-success"
                            icon-pack="fas"
                            icon-right="forward"
                            :disabled="next.disabled"
                            @click.prevent="next.action">
                            Next
                        </b-button>
                    </template>
                </b-steps>
            </div>
        </div>
        
    </section>
</template>

<script>
    import cartItem from './CartItem.vue'; 
    import productsList from './ProductsList.vue';
    export default {
        components: {
            cartItem,
            productsList
        },
        data() {
            return {
                activeStep: 0,
                showSocial: false,
                isAnimated: true,
                hasNavigation: true,
                customNavigation: false,
                prevIcon: 'chevron-left',
                nextIcon: 'chevron-right',
                isStepsClickable: false,
                isProfileSuccess: false,
                products:[],
                saleItems:[],
            }
        },
        mounted(){
            axios.get('/api/items')
            .then((response) => {
                this.products = response.data.data;
                console.log(this.products);
            }).catch((error) => {
                console.log(error);
            });
        },
        computed: {
            cartTotal: function(){
                let sum = 0;
                for (var index in this.saleItems) {
                    sum = sum+(this.saleItems[index].price.sell_price * this.saleItems[index].quantity);
                }
                return sum;
            },
            cartQty: function(){
                let qty = 0;
                for (var index in this.saleItems) {
                    qty = qty + this.saleItems[index].quantity;
                }
                return qty;
            }
        },
        methods:{
            addItem(product){
                var whichProduct;
                var existing = this.saleItems.filter(function(item, index){
                    console.log('item');
                    if (item.id == Number(product.id)) {
                        whichProduct = index;
                        return true;
                    }else{
                        return false;
                    }
                });

                if (existing.length) {
                      this.saleItems[whichProduct].quantity++
                      this.saleItems[whichProduct].total = this.saleItems[whichProduct].price.sell_price * this.saleItems[whichProduct].quantity;      
                }else{
                    product['quantity'] = 1;
                    var price = (product.price == null ? 0 : product.price.sell_price);
                    product.total = (price * product['quantity']) || 0;
                    this.saleItems.push(product);
                    this.$buefy.toast.open({
                        message: 'Item Added correctly!',
                        type: 'is-success',
                        duration: 2000,
                    })
                }
            },
            updateQuantity(index, qty){
                this.saleItems[index].total = (this.saleItems[index].price.sell_price * qty);
            },
            updatePrice(index, price){
                this.saleItems[index].total = (this.saleItems[index].quantity * price);
            },
            removeItem(index) {
                
                if (confirm('Are you sure?')) {
                    this.saleItems.splice(index, 1);
                    this.$buefy.toast.open({
                        message: 'Item Deleted correctly!',
                        type: 'is-danger',
                        duration: 2000,
                    })
                }
                console.log(this.saleItems.length);
            },
        }
    }
</script>


<style scoped>
  input{
    border-radius: 4px;
  }
  #customer{
    position: relative;
  }
  #customer div.searchBox{
    position: absolute;
    top: 83px;
    left: 0;
    right: 0;
    z-index: 99999;
    padding: 0 15px;
  }
  #customer div.searchBox ul li:hover{
    cursor: pointer;
    background-color: darkgrey;
  }
  #customer div.searchBox ul li{
    background-color: blanchedalmond;
  }

</style>