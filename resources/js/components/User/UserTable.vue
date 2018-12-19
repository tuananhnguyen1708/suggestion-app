<template>
    <table class="table table-striped- table-bordered table-hover table-checkable" id="userTable"></table>
</template>

<script>
    import {appNotify} from '../../helper/notifyHelper';
    import bootbox from 'bootbox'
    import 'bootstrap-notify'

    export default {
        name: "UserTable",

        data() {
            return {
                userDataTable: null,
                columns: [
                    {
                        data: null,
                        // name: 'STT',
                        title: 'STT',
                        orderable: false,
                        width: "20px"
                    },
                    {
                        // name: 'name',
                        data: 'name',
                        title: 'Tên đăng nhập',
                    },
                    {
                        // name: 'username',
                        data: 'username',
                        title: 'Tên đầy đủ'
                    },
                    {
                        // name: 'email',
                        data: 'email',
                        title: 'Email'
                    },
                    {
                        // name: 'phone',
                        data: 'phone',
                        title: 'Số điện thoại'
                    },
                    {
                        data: null,
                        // name: 'actions',
                        orderable: false,
                        width: "80px",
                        title: 'Hành động',
                        render(data, type, row) {
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
        mounted() {
            this.initTable();
            this.handleTable();
        },
        methods: {
            initTable() {
                let $this = this;
                this.userDataTable = $('#userTable').DataTable({
                    ajax: {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/listing',
                        dataType: 'json',
                        type: 'POST'
                    },
                    columns: this.columns,
                    order: [1, 'asc']
                });

                this.userDataTable.on('order.dt search.dt draw.dt', function () {
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

            handleTable() {
                let $this = this;

                $(document).on('click', '.action-user-edit', function () {
                    var tr = $(this).closest('tr');
                    var data = $($this.$el).DataTable().row(tr).data();
                    $this.$emit('show-detail', data);

                })

                $(document).on('click', '.action-user-delete', function () {
                    var tr = $(this).closest('tr');
                    var data = $($this.$el).DataTable().row(tr).data();
                    $this.deleteUser(data);
                })
            },

            deleteUser(item) {
                let $this = this;

                bootbox.confirm({
                    size: 'normal',
                    message: 'Bạn có muốn xóa user <b class="text-danger"> ' + item.name + ' </b> ?',
                    buttons: {
                        confirm: {
                            label: 'Đồng ý',
                            className: 'btn btn-danger'
                        },
                        cancel: {
                            label: 'Hủy'
                        }
                    },
                    callback: function (action) {
                        if (action) {

                            axios.post('/delete', {id: item.id})
                                .then(function (response) {
                                    appNotify('Xóa người dùng thành công', 'success', null, 'la la-trash');
                                    $this.userDataTable.ajax.reload(null, false);
                                })
                                .catch(function (error) {
                                    appNotify('Xoá người dùng thất bại', 'danger');
                                    $this.userDataTable.ajax.reload(null, false);
                                })
                        }
                    }
                });
            },
            reload() {
                this.userDataTable.ajax.reload(null, false);
            }

        }
    }
</script>

<style scoped>

</style>