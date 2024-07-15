import './bootstrap';
import '~resources/scss/app.scss';
import confirmDeletion from './utils/confirm.js';

// path per gestione immagini con vite
import.meta.glob([
    '../img/**'
]);

import * as bootstrap from 'bootstrap';

confirmDeletion();