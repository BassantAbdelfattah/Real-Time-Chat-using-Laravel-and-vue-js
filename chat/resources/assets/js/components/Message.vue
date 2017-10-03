<template>
    <div>
        <a href="#" class="list-group-item" :class="className"><slot></slot></a>
        <small class="badge float-right" :class="badgeClass">You</small>
    </div>

</template>

<script>
    export default {

        props:[
            'color'
        ],
        computed:{
            className(){
                return 'list-group-item-'+this.color;
            },
            badgeClass(){
                return 'badge-'+this.color;


            }
        }




    }
</script>
<style lang="css">
</style>
