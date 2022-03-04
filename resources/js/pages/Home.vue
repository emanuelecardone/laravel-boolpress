<template>
    <div>
        <Newsletter />
        <section>
            <div class="container">
                <h1>Homepage</h1>
            </div>
        </section>
    </div>
</template>

<script>
import Newsletter from '../components/Newsletter.vue';
export default {
    name: 'Home',
    components: {
        Newsletter
    }
}
</script>