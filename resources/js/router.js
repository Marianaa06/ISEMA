import Vue from 'vue';
import VueRouter from 'vue-router';

import HomeComponent from './components/HomeComponent.vue';
import AboutUsComponent from './components/AboutUsComponent.vue';
import ProductComponent from './components/ProductComponent.vue';
import SiakadDosenComponent from './components/productdetail/SiakadDosenComponent.vue';
import SiakadAdminComponent from './components/productdetail/SiakadAdminComponent.vue';
import SiakadMahasiswaComponent from './components/productdetail/SiakadMahasiswaComponent.vue';
import ContactComponent from './components/ContactComponent.vue';


Vue.use(VueRouter);

const routes = [
    { path: '/', component: HomeComponent },
    { path: '/about-us', component: AboutUsComponent },
    { path: '/product', component: ProductComponent },
    { path: '/contact-us', component: ContactComponent },
    { path: '/product/siakad-dosen', component: SiakadDosenComponent },
    { path: '/product/siakad-admin', component: SiakadAdminComponent },
    { path: '/product/siakad-mahasiswa', component: SiakadMahasiswaComponent }


];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
