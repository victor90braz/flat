<?php

namespace App\Models;

use Illuminate\Http\Response as HttpResponse;

class Response
{
    const HTTP_OK = HttpResponse::HTTP_OK;
    const HTTP_CREATED = Response::HTTP_CREATED;
    const HTTP_NO_CONTENT = Response::HTTP_NO_CONTENT;
    const HTTP_BAD_REQUEST = Response::HTTP_BAD_REQUEST;
    const HTTP_UNAUTHORIZED = Response::HTTP_UNAUTHORIZED;
    const HTTP_FORBIDDEN = Response::HTTP_FORBIDDEN;
    const HTTP_NOT_FOUND = Response::HTTP_NOT_FOUND;
    const HTTP_METHOD_NOT_ALLOWED = Response::HTTP_METHOD_NOT_ALLOWED;
    const HTTP_INTERNAL_SERVER_ERROR = Response::HTTP_INTERNAL_SERVER_ERROR;
}

