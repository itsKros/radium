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
            <main id="projectStep" class="flex-1 overflow-x-hidden overflow-y-auto bg-dash-main">
                <div class="container mx-auto px-2 md:px-6 py-8">
                    <h3 class="text-gray-900 text-3xl font-medium border-b border-gray-300 pb-3 mb-5 pl-5 md:pl-0">Add New Project</h3>
                    
                    <!-- Project Step - Choose Server Location Starts -->
                    <div id="servLoc" class="project-step one relative pl-5 md:pl-12 mb-16">
                        <h4 class="step-title text-gray-700 text-2xl font-medium mb-5 ml-10 md:ml-0">Choose Server Location</h4>
                        <div class="filterBtn flex mb-4"> 
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-1 active" data-filter="all">All Locations</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-1" data-filter=".america">America</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-1" data-filter=".europe">Europe</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-1" data-filter=".australia">Australia</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-1" data-filter=".asia">Asia</a>
                        </div>
                        <div class="g-scrolling-carousel">
                            <div id="serverLocation" class="items pt-5">
                                <div class="mix america">
                                    <div class="box-check">
                                        <input type="radio" id="serv-loc-1" name="servLoc" checked="checked"> 
                                        <label for="serv-loc-1" class="flex items-center select-none">
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
                                        <label for="serv-loc-2" class="flex items-center select-none">
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
                                        <label for="serv-loc-3" class="flex items-center select-none">
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
                                        <label for="serv-loc-4" class="flex items-center select-none">
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
                                        <label for="serv-loc-5" class="flex items-center select-none">
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
                                        <label for="serv-loc-6" class="flex items-center select-none">
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
                    <!-- Project Step - Choose Server Location Ends -->

                    <!-- Project Step - Server Type Starts -->
                    <div id="servType" class="project-step one relative pl-5 md:pl-12 mb-16">
                        <h4 class="step-title text-gray-700 text-2xl font-medium mb-5 ml-10 md:ml-0">Server Type</h4>
                        <div class="filterBtn flex mb-4"> 
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-2 active" data-filter="all">All</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-2" data-filter=".application">Application</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-2" data-filter=".backup">Backup</a>
                            <a class="cursor-pointer text-gray-900 mr-4 filter filter-2" data-filter=".snapshot">Snapshot</a>
                        </div>
                        <div class="g-scrolling-carousel">
                            <div id="serverType" class="items pt-5">
                                <div class="mix application">
                                    <div class="box-check">
                                        <input type="radio" id="serv-typ-1" name="servTyp" checked="checked"> 
                                        <label for="serv-typ-1" class="flex items-center select-none">
                                            <img src="assets/img/dash/servPlace.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Server Type</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="mix application">
                                    <div class="box-check">
                                        <input type="radio" id="serv-typ-2" name="servTyp"> 
                                        <label for="serv-typ-2" class="flex items-center select-none">
                                            <img src="assets/img/dash/servPlace.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Server Type</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix backup">
                                    <div class="box-check">
                                        <input type="radio" id="serv-typ-3" name="servTyp"> 
                                        <label for="serv-typ-3" class="flex items-center select-none">
                                            <img src="assets/img/dash/servPlace.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Server Type</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="mix backup">
                                    <div class="box-check">
                                        <input type="radio" id="serv-typ-4" name="servTyp"> 
                                        <label for="serv-typ-4" class="flex items-center select-none">
                                            <img src="assets/img/dash/servPlace.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Server Type</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix snapshot">
                                    <div class="box-check">
                                        <input type="radio" id="serv-typ-5" name="servTyp"> 
                                        <label for="serv-typ-5" class="flex items-center select-none">
                                            <img src="assets/img/dash/servPlace.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Server Type</span>
                                            </span>    
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="mix snapshot ">
                                    <div class="box-check">
                                        <input type="radio" id="serv-typ-6" name="servTyp"> 
                                        <label for="serv-typ-6" class="flex items-center select-none">
                                            <img src="assets/img/dash/servPlace.png" class="mr-2">
                                            <span class="serv-name flex flex-col">
                                                <span class="name text-sm">Server Type</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Project Step - Server Type Ends -->

                    <!-- Project Step - Server Size Starts -->
                    <div id="servSize" class="project-step one relative pl-5 md:pl-12 mb-16">
                        <h4 class="step-title text-gray-700 text-2xl font-medium mb-5 ml-10 md:ml-0">Server Size</h4>
                        <div class="g-scrolling-carousel">
                            <div id="serverSize" class="items pt-5">
                                
                                <div class="mix">
                                    <div class="box-check">
                                        <input type="radio" id="serv-size-1" name="servSize" checked="checked"> 
                                        <label for="serv-size-1" class="flex flex-col items-center select-none">
                                            <span class="flex flex-col">
                                                <span class="size text-sm">64GB</span>
                                                <span class="price text-sm">$6/mo</span>
                                            </span>
                                            <div class="seprator"></div>
                                            <span class="serv-name flex flex-col mt-auto items-center">
                                                <span class="cpu text-xs">1 CPU</span>
                                                <span class="memory text-xs">1000 Memory</span>
                                                <span class="bandwidth text-xs">1000 Bandwidth</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="radio" id="serv-size-2" name="servSize"> 
                                        <label for="serv-size-2" class="flex flex-col items-center select-none">
                                            <span class="flex flex-col">
                                                <span class="size text-sm">64GB</span>
                                                <span class="price text-sm">$6/mo</span>
                                            </span>
                                            <div class="seprator"></div>
                                            <span class="serv-name flex flex-col mt-auto items-center">
                                                <span class="cpu text-xs">1 CPU</span>
                                                <span class="memory text-xs">1000 Memory</span>
                                                <span class="bandwidth text-xs">1000 Bandwidth</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="radio" id="serv-size-3" name="servSize"> 
                                        <label for="serv-size-3" class="flex flex-col items-center select-none">
                                            <span class="flex flex-col">
                                                <span class="size text-sm">64GB</span>
                                                <span class="price text-sm">$6/mo</span>
                                            </span>
                                            <div class="seprator"></div>
                                            <span class="serv-name flex flex-col mt-auto items-center">
                                                <span class="cpu text-xs">1 CPU</span>
                                                <span class="memory text-xs">1000 Memory</span>
                                                <span class="bandwidth text-xs">1000 Bandwidth</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="radio" id="serv-size-4" name="servSize"> 
                                        <label for="serv-size-4" class="flex flex-col items-center select-none">
                                            <span class="flex flex-col">
                                                <span class="size text-sm">64GB</span>
                                                <span class="price text-sm">$6/mo</span>
                                            </span>
                                            <div class="seprator"></div>
                                            <span class="serv-name flex flex-col mt-auto items-center">
                                                <span class="cpu text-xs">1 CPU</span>
                                                <span class="memory text-xs">1000 Memory</span>
                                                <span class="bandwidth text-xs">1000 Bandwidth</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="radio" id="serv-size-5" name="servSize"> 
                                        <label for="serv-size-5" class="flex flex-col items-center select-none">
                                            <span class="flex flex-col">
                                                <span class="size text-sm">64GB</span>
                                                <span class="price text-sm">$6/mo</span>
                                            </span>
                                            <div class="seprator"></div>
                                            <span class="serv-name flex flex-col mt-auto items-center">
                                                <span class="cpu text-xs">1 CPU</span>
                                                <span class="memory text-xs">1000 Memory</span>
                                                <span class="bandwidth text-xs">1000 Bandwidth</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="radio" id="serv-size-6" name="servSize"> 
                                        <label for="serv-size-6" class="flex flex-col items-center select-none">
                                            <span class="flex flex-col">
                                                <span class="size text-sm">64GB</span>
                                                <span class="price text-sm">$6/mo</span>
                                            </span>
                                            <div class="seprator"></div>
                                            <span class="serv-name flex flex-col mt-auto items-center">
                                                <span class="cpu text-xs">1 CPU</span>
                                                <span class="memory text-xs">1000 Memory</span>
                                                <span class="bandwidth text-xs">1000 Bandwidth</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Project Step - Server Size Ends -->

                    <!-- Project Step - Server Name Starts -->
                    <div id="servName" class="project-step one relative pl-5 md:pl-12 mb-16 pr-5 md:pr-0">
                        <h4 class="step-title text-gray-700 text-2xl font-medium mb-5 ml-10 md:ml-0">Server Name</h4>
                        <div id="serverName" class="items pt-5">
                        <div class="servname">
                            <div class="pname">
                                <input type="text" id="pname" name="pname" placeholder="Project Name" class="px-2 border py-2 w-full focus:outline-none font-bold border-gray-500 rounded-md">
                            </div>
                            <div class="pnetwork">
                                <input type="text" id="pnetwork" name="pnetwork" placeholder="Project Network" class="px-2 border py-2 w-full focus:outline-none font-bold border-gray-500 rounded-md">
                            </div>
                            <div class="pdesc">
                                <textarea id="pdesc" name="pdesc" placeholder="Project Description" class="px-2 border py-2 w-full focus:outline-none font-bold border-gray-500 rounded-md h-full"></textarea>
                            </div>
                        </div>
                                

                        </div>
                    </div>
                    <!-- Project Step - Server Name Ends -->

                    <!-- Project Step - Additional Features Starts -->
                    <div id="addFeat" class="project-step one relative pl-5 md:pl-12 mb-3">
                        <h4 class="step-title text-gray-700 text-2xl font-medium mb-5 ml-10 md:ml-0">Additional Features</h4>
                        <div class="g-scrolling-carousel">
                            <div id="additonalFeature" class="items pt-5">
                                
                                <div class="mix">
                                    <div class="box-check">
                                        <input type="checkbox" id="feature-1" name="feature-1" > 
                                        <label for="feature-1" class="flex flex-col items-center justify-center select-none">
                                            <span class="flex flex-col items-center justify-center">
                                                Feature
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="checkbox" id="feature-2" name="feature-2" > 
                                        <label for="feature-2" class="flex flex-col items-center justify-center select-none">
                                            <span class="flex flex-col items-center justify-center">
                                                Feature
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="checkbox" id="feature-3" name="feature-3" > 
                                        <label for="feature-3" class="flex flex-col items-center justify-center select-none">
                                            <span class="flex flex-col items-center justify-center">
                                                Feature
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mix">
                                    <div class="box-check">
                                        <input type="checkbox" id="feature-4" name="feature-4" > 
                                        <label for="feature-4" class="flex flex-col items-center justify-center select-none">
                                            <span class="flex flex-col items-center justify-center">
                                                Feature
                                            </span>
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Project Step - Additional Features Ends -->

                    
                    
                    

                </div>
            </main>
            <!-- Main Ends -->


            <!-- Footer Start -->
            <footer class="billfooter flex justify-between items-center py-4 px-6 bg-white shadow">
                <div class="serv-qty mb-2 md:mb-0">
                    <p class="text-gray-500 mb-1">Server Qty.</p>
                    <input type="number" value="1" min="1" max="100" step="1"/>
                </div>
                
                
                <div class="mb-2 md:mb-0">
                    <p class="text-gray-500 mb-1">Summary</p>
                    <p class="text-blue text-2xl">$12/mo</p>
                </div>

                <div class="mb-2 md:mb-0">
                    <button class="px-5 py-2 text-white text-md rounded-full focus:outline-none deploynow-btn">Deploy Now</button>
                </div>
                
            </footer>
            <!-- Footer Ends -->

        </div>
    
        <?php include('footer.php'); ?> 