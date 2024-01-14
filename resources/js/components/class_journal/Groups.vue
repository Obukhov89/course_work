<template>
  <div class="containerGroup">
    <p class="nameHeading">1-й курс</p>
    <button class="btnGroup" @click="getDisciplines(group.id)" v-for="group in arrGroups.firstCourse" :key="group.id">
      {{group.nameGroup}}
    </button>
    <p class="nameHeading">2-й курс</p>
    <button class="btnGroup" v-for="group in arrGroups.secondCourse" :key="group.id">
      {{group.nameGroup}}
    </button>
  </div>
  <div class="containerGroup">
    <p class="nameHeading">3-й курс</p>
    <button class="btnGroup" v-for="group in arrGroups.thirdCourse" :key="group.id">
      {{group.nameGroup}}
    </button>
    <p class="nameHeading">4-й курс</p>
    <button class="btnGroup" v-for="group in arrGroups.fourthCourse" :key="group.id">
      {{group.nameGroup}}
    </button>
  </div>

</template>

<script>

import axios from "axios";

export default {
  name: "GroupsList",
  data(){
    return{
      arrGroups:[]
    }
  },
  methods:{
      getAllGroups(){
        axios.get('/getGroups').then((response) => {
            this.arrGroups = response.data
            return this.arrGroups
        })
    },

   async getDisciplines(id_group){
      console.log(id_group)
      let data = {
        id:id_group
      };

     axios.post('http://localhost/discipline/getDisciplines', JSON.stringify(data)).then((response) =>{
       console.log(response.data)
     });
    }
  },

  beforeMount() {
    this.getAllGroups()
  }
}
</script>

<style scoped>
  .containerGroup{
    margin-top: 10px;
    display: flex;
    align-items: center;
  }

  .nameHeading{
    padding: 5px;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    color: #7e7e7e;
  }
  .btnGroup{
    width: 150px;
    height: 40px;
    border: none;
    background-color: #1f6d17;
    color: #eeeeee;
    border-radius: 2px;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    margin-left: 5px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
  }
</style>
