

import Vue from 'vue';
import VueRouter from 'vue-router';
// import App from 'App.vue';

import ProductComponent from './components/ProductComponent.vue';
import SiakadComponent from './components/productdetail/SiakadComponent.vue';
import LmsComponent from './components/productdetail/LmsComponent.vue';
import ModulComponent from './components/productdetail/ModulComponent.vue';
import MbkmComponent from './components/productdetail/MbkmComponent.vue';
import AlumniComponent from './components/productdetail/AlumniComponent.vue';
import JurnalComponent from './components/productdetail/JurnalComponent.vue';
import ReportingComponent from './components/productdetail/ReportingComponent.vue';
import CBTComponent from './components/productdetail/CBTComponent.vue';
import ModulSkripsiComponent from './components/productdetail/ModulSkripsiComponent.vue';
import PMBCompponent from './components/productdetail/PMBCompponent.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/product', component: ProductComponent },
    { path: '/product/siakad', component: SiakadComponent },
    { path: '/product/lms', component: LmsComponent},
    { path: '/product/modul-keuangan', component: ModulComponent},
    { path: '/product/mbkm', component: MbkmComponent},
    { path: '/product/alumni', component: AlumniComponent},
    { path: '/product/jurnal', component: JurnalComponent},
    { path: '/product/reporting', component: ReportingComponent},
    { path: '/product/cbt', component: CBTComponent},
    { path: '/product/modul-skripsi', component: ModulSkripsiComponent},
    { path: '/product/pmb', component: PMBCompponent},


];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
