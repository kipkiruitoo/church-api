<?php

/**
 * @apiGroup           Member
 * @apiName            searchMemberByQrcode
 *
 * @api                {GET} /v1/members?search=qr_string:qrcode  Search Member by Qr Code
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Autheticated User
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Members Retrieved Successfully",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 16,
                "name": "seat 1",
                "gender": "Male",
                "qr_string": "6jtdbmjvmr77rfef7btafxvx",
                "phone": 715686316,
                "church_id": 1,
                "location": "manyatta",
                "yob": 1997,
                "created_at": "2020-09-06T09:12:48.000000Z",
                "updated_at": "2020-09-06T09:12:48.000000Z",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://dev.church/v1/members?search=qr_string%3A6jtdbmjvmr77rfef7btafxvx&page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://dev.church/v1/members?search=qr_string%3A6jtdbmjvmr77rfef7btafxvx&page=1",
        "next_page_url": null,
        "path": "http://dev.church/v1/members",
        "per_page": 15,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
 */
