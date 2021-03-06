<?php
namespace App\Enum;

class RolesPermissionsEnum {
    public const user = [
        PermissionsEnum::write_articles,
        PermissionsEnum::write_questions,
        PermissionsEnum::write_comments,
        PermissionsEnum::vote,
    ];

    public const editor = [
        PermissionsEnum::write_articles,
        PermissionsEnum::write_questions,
        PermissionsEnum::write_comments,
        PermissionsEnum::vote,
        PermissionsEnum::manage_articles,
        PermissionsEnum::remove_articles,
        PermissionsEnum::manage_questions,
        PermissionsEnum::remove_questions,
        PermissionsEnum::manage_comments,
        PermissionsEnum::remove_comments,
        PermissionsEnum::manage_categories,
        PermissionsEnum::remove_categories,
        PermissionsEnum::manage_tags,
        PermissionsEnum::remove_tags,
        PermissionsEnum::manage_images,
        PermissionsEnum::remove_images,
        PermissionsEnum::view_admin_pages,
    ];

    public const admin = [
        PermissionsEnum::write_articles,
        PermissionsEnum::write_questions,
        PermissionsEnum::write_comments,
        PermissionsEnum::vote,
        PermissionsEnum::manage_articles,
        PermissionsEnum::remove_articles,
        PermissionsEnum::manage_questions,
        PermissionsEnum::remove_questions,
        PermissionsEnum::manage_comments,
        PermissionsEnum::remove_comments,
        PermissionsEnum::manage_categories,
        PermissionsEnum::remove_categories,
        PermissionsEnum::manage_tags,
        PermissionsEnum::remove_tags,
        PermissionsEnum::manage_images,
        PermissionsEnum::remove_images,
        PermissionsEnum::manage_users,
        PermissionsEnum::remove_users,
        PermissionsEnum::view_admin_pages,
    ];

    public const super_admin = [
        PermissionsEnum::write_articles,
        PermissionsEnum::write_questions,
        PermissionsEnum::write_comments,
        PermissionsEnum::vote,
        PermissionsEnum::manage_articles,
        PermissionsEnum::remove_articles,
        PermissionsEnum::manage_questions,
        PermissionsEnum::remove_questions,
        PermissionsEnum::manage_comments,
        PermissionsEnum::remove_comments,
        PermissionsEnum::manage_categories,
        PermissionsEnum::remove_categories,
        PermissionsEnum::manage_tags,
        PermissionsEnum::remove_tags,
        PermissionsEnum::manage_images,
        PermissionsEnum::remove_images,
        PermissionsEnum::manage_users,
        PermissionsEnum::remove_users,
        PermissionsEnum::manage_roles_and_permissions,
        PermissionsEnum::view_admin_pages,
    ];

    public static function values() {
        return [
            'user' => self::user,
            'editor' => self::editor,
            'admin' => self::admin,
            'super_admin' => self::super_admin,
        ];
    }
}
