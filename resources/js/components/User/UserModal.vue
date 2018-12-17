<template>
    <div class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<h5 class="modal-title">Thêm người dùng 123</h5>-->
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
                    <form ref="userForm" @submit.prevent="validateForm()">
                        <div class="form-group">
                            <label class="form-control-label">Tên đăng nhập:</label>
                            <input type="text" class="form-control" name="name" v-model="currentUser.name">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tên đầy đủ:</label>
                            <input type="text" class="form-control" name="username" v-model="currentUser.username">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email:</label>
                            <input type="text" class="form-control" name="email" v-model="currentUser.email">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Phone:</label>
                            <input type="text" class="form-control" name="phone" v-model="currentUser.phone">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Mật khẩu:</label>
                            <input type="password" class="form-control" name="password" v-model="currentUser.password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <!--<button type="submit" class="btn btn-primary">Lưu</button>-->
                    <button type="submit" class="btn btn-primary">
                        <template v-if="isEditUser">
                            Cập nhật
                        </template>
                        <template v-else>
                            Thêm mới
                        </template>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {appNotify} from "../../helper/notifyHelper";
    import VeeValidate, {Validator} from 'vee-validate';

    const defaultUser = {
        name : '',
        username: '',
        email:'',
        phone: '',
        password: '',
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
                })
            },
            addUser() {
                // let $this = this;
                var userData = $(this.$refs.userForm).serialize();

                axios.post('/store', {userData})
                    .then(function (response) {
                        appNotify('Thêm người dùng thành công', 'success', null, 'la la-trash')
                        $this.userDataTable.ajax.reload(null, false);

                        $(this.$el).modal('hide')
                    })
                    .catch(function (error) {
                        appNotify('Thêm người dùng thất bại','danger')
                        $this.userDataTable.ajax.reload(null, false);

                        $(this.$el).modal('hide')

                    })
            },
            updateUser(){
                var userData = $(this.$refs.userForm).serialize();
                userData += '$id' + this.currentUser.id;

                axios.post('/update',{userData})
                    .then(function (response) {
                        appNotify('Chỉnh sửa người dùng thành công','success',null,'la la-trash')
                        $this.userDataTable.ajax.reload(null,false);

                        $(this.$el).modal('hide')
                    })
                    .catch(function (error) {
                        appNotify('Chỉnh sửa người dùng không thành công','danger');
                        $this.userDataTable.ajax.reload(null,false);

                        $(this.$el).modal('hide')
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
                this.$validator.validateAll(scope).then(result =>{
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