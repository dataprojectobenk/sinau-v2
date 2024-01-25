<template>
    <nav class="navbar shadow-sm">
        <div class="container">
            <span class="navbar-brand">{{ prop.title }}</span>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <slot></slot>
    </div>
    <div class="navigation w-100 shadow fixed-bottom">
        <ul class="nav nav-justified ">
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="bi bi-house-fill" style="font-size: 1.5rem;"></i>
                    <span class="d-block m-0 p-0 small">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="bi bi-file-earmark-fill" style="font-size: 1.5rem;"></i>
                    <span class="d-block m-0 p-0 small">Task</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-table" style="font-size: 1.5rem;"></i>
                    <span class="d-block m-0 p-0 small">Evaluation</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="bi bi-person-fill" style="font-size: 1.5rem;"></i>
                    <span class="d-block m-0 p-0 small">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script setup>

const prop = defineProps({
    title:String
})
</script>

<style lang="scss" scoped>
div.navigation{
    ul li a.nav-link.active{
        position: relative;
    }
    ul li a.nav-link.active::before{
        content: "";
        position: absolute;
        height: 5px;
        width: 100px;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1);
        background-color: var(--bs-primary);
        left: 0;
        bottom: 0;
        border-radius: 2px;
        box-shadow: 0px 0px 5px gray;
    }
}
</style>