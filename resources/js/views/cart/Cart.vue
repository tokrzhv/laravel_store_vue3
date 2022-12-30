<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(assets/images/inner-pages/basket.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content text-center wow fadeInUp animated">
                                <h2>Cart</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href=""><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->
            <!--Start cart area-->
            <section class="cart-area pt-120 pb-120">
                <div class="container">
                    <div class="row wow fadeInUp animated">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="cart-table-box">
                                <div  class="table-outer">
                                    <table class="cart-table">
                                        <thead class="cart-header">
                                        <tr>
                                            <th class="">Product Model</th>
                                            <th class="price">Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th class="hide-me"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="cartProduct in cartProducts" >
                                            <td>
                                                <div class="thumb-box">
                                                    <router-link
                                                        :to="{name: 'products.show', params: {id: cartProduct.id}}"
                                                        class="thumb">
                                                    <img :src="cartProduct.image_url" alt="">
                                                    </router-link>
                                                    <router-link
                                                        :to="{name: 'products.show', params: {id: cartProduct.id}}">
                                                    <h5>{{ cartProduct.model}}</h5>
                                                    </router-link>
                                                </div>
                                            </td>
                                            <td>{{cartProduct.price}}</td>
                                            <td class="qty">
                                                <div class="qtySelector text-center">
                                                    <span @click.prevent='minusQty(cartProduct)' class="decreaseQty">
                                                        <i class="flaticon-minus"></i>
                                                    </span>
                                                    <input type="number" class="qtyValue" :value="cartProduct.qty"/>
                                                    <span @click.prevent='plusQty(cartProduct)' class="increaseQty">
                                                        <i class="flaticon-plus"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="sub-total">${{cartProduct.qty * cartProduct.price}}</td>
                                            <td>
                                                <div @click.prevent="removeProduct(cartProduct.id)" class="remove">
                                                    <i class="flaticon-cross"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-60">
                        <div class="col-xl-12 ">
                            <div class="cart-button-box">
                                <div class="apply-coupon wow fadeInUp animated">
                                    <div class="apply-coupon-input-box mt-30 ">
                                        <input type="text" name="coupon-code" value="" placeholder="Coupon Code"></div>
                                    <div class="apply-coupon-button mt-30">
                                        <button class="btn--primary style2" type="submit">Apply Coupon</button>
                                    </div>
                                </div>
                                <div class="cart-button-box-right wow fadeInUp animated">
                                    <router-link to="/product" class="btn--primary mt-30"
                                            type="submit">Continue Shopping
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 m-auto p-3">
                            <div class="form-group text-center mb-3">
                                <h4>Purchase form</h4>
                            </div>
                                <div class="form-group">
                                    <input v-model="name" type="text" name="name"  class="form-control mb-2" placeholder="Enter your name">
                                    <input v-model="email" type="text" name="email"  class="form-control" placeholder="Enter your email">
                                    <div class="apply-coupon-button mt-30">
                                        <button @click.prevent="storeOrder" type="submit" class="form-control btn--primary style2">Buy</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row pt-60">
                        <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                            <div class="cart-total-box">
                                <div class="inner-title">
                                    <h3>Cart Totals</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                            <div class="cart-total-box mt-30">
                                <div class="table-outer">
                                    <table class="cart-table2">
                                        <thead class="cart-header clearfix">
                                        <tr>
                                            <th colspan="1" class="shipping-title">Shipping</th>
                                            <th class="price">${{ cartTotalAmount }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="shipping"> Shipping</td>
                                            <td class="selact-box1">
                                                <ul class="shop-select-option-box-1">
                                                    <li><input type="checkbox" name="free_shipping" id="option_1"
                                                               checked=""> <label for="option_1"><span></span>Free
                                                        Shipping</label></li>
                                                    <li><input type="checkbox" name="flat_rate" id="option_2"> <label
                                                        for="option_2"><span></span>Flat Rate</label></li>
                                                    <li><input type="checkbox" name="local_pickup" id="option_3">
                                                        <label for="option_3"><span></span>Local Pickup</label></li>
                                                </ul>
                                                <div class="inner-text">
                                                    <p>Shipping options will be updated during checkout</p>
                                                </div>
                                                <h4>Calculate Shipping</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="total">Total</h4>
                                            </td>
                                            <td class="subtotal">${{cartTotalAmount}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                            <div class="cart-check-out mt-30">
                                <h3>Check Out</h3>
                                <ul class="cart-check-out-list">
                                    <li>
                                        <div class="left">
                                            <p>Subtotal</p>
                                        </div>
                                        <div class="right">
                                            <p>${{ cartTotalAmount }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Shipping</p>
                                        </div>
                                        <div class="right">
                                            <p><span>Flat rate:</span> $50.00</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Total Price:</p>
                                        </div>
                                        <div class="right">
                                            <p>${{cartTotalAmount + 50}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End cart area-->
        </main>
    </div>
</template>

<script>
export default {
    name: "Cart",
    data() {
        return {
            cartProducts: [],
            name: '',
            email: '',
        }
    },
    mounted() {
        $(document).trigger('changed')
        this.getCartProducts()
    },
    computed: {
        cartTotalAmount() {
            return this.cartProducts.reduce((acc, item) => {
                return acc + (item.qty * item.price)
            }, 0)
        },
    },
    methods: {
        storeOrder(){
            this.axios.post('/api/orders', {
                'products': this.cartProducts,
                'email': this.email,
                'name': this.name,
                'total_price': this.cartTotalAmount,
            })
                .then(result => {
                    console.log(result)
                })
                .finally(v => {
                    $(document).trigger('changed')
                })
        },
        getCartProducts() {
            this.cartProducts = JSON.parse(localStorage.getItem('cart'))
        },
        minusQty(cartProduct){
            if (cartProduct.qty === 0 ) return
            cartProduct.qty--
            this.updateCart()
        },
        plusQty(cartProduct){
            cartProduct.qty++
            this.updateCart()
        },
        removeProduct(id){
            this.cartProducts = this.cartProducts.filter(cartProduct => {
                return cartProduct.id !== id
            })
            this.updateCart()
        },
        updateCart(){
            localStorage.setItem('cart', JSON.stringify(this.cartProducts))
        },
    }
}
</script>

<style scoped>

</style>
