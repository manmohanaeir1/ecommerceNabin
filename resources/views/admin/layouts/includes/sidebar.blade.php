	<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title"> 
                        <span>Main</span>
                    </li>
                    <li class="">
                        <a href="{{route('dashboard.index')}}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
                       
                    </li>
                    <li class="">
                        <a href="{{route('contact.index')}}"><i class="fa fa-phone"></i> <span> Contacts</span> </a>
                       
                    </li>
                    <li class="">
                        <a href="{{route('career.index')}}"><i class="fa fa-inbox"></i> <span> Careers</span> </a>
                       
                    </li>
                    

                    <li class="submenu">
                        <a href="index.html#"><i class="la la-edit"></i> <span> Blogs</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href={{route('tag.index')}}>Tag</a></li>
                            <li><a href={{route('category.index')}}>Category</a></li>
                            <li><a href={{route('post.index')}}>Post</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="index.html#"><i class="la la-book"></i> <span> Course</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href={{route('course.index')}}>All Course</a></li>
                            <li><a href={{route('curriculum.index')}}>Curriculum</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{route('photo.index')}}"><i class="la la-photo"></i> <span> Photo Gallery</span> </a>
                       
                    </li>
                    <li class="">
                        <a href="{{route('video.index')}}"><i class="fa fa-file-video-o"></i> <span> Videos</span> </a>
                       
                    </li>

                   

                </li>
                
                
                <li class="submenu">
                    <a href="index.html#"><i class="la la-file"></i> <span> File</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href={{route('download.index')}}>Download</a></li>
                    </ul>
                </li>
               
                   
                    
                </ul>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
