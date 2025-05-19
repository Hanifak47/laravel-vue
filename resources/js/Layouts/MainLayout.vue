<template>
  <Link href="/listing">Main Page</Link> &nbsp;
  <Link href="/listing/create">Show Page</Link>

  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <!-- <div>{{ y }}</div> -->
  <slot default></slot>
</template>

<script setup>
// computed =menggunakan flash massage
import { ref, computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
// import { ref } from "vue";

const x = ref(0);
const y = computed(() => x.value * 2);

const page = usePage();
const flashSuccess = computed(() => page.props.Flash.success);

// const timer = ref(0);
// setInterval(() => timer.value++, 1000);
</script>

<style scoped>
.success {
  background-color: green;
  color: white;
}
</style>
