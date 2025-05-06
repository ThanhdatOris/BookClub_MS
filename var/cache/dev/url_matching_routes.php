<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/activities' => [[['_route' => 'app_activities_index', '_controller' => 'App\\Controller\\ActivitiesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activities/attendance/toggle' => [[['_route' => 'app_activities_attendance_toggle', '_controller' => 'App\\Controller\\ActivitiesController::toggleAttendance'], null, ['POST' => 0], null, false, false, null]],
        '/activities/new' => [[['_route' => 'app_activities_new', '_controller' => 'App\\Controller\\ActivitiesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/attendances' => [[['_route' => 'app_attendances_index', '_controller' => 'App\\Controller\\AttendancesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/attendances/new' => [[['_route' => 'app_attendances_new', '_controller' => 'App\\Controller\\AttendancesController::new'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/funds/chart' => [[['_route' => 'app_funds_chart', '_controller' => 'App\\Controller\\DashboardController::getFundsChartData'], null, ['GET' => 0], null, false, false, null]],
        '/funds' => [[['_route' => 'app_funds_index', '_controller' => 'App\\Controller\\FundsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/funds/new' => [[['_route' => 'app_funds_new', '_controller' => 'App\\Controller\\FundsController::new'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/suggestions' => [[['_route' => 'admin_suggestions', '_controller' => 'App\\Controller\\ProfileController::viewSuggestions'], null, null, null, false, false, null]],
        '/proposals' => [[['_route' => 'app_proposals_index', '_controller' => 'App\\Controller\\ProposalsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/proposals/new' => [[['_route' => 'app_proposals_new', '_controller' => 'App\\Controller\\ProposalsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\SecurityController::connectGoogle'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\SecurityController::connectGoogleCheck'], null, null, null, false, false, null]],
        '/student-id' => [[['_route' => 'app_student_id_form', '_controller' => 'App\\Controller\\SecurityController::studentIdForm'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/update-student-id' => [[['_route' => 'app_update_student_id', '_controller' => 'App\\Controller\\SecurityController::updateStudentId'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [
            [['_route' => 'security_error', '_controller' => 'App\\Controller\\SecurityController::error'], null, null, null, false, false, null],
            [['_route' => 'error', '_controller' => 'App\\Controller\\SecurityController::error'], null, null, null, false, false, null],
        ],
        '/access-denied' => [[['_route' => 'app_access_denied', '_controller' => 'App\\Controller\\SecurityController::accessDenied'], null, null, null, false, false, null]],
        '/members' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/members/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['POST' => 0], null, false, false, null]],
        '/members/user/history' => [[['_route' => 'app_user_history', '_controller' => 'App\\Controller\\UsersController::history'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|ctivit(?'
                        .'|ies/([^/]++)(?'
                            .'|/(?'
                                .'|cancel(*:241)'
                                .'|participants(*:261)'
                                .'|edit(*:273)'
                                .'|join(*:285)'
                            .')'
                            .'|(*:294)'
                        .')'
                        .'|y_participant/(?'
                            .'|([^/]++)(*:328)'
                            .'|join/([^/]++)(*:349)'
                            .'|leave/([^/]++)(*:371)'
                            .'|delete/([^/]++)(*:394)'
                        .')'
                    .')'
                    .'|ttendances/(?'
                        .'|([^/]++)(?'
                            .'|(*:429)'
                            .'|/edit(*:442)'
                            .'|(*:450)'
                        .')'
                        .'|by_activity/([^/]++)(*:479)'
                    .')'
                    .'|dmin/suggestions/([^/]++)/(?'
                        .'|approve(*:524)'
                        .'|reject(*:538)'
                    .')'
                .')'
                .'|/funds/(?'
                    .'|([^/]++)(?'
                        .'|(*:569)'
                        .'|/edit(*:582)'
                        .'|(*:590)'
                    .')'
                    .'|export(*:605)'
                .')'
                .'|/pro(?'
                    .'|file/([^/]++)(?'
                        .'|(*:637)'
                        .'|/(?'
                            .'|edit(*:653)'
                            .'|suggest(*:668)'
                        .')'
                    .')'
                    .'|posals/([^/]++)(?'
                        .'|(*:696)'
                        .'|/(?'
                            .'|edit(*:712)'
                            .'|approve(*:727)'
                            .'|reject(*:741)'
                        .')'
                        .'|(*:750)'
                    .')'
                .')'
                .'|/members/([^/]++)(?'
                    .'|(*:780)'
                    .'|/(?'
                        .'|edit(*:796)'
                        .'|toggle\\-status(*:818)'
                    .')'
                    .'|(*:827)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => 'app_activities_cancel', '_controller' => 'App\\Controller\\ActivitiesController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        261 => [[['_route' => 'app_activities_participants', '_controller' => 'App\\Controller\\ActivitiesController::participants'], ['id'], ['GET' => 0], null, false, false, null]],
        273 => [[['_route' => 'app_activities_edit', '_controller' => 'App\\Controller\\ActivitiesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'activity_join', '_controller' => 'App\\Controller\\ActivitiesController::joinActivity'], ['id'], ['POST' => 0], null, false, false, null]],
        294 => [
            [['_route' => 'app_activities_show', '_controller' => 'App\\Controller\\ActivitiesController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_activities_delete', '_controller' => 'App\\Controller\\ActivitiesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        328 => [[['_route' => 'app_activity_participant_index', '_controller' => 'App\\Controller\\ActivityParticipantController::index'], ['activityId'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_activity_participant_join', '_controller' => 'App\\Controller\\ActivityParticipantController::join'], ['activityId'], ['POST' => 0], null, false, true, null]],
        371 => [[['_route' => 'app_activity_participant_leave', '_controller' => 'App\\Controller\\ActivityParticipantController::leave'], ['activityId'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_activity_participant_delete', '_controller' => 'App\\Controller\\ActivityParticipantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        429 => [[['_route' => 'app_attendances_show', '_controller' => 'App\\Controller\\AttendancesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        442 => [[['_route' => 'app_attendances_edit', '_controller' => 'App\\Controller\\AttendancesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        450 => [[['_route' => 'app_attendances_delete', '_controller' => 'App\\Controller\\AttendancesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_attendances_by_activity', '_controller' => 'App\\Controller\\AttendancesController::byActivity'], ['activityId'], ['GET' => 0], null, false, true, null]],
        524 => [[['_route' => 'admin_suggestions_approve', '_controller' => 'App\\Controller\\ProfileController::approveSuggestion'], ['index'], null, null, false, false, null]],
        538 => [[['_route' => 'admin_suggestions_reject', '_controller' => 'App\\Controller\\ProfileController::rejectSuggestion'], ['index'], null, null, false, false, null]],
        569 => [[['_route' => 'app_funds_show', '_controller' => 'App\\Controller\\FundsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        582 => [[['_route' => 'app_funds_edit', '_controller' => 'App\\Controller\\FundsController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        590 => [[['_route' => 'app_funds_delete', '_controller' => 'App\\Controller\\FundsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        605 => [[['_route' => 'app_funds_export', '_controller' => 'App\\Controller\\FundsController::export'], [], ['GET' => 0], null, false, false, null]],
        637 => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], ['studentId'], null, null, false, true, null]],
        653 => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], ['studentId'], null, null, false, false, null]],
        668 => [[['_route' => 'profile_suggest', '_controller' => 'App\\Controller\\ProfileController::suggest'], ['studentId'], null, null, false, false, null]],
        696 => [[['_route' => 'app_proposals_show', '_controller' => 'App\\Controller\\ProposalsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        712 => [[['_route' => 'app_proposals_edit', '_controller' => 'App\\Controller\\ProposalsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        727 => [[['_route' => 'app_proposals_approve', '_controller' => 'App\\Controller\\ProposalsController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        741 => [[['_route' => 'app_proposals_reject', '_controller' => 'App\\Controller\\ProposalsController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        750 => [[['_route' => 'app_proposals_delete', '_controller' => 'App\\Controller\\ProposalsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        780 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        796 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        818 => [[['_route' => 'app_users_toggle_status', '_controller' => 'App\\Controller\\UsersController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        827 => [
            [['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
