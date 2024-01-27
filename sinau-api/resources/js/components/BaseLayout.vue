<template>
    <main id="main" class="d-flex bg-body-secondary">
        <!-- sidebar -->
        <Sidebar />
        <!-- end sidebar -->
        <!-- main-content -->
        <div id="main-content">
            <!-- navbar -->
            <nav class="navbar shadow navbar-expand-lg bg-white">
                <div class="container-fluid">
                    <span class="navbar-brand fw-bold text-black-50">{{ prop.title }}</span>
                    <button class="navbar-toggler">
                        <i class="navbar-toggler-icon"></i>
                    </button>
                </div>
            </nav>
            <!-- end navbar -->
            <!-- content -->
            <div id="content" class="mt-3">
                <div class="container-fluid">
                    <slot></slot>
                </div>
            </div>
            <!-- end content -->
        </div>
        <!-- end main-content -->
    </main>
</template>

<script setup>
import Sidebar from './layouts/Sidebar.vue'
const prop = defineProps({
    title: String
})
</script>

<style lang="scss" scoped>
main#main {
    div#sidebar {
        width: var(--side-bar);
    }

    div#main-content {
        width: calc(100% - var(--side-bar));
    }
}
</style>