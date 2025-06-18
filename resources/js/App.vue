<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Web Penjualan</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link class="nav-link" to="/">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/about-us">About Us</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/product">Product</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/contact-us">Contact Us</router-link>
                </li>
            </ul>
        </nav>

        <div class="container mt-4">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {}
</script>
