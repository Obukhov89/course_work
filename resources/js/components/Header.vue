<template>
    <div class="header">
        <div class=" container pre_header">
            <img class="logo" src="../../../public/img/logo-ppi.png">
            <p class="some_text"></p>
        </div>

    </div>
</template>

<script>
export default {
    name: "Header",

    methods:{
    }
}


</script>

<style scoped>
.header{
    background-color: #036008;
}

.pre_header{
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #036008;
    background-blend-mode: luminosity;
}

.logo{
    width: 250px;
}

.link-group{
    display: flex;
    justify-content: space-evenly;
    width: 775px;
}

.link{
    display: block;
    float: right;
    text-decoration: none;
    font-family: Avenir, sans-serif;
    font-size: 19px;
    color: white;
}

.logout{
    width: 120px;
    height: 45px;
    background: none;
    border: none;
    font-family: Avenir, sans-serif;
    font-size: 19px;
    color: white;
}

</style>
