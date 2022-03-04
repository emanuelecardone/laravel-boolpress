<template>
    <div class="page_content">
        <Header />

        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import Header from '../components/Header.vue';
export default {
    name: 'App',
    components: {
        Header
    }
}
</script>