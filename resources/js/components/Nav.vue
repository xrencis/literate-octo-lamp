<template>
    <div class="navigation">
        <router-link v-for="{ name, route } in routes" :to="`/${$route.params.id}/${route}`">
            <div class="navspacing"><button class="btn">{{ name }}</button></div>
        </router-link>
        <!-- <router-link :to="`/${$route.params.id}/`">
            <button class="btn navspacing">Home</button>
        </router-link> -->
        <!-- <a class="spacing" href="#/">
        </a> -->
    <!-- <div class="navspacing"></div> -->
    <!-- <router-link :to="`/${$route.params.id}/design`">
            <button class="btn navspacing">Design</button>
        </router-link> -->
        <!-- <a class="spacing" href="#/design">
            <button class="btn navspacing">Design</button>
        </a> -->
    <!-- <div class="navspacing"></div> -->
    <!-- <router-link :to="`/${$route.params.id}/functionality`">
            <button class="btn navspacing">Functionality</button>
        </router-link> -->
        <!-- <a class="spacing" href="#/functionality">
            <button class="btn navspacing">Functionality</button>
        </a> -->
    <!-- <div class="navspacing"></div> -->
    <!-- <router-link :to="`/${$route.params.id}/availability`">
            <button class="btn navspacing">Availability</button>
        </router-link> -->
        <!-- <a class="spacing" href="#/availability">
            <button class="btn">Availability</button>
        </a> -->
    </div>

</template>
<script setup>
import { ref } from 'vue';
const routes = ref([
    { name: 'Home', route: '' },
    { name: 'Design', route: 'design' },
    { name: 'Functionality', route: 'functionality' },
    { name: 'Availability', route: 'availability' },
]);
</script>
<script>
export default {
    
}
</script>
<style lang="scss" scoped>
    .navigation {
        background-color: rgb(252, 255, 110);
        padding: 20px !important;
        font-size: x-large;
    }
</style>