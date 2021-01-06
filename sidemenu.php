<!-- Sidebar Start -->
<div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity"></div>
        <div id="sideBarWrap" :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="flex flex-col fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <img @click="sidebarOpen = false" src="assets/img/radium-dash-logo.png" alt="">
                </div>
            </div>

            <nav class="mt-10" x-data="{selected:null}">
                

                <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="#">
                    <img src="assets/img/dash/dashboard.png">
                    <span class="mx-3 pn-m">Dashboard</span>
                </a>

                <!-- Project menu starts-->
                <button 
                    @click="selected !== 1 ? selected = 1 : selected = null"
                    class="flex items-center w-full focus:outline-none mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                    
                    <img src="assets/img/dash/project.png">
                    <span class="mx-3 pn-m">Projects</span>
                    <i 
                        class="ml-auto fas "
                        :class="selected == 1 ? 'fa-caret-up' : 'fa-caret-down'"
                    ></i>

                </button>
                <!-- Project menu ends-->

                <!-- Project Submenu starts-->
                <div 
                    class="relative overflow-hidden transition-all max-h-0 duration-700 " 
                    x-ref="projects" 
                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.projects.scrollHeight + 'px' : ''">

                    <a class="block py-2 pl-16 pr-6 text-white text-sm" href="#">
                        <span class="mx-3">Add new project</span>
                    </a>
                    <a class="block py-2 pl-16 pr-6 text-white text-sm" href="#">
                        <span class="mx-3">Edit project</span>
                    </a>
                    <a class="block py-2 pl-16 pr-6 text-white text-sm" href="#">
                        <span class="mx-3">Add new instance</span>
                    </a>
                    <a class="block py-2 pl-16 pr-6 text-white text-sm" href="#">
                        <span class="mx-3">Edit instance</span>
                    </a>
                </div>
                <!-- Project Submenu ends-->    

                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
                    <img src="assets/img/dash/toolbox.png">
                    <span class="mx-3">Toolbox</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
                    <img src="assets/img/dash/platforms.png">
                    <span class="mx-3">Platforms</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
                    <img src="assets/img/dash/support.png">
                    <span class="mx-3">Support</span>
                </a>
            </nav>

            <nav class="mt-auto mb-4">
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
                    <img src="assets/img/dash/admin.png">
                    <span class="mx-3">Admin</span>
                </a>
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
                    <img src="assets/img/dash/logout.png">
                    <span class="mx-3">Logout</span>
                </a>
            </nav>
        </div> 
        <!-- Sidebar Ends -->