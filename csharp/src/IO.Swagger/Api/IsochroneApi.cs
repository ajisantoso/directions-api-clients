/* 
 * GraphHopper Directions API
 *
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace IO.Swagger.Api
{
    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public interface IIsochroneApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Isochrone Request
        /// </summary>
        /// <remarks>
        /// The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>IsochroneResponse</returns>
        IsochroneResponse IsochroneGet (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null);

        /// <summary>
        /// Isochrone Request
        /// </summary>
        /// <remarks>
        /// The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>ApiResponse of IsochroneResponse</returns>
        ApiResponse<IsochroneResponse> IsochroneGetWithHttpInfo (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Isochrone Request
        /// </summary>
        /// <remarks>
        /// The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>Task of IsochroneResponse</returns>
        System.Threading.Tasks.Task<IsochroneResponse> IsochroneGetAsync (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null);

        /// <summary>
        /// Isochrone Request
        /// </summary>
        /// <remarks>
        /// The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>Task of ApiResponse (IsochroneResponse)</returns>
        System.Threading.Tasks.Task<ApiResponse<IsochroneResponse>> IsochroneGetAsyncWithHttpInfo (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class IsochroneApi : IIsochroneApi
    {
        private IO.Swagger.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="IsochroneApi"/> class.
        /// </summary>
        /// <returns></returns>
        public IsochroneApi(String basePath)
        {
            this.Configuration = new Configuration(new ApiClient(basePath));

            ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="IsochroneApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public IsochroneApi(Configuration configuration = null)
        {
            if (configuration == null) // use the default one in Configuration
                this.Configuration = Configuration.Default;
            else
                this.Configuration = configuration;

            ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }
        }

        /// <summary>
        /// Gets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        public String GetBasePath()
        {
            return this.Configuration.ApiClient.RestClient.BaseUrl.ToString();
        }

        /// <summary>
        /// Sets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        [Obsolete("SetBasePath is deprecated, please do 'Configuration.ApiClient = new ApiClient(\"http://new-path\")' instead.")]
        public void SetBasePath(String basePath)
        {
            // do nothing
        }

        /// <summary>
        /// Gets or sets the configuration object
        /// </summary>
        /// <value>An instance of the Configuration</value>
        public Configuration Configuration {get; set;}

        /// <summary>
        /// Provides a factory method hook for the creation of exceptions.
        /// </summary>
        public IO.Swagger.Client.ExceptionFactory ExceptionFactory
        {
            get
            {
                if (_exceptionFactory != null && _exceptionFactory.GetInvocationList().Length > 1)
                {
                    throw new InvalidOperationException("Multicast delegate for ExceptionFactory is unsupported.");
                }
                return _exceptionFactory;
            }
            set { _exceptionFactory = value; }
        }

        /// <summary>
        /// Gets the default header.
        /// </summary>
        /// <returns>Dictionary of HTTP header</returns>
        [Obsolete("DefaultHeader is deprecated, please use Configuration.DefaultHeader instead.")]
        public Dictionary<String, String> DefaultHeader()
        {
            return this.Configuration.DefaultHeader;
        }

        /// <summary>
        /// Add default header.
        /// </summary>
        /// <param name="key">Header field name.</param>
        /// <param name="value">Header field value.</param>
        /// <returns></returns>
        [Obsolete("AddDefaultHeader is deprecated, please use Configuration.AddDefaultHeader instead.")]
        public void AddDefaultHeader(string key, string value)
        {
            this.Configuration.AddDefaultHeader(key, value);
        }

        /// <summary>
        /// Isochrone Request The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>IsochroneResponse</returns>
        public IsochroneResponse IsochroneGet (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null)
        {
             ApiResponse<IsochroneResponse> localVarResponse = IsochroneGetWithHttpInfo(point, key, timeLimit, distanceLimit, vehicle, buckets, reverseFlow);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Isochrone Request The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>ApiResponse of IsochroneResponse</returns>
        public ApiResponse< IsochroneResponse > IsochroneGetWithHttpInfo (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null)
        {
            // verify the required parameter 'point' is set
            if (point == null)
                throw new ApiException(400, "Missing required parameter 'point' when calling IsochroneApi->IsochroneGet");
            // verify the required parameter 'key' is set
            if (key == null)
                throw new ApiException(400, "Missing required parameter 'key' when calling IsochroneApi->IsochroneGet");

            var localVarPath = "/isochrone";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (point != null) localVarQueryParams.Add("point", Configuration.ApiClient.ParameterToString(point)); // query parameter
            if (timeLimit != null) localVarQueryParams.Add("time_limit", Configuration.ApiClient.ParameterToString(timeLimit)); // query parameter
            if (distanceLimit != null) localVarQueryParams.Add("distance_limit", Configuration.ApiClient.ParameterToString(distanceLimit)); // query parameter
            if (vehicle != null) localVarQueryParams.Add("vehicle", Configuration.ApiClient.ParameterToString(vehicle)); // query parameter
            if (buckets != null) localVarQueryParams.Add("buckets", Configuration.ApiClient.ParameterToString(buckets)); // query parameter
            if (reverseFlow != null) localVarQueryParams.Add("reverse_flow", Configuration.ApiClient.ParameterToString(reverseFlow)); // query parameter
            if (key != null) localVarQueryParams.Add("key", Configuration.ApiClient.ParameterToString(key)); // query parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("IsochroneGet", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<IsochroneResponse>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (IsochroneResponse) Configuration.ApiClient.Deserialize(localVarResponse, typeof(IsochroneResponse)));
        }

        /// <summary>
        /// Isochrone Request The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>Task of IsochroneResponse</returns>
        public async System.Threading.Tasks.Task<IsochroneResponse> IsochroneGetAsync (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null)
        {
             ApiResponse<IsochroneResponse> localVarResponse = await IsochroneGetAsyncWithHttpInfo(point, key, timeLimit, distanceLimit, vehicle, buckets, reverseFlow);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Isochrone Request The GraphHopper Isochrone API allows calculating an isochrone of a locations means to calculate &#39;a line connecting points at which a vehicle arrives at the same time,&#39; see [Wikipedia](http://en.wikipedia.org/wiki/Isochrone_map). It is also called **reachability** or **walkability**. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="point">Specify the start coordinate</param>
        /// <param name="key">Get your key at graphhopper.com</param>
        /// <param name="timeLimit">Specify which time the vehicle should travel. In seconds. (optional, default to 600)</param>
        /// <param name="distanceLimit">Specify which distance the vehicle should travel. In meter. (optional, default to -1)</param>
        /// <param name="vehicle">Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)</param>
        /// <param name="buckets">For how many sub intervals an additional polygon should be calculated. (optional, default to 1)</param>
        /// <param name="reverseFlow">If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)</param>
        /// <returns>Task of ApiResponse (IsochroneResponse)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<IsochroneResponse>> IsochroneGetAsyncWithHttpInfo (string point, string key, int? timeLimit = null, int? distanceLimit = null, string vehicle = null, int? buckets = null, bool? reverseFlow = null)
        {
            // verify the required parameter 'point' is set
            if (point == null)
                throw new ApiException(400, "Missing required parameter 'point' when calling IsochroneApi->IsochroneGet");
            // verify the required parameter 'key' is set
            if (key == null)
                throw new ApiException(400, "Missing required parameter 'key' when calling IsochroneApi->IsochroneGet");

            var localVarPath = "/isochrone";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (point != null) localVarQueryParams.Add("point", Configuration.ApiClient.ParameterToString(point)); // query parameter
            if (timeLimit != null) localVarQueryParams.Add("time_limit", Configuration.ApiClient.ParameterToString(timeLimit)); // query parameter
            if (distanceLimit != null) localVarQueryParams.Add("distance_limit", Configuration.ApiClient.ParameterToString(distanceLimit)); // query parameter
            if (vehicle != null) localVarQueryParams.Add("vehicle", Configuration.ApiClient.ParameterToString(vehicle)); // query parameter
            if (buckets != null) localVarQueryParams.Add("buckets", Configuration.ApiClient.ParameterToString(buckets)); // query parameter
            if (reverseFlow != null) localVarQueryParams.Add("reverse_flow", Configuration.ApiClient.ParameterToString(reverseFlow)); // query parameter
            if (key != null) localVarQueryParams.Add("key", Configuration.ApiClient.ParameterToString(key)); // query parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("IsochroneGet", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<IsochroneResponse>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (IsochroneResponse) Configuration.ApiClient.Deserialize(localVarResponse, typeof(IsochroneResponse)));
        }

    }
}
