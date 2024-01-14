import {createStore} from "vuex/dist/vuex.mjs";
import auth from "./auth/auth.js";

const store = createStore({
    state: {},
    actions: {},
    mutations: {},
    getters: {},
    modules: {
        auth
    }
})

export default store;
