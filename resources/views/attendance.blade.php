<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Attendance') }}
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
                        <h1 style="font-size:20px;"><strong>Employee Attendance</strong></h1> 
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-success mb-1">Export Excel</button>
                    </div>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Date</th>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Number of Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>07/05/24</td>
                        <td>231</td>
                        <td>Don Balbieran</td>
                        <td>7:55 am</td>
                        <td>......</td>
                        <td>......</td>
                        </tr>
                        <tr>
                        <td>07/05/24</td>
                        <td>155</td>
                        <td>Kris Toledo</td>
                        <td>7:55 am</td>
                        <td>5:10 pm</td>
                        <td>9 hours and 5 minutes</td>
                        </tr>
                        <tr>
                        <td>07/05/24</td>
                        <td>156</td>
                        <td>Warren Banacia</td>
                        <td>7:55 am</td>
                        <td>5:10 pm</td>
                        <td>9 hours and 5 minutes</td>
                        </tr>
                        <tr>
                        <td>07/05/24</td>
                        <td>153</td>
                        <td>Lemuel Fajarda</td>
                        <td>7:55 am</td>
                        <td>5:10 pm</td>
                        <td>9 hours and 5 minutes</td>
                        </tr>
                        <tr>
                        <td>07/05/24</td>
                        <td>153</td>
                        <td>Bea Moral</td>
                        <td>7:55 am</td>
                        <td>5:10 pm</td>
                        <td>9 hours and 5 minutes</td>
                        </tr>
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
