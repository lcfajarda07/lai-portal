<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="jumbotron jumbotron-fluid" style="height:500px;background:url('https://img.thedailybeast.com/image/upload/c_crop,d_placeholder_euli9k,h_1688,w_3000,x_0,y_0/dpr_1.5/c_limit,w_1600/fl_lossy,q_auto/v1610750999/210115-Nance-Nash-lighthouse-tease_wc7wfj');background-size:  100%; ">
            <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
    </div>
</div> -->
    

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <image src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihb584P8JtlTFDPipJTyCJpp2Rh6Ja8JLVNt-Mgyz-c22-LYRKwYN1gWWrCdIWTvnPfyUPLU4TZdlZWf2dE2hE_PCqA09gUNpD8=w1860-h885-rw-v1"/>   
            <div class="ml-6 mt-5" id="time" style="display: inline-block;">
                 </div> <a id='ampm'></a>


                <div class="row">
                    <div class="col">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in ") }} <strong>{{ Auth::user()->name}}!</strong>
                    </div> 
                    <div class="ml-6">
                        <h1><strong>Time In:</strong></h1>
                    </div>    
                    <div class="ml-6 mt-2 mb-4">
                        <h1><strong>Time Out:</strong></h1>
                    </div>                     
                    </div>
                    <div class="col-auto">
                         <button type="button" class="btn btn-warning mb-1">Time In</button>
                        <button type="button" class="btn btn-dark mb-1 mr-5">Time Out</button>
                    </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="row">
                    <div class="col mb-2">
                        <h1 style="font-size:20px;"><strong>My Attendance</strong></h1> 
                    </div>
                    <div class="col-auto">
                        <!-- <button type="button" class="btn btn-success mb-1">Export Excel</button> -->
                    </div>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Date</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Number of Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>07/05/24</td>
                        <td>7:55 am</td>
                        <td>......</td>
                        <td>......</td>
                        </tr>
                        <tr>
                        <td>05/05/24</td>
                        <td>7:55 am</td>
                        <td>5:00 pm</td>
                        <td>9 hours and 5 minutes</td>
                        </tr>
                        <tr>
                        <td>04/05/24</td>
                        <td>7:35 am</td>
                        <td>5:25 pm</td>
                        <td>9 hours and 5 minutes</td>
                        </tr>
                        <tr>
                        <td>03/05/24</td>
                        <td>7:35 am</td>
                        <td>5:25 pm</td>
                        <td>9 hours and 5 minutes</td>
                        </tr>
                        <tr>
                        <td>02/05/24</td>
                        <td>7:35 am</td>
                        <td>5:25 pm</td>
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
    </div>


    
</x-app-layout>
