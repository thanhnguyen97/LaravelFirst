<template>
    <button type="type" class="button" v-text="test.name">my Button</button>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            axios.post('api/vue', {})
                .then(response => {
                    this.test = response.data;
                });
        },

        data:function(){
            return {
                test: null,
            }
        },

        props: [
            'text',
            'type'
        ]

    }
</script>
<style>
    .button{
        background-color: #1b4b72;
    }
</style>
