<template>
    <div class="titlewpic">

<div class="title">Functionality</div>
<img
            v-for="(image, key) in imagess"
            v-show="key ? key.includes($route.params.id) : false"
            :src="image.url"
            :alt="key"
            :style="image.style"
            :class="image.class"
        >
</div>

<div class="floatr">

    <img
            v-for="(image, key) in images"
            v-show="key ? key.includes($route.params.id) : false"
            :src="image.url"
            :alt="key"
            :style="image.style"
            :class="image.class"
        >
</div>
    <!-- <h2 class="chapter">* Chip and battery life.</h2>

<h3 class="apraksts">A16 Bionic powers computational photography and smooth
     gaming performance with great efficiency for all-day battery life (3350mAh)
</h3>
<h3 class="apraksts">A16 Bionic chip
6 core CPU with 2 performance and 4 efficiency cores
5 core GPU
16 core Neural Engine
</h3> -->
        <div class="spacing"></div>
        <div class="chapter">{{ title[$route.params.id] }}</div>
        <div class="spacing"></div>
        <div class="apraksts">{{ text[$route.params.id] }}</div>
        <div class="spacing"></div>
        <div class="apraksts">{{ text2[$route.params.id] }}</div>

</template>
<script setup>
import { ref, reactive } from 'vue';

const imagess = reactive({
    "15" : {
        url: 'https://shorturl.at/amqGR',
        style: {
            height: '200px',
            width: '200px',
        },
        class: 'hhhh',
    },
    "14": {
        url: 'https://www.apple.com/newsroom/images/product/iphone/standard/Apple-iPhone-14-iPhone-14-Plus-2up-blue-220907_inline.jpg.large.jpg',
        style: {
            height: '200px',
            width: '160px',
        },
        class: 'hhhh',
    },
    "13": {
        url: 'data:image/jpeg;base64,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',
        style: {
            height: '200px',
            width: '160px',
        },
        class: 'hhhh',
    },
});

const images = reactive({
    "15": {
        url: 'https://electroline.com.cy/wp-content/uploads/2023/09/x-1.jpeg',
        style: {
            height: '200px',
            width: '280px',
        }
    },
    "14": {
        url: 'https://electroline.com.cy/wp-content/uploads/2023/09/x-1.jpeg',
        style: {
            height: '200px',
            width: '280px',
        }
    },
    "13": {
        url: 'https://electroline.com.cy/wp-content/uploads/2023/09/x-1.jpeg',
        style: {
            height: '200px',
            width: '280px',
        }
    },
});

const title = ref({
    15: '* Chip and Resistance',
    14: '* Chip and Camera',
    13: '* Chip and video recording',
});

const text = ref({
    15: 'A16 Bionic powers computational photography and smooth gaming performance with great efficiency for all-day battery life (3350mAh) A16 Bionic chip 6 core CPU with 2 performance and 4 efficiency cores 5 core GPU 16 core Neural Engine',
    14: 'A15 Bionic chip 6‑core CPU with 2 performance and 4 efficiency cores, 5‑core GPU, 16‑core Neural Engine',
    13: 'A15 Bionic chip 6‑core CPU with 2 performance and 4 efficiency cores, 4‑core GPU, 16‑core Neural Engine',
});

const text2 = ref({
    15: 'Dust & Water resistance - Rated IP68 (maximum depth of 6 meters up to 30 minutes)',
    14: '12MP Main: 26 mm, ƒ/1.5 aperture, sensor‑shift optical image stabilization, 100% Focus Pixels, 12MP Ultra Wide: 13 mm, ƒ/2.4 aperture and 120° field of view, 2x optical zoom out; digital zoom up to 5x',
    13: '4K video recording at 24 fps, 30 fps, or 60 fps and Cinematic mode (1080p at 30 fps)',
});

</script>
<script>
export default {
    
}
</script>
<style lang="scss">
    
</style>