<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            @if (Auth::check())
                <div class="pull-left image">
                    <img src="{{ Gravatar::get(Auth::user()->email , 'small') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->full_name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            @endif
        </div>

        @if ( Setting::get('app.search_box') )
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
            </form>
            <!-- /.search form -->
        @endif

        <ul class="sidebar-menu">
            <li><a href="/dashboard"><i class="fa fa-dashboard"></i>&nbsp;<span>Dashboard</span></a></li>
        </ul>

        <ul class="sidebar-menu">
            <li class="treeview"><a href=""><i class="fa fa-cog"></i><span>Admin</span><i class="fa fa-angle-down pull-right"></i></a>
                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="/admin/audit"><i class="fa fa-cog"></i>&nbsp;<span>Audit</span></a>
                    </li>
                    <li>
                        <a href="/admin/errors"><i class="fa fa-cog"></i>&nbsp;<span>Error</span></a>
                    </li>
                    <li>
                        <a href="/admin/modules"><i class="fa fa-cog"></i>&nbsp;<span>Modules</span></a>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="fa fa-cog"></i><span>Security</span><i class="fa fa-angle-down pull-right"></i></a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="active">
                                <a href="/admin/menus"><i class="fa fa-cog"></i>&nbsp;<span>Menus</span><span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a href="/admin/users"><i class="fa fa-cog"></i>&nbsp;<span>Users</span></a>
                            </li>
                            <li>
                                <a href="/admin/roles"><i class="fa fa-cog"></i>&nbsp;<span>Roles</span></a>
                            </li>
                            <li>
                                <a href="/admin/permissions"><i class="fa fa-bolt"></i>&nbsp;<span>Permissions</span></a>
                            </li>
                            <li>
                                <a href="/admin/routes"><i class="fa fa-road"></i>&nbsp;<span>Routes</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/settings"><i class="fa fa-cog"></i>&nbsp;<span>Settings</span></a>
                    </li>
                </ul>
            </li>

            <li class="treeview"><a href=""><i class="fa fa-cog"></i><span>APIs</span><i class="fa fa-angle-down pull-right"></i></a>
                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="/admin/api"><i class="fa fa-cog"></i>&nbsp;<span>All</span></a>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="fa fa-cog"></i><span>SMS APIs</span><i class="fa fa-angle-down pull-right"></i></a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="active">
                                <a href="/admin/api/twilio"><i class="fa fa-cog"></i>&nbsp;<span>Twilio</span><span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a href="/admin/api/africastalking"><i class="fa fa-cog"></i>&nbsp;<span>AfricaStalking</span></a>
                            </li>
                            <li>
                                <a href="/admin/api/textghana"><i class="fa fa-cog"></i>&nbsp;<span>TextGhana</span></a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="fa fa-cog"></i><span>Money Transfer APIs</span><i class="fa fa-angle-down pull-right"></i></a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="active">
                                <a href="/admin/api/worldpay"><i class="fa fa-cog"></i>&nbsp;<span>WorldPay</span><span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a href="/admin/api/mfsafrica"><i class="fa fa-cog"></i>&nbsp;<span>MFS Africa</span></a>
                            </li>
                            <li>
                                <a href="/admin/api/homesend"><i class="fa fa-cog"></i>&nbsp;<span>Homesend</span></a>
                            </li>
                            <li>
                                <a href="/admin/api/transferto"><i class="fa fa-cog"></i>&nbsp;<span>Transfer-To</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/api/gbg"><i class="fa fa-cog"></i>&nbsp;<span>GBG</span></a>
                    </li>
                    <li>
                        <a href="/admin/api/pca"><i class="fa fa-cog"></i>&nbsp;<span>PCA</span></a>
                    </li>
                    <li>
                        <a href="/admin/api/ofac"><i class="fa fa-cog"></i>&nbsp;<span>OFAC</span></a>
                    </li>
                    <li>
                        <a href="/admin/api/openexchangerates"><i class="fa fa-cog"></i>&nbsp;<span>OpenExchangeRates</span></a>
                    </li>
                    <li>
                        <a href="/admin/api/mailchimp"><i class="fa fa-cog"></i>&nbsp;<span>MailChimp</span></a>
                    </li>
                </ul>
            </li>
            <!-- <li>
                <a href="/admin/countries"><i class="fa fa-cog"></i>&nbsp;<span>Countries</span></a>
            </li> -->
            <li class="treeview"><a href=""><i class="fa fa-cog"></i><span>Currencies</span><i class="fa fa-angle-down pull-right"></i></a>

                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="/admin/api/countries"><i class="fa fa-cog"></i>&nbsp;<span>Countries</span></a>
                    </li>
                    <li>
                        <a href="/admin/api/pca"><i class="fa fa-cog"></i>&nbsp;<span>Flags</span></a>
                    </li>
                    <li>
                        <a href="/admin/api/twilio"><i class="fa fa-cog"></i>&nbsp;<span>Exchange Rates</span></a>
                    </li>
                </ul>
            </li>
            
            <li class="treeview"><a href=""><i class="fa fa-cog"></i><span>Transactions</span><i class="fa fa-angle-down pull-right"></i></a>

                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>All</span></a>
                    </li>
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Live</span></a>
                    </li>
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Past</span></a>
                    </li>
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Errors</span></a>
                    </li>
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Uncollected</span></a>
                    </li>
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Search</span></a>
                    </li>
                   
                </ul>
            </li>
            <!-- <li>
                <a href="/admin/errors"><i class="fa fa-cog"></i>&nbsp;<span>Upload Docs</span></a>
            </li> -->
            <li class="treeview"><a href=""><i class="fa fa-cog"></i><span>Uploads</span><i class="fa fa-angle-down pull-right"></i></a>

                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Documents</span></a>
                    </li>
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Profiles</span></a>
                    </li>
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Transactions</span></a>
                    </li>
                   
                </ul>
            </li>
            <li class="treeview"><a href=""><i class="fa fa-cog"></i><span>Support</span><i class="fa fa-angle-down pull-right"></i></a>

                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="/admin/"><i class="fa fa-cog"></i>&nbsp;<span>Referrals</span></a>
                    </li>
                    <li>
                        <a href="{!! route('invite') !!}"><i class="fa fa-cog"></i>&nbsp;<span>Refer a Friend</span></a>
                    </li>
                </ul>
            </li>

            
            

        </ul>

        {{--
        {!! MenuBuilder::renderMenu('home')  !!}

        {!! MenuBuilder::renderMenu('admin', true)  !!}
        --}}

    </section>
    <!-- /.sidebar -->
</aside>
