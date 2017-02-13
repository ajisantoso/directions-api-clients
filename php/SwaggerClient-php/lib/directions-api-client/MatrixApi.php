<?php
/**
 * MatrixApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GraphHopper Directions API
 *
 * With the GraphHopper Directions API you get reliable and fast web services for routing and more with world wide coverage. We offer A-to-B routing via the Routing API optionally with turn instructions and elevation data as well as route optimization with various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\directions-api-client;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * MatrixApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatrixApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return MatrixApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation matrixGet
     *
     * Matrix API
     *
     * @param string $key Get your key at graphhopper.com (required)
     * @param string[] $point Specifiy multiple points for which the weight-, route-, time- or distance-matrix should be calculated. In this case the starts are identical to the destinations. If there are N points, then NxN entries will be calculated. The order of the point parameter is important. Specify at least three points. Cannot be used together with from_point or to_point. Is a string with the format latitude,longitude. (optional)
     * @param string $from_point The starting points for the routes. E.g. if you want to calculate the three routes A-&amp;gt;1, A-&amp;gt;2, A-&amp;gt;3 then you have one from_point parameter and three to_point parameters. Is a string with the format latitude,longitude. (optional)
     * @param string $to_point The destination points for the routes. Is a string with the format latitude,longitude. (optional)
     * @param string[] $out_array Specifies which arrays should be included in the response. Specify one or more of the following options &#39;weights&#39;, &#39;times&#39;, &#39;distances&#39;. To specify more than one array use e.g. out_array&#x3D;times&amp;out_array&#x3D;distances. The units of the entries of distances are meters, of times are seconds and of weights is arbitrary and it can differ for different vehicles or versions of this API. (optional)
     * @param string $vehicle The vehicle for which the route should be calculated. Other vehicles are foot, bike, mtb, racingbike, motorcycle, small_truck, bus and truck. See here for the details. (optional, default to car)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GHMatrixResponse
     */
    public function matrixGet($key, $point = null, $from_point = null, $to_point = null, $out_array = null, $vehicle = null)
    {
        list($response) = $this->matrixGetWithHttpInfo($key, $point, $from_point, $to_point, $out_array, $vehicle);
        return $response;
    }

    /**
     * Operation matrixGetWithHttpInfo
     *
     * Matrix API
     *
     * @param string $key Get your key at graphhopper.com (required)
     * @param string[] $point Specifiy multiple points for which the weight-, route-, time- or distance-matrix should be calculated. In this case the starts are identical to the destinations. If there are N points, then NxN entries will be calculated. The order of the point parameter is important. Specify at least three points. Cannot be used together with from_point or to_point. Is a string with the format latitude,longitude. (optional)
     * @param string $from_point The starting points for the routes. E.g. if you want to calculate the three routes A-&amp;gt;1, A-&amp;gt;2, A-&amp;gt;3 then you have one from_point parameter and three to_point parameters. Is a string with the format latitude,longitude. (optional)
     * @param string $to_point The destination points for the routes. Is a string with the format latitude,longitude. (optional)
     * @param string[] $out_array Specifies which arrays should be included in the response. Specify one or more of the following options &#39;weights&#39;, &#39;times&#39;, &#39;distances&#39;. To specify more than one array use e.g. out_array&#x3D;times&amp;out_array&#x3D;distances. The units of the entries of distances are meters, of times are seconds and of weights is arbitrary and it can differ for different vehicles or versions of this API. (optional)
     * @param string $vehicle The vehicle for which the route should be calculated. Other vehicles are foot, bike, mtb, racingbike, motorcycle, small_truck, bus and truck. See here for the details. (optional, default to car)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GHMatrixResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function matrixGetWithHttpInfo($key, $point = null, $from_point = null, $to_point = null, $out_array = null, $vehicle = null)
    {
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $key when calling matrixGet');
        }
        // parse inputs
        $resourcePath = "/matrix";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if (is_array($point)) {
            $point = $this->apiClient->getSerializer()->serializeCollection($point, 'multi', true);
        }
        if ($point !== null) {
            $queryParams['point'] = $this->apiClient->getSerializer()->toQueryValue($point);
        }
        // query params
        if ($from_point !== null) {
            $queryParams['from_point'] = $this->apiClient->getSerializer()->toQueryValue($from_point);
        }
        // query params
        if ($to_point !== null) {
            $queryParams['to_point'] = $this->apiClient->getSerializer()->toQueryValue($to_point);
        }
        // query params
        if (is_array($out_array)) {
            $out_array = $this->apiClient->getSerializer()->serializeCollection($out_array, 'multi', true);
        }
        if ($out_array !== null) {
            $queryParams['out_array'] = $this->apiClient->getSerializer()->toQueryValue($out_array);
        }
        // query params
        if ($vehicle !== null) {
            $queryParams['vehicle'] = $this->apiClient->getSerializer()->toQueryValue($vehicle);
        }
        // query params
        if ($key !== null) {
            $queryParams['key'] = $this->apiClient->getSerializer()->toQueryValue($key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GHMatrixResponse',
                '/matrix'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GHMatrixResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GHMatrixResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GHError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation matrixPost
     *
     * Matrix API Post
     *
     * @param string $key Get your key at graphhopper.com (required)
     * @param \Swagger\Client\Model\GHMatrixRequest $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GHMatrixResponse
     */
    public function matrixPost($key, $body = null)
    {
        list($response) = $this->matrixPostWithHttpInfo($key, $body);
        return $response;
    }

    /**
     * Operation matrixPostWithHttpInfo
     *
     * Matrix API Post
     *
     * @param string $key Get your key at graphhopper.com (required)
     * @param \Swagger\Client\Model\GHMatrixRequest $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GHMatrixResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function matrixPostWithHttpInfo($key, $body = null)
    {
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $key when calling matrixPost');
        }
        // parse inputs
        $resourcePath = "/matrix";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($key !== null) {
            $queryParams['key'] = $this->apiClient->getSerializer()->toQueryValue($key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GHMatrixResponse',
                '/matrix'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GHMatrixResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GHMatrixResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GHError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
