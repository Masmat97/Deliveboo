import { createApp } from 'vue';
import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

// Importa il componente Vue
import CartComponent from './components/CartComponent.vue';

// Crea l'app Vue e monta il componente
const app = createApp({
    components: {
        'cart-component': CartComponent,
    }
});

app.mount('#app');
