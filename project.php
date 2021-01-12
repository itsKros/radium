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
                    <div class="flex justify-between items-center">
                        <h3 class="text-gray-700 text-3xl font-medium mx-4 md:m-0">Projects</h3>
                        <div class="flex items-center">
                            <img src="assets/img/dash/filter.png" class="mr-3">
                            <button class="px-4 py-1 text-white text-2xl rounded-lg focus:outline-none bg-blue">+</button>
                        </div>
                    </div>

                    <!-- Summary table starts -->
                    <div class="-my-2 mb-4 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div class="align-middle inline-block min-w-full overflow-hidden sm:rounded-lg  mt-8 mb-4 md:my-8 mx-4 md:mx-0 ">
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
                    
                </div>
            </main>
            <!-- Main Ends -->
        </div>
    
        <?php include('footer.php'); ?> 