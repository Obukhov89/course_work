<template>
  <nav class="left-menu">
    <a @click="goJournal" class="link-menu" href="#">Классный журнал</a>
  </nav>
</template>

<script>
import router from "@/router";

export default {
  name: "AdminMenu",
  methods:{
    goJournal(){
      router.push({name: 'class_journal'})
    }
  }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap');
.left-menu{
  border-top: 1px solid white;
  display: flex;
  flex-direction: column;
  width: 200px;
  height: 107vh;
  background: linear-gradient(-65deg, #515050, #1f6d17);
  background-blend-mode: luminosity;
}

.link-menu{
  padding-top: 1rem;
  text-decoration: none;
  font-family: Roboto, sans-serif;
  font-size: 14px;
  font-weight: 400;
  text-transform: uppercase;
  color: white;
}
</style>