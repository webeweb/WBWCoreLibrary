<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Request;

use DateTime;
use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Argument\ArgumentHelper;
use WBW\Library\Core\Network\CURL\API\CurlRequestInterface;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;
use WBW\Library\Core\Network\CURL\Exception\CurlRequestCallException;
use WBW\Library\Core\Network\CURL\Factory\CurlFactory;
use WBW\Library\Core\Network\HTTP\HttpInterface;

/**
 * Abstract cURL request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Request
 * @abstract
 */
abstract class AbstractCurlRequest implements CurlRequestInterface, HttpInterface {

    /**
     * Content-Type "application/x-www-form-urlencoded".
     * @var string
     */
    const CONTENT_TYPE_X_WWW_FORM_URLENCODED = "Content-Type: application/x-www-form-urlencoded";

    /**
     * Configuration.
     *
     * @var CurlConfiguration
     */
    private $configuration;

    /**
     * Headers.
     *
     * @var array
     */
    private $headers = [];

    /**
     * Method.
     *
     * @var string
     */
    private $method = self::HTTP_METHOD_GET;

    /**
     * POST data.
     *
     * @var array
     */
    private $postData = [];

    /**
     * Query data.
     *
     * @var array
     */
    private $queryData = [];

    /**
     * Resource path.
     *
     * @var string
     */
    private $resourcePath;

    /**
     * Constructor.
     *
     * @param string $method The Method.
     * @param CurlConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    protected function __construct($method, CurlConfiguration $configuration, $resourcePath) {
        $this->setConfiguration($configuration);
        $this->setMethod($method);
        $this->setResourcePath($resourcePath);
    }

    /**
     * {@inheritdoc}
     */
    public function addHeader($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->headers[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function addPostData($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->postData[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function addQueryData($name, $value) {
        ArgumentHelper::isTypeOf($name, ArgumentHelper::ARGUMENT_STRING);
        $this->queryData[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function call() {

        $curlHeaders  = $this->mergeHeaders();
        $curlPOSTData = http_build_query($this->getPostData());

        if (true === in_array("Content-Type: application/json", $curlHeaders)) {
            $curlPOSTData = json_encode($this->getPostData());
        }

        $curlURL = $this->mergeURL();
        if (0 < count($this->getQueryData())) {
            $curlURL = implode("?", [$curlURL, http_build_query($this->getQueryData())]);
        }

        $stream = curl_init();

        if (0 < $this->getConfiguration()->getConnectTimeout()) {
            curl_setopt($stream, CURLOPT_CONNECTTIMEOUT, $this->getConfiguration()->getConnectTimeout());
        }

        if (true === $this->getConfiguration()->getAllowEncoding()) {
            curl_setopt($stream, CURLOPT_ENCODING, "");
        }

        curl_setopt($stream, CURLOPT_HEADER, 1);
        curl_setopt($stream, CURLOPT_HTTPHEADER, $curlHeaders);

        $this->setCurlPost($stream, $curlPOSTData);
        $this->setCURLProxy($stream);
        $this->setCurlReturnTransfer($stream);
        $this->setCurlSsl($stream);
        $this->setCurlTimeout($stream);

        curl_setopt($stream, CURLOPT_URL, $curlURL);

        $this->setCurlUserAgent($stream);
        $this->setCurlVerbose($stream, $curlURL, $curlPOSTData);

        $curlExec     = curl_exec($stream);
        $httpHeadSize = curl_getinfo($stream, CURLINFO_HEADER_SIZE);
        $httpHead     = $this->parseheader(substr($curlExec, 0, $httpHeadSize));
        $httpBody     = substr($curlExec, $httpHeadSize);
        $curlInfo     = curl_getinfo($stream);

        if (true === $this->getConfiguration()->getDebug()) {
            $msg = (new DateTime())->format("c") . " [DEBUG] " . $curlURL . PHP_EOL . "HTTP response body ~BEGIN~" . PHP_EOL . print_r($httpBody, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $this->getConfiguration()->getDebugFile());
        }

        $response = CurlFactory::newCURLResponse();
        $response->setRequestBody($curlPOSTData);
        $response->setRequestHeader($curlHeaders);
        $response->setRequestURL($curlURL);
        $response->setResponseBody($httpBody);
        $response->setResponseHeader($httpHead);
        $response->setResponseInfo($curlInfo);

        if (200 <= $curlInfo["http_code"] && $curlInfo["http_code"] <= 299) {
            return $response;
        }

        $cde = $curlInfo["http_code"];
        $msg = curl_errno($stream);

        if (0 === $curlInfo["http_code"]) {
            if (false === empty(curl_error($stream))) {
                $msg = "Call to ${curlURL} failed : " . curl_error($stream);
            } else {
                $msg = "Call to ${curlURL} failed, but for an unknown reason. This could happen if you are disconnected from the network.";
            }
        }

        throw new CurlRequestCallException($msg, $cde, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeaders() {
        return $this->setHeaders([]);
    }

    /**
     * {@inheritdoc}
     */
    public function clearPostData() {
        return $this->setPostData([]);
    }

    /**
     * {@inheritdoc}
     */
    public function clearQueryData() {
        return $this->setQueryData([]);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration() {
        return $this->configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostData() {
        return $this->postData;
    }

    /**
     * {@inheritdoc}
     */
    public function getQueryData() {
        return $this->queryData;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return $this->resourcePath;
    }

    /**
     * Merge the headers.
     *
     * @return array Returns the merged headers.
     */
    private function mergeHeaders() {

        $mergedHeaders = [];
        foreach (array_merge($this->getConfiguration()->getHeaders(), $this->getHeaders()) as $key => $value) {
            $mergedHeaders[] = implode(": ", [$key, $value]);
        }

        return $mergedHeaders;
    }

    /**
     * Merge the URL.
     *
     * @return string Returns the merged URL.
     */
    private function mergeURL() {

        $mergedURL = [
            $this->getConfiguration()->getHost(),
        ];

        if (null !== $this->getResourcePath() && "" !== $this->getResourcePath()) {
            $mergedURL[] = $this->getResourcePath();
        }

        return implode("/", $mergedURL);
    }

    /**
     * Parse the raw header.
     *
     * @param string $rawHeader The raw header.
     * @return array Returns the headers.
     */
    private function parseHeader($rawHeader) {

        $headers = [];
        $key     = "";

        foreach (explode("\n", $rawHeader) as $h) {
            $h = explode(":", $h, 2);
            if (true === isset($h[1])) {
                if (false === isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1]);
                } else if (true === is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1])]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
                }
                $key = $h[0];
            } else {
                if ("\t" === substr($h[0], 0, 1)) {
                    $headers[$key] .= "\r\n\t" . trim($h[0]);
                } else if (!$key) {
                    $headers[0] = trim($h[0]);
                }
                trim($h[0]);
            }
        }

        return $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function removeHeader($name) {
        if (true === array_key_exists($name, $this->headers)) {
            unset($this->headers[$name]);
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removePostData($name) {
        if (true === array_key_exists($name, $this->postData)) {
            unset($this->postData[$name]);
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeQueryData($name) {
        if (true === array_key_exists($name, $this->queryData)) {
            unset($this->queryData[$name]);
        }
        return $this;
    }

    /**
     * Set the configuration.
     *
     * @param CurlConfiguration $configuration The configuration.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setConfiguration(CurlConfiguration $configuration) {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Set cURL POST.
     *
     * @param resource $stream The stream.
     * @param string $postData The POST data.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setCurlPost($stream, $postData) {

        switch ($this->getMethod()) {

            case self::HTTP_METHOD_DELETE:
            case self::HTTP_METHOD_OPTIONS:
            case self::HTTP_METHOD_PATCH:
            case self::HTTP_METHOD_PUT:
                curl_setopt($stream, CURLOPT_CUSTOMREQUEST, $this->getMethod());
                curl_setopt($stream, CURLOPT_POSTFIELDS, $postData);
                break;

            case self::HTTP_METHOD_HEAD:
                curl_setopt($stream, CURLOPT_NOBODY, true);
                break;

            case self::HTTP_METHOD_POST:
                curl_setopt($stream, CURLOPT_POST, true);
                curl_setopt($stream, CURLOPT_POSTFIELDS, $postData);
                break;
        }

        return $this;
    }

    /**
     * Set cURL proxy.
     *
     * @param resource $stream The stream.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setCurlProxy($stream) {

        if (null !== $this->getConfiguration()->getProxyHost()) {
            curl_setopt($stream, CURLOPT_PROXY, $this->getConfiguration()->getProxyHost());
        }

        if (null !== $this->getConfiguration()->getProxyPort()) {
            curl_setopt($stream, CURLOPT_PROXYPORT, $this->getConfiguration()->getProxyPort());
        }

        if (null !== $this->getConfiguration()->getProxyType()) {
            curl_setopt($stream, CURLOPT_PROXYTYPE, $this->getConfiguration()->getProxyType());
        }

        if (null !== $this->getConfiguration()->getProxyUsername()) {
            curl_setopt($stream, CURLOPT_PROXYUSERPWD, implode(":", [$this->getConfiguration()->getProxyUsername(), $this->getConfiguration()->getProxyPassword()]));
        }

        return $this;
    }

    /**
     * Set cURL return transfer.
     *
     * @param resource $stream The stream.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setCurlReturnTransfer($stream) {
        curl_setopt($stream, CURLOPT_RETURNTRANSFER, true);
        return $this;
    }

    /**
     * Set cURL SSL.
     *
     * @param resource $stream The stream.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setCurlSsl($stream) {

        if (false === $this->getConfiguration()->getSslVerification()) {
            curl_setopt($stream, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($stream, CURLOPT_SSL_VERIFYPEER, 0);
        }

        return $this;
    }

    /**
     * Set cURL timeout.
     *
     * @param resource $stream The stream.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setCurlTimeout($stream) {

        if (0 < $this->getConfiguration()->getRequestTimeout()) {
            curl_setopt($stream, CURLOPT_TIMEOUT, $this->getConfiguration()->getRequestTimeout());
        }

        return $this;
    }

    /**
     * Set cURL user agent.
     *
     * @param resource $stream The stream.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setCurlUserAgent($stream) {
        curl_setopt($stream, CURLOPT_USERAGENT, $this->getConfiguration()->getUserAgent());
        return $this;
    }

    /**
     * Set cURL verbose.
     *
     * @param resource $stream The stream.
     * @param string $url The URL.
     * @param string $postData The POST data.
     * @return CurlRequestInterface Returns this cURL request.
     * @throws Exception Throws an exception if an error occurs.
     */
    protected function setCurlVerbose($stream, $url, $postData) {

        if (true === $this->getConfiguration()->getDebug()) {

            curl_setopt($stream, CURLOPT_STDERR, fopen($this->getConfiguration()->getDebugFile(), "a"));
            curl_setopt($stream, CURLOPT_VERBOSE, 0);

            $msg = (new DateTime())->format("c") . " [DEBUG] " . $url . PHP_EOL . "HTTP request body ~BEGIN~" . PHP_EOL . print_r($postData, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $this->getConfiguration()->getDebugFile());
        } else {

            if (true === $this->getConfiguration()->getVerbose()) {
                curl_setopt($stream, CURLOPT_VERBOSE, 1);
            } else {
                curl_setopt($stream, CURLOPT_VERBOSE, 0);
            }
        }

        return $this;
    }

    /**
     * Set the headers.
     *
     * @param array $headers The headers.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setHeaders(array $headers) {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set the method.
     *
     * @param string $method The method.
     * @return CurlRequestInterface Returns this cURL request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    protected function setMethod($method) {
        switch ($method) {
            case self::HTTP_METHOD_DELETE:
            case self::HTTP_METHOD_GET:
            case self::HTTP_METHOD_HEAD:
            case self::HTTP_METHOD_OPTIONS:
            case self::HTTP_METHOD_PATCH:
            case self::HTTP_METHOD_POST:
            case self::HTTP_METHOD_PUT:
                $this->method = $method;
                break;
            default:
                throw new InvalidArgumentException(sprintf("The HTTP method \"%s\" is invalid", $method));
        }
        return $this;
    }

    /**
     * Set the POST data.
     *
     * @param array $postData The POST data.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setPostData(array $postData) {
        $this->postData = $postData;
        return $this;
    }

    /**
     * Set the query data.
     *
     * @param array $queryData The query data.
     * @return CurlRequestInterface Returns this cURL request.
     */
    protected function setQueryData(array $queryData) {
        $this->queryData = $queryData;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setResourcePath($resourcePath) {
        $this->resourcePath = preg_replace("/^\//", "", trim($resourcePath));
        return $this;
    }
}