
import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '1d31615fc36345b91743',
    cluster: 'ap1'
});
