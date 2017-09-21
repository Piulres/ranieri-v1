@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/admin/home') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('permission_access')
                <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('expense_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span class="title">@lang('global.expense-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('expense_category_access')
                <li class="{{ $request->segment(2) == 'expense_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.expense_categories.index') }}">
                            <i class="fa fa-list"></i>
                            <span class="title">
                                @lang('global.expense-category.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('income_category_access')
                <li class="{{ $request->segment(2) == 'income_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.income_categories.index') }}">
                            <i class="fa fa-list"></i>
                            <span class="title">
                                @lang('global.income-category.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('income_access')
                <li class="{{ $request->segment(2) == 'incomes' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.incomes.index') }}">
                            <i class="fa fa-arrow-circle-right"></i>
                            <span class="title">
                                @lang('global.income.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('expense_access')
                <li class="{{ $request->segment(2) == 'expenses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.expenses.index') }}">
                            <i class="fa fa-arrow-circle-left"></i>
                            <span class="title">
                                @lang('global.expense.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('monthly_report_access')
                <li class="{{ $request->segment(2) == 'monthly_reports' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.monthly_reports.index') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">
                                @lang('global.monthly-report.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('task_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span class="title">@lang('global.task-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('task_access')
                <li class="{{ $request->segment(2) == 'tasks' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.tasks.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.tasks.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_status_access')
                <li class="{{ $request->segment(2) == 'task_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('global.task-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_tag_access')
                <li class="{{ $request->segment(2) == 'task_tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_tags.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('global.task-tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_calendar_access')
                <li class="{{ $request->segment(2) == 'task_calendars' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_calendars.index') }}">
                            <i class="fa fa-calendar"></i>
                            <span class="title">
                                @lang('global.task-calendar.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('client_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">@lang('global.client-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('client_access')
                <li class="{{ $request->segment(2) == 'clients' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.clients.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                @lang('global.clients.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_project_access')
                <li class="{{ $request->segment(2) == 'client_projects' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_projects.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.client-projects.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_note_access')
                <li class="{{ $request->segment(2) == 'client_notes' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_notes.index') }}">
                            <i class="fa fa-comments-o"></i>
                            <span class="title">
                                @lang('global.client-notes.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_document_access')
                <li class="{{ $request->segment(2) == 'client_documents' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_documents.index') }}">
                            <i class="fa fa-file-text-o"></i>
                            <span class="title">
                                @lang('global.client-documents.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_transaction_access')
                <li class="{{ $request->segment(2) == 'client_transactions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_transactions.index') }}">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">
                                @lang('global.client-transactions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_report_access')
                <li class="{{ $request->segment(2) == 'client_reports' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_reports.index') }}">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">
                                @lang('global.client-reports.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('client_management_setting_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('global.client-management-settings.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('client_currency_access')
                <li class="{{ $request->segment(2) == 'client_currencies' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_currencies.index') }}">
                            <i class="fa fa-money"></i>
                            <span class="title">
                                @lang('global.client-currencies.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_transaction_type_access')
                <li class="{{ $request->segment(2) == 'client_transaction_types' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_transaction_types.index') }}">
                            <i class="fa fa-exchange"></i>
                            <span class="title">
                                @lang('global.client-transaction-types.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_income_source_access')
                <li class="{{ $request->segment(2) == 'client_income_sources' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_income_sources.index') }}">
                            <i class="fa fa-database"></i>
                            <span class="title">
                                @lang('global.client-income-sources.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_status_access')
                <li class="{{ $request->segment(2) == 'client_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('global.client-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('client_project_status_access')
                <li class="{{ $request->segment(2) == 'client_project_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.client_project_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('global.client-project-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('content_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span class="title">@lang('global.content-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('content_category_access')
                <li class="{{ $request->segment(2) == 'content_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.content_categories.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('global.content-categories.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('content_tag_access')
                <li class="{{ $request->segment(2) == 'content_tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.content_tags.index') }}">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                @lang('global.content-tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('content_page_access')
                <li class="{{ $request->segment(2) == 'content_pages' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.content_pages.index') }}">
                            <i class="fa fa-file-o"></i>
                            <span class="title">
                                @lang('global.content-pages.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('internal_notification_access')
            <li class="{{ $request->segment(2) == 'internal_notifications' ? 'active' : '' }}">
                <a href="{{ route('admin.internal_notifications.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">@lang('global.internal-notifications.title')</span>
                </a>
            </li>
            @endcan
            

            

            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ route('admin.messenger.index') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('global.app_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
