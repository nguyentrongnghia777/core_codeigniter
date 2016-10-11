<?php

/**
 * Constants_helper
 *
 * @codeCoverageIgnore
 */
class Constants_helper
{
    // Database tables
    const TBL_GROUPS = 'tbl_groups';
    const TBL_USERS = 'tbl_users';
    const TBL_USERS_GROUPS = 'tbl_users_groups';
    const TBL_LOGIN_ATTEMPTS = 'tbl_login_attempts';

    // Roles
    const ROLES_MEMBER = 'member';
    const ROLES_MODERATOR = 'moderator';
    const ROLES_ADMIN = 'admin';

    // Permissions
    const PERMISSION_BASIC = 'basic';
    const PERMISSION_COMMENT = 'comment';
    const PERMISSION_MANAGE_USER = 'manage-user';
    const PERMISSION_MANAGE_REPORT = 'manage-report';
    const PERMISSION_MANAGE_COMMENT = 'manage-comment';
}
