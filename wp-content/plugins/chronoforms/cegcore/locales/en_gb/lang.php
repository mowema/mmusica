<?php
/**
* ChronoCMS version 1.0
* Copyright (c) 2012 ChronoCMS.com, All rights reserved.
* Author: (ChronoCMS.com Team)
* license: Please read LICENSE.txt
* Visit http://www.ChronoCMS.com for regular updates and information.
**/
namespace GCore\Locales\EnGb;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Lang {
	const ACLS_ACCESS_PATH = "Access this path";
	const ADDONS_INSTALL_UPLOAD_ERROR = "Error occurred when uploading the installer file";
	const ADDONS_INSTALL_EXTRACT_ERROR = "Error occurred when extracting the installer file";
	const ADDONS_INSTALL_FILE_ERROR = "Error occurred when installing the file";
	const ADDONS_BAD_XML_REQUIRED_INFO_NOT_FOUND = "Error occurred: Required XML info not found";
	const ADDONS_BAD_XML_ADDON_NAME_NOT_FOUND = "Error occurred: Bad XML, Addon name tag not found";
	const ADDONS_MOVING_ERROR = "Error occurred: Couldn't move the files";
	const ADDONS_INSTALL_SUCCESS = "Your addon has been installed successfully";
	const ADDONS_INSTALL_ERROR = "Error occurred: Install failed";
	const ADDONS_BAD_XML_ADDON_PARAMS_NOT_FOUND = "Error occurred: Bad XML, Addon parameters not found";
	const ADDONS_BAD_XML_ADDON_TAGS_NOT_FOUND = "Error occurred: Bad XML, Addon tags not found";
	const ADDONS_UNINSTALL_SUCCESS = "Your addon has been uninstalled successfully";
	const ADDONS_UNINSTALL_REMOVING_FILES_FAILED = "Error occurred: Couldn't remove files";
	const ADDONS_UNINSTALL_REMOVING_RECORDS_FAILED = "Error occurred: Couldn't remove database records";
	const ADDONS_UNINSTALL_FAILED = "Error occurred: Uninstall failed";
	const SAVE_SUCCESS = "Saved Successfully";
	const SAVE_ERROR = "Save Failed";
	const USERS_CANT_UPDATE_SITE_OWNER = "Only the site owner can update his own account.";
	const CACHE_FILES_DELETED = "Cache files removed successfully";
	const CPANEL_SAVE_CONFIG_SUCCESS = "Configuration saved successfully";
	const CPANEL_SAVE_CONFIG_ERROR = "Couldn't save configuration";
	const MEDIA_UPLOAD_ERROR = "Error occurred: Couldn't upload file(s)";
	const MEDIA_UPLOAD_SUCCESS = "File(s) uploaded successfully";
	const MEDIA_EMPTY_DIR_NAME_ERROR = "Error occurred: Empty directory name";
	const MEDIA_CREATE_DIR_ERROR = "Error occurred: Couldn't create directory";
	const MEDIA_CREATE_DIR_SUCCESS = "Directory created successfully";
	const MODULES_NO_CONFIG_FILE_FOUND = "Configuration is not available, file not found";
	const ALL = "All";
	const MODEL = "Model";
	const VOTES = "Votes";
	const IMAGE = "Image";
	const DETAILS = "Details";
	const CATEGORIES_MODEL_DESC = "The model path associated with this category, leave empty to use for articles";
	const CATEGORIES_LIST_TYPE = "List Type";
	const CATEGORIES_LIST_TYPE_LIST = "List";
	const CATEGORIES_LIST_TYPE_BLOG = "Blog";
	const FILES_DOWNLOAD = "Download";
	const FILES_INLINE = "Display Inline";
	const MODULES_SAVE_CONFIG_SUCCESS = "Configuration saved successfully";
	const MODULES_SAVE_CONFIG_ERROR = "Error occurred: Couldn't save configuration";
	const TEMPLATES_NO_CONFIG_FILE_FOUND = "Configuration is not available, file not found";
	const TEMPLATES_SAVE_CONFIG_SUCCESS = "Configuration saved successfully";
	const TEMPLATES_SAVE_CONFIG_ERROR = "Error occurred: Couldn't save configuration";
	const ACO_TITLE_REQUIRED = "ACO title is required";
	const ACO_RESOURCE_REQUIRED = "ACO resource/path is required";
	const ARTICLE_TITLE_REQUIRED = "Article title is required";
	const CATEGORY_TITLE_REQUIRED = "Category title is required";
	const FILE_TITLE_REQUIRED = "File title is required";
	const FILE_PATH_REQUIRED = "File path is required";
	const GROUP_TITLE_REQUIRED = "Group title is required";
	const MENU_CANT_DELETE_THIS_ITEM = "You can't delete this menu";
	const MENUITEM_TITLE_REQUIRED = "Menuitem title is required";
	const MENUITEM_TYPE_REQUIRED = "Menuitem type is required";
	const MODULE_TITLE_REQUIRED = "Module title is required";
	const MODULE_SELECT_TYPE = "Select Module Type";
	const PAGE_TITLE_REQUIRED = "Page title is required";
	const TAG_TITLE_REQUIRED = "Tag title is required";
	const TEMPLATE_NAME_REQUIRED_NO_SPACES = "Theme name is required";
	const TEMPLATE_TITLE_REQUIRED = "Theme title is required";
	const TEMPLATE_SELECT_SOURCE_TEMPLATE = "Select your source template";
	const USER_NAME_REQUIRED_ALPHA_ONLY = "Name is required and may contain alphapetic characters only";
	const USER_USERNAME_TAKEN = "Username is already taken";
	const USER_USERNAME_REQUIRED_NO_SPACES = "Username is required";
	const USER_EMAIL_USED = "Email address is already used";
	const USER_VALID_EMAIL_REQUIRED = "A valid email address is required";
	const USER_PASSWORDS_MUST_MATCH = "Passwords should match";
	const USER_PASSWORD_REQUIRED = "Password is required";
	const USERS_CANT_DELETE_SITE_OWNER = "Error occurred: you can't delete the first super admin.";
	const ADMINMENU_EXTENSIONS_PARENT = "Extensions list parent";
	const ADMINMENU_EXTENSIONS_PARENT_DESC = "The admin menu item id under which new installed extensions will be listed.";
	const USERS_WELCOME = "Welcome";
	const USERS_LAST_LOGIN_AT = "Last Login was at";
	const LOG_OUT = "Logout";
	const VIEW_WEBSITE = "View Website";
	const GENERAL = "General";
	const NO = "No";
	const YES = "Yes";
	const APPLY = "Apply";
	const SAVE = "Save";
	const CANCEL = "Cancel";
	const ACLS_ITEM_DETAILS = "Item Details";
	const TITLE = "Title";
	const ACLS_ACO_FIELD_DESC = "The logical namespace path to the resource, where \GCore is the root, then '\Admin' if the path is under the admin area, then the extension name then a class name";
	const ENABLED = "Enabled";
	const PERMISSIONS = "Permissions";
	const INHERITED = "Inherited";
	const NOT_SET = "Not Set";
	const ALLOWED = "Allowed";
	const DENIED = "Denied";
	const ACLS_LIST_TITLE = "ACL Manager";
	const _NEW_ = "New";
	const DELETE = "Remove";
	const ADMIN_PERMISSIONS = "Admin Permissions";
	const FRONT_PERMISSIONS = "Front Permissions";
	const CPANEL_SYSUPDATE_TITLE = "System Update";
	const CPANEL_UPLOAD_AND_UPDATE = "Upload & Update";
	const CPANEL_SELECT_UPDATE_FILE = "Select update file";
	const CPANEL_SELECT_UPDATE_FILE_DESC = "Your update file downloaded from www.chronocms.com, should be .zip";
	const CPANEL_SYSINFO_DIR_NAME = "Directory Name";
	const CPANEL_SYSINFO_DIR_STATUS = "Status";
	const CPANEL_SYSINFO_WRITABLE = "Writable";
	const CPANEL_SYSINFO_NOT_WRITABLE = "Not Writable";
	const CONFIGS_META_ROBOTS = "Robots";
	const CONFIGS_META_ROBOTS_DESC = "Site wide meta robots tag content";
	const CPANEL_UPDATE_UPLOAD_ERROR = "Error uploading the update package";
	const CPANEL_FILES_UPDATE_ERROR = "System files couldn't be updated.";
	const CPANEL_FILES_UPDATE_SUCCESS = "System files were updated successfully.";
	const CPANEL_UPDATE_EXTRACT_ERROR = "Error extracting the update package";
	const CPANEL_UPDATE_FILE_ERROR = "Update package file type is corrupted or not supported.";
	const ARTICLES_ARTICLE_ID = "Article ID";
	const CATEGORIES_CATEGORY_ID = "Category ID";
	const SEARCH = "Search";
	const ADDONS_EXTENSIONS_LIST_TITLE = "Extensions Manager";
	const UPDATE_LIST = "Update List";
	const NAME = "Name";
	const ORDER = "Order";
	const ADDONS_LIST_TITLE = "Addons Manager";
	const UNINSTALL = "Uninstall";
	const TYPE = "Type";
	const EXTENSION = "Extension";
	const MODULE = "Module";
	const TEMPLATE = "Template";
	const FILTER = "Filter";
	const SITE = "Site";
	const INSTALLED = "Installed";
	const UPDATED = "Updated";
	const AUTHOR = "Author";
	const VERSION = "Version";
	const ADDONS_INSTALL_TITLE = "Addons Installer";
	const ADDONS_UPLOAD_AND_INSTALL = "Upload & Install";
	const ADDONS_MANUAL_INSTALL = "Manual Install";
	const ADDONS_SELECT_FILE = "Select File";
	const ADDONS_SELECT_FILE_DESC = "Select your installer package file, it should be .zip";
	const ADDONS_SERVER_PATH = "Insert absolute path";
	const ADDONS_SERVER_PATH_DESC = "This should be the absolute server path to your extracted package folder";
	const ALIAS = "Alias";
	const CATEGORY = "Category";
	const UNCATEGORIZED = "Uncategorized";
	const PUBLISHED = "Published";
	const ARTICLES_INTRO_TEXT = "Intro Content";
	const CONTENT = "Content";
	const TAGS = "Tags";
	const ARTICLES_LIST_TITLE = "Articles";
	const SETTINGS = "Settings";
	const CREATED = "Created";
	const MODIFIED = "Modified";
	const BLOG_VIEW = "Blog View";
	const LIST_VIEW = "List Vied";
	const READ_MORE = "Read more";
	const TAGS_TAG_ALIAS = "Tag Alias";
	const CATEGORIES_UNCATEGORIZED = "Uncategorized";
	const ARTICLES_COUNT_HITS = "Enable hits counter";
	const ARTICLES_CREATED_DATE_POSITION = "Created date position";
	const TOP = "Top";
	const BOTTOM = "Bottom";
	const ARTICLES_MODIFIED_DATE_POSITION = "Modified date position";
	const ARTICLES_PRINT_LINK_POSITION = "Print link position";
	const ARTICLES_TAGS_POSITION = "Tags list position";
	const ARTICLES_CATEGORY_POSITION = "Category title position";
	const ARTICLES_HITS_POSITION = "Hits count position";
	const ARTICLES_AUTHOR_POSITION = "Author name position";
	const CACHE_LIST_TITLE = "Cached Items Manager";
	const CACHE_LAST_UPDATED = "Last Updated";
	const CACHE_FILE_SIZE = "File Size";
	const CATEGORIES_ITEM_DETAILS = "Category Details";
	const _PARENT_ = "Parent";
	const POSITION = "Position";
	const DESCRIPTION = "Description";
	const PARAMETERS = "Parameters";
	const CATEGORIES_LIST_LIMIT = "List limit";
	const CATEGORIES_LIST_TITLE = "Categories Manager";
	const SYSTEM = "System";
	const EMAILS = "Emails";
	const DATABASE = "Database";
	const CONFIGS_SITE_TITLE = "Site Title";
	const CONFIGS_PREPEND_SITE_TITLE = "Prepend Site Title";
	const CONFIGS_LIST_LIMIT = "Default list limit";
	const CONFIGS_LIST_LIMIT_DESC = "The default limit of all system lists";
	const CONFIGS_MAX_LIST_LIMIT = "Max list limit";
	const CONFIGS_MAX_LIST_LIMIT_DESC = "The maximum list limit of any list, selecting a limit over this will not be possible to prevent loading huge amounts of records.";
	const CONFIGS_SECRET_TOKEN = "Security token";
	const CONFIGS_SECRET_TOKEN_DESC = "A random hash string which can be used for different security purposes.";
	const CONFIGS_JQUERY_THEME = "JQuery Theme";
	const UI_BASE = "Silver - Base";
	const UI_ORANGE = "Orange - Lightness";
	const CONFIGS_DEBUG_SECTION = "Debug Settings";
	const CONFIGS_ENABLE_DEBUG = "Enable Debug";
	const CONFIGS_ERROR_REPORTING = "Error reporting";
	const NONE = "None";
	const _DEFAULT_ = "Default";
	const CONFIGS_SESSIONS_SECTION = "Sessions Settings";
	const CONFIGS_SESSION_HANDLER = "Session Handler";
	const PHP = "PHP";
	const CONFIGS_SESSION_LIFETIME = "Session lifetime";
	const CONFIGS_COOKIE_DOMAIN = "Cookie domain name";
	const CONFIGS_COOKIE_PATH = "Cookie path";
	const CONFIGS_SEF_SECTION = "SEF Settings";
	const CONFIGS_SEF_URLS = "SEF URLs";
	const CONFIGS_SEF_URLS_DESC = "Should be ON, will enable frontend friendly URLs";
	const CONFIGS_SEF_REWRITE = "SEF rewrite";
	const CONFIGS_SEF_REWRITE_DESC = "You must have .htaccess in the root to use this, this will remove the index.php in the urls.";
	const CONFIGS_CACHE_SECTION = "Cache Settings";
	const CONFIGS_ENABLE_CACHE = "Enable Cache";
	const CONFIGS_ENABLE_CACHE_DESC = "Cache should be ON and you must have the cache directory in the root writable by the user running the web server's process.";
	const CONFIGS_CACHE_ENGINE = "Cache Engine";
	const FILE = "File";
	const CONFIGS_APP_CACHE_EXPIRY = "Global cache lifetime";
	const CONFIGS_APP_CACHE_EXPIRY_DESC = "The global system cache expiry limit";
	const CONFIGS_ENABLE_DBINFO_CACHE = "DB Info cache";
	const CONFIGS_ENABLE_DBINFO_CACHE_DESC = "Turning this OFF will badly affect the site performance.";
	const CONFIGS_DBINFO_CACHE_EXPIRY = "DB info cache lifetime";
	const CONFIGS_DBINFO_CACHE_EXPIRY_DESC = "The expiry time for database tables info, should be something high like 1 day => 43200";
	const CONFIGS_ENABLE_QUERY_CACHE = "Queries caching";
	const CONFIGS_ENABLE_QUERY_CACHE_DESC = "The system can cache query results, this can improve the overall performance";
	const CONFIGS_QUERY_CACHE_EXPIRY = "Queries cache lifetime";
	const CONFIGS_QUERY_CACHE_EXPIRY_DESC = "The expiry time limit for cached queries data.";
	const CONFIGS_LANGUAGE_SECTION = "Language Settings";
	const CONFIGS_SITE_LANGUAGE = "Site Language";
	const CONFIGS_DETECT_LANGUAGE = "Detect language";
	const CONFIGS_META_KEYWORDS = "Meta Keywords";
	const CONFIGS_META_KEYWORDS_DESC = "Site wide meta keywords list";
	const CONFIGS_META_DESCRIPTION = "Meta Description";
	const CONFIGS_META_DESCRIPTION_DESC = "Site wide meta description";
	const CONFIGS_DETECT_LANGUAGE_DESC = "Try to detect user's browser language";
	const CONFIGS_MAIL_FROM_NAME = "From name";
	const CONFIGS_MAIL_FROM_EMAIL = "From email";
	const CONFIGS_MAIL_REPLY_NAME = "Reply name";
	const CONFIGS_MAIL_REPLY_EMAIL = "Reply email";
	const CONFIGS_ENABLE_SMTP = "Enable SMTP";
	const CONFIGS_SMTP_HOST = "SMTP Host";
	const CONFIGS_SMTP_PORT = "SMTP Port";
	const CONFIGS_SMTP_USERNAME = "SMTP username";
	const CONFIGS_SMTP_PASSWORD = "SMTP password";
	const CONFIGS_DB_HOST = "Database host";
	const CONFIGS_DB_TYPE = "Database type";
	const CONFIGS_DB_NAME = "Database name";
	const CONFIGS_DB_USER = "Database username";
	const CONFIGS_DB_PASS = "Database password";
	const CONFIGS_DB_PREFIX = "Tables prefix";
	const CONFIGS_CACHE_PERMISSIONS = "Cache permissions";
	const CONFIGS_CACHE_PERMISSIONS_DESC = "Cache paths permissions in the user's session.";
	const PATH = "Path";
	const FILES_VIEW = "View type";
	const FILES_LIST_TITLE = "Downloads Manager";
	const FILES_EXISTS = "Exists";
	const FILES_INLINE_TYPES = "Inline display extensions";
	const FILES_COUNT_HITS = "Hits";
	const GROUPS_LIST_TITLE = "Groups Manager";
	const MEDIA_DIRECTORY = "Current Directory";
	const MEDIA_CREATE_FOLDER = "Create New Folder";
	const MEDIA_GET_URL = "Get Full URL";
	const MEDIA_GET_PATH = "Get Relative Path";
	const MEDIA_UPLOAD_FILES = "Upload Files";
	const MEDIA_UPLOADING = "Uploading";
	const MENUITEMS_ITEM_DETAILS = "MenuItem Details";
	const PAGE = "Page";
	const LINK = "Link";
	const SEPARATOR = "Separator";
	const MENU = "Menu";
	const MENUITEMS_LIST_TITLE = "MenuItems Manager";
	const MENUS_LIST_TITLE = "Menus Manager";
	const MENUS_MENU_ITEMS = "MenuItems List";
	const PAGES = "Pages";
	const MODULES_SHOW_TITLE = "Show title";
	const MODULES_CLASS_SFX = "Class suffix";
	const EXTENSIONS = "Extensions";
	const MODULES_SOURCE_MODULE = "Source Module";
	const MODULES_LIST_TITLE = "Modules Manager";
	const FRONT = "Front";
	const ADMIN = "Admin";
	const LEVEL = "Level";
	const _STATIC_ = "Static";
	const PAGES_LIST_TITLE = "Pages Manager";
	const TAGS_FOREGROUND_COLOR = "Foreground color";
	const TAGS_BACKGROUND_COLOR = "Background color";
	const TAGS_LIST_TITLE = "Tags Manager";
	const TAGS_LIST_LIMIT = "List limit";
	const TEMPLATES_NAME_DESC = "A unique name for your theme.";
	const TEMPLATES_SOURCE_TEMPLATE = "Source Template";
	const TEMPLATES_LIST_TITLE = "Templates/Themes Manager";
	const THEME = "Theme";
	const CONFIGURE = "Configure";
	const USERNAME = "Username";
	const EMAIL = "Email";
	const PASSWORD = "Password";
	const PASSWORD_CONFIRM = "Confirm Password";
	const GROUPS = "Groups";
	const USERS_BLOCKED = "Blocked";
	const USERS_LIST_TITLE = "Users Manager";
	const GROUP = "Group";
	const USERS_ACTIVATED = "Activated";
	const USERS_LAST_VISIT = "Last Visited";
	const LOG_IN = "Login";
	const USERS_REGISTRATION = "Registration";
	const USERS_PROFILE = "Profile";
	const USERS_ENABLE_REGISTRATION = "Enable new registrations";
	const USERS_ACCOUNT_ACTIVATION = "New accounts activation";
	const USERS_BY_USER = "By User";
	const USERS_AUTOMATIC = "Automatic - No activation";
	const USERS_BY_ADMIN = "By Admin";
	const USERS_PUBLIC_GROUPS = "Public groups";
	const USERS_REGISTERED_GROUPS = "Registration groups";
	const USERS_MODERATORS_GROUPS = "Moderators groups";
	const USERS_ENABLE_FORGOT_PASSWORD = "Enable forgot password link";
	const USERS_ENABLE_FORGOT_USERNAME = "Enable forgot username link";
	const USERS_ENABLE_CREATE_ACCOUNT = "Enable create account link";
	const USERS_ENABLE_PROFILE_TITLE = "Display profile title";
	const USERS_SHOW_MEMBER_SINCE = "Display registration date";
	const USERS_SHOW_LAST_VISITED = "Display last visit date";
	const FILES_FILE_NOT_FOUND = "File Not Found";
	const USERS_NEW_REGISTRATIONS_ARE_DISABLED = "New registrations are currently disabled";
	const USERS_YOU_ARE_ALREADY_LOGGED_IN = "You can't take this action because are already logged in";
	const USERS_REGISTRATION_SUCCESS = "You have been registered successfully";
	const USERS_REGISTRATION_ERROR = "An error has occurred in your registration";
	const USERS_REGISTRATION_EMAIL_SUBJECT_ACCOUNT_DETAILS = "Account details for {User.name} at {domain}";
	const USERS_REGISTRATION_EMAIL_BODY_ACCOUNT_DETAILS = "Hello {User.name},\n\nThank you for registering at {domain}.\n\nYou may now log in to {url} using the username and password you used in the registration.";
	const USERS_REGISTRATION_EMAIL_SUBJECT_ACTIVATE_ACCOUNT = "Account details for {User.name} at {domain}";
	const USERS_REGISTRATION_EMAIL_BODY_ACTIVATE_ACCOUNT = "Hello {User.name},\n\nThank you for registering at {domain}.\n\nYour account is created and must be activated before you can use it.\nTo activate the account click on the following link or copy-paste it in your browser:\n{User.activation}\n\nAfter activation you may login to {url} using the username and password you have entered in the registration";
	const USERS_REGISTRATION_EMAIL_SUBJECT_ACTIVATE_USER_ACCOUNT = "Registration approval required for account of {User.name} at {domain}";
	const USERS_REGISTRATION_EMAIL_BODY_ACTIVATE_USER_ACCOUNT = "Hello administrator,\n\nA new user has registered at {domain}.\nThe user has verified his email, and requests that you approve his account.\nThis email contains their details:\n\nName :  {User.name} \n  email:  {User.email} \n Username:  {User.username} \n\nYou can activate the user by clicking on the link below:\n{User.activation}\n";
	const USERS_REGISTRATION_EMAIL_SUBJECT_NEW_REGISTRATION = "Account Details for {User.name} at {domain}";
	const USERS_REGISTRATION_EMAIL_BODY_NEW_REGISTRATION = "Hello Administrator,\n\nA new user has registered at {domain}.This e-mail contains their details:\n\nName: {User.name}\nE-mail: {User.email}\nUsername: {User.username}\n\nPlease do not respond to this message. It is automatically generated and is for information purposes only.";
	const USERS_ACTIVATION_WRONG_ERROR = "Your activation code couldn't be found";
	const USERS_REGISTRATION_EMAIL_SUBJECT_ACTIVATED_BY_ADMIN = "Account activated for {User.name} at {domain}";
	const USERS_REGISTRATION_EMAIL_BODY_ACTIVATED_BY_ADMIN = "Hello {User.name},\n\nYour account has been activated by an administrator. You can now login at {domain} using the username {User.username} and the password you used in the registration.";
	const USERS_LOSTPASS_EMAIL_SUBJECT = "Password reset request for {User.name} at {domain}";
	const USERS_LOSTPASS_EMAIL_BODY = "Hello {User.name},\n\nIn order to reset your password, please use this token:\n\n{token}\n\nAt:\n{url}";
	const USERS_LOSTPASS_MAIL_SEND_FAILED = "Error occurred, couldn't send email";
	const USERS_LOSTPASS_NOT_FOUND = "Error occurred, this account couldn't be found";
	const USERS_RESETPASS_WRONG_EMAIL = "You have entered a wrong email address";
	const USERS_RESETPASS_EMPTY_PASSWORD = "You have entered a wrong password";
	const USERS_RESETPASS_PASSWORDS_DONT_MATCH = "Passwords don't match";
	const USERS_RESETPASS_UPDATE_FAILED = "Update failed";
	const USERS_RESETPASS_EMAIL_SUBJECT_CONFIRM_RESET = "Password has been reset at {domain}";
	const USERS_RESETPASS_EMAIL_BODY_CONFIRM_RESET = "Hello {User.name},\n\nYour password has been reset successfully at {domain}\n\nPlease do not respond to this message. It is automatically generated and is for information purposes only.";
	const USERS_RESETPASS_TOKEN_NOT_FOUND = "Error occurred, token not found or has expired";
	const USERS_RESETPASS_EMPTY_TOKEN = "Error occurred, empty token";
	const USERS_LOSTUSERNAME_EMAIL_SUBJECT = "Username reminder for {User.name} at {domain}";
	const USERS_LOSTUSERNAME_EMAIL_BODY = "Hello {User.name},\n\nYour username at {domain} is:\n\n{User.username}\n\nPlease do not respond to this message. It is automatically generated and is for information purposes only.";
	const USERS_LOSTUSERNAME_MAIL_SEND_FAILED = "Error occurred, couldn't send email";
	const USERS_LOSTUSERNAME_NOT_FOUND = "Error occurred, this account couldn't be found";
	const USERS_YOU_MUST_BE_LOGGED_IN = "You must be logged in.";
	const USERS_UPDATE_DETAILS_SUCCESS = "Your details have been updated successfully";
	const USERS_UPDATE_DETAILS_ERROR = "Error occurred, we couldn't update your details.";
	const PAGINATOR_PREV = "Previous";
	const PAGINATOR_FIRST = "First";
	const PAGINATOR_LAST = "Last";
	const PAGINATOR_NEXT = "Next";
	const PAGINATOR_INFO = "Showing %s to %s of %s Entries";
	const PAGINATOR_ALL = "All";
	const PAGINATOR_SHOW_X_ENTRIES = "Show %s Entries";
	const SELECTION_REQUIRED = "Please make at least 1 selection.";
	const AUTHENTICATE_INCORRECT_LOGIN_CREDENTIALS = "Incorrect username or password";
	const AUTHENTICATE_ACCOUNT_NOT_ACTIVATED = "Your account is not activated";
	const AUTHENTICATE_ACCOUNT_BLOCKED = "Your account is blocked";
	const DATE_X_TIME_AGO = "%s %s Ago";
	const SECONDS = "Seconds";
	const MINUTES = "Minutes";
	const HOURS = "Hours";
	const DAYS = "Day(s)";
	const WEEKS = "Weeks";
	const MONTHS = "Months";
	const YEARS = "Years";
	const UPDATE_SUCCESS = "Updated Successfully";
	const UPDATE_ERROR = "Update Failed";
	const DELETE_SUCCESS = "Deleted Successfully";
	const DELETE_ERROR = "Delete Failed";
	const ITEMS_DELETED = "Items Deleted";
	const EXECUTION_TIME = "Execution time";
	const MEMORY_USAGE = "Memory Usage";
	const ERRORS = "Errors";
	const DATABASE_LOG = "Database Log";
	const USERS_ENABLE_SHOW_WELCOME = "Enable welcome message";
	const USERS_FORGOT_PASSWORD = "Forgot your password ?";
	const USERS_FORGOT_USERNAME = "Forgot your username ?";
	const USERS_CREATE_ACCOUNT = "Create new account";
	const POSTED_ON = "Posted On";
	const UPDATED_ON = "Updated On";
	const WRITTEN_BY = "Written by";
	const HITS = "Hits";
	const ERRORS_PAGE_NOT_FOUND = "Page Not Found";
	const USERS_ACTIVATION_COMPLETE = "Account activation is complete.";
	const USERS_ACTIVATION_FAILED = "Account activation has failed.";
	const CONFIRM_PASSWORD = "Confirm Password";
	const UPDATE = "Update";
	const USERS_LOSTPASS_EMAIL_SENT = "An email has been sent to you with a security token, please copy and paste the token in the field below in less than 15 minutes.";
	const USERS_LOSTPASS_PAGE_INTRO = "Please enter your username and email address below, we will send you a security token to help you reset your password.";
	const SUBMIT = "Submit";
	const USERS_LOSTUSERNAME_EMAIL_SENT = "An email has been sent to you with your username.";
	const USERS_LOSTUSERNAME_PAGE_INTRO = "Please enter your email address to receive an email with your username.";
	const USERS_MEMBER_SINCE = "Member since: ";
	const USERS_LAST_VISITED = "Last visit: ";
	const REGISTER = "Register";
	const USERS_REGISTRATION_ACCOUNT_READY = "Congratulations, your account has been created and you may now login.";
	const USERS_REGISTRATION_ACTIVATE_ACCOUNT = "Your account has been created and an activation email has been sent to your email address, please check it to activate your account.";
	const USERS_REGISTRATION_WAIT_ADMIN_APPROVAL = "Your account has been created but it's waiting admin approval.";
	const USERS_RESETPASS_PASSWORD_UPDATED = "Your password has been successfully updated.";
	const USERS_RESETPASS_INTRO = "An email has been sent to you with a security token, please enter the token and any other required information below.";
	const TOKEN = "Token";
	const NEW_PASSWORD = "New Password";
	const NEW_CONFIRM_PASSWORD = "Confirm new password";
}