<template>
    <table class="table table-striped- table-bordered table-hover table-checkable" id="userTable">
        <!--<thead>-->
        <!--<tr>-->
            <!--<th>STT</th>-->
            <!--<th>Tên đăng nhập</th>-->
            <!--<th>Tên đầy đủ</th>-->
            <!--<th>Email</th>-->
            <!--<th>Phone</th>-->
            <!--<th>Hành động</th>-->
        <!--</tr>-->
        <!--</thead>-->

        <!--@foreach($users as $user)-->
        <!--<tr>-->
            <!--<th>{{$user->id}}</th>-->
            <!--<th>{{$user->name}}</th>-->
            <!--<th>{{$user->username}}</th>-->
            <!--<th>{{$user->email}}</th>-->
            <!--<th>{{$user->phone}}</th>-->
            <!--<th>-->
                <!--<a href="#" class="btn btn-outline-primary btn-sm 	m-btn m-btn&#45;&#45;icon m-btn&#45;&#45;pill" v-on:click="editUser()">-->
															<!--<span>-->
																<!--<i class="fas fa-edit"></i>-->
																<!--<span>Chỉnh sửa</span>-->
															<!--</span>-->
                <!--</a>-->
                <!--<a href="#" class="btn btn-outline-danger m-btn btn-sm  m-btn&#45;&#45;icon m-btn&#45;&#45;pill" v-on:click="deleteUser()">-->
															<!--<span>-->
																<!--<i class="fas fa-trash-alt"></i>-->
																<!--<span>Xóa</span>-->
															<!--</span>-->
                <!--</a>-->
            <!--</th>-->
        <!--</tr>-->
        <!--@endforeach-->
    </table>
</template>

<script>
    export default {
        name: "UserTable",

        data(){
            return {
                userDataTable: null,
                columns: [
                    {
                        data: null,
                        name:'STT',
                        title: 'STT',
                        orderable: false,
                        width: "20px"
                    },
                    {
                        name:'name',
                        data: 'name',
                        title: 'Tên đăng nhập',
                    },
                    {
                        name:'username',
                        data: 'username',
                        title: 'Tên đầy đủ'
                    },
                    {
                        name:'email',
                        data: 'email',
                        title: 'Email'
                    },
                    {
                        name:'phone',
                        data: 'phone',
                        title: 'Số điện thoại'
                    },
                    {
                        data: null,
                        name: 'actions',
                        orderable: false,
                        width: "80px",
                        title: 'Hành động',
                        render(data,type,row){
                            return '\
                                        <a href="javascript:;" class=" action-user-edit m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill inverse" title="Chỉnh sửa">\
                                            <i class="fas fa-edit"></i>\
                                        </a>\
                                        <a href="javascript:;" class=" action-user-delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill inverse" title="Xóa">\
                                            <i class="fas fa-trash-alt"></i>\
                                        </a>\
                                   '
                        }
                    }
                ]
            }
        },
        mounted(){
            this.initTable();
            this.handleTable();
        },
        methods: {
            initTable(){
                let $this = this;
                this.userDataTable = $('#userTable').DataTable({
                    ajax:{
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/listing',
                        dataType: 'json',
                        type: 'POST'
                    },
                    columns: this.columns,
                    order:[1,'asc']
                });

                this.userDataTable.on('order.dt search.dt draw.dt',function () {
                    var info = $this.userDataTable.page.info();
                    var start = info.start;

                    $this.userDataTable.column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1 + start;
                    });

                    $('.tooltip.show').remove();
                    $('.actions a').tooltip();
                })
            },

            handleTable(){
                let $this= this;

                $(document).on('click','.action-user-edit',function () {
                    var tr = $(this).closest('tr');
                    var data = $($this.$el).DataTable().row(tr).data();
                })

                $(document).on('click','.action-user-delete',function () {
                    var tr = $(this).closest('tr');
                    var data = $($this.$el).DataTable().row(tr).data();
                })
            },

            deleteUser(){},

            editUser(){}

        }
    }
</script>

<style scoped>

</style>