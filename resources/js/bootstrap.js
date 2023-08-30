/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from "laravel-echo";

import Pusher from "pusher-js";
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: pusherKey,
    cluster: pusherCluster ?? "mt1",
    wsHost: import.meta.env.VITE_PUSHER_HOST
        ? import.meta.env.VITE_PUSHER_HOST
        : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? "https") === "https",
    enabledTransports: ["ws", "wss"],
});

window.Echo.channel("order-placed").listen(
    "RTOrderPlacedNotificationEvent",
    (e) => {
        console.log(e);
        let html = `<a href="/admin/orders/${e.orderId}" class="dropdown-item">
            <div class="dropdown-item-icon bg-info text-white">
                <i class="fas fa-bell"></i>
            </div>
            <div class="dropdown-item-desc">
                ${e.message}
                <div class="time">${e.date}</div>
            </div>
         </a>`;

        $(".rt_notification").prepend(html);
        $('.notification_beep').addClass('beep');
    }
);



