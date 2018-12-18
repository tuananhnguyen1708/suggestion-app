<template>
    <div class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true" id="user-modal" >
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

                        <div class="form-group" :class="{ 'has-danger': errors.has('name') }">
                            <label class="form-control-label">Tên đăng nhập:</label>
                            <input type="text"
                                   class="form-control"
                                   name="name"
                                   v-model="currentUser.name"
                                   data-vv-as="name"
                                   v-validate="'required|max:255'">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('name')">
                                {{ errors.first('name') }}
                            </div>
                        </div>

                        <div class="form-group" :class="{ 'has-danger': errors.has('username') }">
                            <label class="form-control-label">Tên đầy đủ:</label>
                            <input type="text"
                                   class="form-control"
                                   name="username"
                                   data-vv-as="username"
                                   v-model="currentUser.username"
                                   v-validate="'required|max:255'">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('username')">
                                {{ errors.first('username') }}
                            </div>
                        </div>

                        <div class="form-group" :class="{ 'has-danger': errors.has('email') }">
                            <label class="form-control-label">Email:</label>
                            <input type="text"
                                   class="form-control"
                                   name="email"
                                   data-vv-as="email"
                                   v-model="currentUser.email"
                                   v-validate="'max:255'">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('email')">
                                {{ errors.first('email') }}
                            </div>
                        </div>

                        <div class="form-group" :class="{ 'has-danger': errors.has('phone') }">
                            <label class="form-control-label">Phone:</label>
                            <input type="text"
                                   class="form-control"
                                   name="phone"
                                   data-vv-as="phone"
                                   v-model="currentUser.phone"
                                   v-validate="'max:255'">
                            <div class="form-control-feedback" v-cloak
                                 v-show="errors.has('phone')">
                                {{ errors.first('phone') }}
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">
                                <template v-if="isEditUser">
                                    Cập nhật
                                </template>
                                <template v-else >
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

    Vue.use(VeeValidate);

    const defaultUser = {
        name : '',
        username: '',
        email:'',
        phone: '',
    }
    export default {
        name: "UserModal",
        data() {
            return {
                currentUser: Object.assign({},defaultUser),
                isEditUser : false
            }
        },
        mounted(){
            this.handleEvents();
        },
        methods: {
            handleEvents(){
                let $this = this;
                
                $(this.$el).on("hide.bs.modal",function () {
                    $this.isEditUser = false;
                    $this.currentUser = Object.assign({},defaultUser);
                    $this.$validator.reset();
                })
            },
            addUser() {
                var userData = $(this.$refs.userForm).serialize();
                axios.post('/store', userData)
                    .then(function (response) {
                        appNotify('Thêm người dùng thành công', 'success', null, 'la la-trash')
                        $this.userDataTable.ajax.reload(null, false);
                        console.log('1');
                        // $(this.$el).modal('hide')
                        $('#user-modal').modal('hide');
                    })
                    .catch(function (error) {
                        appNotify('Thêm người dùng thất bại','danger')
                        // $(this.$el).modal('hide')
                        console.log('2');
                        $('#user-modal').modal('hide');

                    })
            },
            updateUser(){
                var userData = $(this.$refs.userForm).serialize();
                userData += '&id=' + this.currentUser.id;

                axios.post('/update',userData)
                    .then(function (response) {
                        appNotify('Chỉnh sửa người dùng thành công','success',null,'la la-trash')
                        $this.userDataTable.ajax.reload(null,false);

                        // $(this.$el).modal('hide')
                        $('#user-modal').modal('hide');
                    })
                    .catch(function (error) {
                        appNotify('Chỉnh sửa người dùng không thành công','danger');

                        // $(this.$el).modal('hide')
                        // $(this.$refs.userModal).modal('hide');
                        $('#user-modal').modal('hide');
                    })

            },
            showModal(data){
                if(data != null){
                    this.isEditUser = true;
                    this.currentUser = data;
                }
                $(this.$el).modal('show');
            },
            validateForm(scope){
                this.$validator.validateAll(scope).then((result) =>{
                    if(result){
                        if(this.isEditUser == false){
                            this.addUser();
                        } else {
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