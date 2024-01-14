<template>
    <div class="menu_bar">
        <div class="container">
            <AdminMenu/>
            <CalendarMonth/>
        </div>
    </div>
</template>

<script>
import CalendarMonth from "./calendar/CalendarMonth.vue";
import {defineAsyncComponent} from "vue";
import {mapState} from "vuex/dist/vuex.mjs";
import AdminMenu from "./menu_items/AdminMenu.vue";
export default {
    name: "HomePage",
    components: {AdminMenu, CalendarMonth},

    computed:{
      ...mapState('auth', ['store'])
    },

    methods:{
        addComponent() {
            let role = this.$store.state.auth.name_role;
            let nameComponent = '';

            switch (role) {
                case "Администратор":
                    nameComponent = 'AdminMenu.vue'
                    break;
                // case "Модератор":
                //   nameComponent = 'ModeratorMenu'
                //   break;
                case "Преподаватель":
                    nameComponent = 'TeacherMenu.vue'
                    break;
                // case "Специалист":
                //   nameComponent = 'SpecialMenu'
                //   break;
                // case "Студент":
                //   nameComponent = 'StudentMenu'
                //   break
                // default:
                //   nameComponent = 'GuestMenu'
                //   break;
            }

            return defineAsyncComponent(() => import(`../components/menu_items/${nameComponent}`))
        },
    }
}
</script>

<style scoped>

</style>
