import { createRouter, createMemoryHistory } from "vue-router";
import Navbar from '../components/navbar.vue'
import Header from '../components/header.vue'

const routes = [
    { path: "", component : Navbar },
    { path: "/header", component : Header}
]

const router = createRouter ({
    history: createMemoryHistory(),
    routes
})

export default router