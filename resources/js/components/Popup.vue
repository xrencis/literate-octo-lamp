<template>
    <div>
  
      <h1>{{ title }}</h1>
  
      <p>{{ description }}</p>
  
      <button class="editbtn" @click="editItem"><img id="img1" src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-1/512/edit-icon.png" alt="Edit"></button>
  
      <div v-if="showPopup" class="popup">
        <h1 style="text-align: center; position: relative; top: -8%;">Title</h1>
  
        <textarea style="position: relative; top: -11%;" class="textarea" v-model="editedTitle"></textarea>
  
        <h1 style="text-align: center; position: relative; top: -14%;">Description</h1>
  
        <textarea style="position: relative; top: -14%;" class="textarea2" v-model="editedDescription"></textarea>
  
      <div class="buttons">
        <button class="cancelbtn" @click="cancelEdit">Cancel</button>
        <button class="savebtn" @click="saveEdit">Save</button>
      </div>
  
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: ['title'],
    data() {
      return {
        title: 'This is Title',
        description: 'This is Description',
        editedTitle: '',
        editedDescription: '',
        showPopup: false
      };
    },
    methods: {
      editItem() {
        this.editedTitle = this.title;
        this.editedDescription = this.description;
        this.showPopup = true;
      },
      cancelEdit() {
        this.showPopup = false;
      },
      saveEdit() {
        this.title = this.editedTitle;
        this.description = this.editedDescription;
        this.showPopup = false;
      }
    }
  };
  </script>
  
  <style scoped>
  .popup {
    position: absolute;
    top: 30%;
    left: 30%;
    bottom: 25%;
    right: 16%;
    background-color: rgb(255, 158, 177);
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 1000;
    cursor: default;
    border-radius: 7px;
  }
  
  .textarea {
    resize: none;
    position: relative;
    top: -8%;
    width: 96.5%;
    margin-left: 10px;
    height: 30px;
    font-size: 24px;
    border-radius: 5px;
  }
  
  .textarea2 {
    resize: none;
    position: relative;
    top: -8%;
    width: 96.5%;
    margin-left: 10px;
    height: 60px;
    font-size: 24px;
    border-radius: 5px;
    margin-bottom: 10px;
  }
  
  .buttons {
    float: right;
    position: relative;
    top: -14%;
    right: 1.5%;
  }
  
  #img1 {
    height: 100%;
    width: 100%;
  }
  
  .editbtn {
    height: 40px;
    cursor: pointer;
  }
  
  .cancelbtn {
    cursor: pointer;
    background-color: #3fb2ff;
    margin-right: 10px;
    height: 35px;
    width: 60px;
    border-radius: 5px;
  }
  
  .cancelbtn:hover, .savebtn:hover {
    background-color: rgb(78, 78, 205);
    transition: background-color 0.3s;
  }
  
  .savebtn {
    cursor: pointer;
    background-color: #3fb2ff;
    height: 35px;
    width: 60px;
    border-radius: 5px;
  }
  
  </style>
  