<template>
    <div>
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Danh sách người dùng
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air"
                           @click="showModal(null)">
												<span>
													<i class="la la-plus"></i>
													<span>Thêm người dùng</span>
												</span>
                        </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            <user-table @show-detail="showModal"></user-table>
            <user-modal ref="userModal"></user-modal>
        </div>

    </div>
</template>

<script>
    import UserTable from "./UserTable"
    import UserModal from "./UserModal"

    export default {
        name: "UserManagement",
        components: {
            'user-modal': UserModal,
            'user-table': UserTable,
        },
        data() {
            return {}
        },
        methods: {
            showModal(data) {
                // $('#add-user-modal').modal('show');
                // $(this.$el).modal('show');
                this.$refs.userModal.showModal(data);
                // console.log('mo modal')
            },
        }
    }
</script>

<style scoped>

</style>