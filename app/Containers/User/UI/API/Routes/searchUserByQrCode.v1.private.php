<?php

/**
 * @apiGroup           User
 * @apiName            SearchUseryQrCode
 *
 * @api                {GET} /v1/clients?search=qr_string:{qr_string} Search User by qr code ...
 * @apiDescription     search for a user using qr string..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "User",
            "id": 17,
            "name": "davis",
            "email": "kipkirui@app.com",
            "confirmed": false,
            "nickname": null,
            "gender": null,
            "birth": "1997",
            "qr_string": "acmcf0md9xsxakynzdmmryw1ywsssltf",
            "social_auth_provider": null,
            "social_id": null,
            "social_avatar": {
                "avatar": null,
                "original": null
            },
            "created_at": "2020-09-07T05:54:05.000000Z",
            "updated_at": "2020-09-07T05:54:05.000000Z",
            "readable_created_at": "25 minutes ago",
            "readable_updated_at": "25 minutes ago"
        }
    ],
    "meta": {
        "include": [
            "roles"
        ],
        "custom": [],
        "pagination": {
            "total": 1,
            "count": 1,
            "per_page": 15,
            "current_page": 1,
            "total_pages": 1,
            "links": {}
        }
    }
}
 */
