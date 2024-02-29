<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>test</span></a>
        </div>

        <div class="clearfix"></div>



        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"><i
                                class="fa fa-plus"></i>Add Component</a></li>
                </ul>
                @if (session()->has('header') or Session('hero') or Session('component') or Session('footer'))
                    <h3>Component</h3>
                    <ul class="nav side-menu">
                        @if (session()->has('header'))
                            <li><a href="{{ url('/delete-component?component=header') }}">Header</a></li>
                        @endif
                        @if (session()->has('hero'))
                            <li><a href="{{ url('/delete-component?component=hero') }}">Hero</a></li>
                        @endif
                        @if (session()->has('component'))
                            @foreach (Session('component') as $key => $component)
                                @switch($component)
                                    @case(2)
                                        <li><a
                                                href="{{ url('/delete-component?component=component-' . $key . '') }}">Service</a>
                                        </li>
                                    @break

                                    @case(3)
                                        <li><a href="{{ url('/delete-component?component=component-' . $key . '') }}">About</a>
                                        </li>
                                    @break

                                    @case(4)
                                        <li><a
                                                href="{{ url('/delete-component?component=component-' . $key . '') }}">Contact</a>
                                        </li>
                                    @break
                                @endswitch
                            @endforeach
                        @endif
                        @if (Session('footer'))
                            <li><a href="{{ url('/delete-component?component=footer') }}">Footer</a>
                            </li>
                        @endif
                    </ul>
                @endif
            </div>
            {{-- <div class="menu_section d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".bs-example-modal-lg">Add Component</button>
            </div> --}}


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Component</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('/component') }}" method="post">
                @csrf
                <div class="modal-body">
                    <select id="heard" name="layer1" class="form-control" required>
                        <option value="" selected disabled>Add Component..</option>
                        <option value="6">Navbar</option>
                        <option value="1">Hero</option>
                        <option value="2">Services</option>
                        <option value="3">About</option>
                        <option value="4">Contact</option>
                        <option value="5">Footer</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
