<template>
    <div class="header">
        <input type="text" v-model="name"> <button @click="saveNewVersion">Save</button>
      <div id="nosaukums" class="rainbow rainbow_text_animated">TheDoc!</div>
      <div id="version" class="dropdown">
        <button class="dropbtn">Version</button>
    <div class="dropdown-content">

        <template v-for="(version, idx) in versions">
            <router-link  :to="`/${version.id}/`">
                {{ version.name }} 
            </router-link>

            <button @click="onDelete(version.id)">D</button>
        </template>

        <!-- <router-link to="/15/">Iphone 15</router-link>
        <router-link to="/14/">Iphone 14</router-link>
        <router-link to="/13/">Iphone 13</router-link> -->
        <!-- <a href="#/">iPhone 15</a> -->
        <!-- <a href="#/design">iPhone 14</a> -->
        <!-- <a href="#/functionality">iPhone 13</a> -->
    </div>
    </div>
        <a class="spacing" href="#/registration">
            <button class="registrationbtn spacing">Log In</button>
        </a>
    </div>
</template>
<script>
import axios from "axios"
import { reactive, ref } from "vue";

const versions = ref([]);
const name = ref('');

export default {
    data() {
        return {
            versions,
            name,
        }
    },
    created() {
        this.getdata()
    },
    methods: {
        getdata(){
            axios.get('/api/versions')
            .then(function (response) {
                // handle success
                versions.value = response.data.versions;

                console.log("response status",response.data.status);
                console.log('Versions', versions);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });
        },

        saveNewVersion(){
            this.$nextTick(() => {
                console.log(name);
                axios.post('/api/create', { name: name.value }).then(() => {
                    this.getdata();
                });
            });
        },
        async onDelete(id){
            await axios.post('/api/kill', { id });

            this.getdata();
        }
    },
};
</script>
<style lang="scss" scoped>
    .header {
        background-color: rgb(255, 255, 255);
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }
</style>