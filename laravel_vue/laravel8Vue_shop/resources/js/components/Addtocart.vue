<template>
    <div class="container">
        <button class="btn btn-success" @click="addProductToCart()" >Add to Cart</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
               quantity:0,
        };
    },
    props: ["productId","userId"],
    methods: {
        async addProductToCart() {
            // Checking if user logged in.
        //  alert(this.productId);
            // if (this.userId == 0) {
            //     alert("You Need to login, To add this product in Cart")
            //     return;
            // }

            // If user logged in then add item to cart.

            let response = await axios.post("/cart", {
                product_id: this.productId
            }).then(function(res){console.log(res.data)});

            // this.$root.$emit("changeInCart", response.data.items);
        }
    }
};
</script>
<style></style>
