<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-3 pb-3 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="ml-6" id="time" style="display: inline-block;">
                 </div> <a id='ampm'></a>
                    <!-- <h1 class="ml-4" style="font-size:40px;"><strong>Users List</strong></h1>  -->
                </div>
        </div>
    </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="row">
                    <div class="col">
                        <h1 class="ml-2" style="font-size:20px;"><strong>Users</strong></h1> 
                    </div>
                    <div class="col-auto">
                         <!-- <button type="button" class="btn btn-warning mb-1" >Add User</button> -->
                         <a href="{{ route('register') }}" class="btn btn-warning mb-1">Add User</a>
                        <button type="button" class="btn btn-success mb-1">Export Excel</button>
                    </div>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Department</th>
                        <th>Active Status</th>
                        <th>Date Joined</th>   
                        <th>Actions</th>                 
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $user_id = 0; // Assume user ID is 0 for regular user

                    $user_type = ($user_id === 0) ? "Regular user" : "Admin user";
                    ?>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ($user->user_type == 0 ) ? "Regular user" : "Admin user"}}</td>
                        <?php 
                        $dept = $user->department;
                      
                            switch ($dept) {
                                case 0:
                                    echo '<td> Digital Transformation </td>';
                                break;
                                case 1:
                                //code block;
                                echo '<td> Academics </td>';
                                break;
                                case 2:
                                    echo '<td> Human Resources </td>';
                                break;
                                case 3:
                                    echo '<td> Admissions </td>';
                                break;
                                case 4:
                                    echo '<td> Operations </td>';
                                break;
                                case 5:
                                    echo '<td> Marketing </td>';
                                break;
                                case 6:
                                    echo '<td> Finance </td>';
                                break;
                                case 7:
                                    echo '<td> Registrar </td>';
                                break;
                                case 8:
                                    echo '<td> Admin </td>';
                                break;
                                default:
                                //code block
                                echo '<td>No Department</td>';
                            }
                        ?>
                        
                        <!-- <td>{{ $user->department }}</td> -->
                        <td>{{ ($user->active_status === 0) ? "Active" : "Inactive" }}</td>
                        <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                             <button type="button" class="btn btn-danger">Delete</button>     
                        </td>
                        <td>
                                 
                             <form action="{{ route('profile.edit') }}" method="GET">
                             <button type="Submit" class="btn btn-info">Update</button> 
                             </form>
                        </td>
                     </tr>
                     @endforeach
                    </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                 </nav>
                </div>
            </div>
        </div>



    
</x-app-layout>
