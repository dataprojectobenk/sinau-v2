<template>
    <div id="sidebar" class="vh-100 bg-dark shadow">
        <nav class="navbar px-2">
            <div class="container-fluid">
                <span class="navbar-brand text-white fw-bold">Sinau App</span>
            </div>
        </nav>
        <!-- main menu -->
        <ul class="nav flex-column mt-2">
            <li class="nav-item " v-for="item in menu">
                <a href="#" class="nav-link text-white-50 fw-bold " v-if="item.pos=='header'">{{ item.text }}</a>
                <RouterLink :to="{name:item.path}" class="nav-link" :class="item.path==$route.name?'active':''" v-else>
                    <i class="bi me-1" :class="item.icon"></i>
                    {{item.text}}
                </RouterLink>
            </li>
        </ul>
        <!-- end main menu -->
    </div>
</template>

<script setup>
import { RouterLink } from 'vue-router';

const menu=[
    {text:'Basis data',path:'',icon:'',pos:'header'},
    {text:'Dashboard',path:'home',icon:'bi-speedometer',pos:'link'},
    {text:'Kelas',path:'group',icon:'bi-person',pos:'link'},
]
</script>

<style lang="scss" scoped>
div#sidebar {
    ul.nav {
        li.nav-item {
            a.nav-link {
                position: relative;
                color: rgba(255, 255, 255, 0.85);
            }

            a.nav-link:hover {
                color: var(--bs-warning);
            }

            a.nav-link.active {
                // background-image: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.05));
                color: white;
            }
            a.nav-link.active::after{
                content: "";
                position:absolute;
                width: 100%;
                height: 100%;
                background-image: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.05));
                left: 0;
                top: 0;
                animation: link-menu 500ms ease 0s forwards normal;
            }
            @keyframes link-menu {
                0%{
                    width: 0%;
                }
                100%{
                    width: 100%;
                }
            }

            a.nav-link.active::before {
                content: "";
                position: absolute;
                width: 3px;
                height: 100%;
                left: 0;
                top: 0;
                background-color: var(--bs-primary);
            }
        }
    }
}</style>