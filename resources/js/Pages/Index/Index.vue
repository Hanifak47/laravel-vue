<template>
  <!-- menggunakan component mainlayout -->
  <MainLayout>
    <div>Index</div>
    <Link href="/hello">Show Page</Link>
    <div>The message is {{ message }}</div>
  </MainLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
// untuk menggunakan mainlayout maka perlu diimpiort terlebih dahulu
import MainLayout from "../../Layouts/MainLayout.vue";
// parameternya ditangkap
defineProps({
  message: String,
});
</script>
