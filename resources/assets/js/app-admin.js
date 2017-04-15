require('./bootstrap');
import BillDetail from "./admin/billDetail.js"
import chatAdmin from "./admin/chat.js"

class App {
    run() {
        this.setup();
        this.deleteResource();

        const billDetail = new BillDetail();
        billDetail.init();

        const ChatAdmin = new chatAdmin();
        ChatAdmin.init();
    }

    deleteResource() {
        $('.delete').click(function(event) {
            event.preventDefault();
            var id = $(this).attr('id');
            var form = $('#form-delete' + id);
            if (confirm('Ban có muốn xóa không?')) {
                 $.post(form.attr('action'), form.serialize(), function(data) {
                    if (data != '') {
                        location.reload();  
                    }
                    form.closest("tr").hide();
                });
            }
        });
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
