<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Menu Items</span>
                </li>
                <li class="active"> 
                    <a href="/dashboard"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                



                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('post.index')}}">All Posts</a></li>
                        <li><a href="{{ route('post.create')}}">Add new Post</a></li>
                        <li><a href="{{ route('category.index')}}">Category</a></li>
                        <li><a href="{{ route('tag.index')}}">Tags</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#"></a></li>
                        <li><a href="{{ route('user.index')}}">All Users</a></li>
                        <li><a href="">Add new Users</a></li>
                        <li><a href="{{route('role.index')}}">Role</a></li>
                        
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Pages</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#"></a></li>
                        <li><a href="#">All Pages</a></li>
                        <li><a href="#">Add new Pages</a></li>
                        
                    </ul>
                </li>
                

                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#"></a></li>
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Social Media</a></li>
                        <li><a href="#">Copyright Texts</a></li>
                        <li><a href="#">Custom CSS</a></li>
                    </ul>
                </li>
                
                
                
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
