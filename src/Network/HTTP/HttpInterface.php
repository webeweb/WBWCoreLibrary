<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\HTTP;

/**
 * HTTP interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\HTTP
 */
interface HttpInterface {

    /**
     * HTTP method "DELETE".
     *
     * @var string
     */
    const HTTP_METHOD_DELETE = "DELETE";

    /**
     * HTTP method "GET".
     *
     * @var string
     */
    const HTTP_METHOD_GET = "GET";

    /**
     * HTTP method "HEAD".
     *
     * @var string
     */
    const HTTP_METHOD_HEAD = "HEAD";

    /**
     * HTTP method "OPTIONS".
     *
     * @var string
     */
    const HTTP_METHOD_OPTIONS = "OPTIONS";

    /**
     * HTTP method "PATCH".
     *
     * @var string
     */
    const HTTP_METHOD_PATCH = "PATCH";

    /**
     * HTTP method "POST".
     *
     * @var string
     */
    const HTTP_METHOD_POST = "POST";

    /**
     * HTTP method "PUT".
     *
     * @var string
     */
    const HTTP_METHOD_PUT = "PUT";

    /**
     * HTTP status "Accepted".
     *
     * @var int
     */
    const HTTP_STATUS_ACCEPTED = 202;

    /**
     * HTTP status "Already Reported".
     *
     * @var int
     */
    const HTTP_STATUS_ALREADY_REPORTED = 208;

    /**
     * HTTP status "A_Timeout Occurred".
     *
     * @var int
     */
    const HTTP_STATUS_A_TIMEOUT_OCCURRED = 524;

    /**
     * HTTP status "Bad Gateway ou Proxy Error".
     *
     * @var int
     */
    const HTTP_STATUS_BAD_GATEWAY_OU_PROXY_ERROR = 502;

    /**
     * HTTP status "Bad mapping / Misdirected Request".
     *
     * @var int
     */
    const HTTP_STATUS_BAD_MAPPING_MISDIRECTED_REQUEST = 421;

    /**
     * HTTP status "Bad Request".
     *
     * @var int
     */
    const HTTP_STATUS_BAD_REQUEST = 400;

    /**
     * HTTP status "Bandwidth Limit Exceeded".
     *
     * @var int
     */
    const HTTP_STATUS_BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * HTTP status "Blocked by Windows Parental Controls".
     *
     * @var int
     */
    const HTTP_STATUS_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * HTTP status "Client Closed Request".
     *
     * @var int
     */
    const HTTP_STATUS_CLIENT_CLOSED_REQUEST = 499;

    /**
     * HTTP status "Conflict".
     *
     * @var int
     */
    const HTTP_STATUS_CONFLICT = 409;

    /**
     * HTTP status "Connection Timed Out".
     *
     * @var int
     */
    const HTTP_STATUS_CONNECTION_TIMED_OUT = 522;

    /**
     * HTTP status "Content Different".
     *
     * @var int
     */
    const HTTP_STATUS_CONTENT_DIFFERENT = 210;

    /**
     * HTTP status "Continue".
     *
     * @var int
     */
    const HTTP_STATUS_CONTINUE = 100;

    /**
     * HTTP status "Created".
     *
     * @var int
     */
    const HTTP_STATUS_CREATED = 201;

    /**
     * HTTP status "Expectation failed".
     *
     * @var int
     */
    const HTTP_STATUS_EXPECTATION_FAILED = 417;

    /**
     * HTTP status "Forbidden".
     *
     * @var int
     */
    const HTTP_STATUS_FORBIDDEN = 403;

    /**
     * HTTP status "Gateway Time-out".
     *
     * @var int
     */
    const HTTP_STATUS_GATEWAY_TIME_OUT = 504;

    /**
     * HTTP status "Gone".
     *
     * @var int
     */
    const HTTP_STATUS_GONE = 410;

    /**
     * HTTP status "HTTP_Request Sent to HTTPS_Port".
     *
     * @var int
     */
    const HTTP_STATUS_HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    /**
     * HTTP status "HTTP_Version not supported".
     *
     * @var int
     */
    const HTTP_STATUS_HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * HTTP status "I’m a teapot".
     *
     * @var int
     */
    const HTTP_STATUS_IM_A_TEAPOT = 418;

    /**
     * HTTP status "IM_Used".
     *
     * @var int
     */
    const HTTP_STATUS_IM_USED = 226;

    /**
     * HTTP status "Insufficient storage".
     *
     * @var int
     */
    const HTTP_STATUS_INSUFFICIENT_STORAGE = 507;

    /**
     * HTTP status "Internal Server Error".
     *
     * @var int
     */
    const HTTP_STATUS_INTERNAL_SERVER_ERROR = 500;

    /**
     * HTTP status "Invalid SSL_Certificate".
     *
     * @var int
     */
    const HTTP_STATUS_INVALID_SSL_CERTIFICATE = 526;

    /**
     * HTTP status "Length Required".
     *
     * @var int
     */
    const HTTP_STATUS_LENGTH_REQUIRED = 411;

    /**
     * HTTP status "Locked".
     *
     * @var int
     */
    const HTTP_STATUS_LOCKED = 423;

    /**
     * HTTP status "Loop detected".
     *
     * @var int
     */
    const HTTP_STATUS_LOOP_DETECTED = 508;

    /**
     * HTTP status "Method failure".
     *
     * @var int
     */
    const HTTP_STATUS_METHOD_FAILURE = 424;

    /**
     * HTTP status "Method Not Allowed".
     *
     * @var int
     */
    const HTTP_STATUS_METHOD_NOT_ALLOWED = 405;

    /**
     * HTTP status "Moved Permanently".
     *
     * @var int
     */
    const HTTP_STATUS_MOVED_PERMANENTLY = 301;

    /**
     * HTTP status "Moved Temporarily".
     *
     * @var int
     */
    const HTTP_STATUS_MOVED_TEMPORARILY = 302;

    /**
     * HTTP status "Multiple Choices".
     *
     * @var int
     */
    const HTTP_STATUS_MULTIPLE_CHOICES = 300;

    /**
     * HTTP status "Multi-Status".
     *
     * @var int
     */
    const HTTP_STATUS_MULTI_STATUS = 207;

    /**
     * HTTP status "Network authentication required".
     *
     * @var int
     */
    const HTTP_STATUS_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * HTTP status "Non-Authoritative Information".
     *
     * @var int
     */
    const HTTP_STATUS_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * HTTP status "Not Acceptable".
     *
     * @var int
     */
    const HTTP_STATUS_NOT_ACCEPTABLE = 406;

    /**
     * HTTP status "Not extended".
     *
     * @var int
     */
    const HTTP_STATUS_NOT_EXTENDED = 510;

    /**
     * HTTP status "Not Found".
     *
     * @var int
     */
    const HTTP_STATUS_NOT_FOUND = 404;

    /**
     * HTTP status "Not Implemented".
     *
     * @var int
     */
    const HTTP_STATUS_NOT_IMPLEMENTED = 501;

    /**
     * HTTP status "Not Modified".
     *
     * @var int
     */
    const HTTP_STATUS_NOT_MODIFIED = 304;

    /**
     * HTTP status "No Content".
     *
     * @var int
     */
    const HTTP_STATUS_NO_CONTENT = 204;

    /**
     * HTTP status "No Response".
     *
     * @var int
     */
    const HTTP_STATUS_NO_RESPONSE = 444;

    /**
     * HTTP status "OK".
     *
     * @var int
     */
    const HTTP_STATUS_OK = 200;

    /**
     * HTTP status "Origin Is Unreachable".
     *
     * @var int
     */
    const HTTP_STATUS_ORIGIN_IS_UNREACHABLE = 523;

    /**
     * HTTP status "Partial Content".
     *
     * @var int
     */
    const HTTP_STATUS_PARTIAL_CONTENT = 206;

    /**
     * HTTP status "Payment Required".
     *
     * @var int
     */
    const HTTP_STATUS_PAYMENT_REQUIRED = 402;

    /**
     * HTTP status "Permanent Redirect".
     *
     * @var int
     */
    const HTTP_STATUS_PERMANENT_REDIRECT = 308;

    /**
     * HTTP status "Precondition Failed".
     *
     * @var int
     */
    const HTTP_STATUS_PRECONDITION_FAILED = 412;

    /**
     * HTTP status "Precondition Required".
     *
     * @var int
     */
    const HTTP_STATUS_PRECONDITION_REQUIRED = 428;

    /**
     * HTTP status "Processing".
     *
     * @var int
     */
    const HTTP_STATUS_PROCESSING = 102;

    /**
     * HTTP status "Proxy Authentication Required".
     *
     * @var int
     */
    const HTTP_STATUS_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * HTTP status "Railgun Error".
     *
     * @var int
     */
    const HTTP_STATUS_RAILGUN_ERROR = 527;

    /**
     * HTTP status "Requested range unsatisfiable".
     *
     * @var int
     */
    const HTTP_STATUS_REQUESTED_RANGE_UNSATISFIABLE = 416;

    /**
     * HTTP status "Request Entity Too Large".
     *
     * @var int
     */
    const HTTP_STATUS_REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * HTTP status "Request Header Fields Too Large".
     *
     * @var int
     */
    const HTTP_STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * HTTP status "Request Time-out".
     *
     * @var int
     */
    const HTTP_STATUS_REQUEST_TIME_OUT = 408;

    /**
     * HTTP status "Request-URI_Too Long".
     *
     * @var int
     */
    const HTTP_STATUS_REQUEST_URI_TOO_LONG = 414;

    /**
     * HTTP status "Reset Content".
     *
     * @var int
     */
    const HTTP_STATUS_RESET_CONTENT = 205;

    /**
     * HTTP status "Retry With".
     *
     * @var int
     */
    const HTTP_STATUS_RETRY_WITH = 449;

    /**
     * HTTP status "See Other".
     *
     * @var int
     */
    const HTTP_STATUS_SEE_OTHER = 303;

    /**
     * HTTP status "Service Unavailable".
     *
     * @var int
     */
    const HTTP_STATUS_SERVICE_UNAVAILABLE = 503;

    /**
     * HTTP status "SSL_Certificate Error".
     *
     * @var int
     */
    const HTTP_STATUS_SSL_CERTIFICATE_ERROR = 495;

    /**
     * HTTP status "SSL_Certificate Required".
     *
     * @var int
     */
    const HTTP_STATUS_SSL_CERTIFICATE_REQUIRED = 496;

    /**
     * HTTP status "SSL_Handshake Failed".
     *
     * @var int
     */
    const HTTP_STATUS_SSL_HANDSHAKE_FAILED = 525;

    /**
     * HTTP status "Switching Protocols".
     *
     * @var int
     */
    const HTTP_STATUS_SWITCHING_PROTOCOLS = 101;

    /**
     * HTTP status "Switch proxy".
     *
     * @var int
     */
    const HTTP_STATUS_SWITCH_PROXY = 306;

    /**
     * HTTP status "Temporary Redirect".
     *
     * @var int
     */
    const HTTP_STATUS_TEMPORARY_REDIRECT = 307;

    /**
     * HTTP status "Too many Redirects".
     *
     * @var int
     */
    const HTTP_STATUS_TOO_MANY_REDIRECTS = 310;

    /**
     * HTTP status "Too Many Requests".
     *
     * @var int
     */
    const HTTP_STATUS_TOO_MANY_REQUESTS = 429;

    /**
     * HTTP status "Unauthorized".
     *
     * @var int
     */
    const HTTP_STATUS_UNAUTHORIZED = 401;

    /**
     * HTTP status "Unavailable For Legal Reasons".
     *
     * @var int
     */
    const HTTP_STATUS_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * HTTP status "Unknown Error".
     *
     * @var int
     */
    const HTTP_STATUS_UNKNOWN_ERROR = 520;

    /**
     * HTTP status "Unordered Collection".
     *
     * @var int
     */
    const HTTP_STATUS_UNORDERED_COLLECTION = 425;

    /**
     * HTTP status "Unprocessable entity".
     *
     * @var int
     */
    const HTTP_STATUS_UNPROCESSABLE_ENTITY = 422;

    /**
     * HTTP status "Unrecoverable Error".
     *
     * @var int
     */
    const HTTP_STATUS_UNRECOVERABLE_ERROR = 456;

    /**
     * HTTP status "Unsupported Media Type".
     *
     * @var int
     */
    const HTTP_STATUS_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * HTTP status "Upgrade Required".
     *
     * @var int
     */
    const HTTP_STATUS_UPGRADE_REQUIRED = 426;

    /**
     * HTTP status "Use Proxy".
     *
     * @var int
     */
    const HTTP_STATUS_USE_PROXY = 305;

    /**
     * HTTP status "Variant Also Negotiates".
     *
     * @var int
     */
    const HTTP_STATUS_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * HTTP status "Web Server Is Down".
     *
     * @var int
     */
    const HTTP_STATUS_WEB_SERVER_IS_DOWN = 521;

}
