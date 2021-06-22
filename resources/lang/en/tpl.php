<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Template Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    /**
     * Language for template category
     */
    'category.index.title' => 'List category',
    'category.index.name' => 'Name Category',
    'category.index.status' => 'Status',
    'category.index.status.hidden' => 'Hidden',
    'category.index.status.show' => 'Show',
    'category.index.edit' => 'Edit',
    'category.index.delete' => 'Delete',

    'category.create.title' => 'Create Category',
    'category.create.name' => 'Name Category',
    'category.create.status' => 'Status',

    'category.edit.title' => 'Edit Category',
    'category.edit.name' => 'Name Category',
    'category.edit.status' => 'Status',

    'category.show.title' => 'Show Category',


    /**
     * Language for template newstype
     */
    'newstype.index.title' => 'List newstype',
    'newstype.index.name' => 'Name newstype',
    'newstype.index.typecategory' => 'Type Category',
    'newstype.index.status' => 'Status',
    'newstype.index.status.hidden' => 'Hidden',
    'newstype.index.status.show' => 'Show',
    'newstype.index.edit' => 'Edit',
    'newstype.index.delete' => 'Delete',
    'newstype.index.submit' => 'Submit',

    'newstype.create.title' => 'Create NewsType',
    'newstype.create.name' => 'Name NewsType',
    'newstype.create.status' => 'Status',
    'newstype.create.nameCategory' => 'Name Category',

    'newstype.edit.title' => 'Edit NewsType',
    'newstype.edit.name' => 'Name NewsType',
    'newstype.edit.status' => 'Status',
    'newstype.edit.nameCategory' => 'Name Category',

    'newstype.show.title' => 'Show NewsType',

    /**
     * Language for template news
     */
    'news.index.title' => 'List News',
    'news.index.name' => 'Name News',
    'news.index.typenewstype' => 'Type NewsType',
    'news.index.author' => 'Author',
    'news.index.summary' => 'Summary',
    'news.index.content' => 'Content',
    'news.index.url' => 'URL Image',
    'news.index.views' => 'Views',
    'news.index.hot_news' => 'Hot News',
    'news.index.likes' => 'Likes',

    
    'news.index.edit' => 'Edit',
    'news.index.delete' => 'Delete',
    'news.index.submit' => 'Submit',

    'news.create.title' => 'Create News',
    'news.create.name' => 'Name News',
    'news.create.summary' => 'Summary',
    'news.create.namenewstype' => 'Name NewsType',

    'news.edit.title' => 'Edit News',
    'news.edit.name' => 'Name News',
    'news.edit.summary' => 'Summary',
    'news.edit.url' => 'URL Image',
    'news.edit.content' => 'Content',
    'news.edit.namenews' => 'Name NewsType',

    'news.show.title' => 'Show News',

    /**
     * Language for template Advertisement
     */

    'advertisement.index.title' => 'List Advertisement',
    'advertisement.index.url1' => 'URL Image 1',
    'advertisement.index.url2' => 'URL Image 2',
    'advertisement.index.startdate' => 'Start date',
    'advertisement.index.enddate' => 'End date',
    'advertisement.index.description' => 'Description',

    'advertisement.create.title' => 'Create Advertisement',
    'advertisement.create.url1' => 'URL Image 1',
    'advertisement.create.url2' => 'URL Image 2',
    'advertisement.create.startdate' => 'Start date',
    'advertisement.create.enddate' => 'End date',
    'advertisement.create.description' => 'Description',

    'advertisement.edit.title' => 'Edit Advertisement',
    
    'advertisement.show.title' => 'Show Advertisement',

    /**
     * Language for template User
     */

    'user.index.title' => 'List User',
    'user.index.name' => 'User name',
    'user.index.email' => 'Email',
    'user.index.url_img' => 'URL Image',
    'user.index.ngaysinh' => 'Date of birth',
    'user.index.password' => 'Password',
    'user.index.sex' => 'Sex',
    'user.index.sex.male' => 'Male',
    'user.index.sex.female' => 'Female',
    'user.index.is_admin' => 'Is Admin',
    'user.index.is_admin.admin' => 'Admin',
    'user.index.is_admin.normaluser' => 'Normal User',

    'user.edit.title' => 'Edit User',
    'user.edit.name' => 'User name',
    'user.edit.email' => 'Email',
    'user.edit.url_img' => 'URL Image',
    'user.edit.ngaysinh' => 'Date of birth',
    'user.edit.sex' => 'Sex',
    'user.edit.is_admin' => 'Is Admin',
    
    'user.show.title' => 'Show User',

    /**
     * Language for error
     */
    'name.required' => 'The name field is required.',
    'name.min'=> 'The name must be at least 5 characters',
    'name.max'=> 'The name may not be greater than 20 characters',

    'tieu_de.required' => 'The title field is required.',
    'tieu_de.min'=> 'The title must be at least 5 characters',
    'tieu_de.max'=> 'The title may not be greater than 40 characters',

    'tom_tat.required' => 'The summary field is required.',
    'tom_tat.min'=> 'The summary must be at least 5 characters',
    'tom_tat.max'=> 'The summary may not be greater than 150 characters',

    'url_img.required' => 'The URL field is required.',
    'url_img.min'=> 'The URL must be at least 5 characters',
    'url_img.max'=> 'The URL may not be greater than 150 characters',

    'noi_dung.required' => 'The content field is required.',
    'noi_dung.min'=> 'The content must be at least 5 characters',
    'noi_dung.max'=> 'The content may not be greater than 5000 characters',

    'description.required' => 'The description field is required.',
    'description.min'=> 'The description must be at least 5 characters',
    'description.max'=> 'The description may not be greater than 5000 characters',

    'password.required' => 'Wrong format!!!',
    'email.max' => 'Wrong format!!!',
    'url.max' => 'Wrong format!!!',

    /**
     * Language for Login and Register
     */
    'admin.error' => "You don't have admin access.",
    'auth.failed' => "These credentials do not match our records.",
    'auth.password' => "The provided password is incorrect.",

    /**
     * Language for add, delete and update
     */
    'admin.add.success' => "Add successfully!!!",
    'admin.update.success' => "Update successfully!!!",
    'admin.delete.success' => "Delete successfully!!!",

    'admin.add.fail' => "Add failed!!!",
    'admin.update.fail' => "Update failed!!!",
    'admin.delete.fail' => "Delete failed!!!",
  
    'admin.notFound' => "Page could not be found!!!",

    'flashMessage.any' => "Please check the form below for errors",
     
];
