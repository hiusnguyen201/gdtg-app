<?php
$REGEX_PHONE_VIETNAM = "/(84|0[3|5|7|8|9])+([0-9]{8})\b/";

$USER_STATUS = [
    "inactive" => [
        "value" => 1,
        "title" => "Inactive",
        "css" => "btn btn-info"
    ],
    "active" => [
        "value" => 2,
        "title" => "Active",
        "css" => "btn btn-success"
    ],
    "locked" => [
        "value" => 3,
        "title" => "Locked",
        "css" => "btn btn-danger"
    ],
];

return [
    "regex_phone_vietnam" => $REGEX_PHONE_VIETNAM,
    "user_status" => $USER_STATUS,
];
