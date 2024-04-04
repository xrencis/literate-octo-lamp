<template>
  <!-- <div id="shadowBox">
    <h3 class="rainbow rainbow_text_animated">HELLO THERE!</h3>
</div>
<img class="Iphone15" src="https://media.bite.lt/@bite-lv/sites/default/files/products/2023-11/iphone-15-black-new-1.png"
          alt="apple logo"
          width="250"
          height="250"/>
  <div class="title">Functionality</div>
    <h2 class="chapter">* Chapter 1</h2>
      <h3 class="apraksts">Improve him believe opinion offered met and end cheered forbade. 
        Friendly as stronger speedily by recurred. Son interest wandered sir addition end say. 
        Manners beloved affixed picture men ask. Explain few led parties attacks picture company. 
        On sure fine kept walk am in it. Resolved to in believed desirous unpacked weddings together.
      </h3>
          <Tmp></Tmp>
    <h2 class="chapter">* Chapter 2</h2>
      <h3 class="apraksts">Dashwoods eagerness oh extensive as discourse sportsman frankness. 
        Husbands see disposed surprise likewise humoured yet pleasure. 
        Fifteen no inquiry cordial so resolve garrets as.
      </h3> -->
      <Header></Header>
      <Nav></Nav>
      <Contents></Contents>
</template>

<style>
.title {
  text-align: center;
  font-size: 64px;
  color: chocolate;
}

#nosaukums {
  padding: 20px 20px;
  font-weight: bold;
}

h3 {
  display: flex;
  padding-left: 14px;
}

.chapter {
  padding-top: 20px;
  text-align: center;
  font-size: xx-large;
  color: rgba(246, 33, 33, 0.599);
  font-weight: bold;
}

.apraksts {
  text-align: justify;
  padding-left: 150px;
  padding-right: 100px;
  padding-top: 10px;
  font-size: 20px;
}

.floatr {
  float: right;
}

.temp1 {
  display: inline-block;
  padding-top: 20px;
  text-align: center;
  width: 100%;
}

.titlewpic {
  display: inline-flex;
  flex-direction: row-reverse;
  align-items: center;
  padding-left: 400px;
}

.bilde{
  padding-right: 15px;

}

#lolz {
  float: right;
}

.bloks {
  height: 35vh;
  text-align: center;
}

#version {
  padding-top: 13px;
}

.hhhh{
  margin-right: 20px;
  border-radius: 15px;
}

</style>
  
<script>
import Header from './header.vue';
import Nav from './Nav.vue';
import Contents from './Contents.vue';
export default {
  name: 'App',
  components: { Header,Nav,Contents },
  watch:{
    $route: function(value){
      console.log(value)
      if(value.fullPath === '/'){
        this.$router.push('/15')
      }
    }
  },
  mounted(){
    console.log(this.$route.fullPath)
  },
};
</script>