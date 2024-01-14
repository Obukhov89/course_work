export default {
    namespaced: true,
    state:{
        last_name: '',
        first_name: '',
        second_name: '',
        email: '',
        id_role: 0,
        name_role: ''
    },
    actions:{
        login({commit}, payload) {
            commit('login', payload)
        }
    },
    getters:{

    },
    mutations:{
        login(store, payload){
            store.last_name = payload.last_name
            store.first_name = payload.first_name
            store.second_name = payload.second_name
            store.email = payload.email
            store.id_role = payload.id_role
            store.name_role = payload.name_role
        }
    }
}
