<template>
    <div class="spacing"></div>
    <div class="title">Home</div>
    <div class="spacing"></div>
    <div class="bloks">
      <img
        v-for="(image, key) in images"
        v-show="key ? key.includes($route.params.id) : false"
        :src="image.url"
        :alt="key"
        :style="image.style"
        :class="image.class"
      >
    </div>
    <div class="spacing"></div>
    <div class="chapter" :contenteditable="isLoggedIn" @input="updateContent">{{ title[$route.params.id] }}</div>
    <div class="temp1">
      <div class="hapraksts">{{ info1[$route.params.id] }}</div>
    </div>
    <!-- Integrate Popup Component -->
    <Popup
    
      :title="title[$route.params.id]"
      :description="info1[$route.params.id]"
      :editedTitle="editedTitle"
      :editedDescription="editedDescription"
      :showPopup="showPopup"
      @editItem="editItem"
      @cancelEdit="cancelEdit"
      @saveEdit="saveEdit"
    />
  </template>
  
  <script setup>
  import { ref, reactive } from 'vue';
  import Popup from './Popup.vue'; // Import Popup Component
  
  const title = ref({
    1: 'About iPhone 15',
    2: 'About iPhone 14',
    3: 'About iPhone 13',
  });
  
  const info1 = ref({
    1: 'iPhone 15 and iPhone 15 Plus is available in 5 colors which include - Black, Blue, Green, Yellow and Pink! iPhone 15 Pro and iPhone 15 Pro Max will be available in four stunning new finishes, including black titanium, white titanium, titanium, and natural titanium.',
    2: 'Operating System iOS 17 - iOS is the world’s most personal and secure mobile operating system, packed with powerful features and designed to protect your privacy. Sim Card - iPhone 14 and iPhone 14 Plus use eSIM technology and are not compatible with physical SIM cards.',
    3: 'Splash, Water, and Dust Resistant Rated IP68 (maximum depth of 6 meters up to 30 minutes). Operating System - iOS 17. iOS is the world’s most personal and secure mobile operating system, packed with powerful features and designed to protect your privacy.',
  });
  
  
  const images = reactive({
    "1a" : {
        url: 'https://shorturl.at/amqGR',
        style: {
            height: '250px',
            width: '250px',
        },
    },
    "1b": {
        url: 'https://cdn.zeebiz.com/sites/default/files/2023/09/15/260812-iphone15news.jpg',
        style: {
            height: '230px',
            width: '320px',
        },
        class: 'hhhh',
    },
    "1c": {
        url: 'https://images.macrumors.com/t/oiWkxB5isnYn8BFbcgKsnDIUOdI=/800x0/smart/article-new/2023/09/iPhone-15-Pro-Lineup-Feature.jpg?lossy',
        style: {
            height: '230px',
            width: '380px',
        },
        class: 'hhhh',
    },
    // Add more images as needed
  });
  
  const updateContent = (event) => {
    const isLoggedIn = localStorage.getItem('token') !== null;
    if (isLoggedIn) {
      const content = event.target.textContent;
      info1[$route.params.id] = content;
    }
  }
  
  //const isLoggedIn = ref(true); // Set this to true if user is logged in
  </script>
  
  <script>
  export default {
    components: {
      Popup // Register Popup component
    },
    data() {
      return {
        editedTitle: '',
        editedDescription: '',
        showPopup: false
      };
    },
    methods: {
      editItem() {
        this.editedTitle = this.title[$route.params.id];
        this.editedDescription = this.info1[$route.params.id];
        this.showPopup = true;
      },
      cancelEdit() {
        this.showPopup = false;
      },
      saveEdit() {
        this.title[$route.params.id] = this.editedTitle;
        this.info1[$route.params.id] = this.editedDescription;
        this.showPopup = false;
      }
    }
  }
  </script>