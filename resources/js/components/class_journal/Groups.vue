<template>
    <div class="containerGroup">
        <p class="nameHeading">1-й курс</p>
        <button class="btnGroup" @click="getDisciplines(group.id)" v-for="group in arrGroups.firstCourse"
                :key="group.id">
            {{ group.nameGroup }}
        </button>
        <p class="nameHeading">2-й курс</p>
        <button class="btnGroup" @click="getDisciplines(group.id)" v-for="group in arrGroups.secondCourse"
                :key="group.id">
            {{ group.nameGroup }}
        </button>
    </div>
    <div class="containerGroup">
        <p class="nameHeading">3-й курс</p>
        <button class="btnGroup" @click="getDisciplines(group.id)" v-for="group in arrGroups.thirdCourse"
                :key="group.id">
            {{ group.nameGroup }}
        </button>
        <p class="nameHeading">4-й курс</p>
        <button class="btnGroup" @click="getDisciplines(group.id)" v-for="group in arrGroups.fourthCourse"
                :key="group.id">
            {{ group.nameGroup }}
        </button>
    </div>
    <div class="containerGroupDisciple">
        <button class="btnDis" v-for="disciple in arrDis" :key="disciple.id">
            {{ disciple.nameDiscipline }}
        </button>
    </div>

</template>

<script>

import axios from "axios";

export default {
    name: "GroupsList",
    data() {
        return {
            arrGroups: [],
            arrDis: [],
            id_group: 0
        }
    },
    methods: {
        getAllGroups() {
            axios.get('/getGroups').then((response) => {
                this.arrGroups = response.data
                return this.arrGroups
            })
        },

        async getDisciplines(id_group) {
            this.id_group = id_group
            let data = {
                id_group: id_group
            };

            axios.post('/getDiscipline', data).then((response) => {
                this.arrDis = response.data
                console.log(this.arrDis)
            });
        }
    },

    beforeMount() {
        this.getAllGroups()
    }
}
</script>

<style scoped>
.containerGroup {
    margin-top: 10px;
    display: flex;
    align-items: center;
}

.containerGroupDisciple {
    width: 1400px;
    height: 800px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
}

.nameHeading {
    padding: 5px;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    color: #7e7e7e;
}

.btnGroup {
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

.btnDis {
    width: 200px;
    height: 150px;
    border: none;
    background-color: #1f6d17;
    color: #eeeeee;
    border-radius: 2px;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    margin-left: 5px;
    margin-top: 10px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
}
</style>
