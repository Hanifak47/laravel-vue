<template>
    Hello {{ counter }}!
</template>

<script setup>
    import {
        ref
    } from 'vue'
    // console.log('Index.vue loaded')
    // console.log('Index.vue loaded') 
    const counter = ref(0)
    setInterval(() => counter.value++, 1000)

    // console.log('app.js loaded')

</script>
