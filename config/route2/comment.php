<?php

return [
    "routes" => [
        [
            "info" => "Start the session",
            "requestMethod" => null,
            "path" => "**",
            "callable" => ["commentController", "anyStart"],
        ],
        [
            "info" => "Reset and delete all comments",
            "requestMethod" => "get",
            "path" => "comments/reset",
            "callable" => ["commentController", "getReset"],
        ],
        [
            "info" => "Get all comments",
            "requestMethod" => "get",
            "path" => "comments",
            "callable" => ["commentController", "getComments"],
        ],
        [
            "info" => "Post a comment",
            "requestMethod" => "post",
            "path" => "comment",
            "callable" => ["commentController", "postComment"],
        ],
        [
            "info" => "Get a single comment",
            "requestMethod" => "get",
            "path" => "comment/{id:digit}",
            "callable" => ["commentController", "getComment"],
        ],
        [
            "info" => "Get comment to edit",
            "requestMethod" => "get",
            "path" => "comment/edit/{id:digit}",
            "callable" => ["commentController", "editComment"],
        ],
        [
            "info" => "Update comment",
            "requestMethod" => "post",
            "path" => "comment/edit",
            "callable" => ["commentController", "upsertComment"],
        ],
        [
            "info" => "Delete a comment",
            "requestMethod" => "get",
            "path" => "comment/delete/{id:digit}",
            "callable" => ["commentController", "deleteComment"],
        ],
    ]
];
