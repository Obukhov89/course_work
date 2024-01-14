import LoginForm from "../components/LoginForm.vue";
import HomePage from "../components/HomePage.vue";
import MainPage from "../components/class_journal/MainPage.vue";

export default [
    {
        path: '/',
        name: 'Login',
        component:LoginForm
    },
    {
        path: '/home-page',
        name: 'Home',
        component: HomePage
    },
    {
        path: '/class-journal',
        name: 'Journal',
        component: MainPage
    }
]
