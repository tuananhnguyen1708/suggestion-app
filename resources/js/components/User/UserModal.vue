<template>
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="user-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <template v-if="isEditUser">
                            Cập nhật người dùng
                        </template>
                        <template v-else>
                            Thêm mới người dùng
                        </template>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form ref="userForm" @submit.prevent="validateForm('userForm')" data-vv-scope="'userForm'">
                        <div class="alert alert-danger" role="alert" v-if="alertMessage">
                            <strong>Xin lỗi!{{alertMessage}}</strong>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tên đăng nhập<span class="has-danger">(*)</span>:</label>
                            <input type="text"
                                   class="form-control"
                                   name="name"
                                   v-model="currentUser.name"
                                   data-vv-as="name"
                                   v-validate="'required|max:255'" autocomplete="off">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('name')">
                                {{ errors.first('name') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Tên đầy đủ<span class="has-danger">(*)</span>:</label>
                            <input type="text"
                                   class="form-control"
                                   name="username"
                                   data-vv-as="username"
                                   v-model="currentUser.username"
                                   v-validate="'required|max:255'" autocomplete="off">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('username')">
                                {{ errors.first('username') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Email<span class="has-danger">(*)</span>:</label>
                            <input type="text"
                                   class="form-control"
                                   name="email"
                                   data-vv-as="email"
                                   v-model="currentUser.email"
                                   v-validate="'max:255'" autocomplete="off">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('email')">
                                {{ errors.first('email') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Phone:</label>
                            <input type="text"
                                   class="form-control"
                                   name="phone"
                                   data-vv-as="phone"
                                   v-model="currentUser.phone"
                                   v-validate="'max:255'" autocomplete="off">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('phone')">
                                {{ errors.first('phone') }}
                            </div>
                        </div>

                        <div class="form-group" v-if="renderPassword" v-show="currentUser.password != null" >
                            <label class="form-control-label">Password<span class="has-danger">(*)</span>:</label>
                            <input type="password"
                                   class="form-control m-input"
                                   name="password"
                                   data-vv-as="password"
                                   v-model="currentUser.password"
                                   v-validate="'required|max:32|min:6'" autocomplete="off">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('password')">
                                {{ errors.first('password') }}
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">
                                <template v-if="isEditUser">
                                    Cập nhật
                                </template>
                                <template v-else>
                                    Thêm mới
                                </template>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import {appNotify} from "../../helper/notifyHelper";
    import VeeValidate, {Validator} from 'vee-validate';
    import 'bootstrap-notify'
    import {addUserService, updateUserService} from '../../services/userServices'

    Vue.use(VeeValidate);

    const defaultUser = {
        name: '',
        username: '',
        email: '',
        phone: '',
        password: '',
    }
    export default {
        name: "UserModal",
        data() {
            return {
                currentUser: Object.assign({}, defaultUser),
                isEditUser: false,
                alertMessage: null,
                renderPassword : true,
            }
        },
        mounted() {
            this.handleEvents();
        },
        methods: {
            handleEvents() {
                let $this = this;

                $(this.$el).on("hide.bs.modal", function () {
                    $this.isEditUser = false;
                    $this.currentUser = Object.assign({}, defaultUser);
                    $this.$validator.reset();
                    $this.renderPassword = true;
                })
            },
            addUser() {
                var userData = $(this.$refs.userForm).serialize();

                axios.post('/store', userData)
                    .then((response) => {
                        appNotify('Thêm người dùng thành công', 'success', null, 'la la-trash')
                        this.$emit('action-done');
                        $('#user-modal').modal('hide');
                    })
                    .catch(function (error) {
                        // this.alertMessage = userData.message;
                        appNotify('Thêm người dùng thất bại', 'danger')
                        console.log(error);
                        $('#user-modal').modal('hide');

                    })
            },
            // addUser() {
            //     var userData = $(this.$refs.userForm).serialize();
            //     addUserService(userData, function () {
            //         appNotify('Thêm người dùng thành công!','success', null, 'la la-trash');
            //         $this.userDataTable.ajax.reload(null, false);
            //
            //         $('#user-modal').modal('hide');
            //     }, function (error) {
            //         if(error !=null){
            //             $this.alertMessage = error;
            //         }
            //         else {
            //             appNotify('Thêm người dùng không thành công!', 'danger');
            //             $this.userDataTable.ajax.reload(null, false);
            //             $('#user-modal').modal('hide');
            //         }
            //     });
            //
            // },
            updateUser() {

                var userData = $(this.$refs.userForm).serialize();
                userData += '&id=' + this.currentUser.id;

                axios.post('/update', userData)
                    .then((response) => {
                        appNotify('Chỉnh sửa người dùng thành công', 'success', null, 'la la-trash')
                        this.$emit('action-done');
                        $('#user-modal').modal('hide');
                    })
                    .catch(function (error) {
                        appNotify('Chỉnh sửa người dùng không thành công', 'danger');
                        console.log(error);
                        $('#user-modal').modal('hide');
                    })

            },
            // updateUser() {
            //     let $this = this;
            //     var userData = $(this.$refs.userForm).serialize();
            //     userData += '&id=' + this.currentUser.id;
            //     updateUserService(userData, function () {
            //         appNotify('Cập nhật người dùng thành công!','success', null, 'la la-trash');
            //         $this.userDataTable.ajax.reload(null, false);
            //
            //         $('#user-modal').modal('hide');
            //     }, function (error) {
            //         console.log(error);
            //         appNotify('Cập nhật người dùng không thành công!','danger');
            //         $('#user-modal').modal('hide');
            //
            //     })
            // },
            showModal(data) {
                if (data != null) {
                    this.isEditUser = true;
                    this.currentUser = data;
                }
                $(this.$el).modal('show');
            },
            validateForm(scope) {
                this.$validator.validateAll(scope).then((result) => {
                    if (result) {
                        if (this.isEditUser == false) {
                            this.addUser();
                        } else {
                            this.renderPassword=false;
                            this.updateUser();
                        }
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>