<template>
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
                    <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" data-toggle="modal" data-target="#add-user-modal">
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
</template>

<script>
    import UserTable from "./UserTable"
    import UserModal from "./UserModal"
    export default {
        name: "UserManagement",
        components: {UserTable,UserModal},
        data(){
            return {

            }
        },
        methods:{

        }
    }
</script>

<style scoped>

</style>