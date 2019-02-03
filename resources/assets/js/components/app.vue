<template>
    
        <transition name="fade">
        <router-view></router-view>
        </transition>
   
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted .')
    }
}
</script>