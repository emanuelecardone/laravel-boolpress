<template>
    <section>
        <div class="container">
            <h2>Error 404</h2>

            <router-link class="nav-link" :to="{ name: 'blog' }">Back to Blog</router-link>
        </div>
    </section>
</template>

<script>
export default {
    name: 'NotFound'
}
</script>