import { createApp } from 'vue';

const app = createApp({
  data() {
    return {
      message: 'Cargaste esta página en ' + new Date().toLocaleString()
    }
  }
});

// Registrar componentes aquí si es necesario

// Montar la aplicación si existe el contenedor
if (document.getElementById('app-2')) {
    app.mount('#app-2');
}