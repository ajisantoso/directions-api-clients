//
// SolutionAPI.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Alamofire



public class SolutionAPI: APIBase {
    /**
     Return the solution associated to the jobId
     
     - parameter key: (query) your API key 
     - parameter jobId: (path) Request solution with jobId 
     - parameter completion: completion handler to receive the data and the error objects
     */
    public class func getSolution(key key: String, jobId: String, completion: ((data: Response?, error: ErrorType?) -> Void)) {
        getSolutionWithRequestBuilder(key: key, jobId: jobId).execute { (response, error) -> Void in
            completion(data: response?.body, error: error);
        }
    }


    /**
     Return the solution associated to the jobId
     - GET /vrp/solution/{jobId}
     - This endpoint returns the solution of a large problems. You can fetch it with the job_id, you have been sent. 
     - examples: [{contentType=application/json, example={
  "processing_time" : 6,
  "solution" : {
    "costs" : 1,
    "routes" : [ {
      "completion_time" : 1,
      "distance" : 4,
      "transport_time" : 7,
      "waiting_time" : 1,
      "activities" : [ {
        "distance" : 1,
        "waiting_time" : 7,
        "driving_time" : 4,
        "end_time" : 6,
        "load_before" : [ 5 ],
        "arr_time" : 1,
        "id" : "aeiou",
        "type" : "start",
        "location_id" : "aeiou",
        "load_after" : [ 9 ]
      } ],
      "vehicle_id" : "aeiou",
      "points" : [ {
        "coordinates" : [ "{}" ],
        "type" : "aeiou"
      } ]
    } ],
    "distance" : 5,
    "transport_time" : 2,
    "waiting_time" : 9,
    "no_vehicles" : 3,
    "time" : 5,
    "no_unassigned" : 2,
    "unassigned" : {
      "services" : [ "aeiou" ],
      "shipments" : [ "aeiou" ]
    },
    "max_operation_time" : 7
  },
  "copyrights" : [ "aeiou" ],
  "job_id" : "aeiou",
  "waiting_in_queue" : 0,
  "status" : "waiting_in_queue"
}}]
     
     - parameter key: (query) your API key 
     - parameter jobId: (path) Request solution with jobId 

     - returns: RequestBuilder<Response> 
     */
    public class func getSolutionWithRequestBuilder(key key: String, jobId: String) -> RequestBuilder<Response> {
        var path = "/vrp/solution/{jobId}"
        path = path.stringByReplacingOccurrencesOfString("{jobId}", withString: "\(jobId)", options: .LiteralSearch, range: nil)
        let URLString = GraphHopperAPI.basePath + path

        let nillableParameters: [String:AnyObject?] = [
            "key": key
        ]
 
        let parameters = APIHelper.rejectNil(nillableParameters)
 
        let convertedParameters = APIHelper.convertBoolToString(parameters)
 
        let requestBuilder: RequestBuilder<Response>.Type = GraphHopperAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "GET", URLString: URLString, parameters: convertedParameters, isBody: false)
    }

}
