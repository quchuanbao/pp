@extends('admin.layouts.admin')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
           
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Elements</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Lists
                <small>custom bootstrap list elements to be used within any layout</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <!-- BEGIN : LISTS -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">To Do List</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-todo</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-todo red">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">My Projects</h3>
                                        <div class="list-head-count">
                                            <div class="list-head-count-item">
                                                <i class="fa fa-check"></i> 15</div>
                                            <div class="list-head-count-item">
                                                <i class="fa fa-cog"></i> 34</div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="list-count pull-right red-mint">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="list-todo-line"></div>
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-database"></i>
                                            </div>
                                            <div class="list-todo-item dark">
                                                <a class="list-toggle-container" data-toggle="collapse" data-parent="#accordion1" onclick=" " href="#task-1" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Metronic Database</div>
                                                        <div class="badge badge-default pull-right bold">3</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse in" id="task-1">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-database"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Database Optimization</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-table"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Table Sorting</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Data Entry</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-paint-brush"></i>
                                            </div>
                                            <div class="list-todo-item dark">
                                                <a class="list-toggle-container" data-toggle="collapse" data-parent="#accordion1" href="#task-2" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Creative Artwork</div>
                                                        <div class="badge badge-default pull-right bold">3</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse" id="task-2">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-image-o"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Concept Design</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Creative Optimization</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-thumbs-o-up"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Visual Proofing</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-sticky-note-o"></i>
                                            </div>
                                            <div class="list-todo-item dark">
                                                <a class="list-toggle-container font-white" data-toggle="collapse" data-parent="#accordion1" href="#task-3" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Content Development</div>
                                                        <div class="badge badge-default pull-right bold">2</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse" id="task-3">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-navicon"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Artwork Slicing</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-cube"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Backend Integration</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">To Do List</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-todo</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-todo red">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">My Projects</h3>
                                        <div class="list-head-count">
                                            <div class="list-head-count-item">
                                                <i class="fa fa-check"></i> 15</div>
                                            <div class="list-head-count-item">
                                                <i class="fa fa-cog"></i> 34</div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="list-count pull-right red-mint">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-list-container list-todo">
                                    <div class="list-todo-line"></div>
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-database"></i>
                                            </div>
                                            <div class="list-todo-item grey">
                                                <a class="list-toggle-container font-white" data-toggle="collapse" href="#task-1-1" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Metronic Database</div>
                                                        <div class="badge badge-default pull-right bold">3</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse in" id="task-1-1">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-database"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Database Optimization</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-table"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Table Sorting</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Data Entry</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-paint-brush"></i>
                                            </div>
                                            <div class="list-todo-item grey">
                                                <a class="list-toggle-container font-white" data-toggle="collapse" href="#task-2-1" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Creative Artwork</div>
                                                        <div class="badge badge-default pull-right bold">3</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse" id="task-2-1">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-image-o"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Concept Design</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Creative Optimization</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-thumbs-o-up"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Visual Proofing</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-sticky-note-o"></i>
                                            </div>
                                            <div class="list-todo-item grey">
                                                <a class="list-toggle-container font-white" data-toggle="collapse" href="#task-3-1" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Content Development</div>
                                                        <div class="badge badge-default pull-right bold">2</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse" id="task-3-1">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-navicon"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Artwork Slicing</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-cube"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Backend Integration</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">To Do List</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-todo</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-todo dark">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">My Projects</h3>
                                        <div class="list-head-count">
                                            <div class="list-head-count-item">
                                                <i class="fa fa-check"></i> 15</div>
                                            <div class="list-head-count-item">
                                                <i class="fa fa-cog"></i> 34</div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="list-count pull-right red-mint">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-list-container list-todo">
                                    <div class="list-todo-line red"></div>
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white font-blue-steel">
                                                <i class="fa fa-database"></i>
                                            </div>
                                            <div class="list-todo-item blue-steel">
                                                <a class="list-toggle-container font-white" data-toggle="collapse" href="#task-1-2" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Metronic Database</div>
                                                        <div class="badge badge-default pull-right bold">3</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse in" id="task-1-2">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-database"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Database Optimization</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-table"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Table Sorting</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Data Entry</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white font-green-meadow">
                                                <i class="fa fa-paint-brush"></i>
                                            </div>
                                            <div class="list-todo-item green-meadow">
                                                <a class="list-toggle-container font-white" data-toggle="collapse" href="#task-2-2" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Creative Artwork</div>
                                                        <div class="badge badge-default pull-right bold">3</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse" id="task-2-2">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-image-o"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Concept Design</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Creative Optimization</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-thumbs-o-up"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Visual Proofing</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white font-yellow-crusta">
                                                <i class="fa fa-sticky-note-o"></i>
                                            </div>
                                            <div class="list-todo-item yellow-crusta">
                                                <a class="list-toggle-container" data-toggle="collapse" href="#task-3-2" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Content Development</div>
                                                        <div class="badge badge-default pull-right bold">2</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse" id="task-3-2">
                                                    <ul>
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-navicon"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Artwork Slicing</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                        <li class="task-list-item">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-cube"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">Backend Integration</a>
                                                                </h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Default</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-default</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-default green-haze">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="list-head-title-container">
                                                <h3 class="list-title uppercase sbold">Default List</h3>
                                                <div class="list-date">Nov 8, 2015</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="list-head-summary-container">
                                                <div class="list-pending">
                                                    <div class="badge badge-default list-count">3</div>
                                                    <div class="list-label">Pending</div>
                                                </div>
                                                <div class="list-done">
                                                    <div class="list-count badge badge-default last">2</div>
                                                    <div class="list-label">Completed</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-list-container list-default">
                                    <div class="mt-list-title uppercase">My List
                                        <span class="badge badge-default pull-right bg-hover-green-jungle">
                                                        <a class="font-white" href="javascript:;">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </span>
                                    </div>
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container done">
                                                <a href="javascript:;">
                                                    <i class="icon-check"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Concept Proof</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-close"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-close"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container done">
                                                <a href="javascript:;">
                                                    <i class="icon-check"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-close"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Simple</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-simple</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-simple font-white bg-red">
                                    <div class="list-head-title-container">
                                        <div class="list-date">Nov 8, 2015</div>
                                        <h3 class="list-title">Simple List</h3>
                                    </div>
                                </div>
                                <div class="mt-list-container list-simple">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container done">
                                                <i class="icon-check"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Concept Proof</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container done">
                                                <i class="icon-check"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">News</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-news</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-news font-white bg-blue">
                                    <div class="list-head-title-container">
                                        <span class="badge badge-primary pull-right">3</span>
                                        <h3 class="list-title">News List</h3>
                                    </div>
                                </div>
                                <div class="mt-list-container list-news">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-green"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-green"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-green"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Default - Extended 1</span>
                                <div class="caption-desc font-grey-cascade"> Extension of Default list element style. Activate by adding <pre class="mt-code">.list-default ext-1</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-default ext-1 yellow-saffron">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="list-head-title-container">
                                                <h3 class="list-title uppercase sbold">Default List</h3>
                                                <div class="list-date">Nov 8, 2015</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="list-head-summary-container">
                                                <div class="list-pending">
                                                    <div class="list-count badge badge-default ">3</div>
                                                    <div class="list-label">Pending</div>
                                                </div>
                                                <div class="list-done">
                                                    <div class="list-count badge badge-default last">2</div>
                                                    <div class="list-label">Completed</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-list-container list-default ext-1">
                                    <div class="mt-list-title uppercase">My List
                                        <span class="badge badge-default pull-right bg-hover-green-jungle">
                                                        <a class="font-white" href="javascript:;">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </span>
                                    </div>
                                    <ul>
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-check"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Concept Proof</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-close"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-close"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-check"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="icon-close"></i>
                                                </a>
                                            </div>
                                            <div class="list-datetime"> 11am
                                                <br/> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Simple - Extended 1</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-simple ext-1</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-simple ext-1 font-white bg-green-sharp">
                                    <div class="list-head-title-container">
                                        <div class="list-date">Nov 8, 2015</div>
                                        <h3 class="list-title">Simple List</h3>
                                    </div>
                                </div>
                                <div class="mt-list-container list-simple ext-1">
                                    <ul>
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <i class="icon-check"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Concept Proof</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <i class="icon-check"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">News - Extended 1</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-news ext-1</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-news ext-1 font-white bg-grey-gallery">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">News List</h3>
                                    </div>
                                    <div class="list-count pull-right bg-red">2</div>
                                </div>
                                <div class="mt-list-container list-news ext-1">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-thumb">
                                                <a href="javascript:;">
                                                    <img alt="" src="/admin/global/img/portfolio/600x600/12.jpg" />
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-red"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-thumb">
                                                <a href="javascript:;">
                                                    <img alt="" src="/admin/global/img/portfolio/600x600/10.jpg" />
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-red"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-thumb">
                                                <a href="javascript:;">
                                                    <img alt="" src="/admin/global/img/portfolio/600x600/08.jpg" />
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-dark"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Default - Group</span>
                                <div class="caption-desc font-grey-cascade"> Extension of Default list element style. Activate by adding <pre class="mt-code">.list-default group</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-default green-seagreen">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title uppercase sbold">Default List</h3>
                                        <div class="list-date">Nov 8, 2015</div>
                                    </div>
                                </div>
                                <div class="mt-list-container list-default ext-1 group">
                                    <div class="mt-list-title uppercase">My List
                                        <span class="badge badge-default pull-right bg-hover-green-jungle">
                                                        <a class="font-white" href="javascript:;">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </span>
                                    </div>
                                    <a class="list-toggle-container" data-toggle="collapse" href="#completed" aria-expanded="true">
                                        <div class="list-toggle done uppercase"> Completed
                                            <span class="badge badge-default pull-right bg-white font-green bold">2</span>
                                        </div>
                                    </a>
                                    <div class="panel-collapse collapse in" id="completed">
                                        <ul>
                                            <li class="mt-list-item done">
                                                <div class="list-icon-container">
                                                    <a href="javascript:;">
                                                        <i class="icon-check"></i>
                                                    </a>
                                                </div>
                                                <div class="list-datetime"> 11am
                                                    <br/> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Concept Proof</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </li>
                                            <li class="mt-list-item done">
                                                <div class="list-icon-container">
                                                    <a href="javascript:;">
                                                        <i class="icon-check"></i>
                                                    </a>
                                                </div>
                                                <div class="list-datetime"> 11am
                                                    <br/> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="list-toggle-container" data-toggle="collapse" href="#pending" aria-expanded="false">
                                        <div class="list-toggle uppercase"> Pending
                                            <span class="badge badge-default pull-right bg-white font-dark bold">3</span>
                                        </div>
                                    </a>
                                    <div class="panel-collapse collapse" id="pending">
                                        <ul>
                                            <li class="mt-list-item">
                                                <div class="list-icon-container">
                                                    <a href="javascript:;">
                                                        <i class="icon-close"></i>
                                                    </a>
                                                </div>
                                                <div class="list-datetime"> 11am
                                                    <br/> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </li>
                                            <li class="mt-list-item">
                                                <div class="list-icon-container">
                                                    <a href="javascript:;">
                                                        <i class="icon-close"></i>
                                                    </a>
                                                </div>
                                                <div class="list-datetime"> 11am
                                                    <br/> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </li>
                                            <li class="mt-list-item">
                                                <div class="list-icon-container">
                                                    <a href="javascript:;">
                                                        <i class="icon-close"></i>
                                                    </a>
                                                </div>
                                                <div class="list-datetime"> 11am
                                                    <br/> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Simple - Group</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-simple ext-1 group</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-simple ext-1 font-white bg-blue-chambray">
                                    <div class="list-head-title-container">
                                        <div class="list-date">Nov 8, 2015</div>
                                        <h3 class="list-title">Simple List</h3>
                                    </div>
                                </div>
                                <div class="mt-list-container list-simple ext-1 group">
                                    <a class="list-toggle-container" data-toggle="collapse" href="#completed-simple" aria-expanded="false">
                                        <div class="list-toggle done uppercase"> Completed
                                            <span class="badge badge-default pull-right bg-white font-green bold">2</span>
                                        </div>
                                    </a>
                                    <div class="panel-collapse collapse in" id="completed-simple">
                                        <ul>
                                            <li class="mt-list-item done">
                                                <div class="list-icon-container">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="list-datetime"> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Concept Proof</a>
                                                    </h3>
                                                </div>
                                            </li>
                                            <li class="mt-list-item done">
                                                <div class="list-icon-container">
                                                    <i class="icon-check"></i>
                                                </div>
                                                <div class="list-datetime"> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="list-toggle-container" data-toggle="collapse" href="#pending-simple" aria-expanded="false">
                                        <div class="list-toggle uppercase"> Pending
                                            <span class="badge badge-default pull-right bg-white font-dark bold">3</span>
                                        </div>
                                    </a>
                                    <div class="panel-collapse collapse" id="pending-simple">
                                        <ul>
                                            <li class="mt-list-item">
                                                <div class="list-icon-container">
                                                    <i class="icon-close"></i>
                                                </div>
                                                <div class="list-datetime"> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                </div>
                                            </li>
                                            <li class="mt-list-item">
                                                <div class="list-icon-container">
                                                    <i class="icon-close"></i>
                                                </div>
                                                <div class="list-datetime"> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                </div>
                                            </li>
                                            <li class="mt-list-item">
                                                <div class="list-icon-container">
                                                    <i class="icon-close"></i>
                                                </div>
                                                <div class="list-datetime"> 8 Nov </div>
                                                <div class="list-item-content">
                                                    <h3 class="uppercase">
                                                        <a href="javascript:;">Listings Feature</a>
                                                    </h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">News - Extended 2</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding <pre class="mt-code">.list-news ext-1</pre> class to the <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-news ext-1 font-white bg-yellow-crusta">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">News List</h3>
                                    </div>
                                    <div class="list-count pull-right bg-yellow-saffron">2</div>
                                </div>
                                <div class="mt-list-container list-news ext-2">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-thumb">
                                                <a href="javascript:;">
                                                    <img alt="" src="/admin/global/img/portfolio/600x600/12.jpg" />
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-yellow-casablanca"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-thumb">
                                                <a href="javascript:;">
                                                    <img alt="" src="/admin/global/img/portfolio/600x600/10.jpg" />
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-yellow-casablanca"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="list-thumb">
                                                <a href="javascript:;">
                                                    <img alt="" src="/admin/global/img/portfolio/600x600/08.jpg" />
                                                </a>
                                            </div>
                                            <div class="list-datetime bold uppercase font-dark"> 8 Nov, 2015 </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase bold">
                                                    <a href="javascript:;">Latest news on Metronic</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END : LISTS -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection