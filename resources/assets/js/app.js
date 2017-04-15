require('./bootstrap');
import chatHome from "./web/chat.js"

class App {
    constructor(window) {
  
    }

    run() {
        this.setup();
        const ChatHome = new chatHome();
        ChatHome.init();
    }

    setup() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
}

(function (window) {
    const app = new App(window);
    app.run();
})(window);
