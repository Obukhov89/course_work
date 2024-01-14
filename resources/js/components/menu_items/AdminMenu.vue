<template>
    <nav class="left-menu">
        <a @click="goJournal" class="link-menu" href="#">Классный журнал</a>
    </nav>
</template>

<script>
import router from "../../router";

export default {
    name: "AdminMenu",
    methods:{
        goJournal(){
            router.push({name: 'Journal'})
        }
    }
}
</script>

<style scoped>
.left-menu {
    border-top: 1px solid white;
    display: flex;
    height: 70px;
}

.link-menu {
    margin-left: 15px;
    padding-top: 1rem;
    text-decoration: none;
    font-family: Roboto, sans-serif;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    color: white;
}
</style>
