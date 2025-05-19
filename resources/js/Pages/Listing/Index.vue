<template>
  <!-- loopingnya -->
  <div v-for="listing in listings" :key="listing.id">
    <div>
      <!-- karena resource route maka saat tekan tombol otomatis kedirect ke method show -->
      <Link :href="route('listing.show', { listing: listing.id })">
        <ListingAddress :listing="listing" />
      </Link>
    </div>
    <div>
      <Link :href="route('listing.edit', { listing: listing.id })"> Edit </Link>
    </div>
    <div>
      <Link :href="route('listing.destroy', { listing: listing.id })" method="DELETE">
        Delete
      </Link>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import ListingAddress from "@/Components/ListingAddress.vue";
defineProps({
  listings: Array,
});
</script>
