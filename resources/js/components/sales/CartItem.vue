<template>
    <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>
                <tr v-for="(item, index) in cartItems" :key="index">
                        <td>{{item.name}}</td>
                        <td>
                            <div class="field has-addons">
                                <p class="control">
                                    <input v-if="item.price" type="text" class="input is-small" name="sPrice" v-model="item.price.sell_price" :disabled="prcDisable">
                                </p>
                                <p class="control">
                                    <button  v-if="!prcDisable" @click="$emit('updatePrice', index, item.price.sell_price), prcDisable = true" class="button is-small is-success"><i class="fa fa-check"></i></button>
                                    <button v-if="prcDisable" @click="prcDisable = false" class="button is-small is-primary"><i class="fa fa-pencil"></i></button>
                                </p>
                            </div>
                        </td>
                        <td >
                            <div class="field has-addons">
                                <p class="control">
                                    <input type="text" v-model="item.quantity" class="input is-small" :disabled="qtyDisabled">
                                </p>
                                <p class="control">
                                    <button  v-if="!qtyDisabled" @click="$emit('updateQty', index, item.quantity), qtyDisabled = true" class="button is-small is-success"><i class="fa fa-check"></i></button>
                                    <button v-if="qtyDisabled" @click="qtyDisabled = false" class="button is-small is-primary"><i class="fa fa-plus"></i></button>
                                </p>
                            </div>
                            
                            
                        </td>
                        <td class="itemTotal text-center" style="padding-top:12px; font-weight: bold;">
                            {{item.total}}
                        <td>
                        <div class="btn-group pull-right">
                            <button @click="$emit('remove', index)" class="button is-small is-danger"><i class="fa fa-times"></i></button>
                        </div>  
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
</template>

<script>
    export default {
        name: "cartItem",
        props:['cartItems'],
        data() {
            return {
               items: _.cloneDeep(this.cartItems),
               qtyDisabled: true,
               prcDisable: true,
            }
        },
        created(){
            console.log(this.items);
        },
        computed:{
            
        },
        methods:{
            
        }
    }
</script>
