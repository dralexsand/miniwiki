@extends('layouts.home_vue')

@section('content')
    @include('layouts.parts.header')
    <div role="main" class="main">

        @include('layouts.parts.page_header_posts')

        <hr class="m-0">

        <div id="app">
            <div class="container-fluid">
                <div class="row bg-dark">
                    <div class="col-lg-12">
                        <p style="font-size: 25px;text-align: center;" class="text-light display-4 pt-2">CRUD Indian version
                            App</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mt-3">

                    <div class="col-lg-6">
                        <h3 class="text-info">Registered Users</h3>
                    </div>

                    <div class="col-lg-6">
                        <button class="btn btn-info float-right" @click.prevent="showAddModal=true">
                            <i class="fas fa-user"></i>&nbsp;&nbsp;Add New User
                        </button>
                    </div>
                </div>
                <hr class="bg-info">
                <div v-if="errorMsg" class="alert alert-danger">
                    {{ errorMsg }}
                </div>
                <div v-if="successMsg" class="alert alert-success">
                    {{ successMsg }}
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr class="text-center bg-info text-light">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center" v-for="user in users">
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.phone }}</td>
                                <td><a @click.prevent="showEditModal=true" href="" class="text-success">
                                        <i class="fas fa-edit"></i>
                                    </a></td>

                                <td><a @click.prevent="showDeleteModal=true" href="" class="text-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="overlay" v-if="showAddModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New User</h5>
                            <button type="button" class="close" @click.prevent="showAddModal=false">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control-lg" placeholder="Name" v-model=""newUser.name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control-lg" placeholder="Email" v-model=""newUser.email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control-lg" placeholder="Phone" v-model=""newUser.phone">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info btn-block btn-lg @click.prevent="
                                            showAddModal="false; addUser();"
                                    ">Add User</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>

            <div id="overlay" v-if="showEditModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit User</h5>
                            <button type="button" class="close" @click.prevent="showEditModal=false">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control-lg" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control-lg" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info btn-block btn-lg">Update User</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer"></div>

                    </div>
                </div>
            </div>

            <div id="overlay" v-if="showDeleteModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete User</h5>
                            <button type="button" class="close" @click.prevent="showDeleteModal=false">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <!--<form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control-lg" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control-lg" placeholder="Phone">
                                </div>
                            </form>-->
                            <h4 class="text-danger">Are you sure want to delete this user?</h4>
                            <h5>You are deleting 'wolfmania'</h5>
                            <hr>

                            <button class="btn btn-info btn-block btn-lg" @click.prevent="showDeleteModal=false">No</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-danger btn-block btn-lg" @click.prevent="showDeleteModal=false">Yes</button>

                        </div>
                        <div class="modal-footer"></div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('layouts.parts.footer')
@endsection
