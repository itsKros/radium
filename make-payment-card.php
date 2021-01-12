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
                    <h4 class="text-gray-900 text-xl font-medium mb-5 pl-0 md:pl-2 ml-5 md:ml-0">Billing</h4>

                    <!-- Payment Method Starts -->
                    <div class="relative mb-8 pl-2">
                        <h4 class="text-gray-700 text-md font-bold mb-3 ml-3 md:ml-0 ">PAYMENT METHODS</h4>
                        <div id="paymentMethod" class="flex ml-3 md:ml-0">
                            
                            <div class="box-check cc mr-3 md:mr-7">
                                <input type="radio" id="pm-1" name="pm" checked="checked"> 
                                <label for="pm-1" class="flex items-center justify-center shadow-md">
                                    <img src="assets/img/dash/credit-card.png">
                                </label>
                            </div>
                            
                            <div class="box-check mr-3 md:mr-7">
                                <input type="radio" id="pm-2" name="pm"> 
                                <label for="pm-2" class="flex items-center justify-center shadow-md">
                                    <img src="assets/img/dash/paypal.png">
                                </label>
                            </div>

                            <div class="box-check">
                                <input type="radio" id="pm-3" name="pm"> 
                                <label for="pm-3" class="flex items-center justify-center shadow-md">
                                    <img src="assets/img/dash/bitcoin.png">
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Payment Method Ends -->

                    <!-- Payment Information Starts -->
                    <div class="relative mb-8 pl-2">
                        <h4 class="text-gray-700 text-md font-bold mb-3 ml-3 md:ml-0 ">PAYMENT INFORMATION</h4>
                        <div id="paymentInformation" class="flex flex-col md:flex-row ml-3 md:ml-0 mr-3 md:mr-0">
                            
                            <div class="w-full md:w-5/12 mr-0 md:mr-10 mb-5 md:mb-0">
                                <input type="text" id="bname" name="bname" placeholder="Name" class="bg-none px-2 border py-3 w-full focus:outline-none font-bold border-gray-500 rounded-md mb-5">
                                <input type="text" id="search-add" name="search-add" placeholder="Search Address" class="bg-none px-2 border py-3 w-full focus:outline-none font-bold border-gray-500 rounded-md mb-5">
                                <select id="bcountry" name="bcountry" class="bg-none px-2 border py-3 w-full focus:outline-none font-bold border-gray-500 rounded-md">
                                    <option value="" class="text-gray-500" disabled="" selected="">Billing Country</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                </select>
                            </div>
                            <div class="w-full md:w-5/12 ml-0 md:ml-10 ">
                                <input type="text" id="ccn" name="ccn" placeholder="Card Number" class="px-2 border py-3 w-full focus:outline-none font-bold border-gray-500 rounded-md mb-5">
                                <div class="mb-5 flex items-center">
                                    <input type="text" id="exp" name="exp" placeholder="MM / YY" class="bg-none px-2 border py-3 w-1/6 focus:outline-none font-bold border-gray-500 rounded-md mr-4">
                                    <input type="text" id="cvv" name="cvv" placeholder="CVV" class="bg-none px-2 border py-3 w-1/6 focus:outline-none font-bold border-gray-500 rounded-md">
                                    <div class="flex items-center ml-auto">
                                        <input type="checkbox" name="remember-card" id="remember-card" class="mr-4 bg-none">
                                        <label for="remember-card" class="text-sm text-gray-400">Remember Card</label>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <img src="assets/img/dash/card-icon.png" alt="" class="">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Payment Information Ends -->

                    <!-- Payment Summary Starts -->
                    <div class="relative mb-8 pl-2">
                        <h4 class="text-gray-700 text-md font-bold mb-3 ml-3 md:ml-0 ">SUMMARY</h4>
                        
                        <div id="paymentSummary" class="flex flex-col md:flex-row ml-3 md:ml-0 mr-3 md:mr-0">
                            <div class="w-full md:w-5/12 mr-0 md:mr-10 mb-10 md:mb-0">
                                <div class="flex items-center justify-between mb-5">
                                    <input type="text" id="bname" name="bname" placeholder="Enter code" class="bg-none px-2 border py-2 w-8/12 focus:outline-none font-bold border-gray-500 rounded-md ">
                                    <button class="w-3/12 px-5 py-2 text-white text-md rounded-full font-bold focus:outline-none deploynow-btn">Apply</button>
                                </div>
                                <div class="flex items-center">
                                    <span class="mr-2">Code: “<span class="text-blue">RAD30</span>” applied</span>
                                    <a class="" href="#">
                                        <img src="assets/img/dash/code-remove.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- dashed verticle line -->
                            <div class="md:h-auto border-dashed border-b-4 md:border-b-0 md:border-r-2 border-gray-400 w-full md:w-1"></div>

                            <div class="w-full md:w-5/12 ml-0 md:ml-10 pb-6 mt-10 md:mt-0">
                                <div class="flex flec-col md:flex-row items-center justify-between  mb-10">
                                    <div class="w-full md:w-1/4">
                                        <span class="block text-sm pn-m">Company</span>
                                        <span class="block text-sm font-bold pn-b">Radium</span>
                                    </div>
                                    <div class="w-full md:w-1/4">
                                        <span class="block text-sm pn-m">Order Number</span>
                                        <span class="block text-sm font-bold pn-b">123456</span>
                                    </div>
                                    <div class="w-full md:w-1/3">
                                        <span class="block text-sm pn-m">Service</span>
                                        <span class="block text-sm font-bold pn-b">Cloud Compute, 64GB</span>
                                    </div>
                                </div>

                                <div class="flex flec-col md:flex-row items-center justify-between">
                                    <span>Total: <span class="text-sm">$23.00/mo</span></span>
                                    <button class="px-5 py-2 text-white text-sm rounded-full focus:outline-none deploynow-btn ">Link Payment</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Payment Summary Ends -->


                </div>
            </main>
            <!-- Main Ends -->

        </div>
    
        <?php include('footer.php'); ?> 