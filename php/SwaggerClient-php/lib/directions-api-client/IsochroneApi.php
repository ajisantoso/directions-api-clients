<?php
/**
 * IsochroneApi
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
 * IsochroneApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IsochroneApi
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
     * @return IsochroneApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation isochroneGet
     *
     * Isochrone Request
     *
     * @param string $point Specify the start coordinate (required)
     * @param string $key Get your key at graphhopper.com (required)
     * @param int $time_limit Specify which time the vehicle should travel. In seconds. The maximum depends on the subscribed package. (optional, default to 600)
     * @param string $vehicle Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)
     * @param int $buckets For how many sub intervals an additional polygon should be calculated. (optional, default to 1)
     * @param bool $reverse_flow If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GHIsochroneResponse
     */
    public function isochroneGet($point, $key, $time_limit = null, $vehicle = null, $buckets = null, $reverse_flow = null)
    {
        list($response) = $this->isochroneGetWithHttpInfo($point, $key, $time_limit, $vehicle, $buckets, $reverse_flow);
        return $response;
    }

    /**
     * Operation isochroneGetWithHttpInfo
     *
     * Isochrone Request
     *
     * @param string $point Specify the start coordinate (required)
     * @param string $key Get your key at graphhopper.com (required)
     * @param int $time_limit Specify which time the vehicle should travel. In seconds. The maximum depends on the subscribed package. (optional, default to 600)
     * @param string $vehicle Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)
     * @param int $buckets For how many sub intervals an additional polygon should be calculated. (optional, default to 1)
     * @param bool $reverse_flow If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GHIsochroneResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function isochroneGetWithHttpInfo($point, $key, $time_limit = null, $vehicle = null, $buckets = null, $reverse_flow = null)
    {
        // verify the required parameter 'point' is set
        if ($point === null) {
            throw new \InvalidArgumentException('Missing the required parameter $point when calling isochroneGet');
        }
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $key when calling isochroneGet');
        }
        // parse inputs
        $resourcePath = "/isochrone";
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
        if ($point !== null) {
            $queryParams['point'] = $this->apiClient->getSerializer()->toQueryValue($point);
        }
        // query params
        if ($time_limit !== null) {
            $queryParams['time_limit'] = $this->apiClient->getSerializer()->toQueryValue($time_limit);
        }
        // query params
        if ($vehicle !== null) {
            $queryParams['vehicle'] = $this->apiClient->getSerializer()->toQueryValue($vehicle);
        }
        // query params
        if ($buckets !== null) {
            $queryParams['buckets'] = $this->apiClient->getSerializer()->toQueryValue($buckets);
        }
        // query params
        if ($reverse_flow !== null) {
            $queryParams['reverse_flow'] = $this->apiClient->getSerializer()->toQueryValue($reverse_flow);
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
                '\Swagger\Client\Model\GHIsochroneResponse',
                '/isochrone'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GHIsochroneResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GHIsochroneResponse', $e->getResponseHeaders());
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
