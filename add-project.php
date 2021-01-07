        <?php include('header.php'); ?> 
        <?php include('sidemenu.php'); ?>      

        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header Start -->
            <header class="flex justify-between items-center py-4 px-6 bg-white">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <img src="assets/img/dash/search.png" alt="" srcset="">
                        </span>
                        <input class="form-input search w-32 sm:w-64 rounded-md pl-16 pr-4 focus:outline-none text-xl" type="text" placeholder="Search...">
                    </div>
                </div>
                
                <!-- Notification start-->
                <div class="flex items-center">
                    <div class="relative">
                        <button class="flex mr-8 text-gray-600 focus:outline-none relative">
                            <img src="assets/img/dash/notification.png" alt="" srcset="">
                            <span class="notify rounded-full absolute"></span>
                        </button>
                    </div>
                    
                    <div class="relative">
                        <button class="relative block h-15 w-15 rounded-full overflow-hidden focus:outline-none flex items-center">
                            <img class="h-full w-full object-cover mr-3" src="assets/img/dash/avatar.png" alt="Your avatar">
                            <i class="fas fa-caret-down text-2xl text-gray-200"></i>
                        </button>
                    </div>
                </div>
                <!-- Notification end-->
            </header>
            <!-- Header Ends -->
            
            <!-- Main Start -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-dash-main">
                <div class="container mx-auto px-2 md:px-6 py-8">
                    <h3 class="text-gray-900 text-3xl font-medium border-b border-gray-300 pb-3 mb-5">Add New Project</h3>
                    
                    <!-- Project Step 1 Choose Server Location Starts -->
                    <div class="project-step one relative pl-12">
                        <h4 class="step-title text-gray-700 text-2xl font-medium mb-5">Choose Server Location</h4>
                        <div class="filterBtn flex mb-4"> 
                            <a class="cursor-pointer text-gray-900 mr-4 filter active" data-filter="all">All Locations</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter" data-filter=".america">America</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter" data-filter=".europe">Europe</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter" data-filter=".australia">Australia</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter" data-filter=".asia">Asia</a>
                        </div>
                        <div class="g-scrolling-carousel">
                            <div id="serverLocation" class="items pt-5">
                                <div class="mix america">
                                    <div class="box-check">
                                        <input type="radio" id="serv-loc-1" name="servLoc" checked="checked"> 
                                        <label for="serv-loc-1" class="flex items-center">
                                            <img src="assets/img/dash/can_34.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Toronto</span> 
                                                <span class="desc text-xs">Canada</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="mix america">
                                    <div class="box-check">
                                        <input type="radio" id="serv-loc-2" name="servLoc" disabled> 
                                        <label for="serv-loc-2" class="flex items-center">
                                            <img src="assets/img/dash/can_34.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Montreal</span> 
                                                <span class="desc text-xs">Canada</span>
                                                <span class="avail text-white">Available Soon</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix america">
                                    <div class="box-check">
                                        <input type="radio" id="serv-loc-3" name="servLoc"> 
                                        <label for="serv-loc-3" class="flex items-center">
                                            <img src="assets/img/dash/usa_34.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">New York</span> 
                                                <span class="desc text-xs">USA</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix europe">
                                    <div class="box-check">
                                        <input type="radio" id="serv-loc-4" name="servLoc"> 
                                        <label for="serv-loc-4" class="flex items-center">
                                            <img src="assets/img/dash/lon_34.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">London</span> 
                                                <span class="desc text-xs">United Kingdom</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix asia">
                                    <div class="box-check">
                                        <input type="radio" id="serv-loc-5" name="servLoc"> 
                                        <label for="serv-loc-5" class="flex items-center">
                                            <img src="assets/img/dash/sin_34.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Singapore</span> 
                                                <span class="desc text-xs">Singapore</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="mix australia">
                                    <div class="box-check">
                                        <input type="radio" id="serv-loc-6" name="servLoc"> 
                                        <label for="serv-loc-6" class="flex items-center">
                                            <img src="assets/img/dash/aus_34.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Sydney</span> 
                                                <span class="desc text-xs">Australia</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                   <!-- Project Step 1 Choose Server Location Ends -->
                    
                    <!-- Summary table starts -->
                    <div class="-my-2 mb-4 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div class="align-middle inline-block min-w-full table-shadow overflow-hidden sm:rounded-lg bg-white p-5 mt-8 mb-4 md:my-8 mx-4 md:mx-0 ">
                            <div class="flex justify-between items-center mb-4 px-6">
                                <div class="text-md leading-5 text-gray-500">Summary</div>
                                <div class="flex items-center">
                                    <img src="assets/img/dash/filter.png" class="mr-3">
                                    <button class="px-5 py-1 text-white text-md rounded-full focus:outline-none viewall-btn">View all</button>
                                </div>
                            </div>
                            <table class="min-w-full">
                                <thead>
                                    <tr class="summary">
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs md:text-sm leading-4 font-medium text-gray-500 tracking-wider">Project</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs md:text-sm leading-4 font-medium text-gray-500 tracking-wider">Description</th>
                                        <th class="px-6 py-3 bg-gray-50 text-center text-xs md:text-sm leading-4 font-medium text-gray-500 tracking-wider">Location</th>
                                        <th class="px-6 py-3 bg-gray-50 text-center text-xs md:text-sm leading-4 font-medium text-gray-500 tracking-wider">Network</th>
                                        <th class="px-6 py-3 bg-gray-50 text-center text-xs md:text-sm leading-4 font-medium text-gray-500 tracking-wider">Status</th>
                                        <th class="px-6 py-3 bg-gray-50"></th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    <tr>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <div class="text-sm leading-5 text-gray-500">Project Name</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex justify-between items-center">
                                                <span class="text-sm leading-5 text-gray-900 w-5/6 ">Lorem ipsum dolor sit amet consectetur</span>
                                                <a href="#" class="w-1/6 "><img src="assets/img/dash/edit.png" class="mx-auto" alt=""></a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <img class="mx-auto" src="assets/img/dash/canada.png" alt="">
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            <div class="text-sm leading-5 text-gray-500 text-center">10.0.2.1</div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-center text-sm leading-5 font-medium">
                                            <span class="px-2 inline-flex text-xs items-center leading-5 rounded-full font-semibold status running">
                                                <i class="fas fa-circle text-xs mr-1" style="font-size: 8px;"></i> Running
                                            </span>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-right text-3xl leading-5 font-medium">
                                            <a class="px-2 inline-flex leading-5 font-semibold text-gray-600" href="#">
                                                <i class="fal fa-ellipsis-h"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <div class="text-sm leading-5 text-gray-500">Project Name</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex justify-between items-center">
                                                <span class="text-sm leading-5 text-gray-900 w-5/6 ">Lorem ipsum dolor sit amet consectetur</span>
                                                <a href="#" class="w-1/6 "><img src="assets/img/dash/edit.png" class="mx-auto" alt=""></a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <img class="mx-auto" src="assets/img/dash/canada.png" alt="">
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            <div class="text-sm leading-5 text-gray-500 text-center">10.0.2.1</div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-center text-sm leading-5 font-medium">
                                            <span class="px-2 inline-flex text-xs items-center leading-5 rounded-full font-semibold status running">
                                                <i class="fas fa-circle text-xs mr-1" style="font-size: 8px;"></i> Running
                                            </span>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-right text-3xl leading-5 font-medium">
                                            <a class="px-2 inline-flex leading-5 font-semibold text-gray-600" href="#">
                                                <i class="fal fa-ellipsis-h"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <div class="text-sm leading-5 text-gray-500">Project Name</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex justify-between items-center">
                                                <span class="text-sm leading-5 text-gray-900 w-5/6 ">Lorem ipsum dolor sit amet consectetur</span>
                                                <a href="#" class="w-1/6 "><img src="assets/img/dash/edit.png" class="mx-auto" alt=""></a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <img class="mx-auto" src="assets/img/dash/canada.png" alt="">
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            <div class="text-sm leading-5 text-gray-500 text-center">10.0.2.1</div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-center text-sm leading-5 font-medium">
                                            <span class="px-2 inline-flex text-xs items-center leading-5 rounded-full font-semibold status running">
                                                <i class="fas fa-circle text-xs mr-1" style="font-size: 8px;"></i> Running
                                            </span>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-right text-3xl leading-5 font-medium">
                                            <a class="px-2 inline-flex leading-5 font-semibold text-gray-600" href="#">
                                                <i class="fal fa-ellipsis-h"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <div class="text-sm leading-5 text-gray-500">Project Name</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <div class="flex justify-between items-center">
                                                <span class="text-sm leading-5 text-gray-900 w-5/6 ">Lorem ipsum dolor sit amet consectetur</span>
                                                <a href="#" class="w-1/6 "><img src="assets/img/dash/edit.png" class="mx-auto" alt=""></a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap">
                                            <img class="mx-auto" src="assets/img/dash/canada.png" alt="">
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            <div class="text-sm leading-5 text-gray-500 text-center">10.0.2.1</div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-center text-sm leading-5 font-medium">
                                            <span class="px-2 inline-flex text-xs items-center leading-5 rounded-full font-semibold status running">
                                                <i class="fas fa-circle text-xs mr-1" style="font-size: 8px;"></i> Running
                                            </span>
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-right text-3xl leading-5 font-medium">
                                            <a class="px-2 inline-flex leading-5 font-semibold text-gray-600" href="#">
                                                <i class="fal fa-ellipsis-h"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Summary table ends -->
                    
                    <!-- Lower starts -->
                    <div class="dash-lower mx-4 md:mx-0">
                        <!-- Active User starts -->
                        <div class="active-user table-shadow sm:rounded-lg bg-white py-3 px-4">
                            <!-- header starts-->
                            <div class="flex justify-between items-center mb-5">
                                <h4 class="text-gray-500">Active Users</h2>
                                <a class="text-2xl font-semibold text-gray-600" href="#">
                                    <i class="fal fa-ellipsis-h"></i>
                                </a>
                            </div>
                            <!-- header ends-->

                            <!-- user isotope starts -->
                            <div class="flex items-center mb-8">
                                <img src="assets/img/dash/avatar.png" class="mr-4">
                                <p class="text-sm text-gray-500">John Doe</p>
                            </div>
                            <!-- user isotope ends -->

                            <!-- user isotope starts -->
                            <div class="flex items-center mb-8">
                                <img src="assets/img/dash/avatar.png" class="mr-4">
                                <p class="text-sm text-gray-500">John Doe</p>
                            </div>
                            <!-- user isotope ends -->

                            <!-- user isotope starts -->
                            <div class="flex items-center mb-5">
                                <img src="assets/img/dash/avatar.png" class="mr-4">
                                <p class="text-sm text-gray-500">John Doe</p>
                            </div>
                            <!-- user isotope ends -->

                        </div>
                        <!-- Active User ends -->

                        <!-- Storage starts -->
                        <div class="storage table-shadow sm:rounded-lg bg-white py-5 px-3">
                            <!-- header starts-->
                            <div class="flex justify-between items-center mb-5">
                                <h4 class="text-gray-500 flex items-center">
                                    <img src="assets/img/dash/storage.png" class="storage-ico mr-6"> Storage
                                </h4>
                                <a class="text-2xl font-semibold text-gray-600" href="#">
                                    <i class="fal fa-ellipsis-h"></i>
                                </a>
                            </div>
                            <p class="text-gray-400 mb-4">235.4 GB</p>
                            <div class="bar bg-gray-200 rounded-full">
                                <div class="blueBar h-full rounded-full" style="width:40%"></div>
                            </div>
                        </div>
                        <!-- Storage ends -->

                        <!-- Third-party starts -->
                        <div class="third-party table-shadow sm:rounded-lg bg-white py-5 px-3">
                            Thirdparty
                        </div>
                        <!-- Third-party ends -->
                    </div>
                    <!-- Lower ends -->

                </div>
            </main>
            <!-- Main Ends -->
        </div>
    
        <?php include('footer.php'); ?> 