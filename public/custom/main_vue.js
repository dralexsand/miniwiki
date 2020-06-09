const app = new Vue({
    el: '#app',
    data: {
        errorMsg: "",
        successMsg: "",
        showAddModal: false,
        showEditModal: false,
        showDeleteModal: false,
        users: [],
        newUser: {
            name: "",
            email: "",
            phone: "",
        },
        currentUser: {},
    },
    mounted: function () {
        this.getAllUsers();
    },
    methods: {
        getAllUsers() {
            axios
                .get("/process.php?action=read")
                .then(function (response) {
                    if (response.data.error) {
                        app.errorMsg = response.data.message;
                    } else {
                        app.users = response.data.users;
                        app.successMsg = response.data.message;
                    }
                });
        },
        addUser() {
            let formData = app.toFormData(app.newUser);
            axios
                .get("/process.php?action=create", formData)
                .then(function (response) {
                    app.newUser = {name: "", email: "", phone: ""};
                    if (response.data.error) {
                        app.errorMsg = response.data.message;
                    } else {
                        app.successMsg = response.data.message;
                        app.getAllUsers();
                    }
                });
        },
        toFormData(obj) {
            let fd = new FormData();
            for (let i in obj) {
                fd.append(i, obj[i]);
            }
            return fd;
        }

    }
});
