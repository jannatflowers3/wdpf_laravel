<template>
{{ itemCount }}
</template>
<script>
 export default{
    data(){
        return{
            itemCount:0,
        }
    },
    mounted:(
        {
            this.get_cart_items();
        }
    ),
    methods:{
        get_cart_items(){
            axios.post('/cart').then(function(response){
                this.itemCount = response.data.items
            });
        }
    }
 }
</script>