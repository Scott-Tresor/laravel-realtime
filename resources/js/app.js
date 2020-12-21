require('./bootstrap');

import Echo from 'laravel-echo';

let e = Echo({
    broadcaster: 'socket.io',
    host: 'localhost:6001'
})
