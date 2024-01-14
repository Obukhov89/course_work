<template>
    <div class="login-page">
        <form @submit.prevent = "onsubmit" class="form_registration" method="post">
            <div class="headerLogin"> Вход в систему</div>
            <input type="text" name="login" v-model="user.login" placeholder="Логин">
            <input type="password" name="password"  v-model="user.password" placeholder="Пароль">
            <button class="btnLogin" @click="login">
                Войти
            </button>
        </form>
    </div>
</template>

<script>
import axios from "axios";
import {mapActions} from "vuex/dist/vuex.mjs";
import router from "../router";

export default {
    name: "LoginForm",
    data(){
        return{
            user:{
                login: '',
                password: ''
            }
        }
    },
    methods:{
        ...mapActions('auth', ['login']),

        login(){
            axios.post('/login', this.user)
            .then((response) => {
                this.$store.dispatch('auth/login', response.data)
                router.push({name: 'Home'})
            })
            .catch((error) => {
                if (error.response){
                    console.log(error.response.data.error)
                }
            })
        }
    }
}
</script>

<style scoped>
.login-page{
    background-color: #036008;
    height: 100vh;
}

.headerLogin{
    text-align: center;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    line-height: 26px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #ffffff;
}

.form_registration{
    position: absolute;
    width: 522px;
    height: 200px;
    background-color: #036008;
    margin-top: 150px;
    border-radius: 25px;
    left: 33%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
}

.form_registration input{
    width: 300px;
    height: 45px;
    padding-left: 15px;
    border-radius: 5px;
    border: 1px solid lightgrey;
}

.btnLogin{
    width: 150px;
    height: 45px;
    border: none;
    border-radius: 30px;
    background-color: #036008;
    font-family: Roboto, sans-serif;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    color: white;
}
.login-page{
    /*height: 615px;*/
    /*background-image: url("../assets/banner7.png");*/
    /*background-size: cover;*/
}
</style>
